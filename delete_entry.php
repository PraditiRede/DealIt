<?php
    include 'partials/db_conn.php';
    include 'partials/dbconn_.php';
    
    $sr_no = $_POST["sr_no"];
    $sql = "DELETE FROM sellform WHERE sr_no=$sr_no";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script> alert('Succesfully Deleted Post..'); </script>";
        exit;
    }
    else {
        echo "<script> alert('ERROR! Try Again Later!'); </script>";
        exit;
    }
?>