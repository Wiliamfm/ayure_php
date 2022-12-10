<?php $title = "Login";
$loginUrl = "#";
$signUpUrl = "../index.php";
$indexUrl = "index.php";
$myPostsUrl = "my_posts.php";
$createPostUrl = "create_post.php";
$logoutUrl = "/controller/logout.php";
include "./top_template.php" ?>
<div class="container m-5">
   <h1 class="text-center">Ingreso</h1>
</div>
<div class="container">
   <form method="POST" class="p-3" style="border: solid;">
      <?php
      include "../controller/login.php";
      ?>
      <div class="mb-3">
         <label for="input_username" class="form-label">Username:</label>
         <input type="text" class="form-control" id="input_username" name="username">
      </div>
      <div class="mb-3">
         <label for="input_pwd" class="form-label">Contraseña:</label>
         <input type="password" class="form-control" id="input_pwd" name="password">
      </div>
      <button type="submit" class="btn btn-primary" name="btn_submit" value="ok">Ingresar</button>
   </form>
</div>
<?php include "./bottom_template.php" ?>