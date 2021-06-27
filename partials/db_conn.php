<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "sellform";

$conn = mysqli_connect($server, $username, $password);
$db = mysqli_select_db($conn, $database);
if(!$conn) 
    die("Error : ". mysqli_connect_error());

?>