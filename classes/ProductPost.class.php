<?php

class ProductPost {
  private $connection;
  private $query;
  private $posts;
  public $post;

public function fetchProductPosts(){
  $this->connection = new DBConnection();
  $this->query = $this->connection->getConnection()->query('SELECT * FROM product');
  $this->posts = $this->query->fetchAll();
}

public function echoProductPosts(){

  foreach(array_reverse($this->posts) as $post) {
    $id = $post['id'];
    $posturl = $post['imageurl'];
    $content = $post['entertext'];
    echo "

    <div class='article'>
    <img class='blogimage' src='img/blog/{$posturl}'>
    <h2>{$post['title']}</h2>
    <p>EmriAdminit : {$post['EmriAdminit']}</p>
    <p>{$content}</p>
    </div>
    ";
}
}

public function echoProductPostsAdmin(){

  foreach(array_reverse($this->posts) as $post) {
    $id = $post['id'];
    $posturl = $post['imageurl'];
    $content = $post['entertext'];
    echo "

    <div class='article'>
    <img class='blogimage' src='img/blog/{$posturl}'>
    <h2>{$post['title']}</h2>
    <p>EmriAdminit : {$post['telephone']}</p>
    <p>{$content}</p>
    <a href='admin-edit_product.php?id={$id}'><button id='button'>Edit</button></a>
    <a href='admin-delete_product.php?id={$id}'><button id='button'>Delete</button></a>
    </div>
    ";
}
}

public function fetchPostID(){
  if(isset($_GET['id'])){
      $id = $_GET['id'];
  }

  $this->connection = new DBConnection();

  $sql = 'SELECT * FROM product
 WHERE id = :id';
  $query = $this->connection->getConnection()->prepare($sql);
  $query->execute(['id' => $id]);

  $this->post = $query->fetch();
}

public function editProduct(){
  $this->connection = new DBConnection();
  if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $entertext = $_POST['entertext'];
        $id = $_GET['id'];

        $sql = 'UPDATE product
     SET title = :title, entertext = :entertext WHERE id = :id ';
        $query = $this->connection->getConnection()->prepare($sql);
        $query->bindParam('title', $title);
        $query->bindParam('entertext', $entertext);
        $query->bindParam('id', $id);

        $query->execute();

        header("Location: admin-product.php");
    }
}



}
