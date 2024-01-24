<?php

class LoginValidation {
  private $usernameErr;
  private $passwordErr;
  private $showError;
  private $usernameCheck;
  private $passwordCheck;
  private $errorCount;

  public function doLoginValidation() {
    $this->usernameErr = "";
    $this->passwordErr = "";
    $this->usernameCheck = test_input($_POST["username"]);
    $this->passwordCheck = test_input($_POST["password"]);

    if (empty($_POST['username'])) {
      $this->usernameErr = "Username is required<br>";
      header("Location: ../LogIn.php?username=empty");
      $this->errorCount++;
    }

    if (empty($_POST['password'])) {
      $this->passwordErr = "Password is required<br>";
      header("Location: ../LogIn.php?password=empty");
      $this->errorCount++;
    }
    else if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/",$this->passwordCheck)) {
      $this->passwordErr = "Password must have 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter.<br>";
      header("Location: ../LogIn.php?password=invalid");
      $this->errorCount++;
    }
    $this->showError =  $this->usernameErr . $this->passwordErr;

    if ($this->errorCount > 0){
      return true;
    } else {
      return false;
    }
  }
}
