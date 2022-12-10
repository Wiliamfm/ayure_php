<?php
include __DIR__ . "/../../model/db_connection.php";
$con = array("id" => $_GET["id"]);
$result = pg_delete($dbConn, "posts", $con);
header("Location: " . "../../view/my_posts.php");
die;
