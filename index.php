<?php $title = "Registro";
$loginUrl = "/view/login.php";
$signUpUrl = "#";
$indexUrl = "/view/index.php";
$createPostUrl = "/view/create_post.php";
$myPostsUrl = "/view/my_posts.php";
$logoutUrl = "/controller/logout.php";
include("./view/top_template.php"); ?>
<?php
?>
<div class="container">
   <h1 class="text-center p-5">Registro de Usuario</h1>
</div>
<div class="container">
   <form class="p-3" style="border: solid;" method="POST">
      <?php
      include "controller/users/create_user.php";
      ?>
      <div class="mb-3">
         <label for="input_username" class="form-label">Username:</label>
         <input type="text" class="form-control" id="input_username" name="username" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
         <label for="input_pwd" class="form-label">Contraseña:</label>
         <input type="password" class="form-control" id="input_pwd" name="password" required>
      </div>
      <div class="mb-3">
         <label for="input_pwd_conf" class="form-label">Confirmar Contraseña:</label>
         <input type="password" class="form-control" id="input_pwd_conf" name="password_confirmation" required>
      </div>
      <div class="mb-3">
         <label for="input_phone" class="form-label">Número de Celular:</label>
         <input type="text" class="form-control" id="input_phone" name="phone_number" maxlength="10" minlength="10" required>
      </div>
      <button type="submit" class="btn btn-primary" name="register" value="ok">Registrarse</button>
   </form>
</div>
<?php include("./view/bottom_template.php"); ?>