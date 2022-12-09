<?php
include "../model/db_connection.php";
if(!empty($_POST['btn_submit'])){
   if(isset($_POST['username']) and isset($_POST['password'])){
      $username = trim($_POST['username']);
      $password= trim($_POST['password']);
      $query = "select * from users where username= '$username'";
      $result = pg_fetch_assoc(pg_query($dbConn, $query));
      if(!$result){
         echo '
            <div class="alert alert-danger" role="alert">
               Usuario no encontrado!
            </div>';
      }else if($result['user_password'] != $password){
         echo '
            <div class="alert alert-danger" role="alert">
               Contraseña incorrecta!
            </div>';
      }else if(session_status() != PHP_SESSION_NONE){
         echo '
            <div class="alert alert-danger" role="alert">
               Ya hay una sesion!
            </div>';
      }
      $_SESSION['username'] = $username;
      $_SESSION['role'] = $result['user_role'];
      $_SESSION['is_logged'] = True;
      header("Location: " ."./index.php");
      die;
   }else{
      echo '
         <div class="alert alert-danger" role="alert">
            Datos no válidos
         </div>';
   }
}
?>