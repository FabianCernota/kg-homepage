<?php
  if(isset($_POST["username"]) and isset($_POST["password"]) and isset($_POST["passwordwdh"]) and isset($_POST['g-recaptcha-response'])){

    if($_POST["password"] == $_POST["passwordwdh"]){
      $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
      echo $hash;
    }
  }
 ?>
