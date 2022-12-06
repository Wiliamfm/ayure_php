<?php
if(!empty($_POST["register"])){
   if(isset($_POST["username"]) and isset($_POST["password"]) and isset($_POST["password_confirmation"]) and isset($_POST["phone_number"])){
      $username = $_POST["username"];
      $password = $_POST["password"];
      $phone = $_POST["phone_number"];
      include "./model/db_connection.php";
      $query= "insert into users (username, user_password, phone, user_role) values('$username', '$password', '$phone', '2')";
      $result = pg_query($dbConn, $query) or die('query failed: ' . pg_last_error());
      header("Location: "."../../view/login.php");
      exit;
   }else{
      echo '<div class="alert alert-danger" role="alert">
               Datos no válidos
            </div>';
   }
}
?>