<?php

class Product {

  private $title;
  private $entertext;
  private $file;
  private $fileNameNew;
  private $EmriAdminit;
  private $errorCount;

  public function __construct($title, $entertext, $file, $EmriAdminit){
    $this->title = $title;
    $this->entertext = $entertext;
    $this->file = $file;
    $this->EmriAdminit = $EmriAdminit;
  }

public function uploadImage(){

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 1000000) {
        $this->fileNameNew = uniqid('', true). "." .$fileActualExt;
        $fileDestination = '../img/'.$this->fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
      } else {
          header("Location: ../products.php?file=big");
        echo "Your file is too big!";
      }
    } else {
      header("Location: ../products.php?file=error");
      echo "There was an error uploading your file!";
    }
  } else {
    header("Location: ../products.php?file=error");
  }
}
public function newProductPost() {
  $this->connection = new DBConnection();

  $this->sql = 'INSERT INTO Product (title, EmriAdminit, entertext, imageurl) VALUES (:title, :EmriAdminit, :entertext, :imageurl)';
  $this->query = $this->connection->getConnection()->prepare($this->sql);
  $this->query->bindParam(':title', $this->title);
  $this->query->bindParam(':EmriAdminit', $this->EmriAdminit);
  $this->query->bindParam(':entertext', $this->entertext);
  $this->query->bindParam(':imageurl', $this->fileNameNew);
  
  if ($this->query->execute()) {
      header("Location: ../products.php?submit=success");
  } else {
      header("Location: ../products.php?submit=failed");
  }

  $this->connection->closeConnection();
}


public function ProductValidation(){
  if (empty($_POST['title'])) {
    header("Location: ../products.php?title=empty");
    $this->errorCount++;
  }

  if (empty($_POST['entertext'])) {
    header("Location: ../products.php?entertext=empty");
    $this->errorCount++;
  }

  if ($this->errorCount > 0){
  return true;
  }
  else return false;
}

}
