<?php

session_start();

define('LOCALHOST', 'localhost');
define('ROOT', 'root');
define('PASSWORD', '');
define('DATABASE', 'proiect');
define('SITEURL', 'http://localhost:8080/proiect/');


$conn = mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE) or die(mysqli_error());
$db_select = mysqli_select_db($conn, DATABASE) or die(mysqli_error());
?>
