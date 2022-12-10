<?php
include __DIR__ . "../../../model/db_connection.php";
$query = "select p.id, p.title, p.description, p.creation_date, u.username, p.category
from posts p
inner join users u on u.id = p.author
inner join categories c on c.id = p.category;";
$result = pg_query($dbConn, $query) or die('query failed: ' . pg_last_error());
