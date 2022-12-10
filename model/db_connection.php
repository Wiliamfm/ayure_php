<?php
$dbConn = pg_connect("host=localhost dbname=ask user=postgres password=1234")
   or die('Could not connect: ' . pg_last_error());
