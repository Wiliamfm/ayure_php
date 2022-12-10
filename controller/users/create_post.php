<?php
   if (!empty($_POST["submit"])) {
      if (isset($_POST["description"]) and isset($_POST['title']) and isset($_POST['category']) and $_SESSION['is_logged']) {
         $description = $_POST['description'];
         $title = $_POST['title'];
         $category = $_POST['category'];
         $author_id = $_SESSION['id'];
         include "../model/db_connection.php";
         $currentDate = new DateTime();
         $currentDate = date_format($currentDate, 'Y-m-d H:i:s');
         $query = "insert into posts (author, title, description, creation_date, category) values($author_id, '$title', '$description', '$currentDate', $category)";
         $result = pg_query($dbConn, $query) or die('query failed: ' . pg_last_error());
         header("Location: " . "../../view/my_posts.php");
         exit;
      } else {
         echo '<div class="alert alert-danger" role="alert">
               Datos no válidos
            </div>';
      }
   }
