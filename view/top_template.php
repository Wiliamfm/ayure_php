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
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="<?php echo $indexUrl; ?>">Inicio</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo $loginUrl; ?>">Ingresar</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo $signUpUrl; ?>">Registro</a>
                  </li>
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
                        <a class="nav-link" href="<?php echo $createPostUrl; ?>">Crear Post</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myPostsUrl; ?>">Mis Posts</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo $logoutUrl; ?>">Cerrar Sesión</a>
                     </li>
                  <?php
                  } //else {
                  ?>
               </ul>
            </div>
         </div>
      </nav>
   </div>