<?php
    include 'partials/dbconn_.php';

    $email = $_POST["email"];
    $uname = $_POST["uname"];
    $id = $_POST["id"];
    $table = $_POST["tablename"];

    $insert = "UPDATE tablename SET name='$table' WHERE id=1";
    mysqli_query($conn_, $insert);
?>