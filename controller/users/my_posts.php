<?php
include  __DIR__ . "../../../model/db_connection.php";
$query = "select * from posts p inner join users u on u.id = $id where p.author = $id;";
$result = pg_query($dbConn, $query);
