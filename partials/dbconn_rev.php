<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "review";

$conn_rev = mysqli_connect($server, $username, $password, $database);
if(!$conn_rev) 
    die("Error : ". mysqli_connect_error());

?>