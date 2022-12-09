<?php
$title = "Cerrar Sesion";
include "../view/top_template.php";
session_unset();
session_destroy();
include "../view/bottom_template.php";
header("Location: " . "../view/login.php");
die;
?>