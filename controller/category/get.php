<?php
include "../model/db_connection.php";
$query = "select * from categories;";
$result = pg_query($dbConn, $query) or die("failed query" . pg_last_error());
//echo "<option value=" . $result . ">" . ($result) . "</option>";
