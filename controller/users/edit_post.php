<?php
echo isset($_SESSION['asdf']) . $_SESSION['is_logged'];
if (!empty($_POST["submit"])) {
   if (isset($_POST["description"]) and isset($_POST['category']) and $_SESSION['is_logged']) {
      $description = $_POST['description'];
      $category = $_POST['category'];
      include "../model/db_connection.php";
      $query = "UPDATE posts
         SET description = '$description', category = $category
         WHERE id = " . $result['id'] . ";";
      $result = pg_query($dbConn, $query) or die('query failed: ' . pg_last_error());
      header("Location: " . "../../view/my_posts.php");
      exit;
   } else {
      echo '<div class="alert alert-danger" role="alert">
               Datos no válidos edición
            </div>';
   }
}
