<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "chatbox";

$conn_ = mysqli_connect($server, $username, $password, $database);
if(!$conn_) 
    die("Error : ". mysqli_connect_error());

?>