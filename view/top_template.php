<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset='utf-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <title>
      <?php echo $title; ?>
   </title>
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
   <div class="container pb_5">
      <nav class="navbar navbar-expand-lg bg-light">
         <div class="container-fluid">
            <a class="navbar-brand">
               POV OF WORLD
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav">
                  <?php
                  if (isset($_SESSION['is_logged'])) {
                     $username = $_SESSION['username'];
                  ?>
                     <li class="nav-item">
                        <span class="navbar-text">
                           Bienvenido <?php echo $username; ?>
                        </span>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="./create_post.php">Crear Post</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="./my_posts.php">Mis Posts</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="../controller/logout.php">Cerrar Sesión</a>
                     </li>
                  <?php
                  } else {
                  ?>
                     <li class="nav-item">
                        <a class="nav-link" href="/view/login.php">Ingresar</a>
                     </li>
                  <?php
                  }
                  ?>
               </ul>
            </div>
         </div>
      </nav>
   </div>