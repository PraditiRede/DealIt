<?php
    $uname = $_REQUEST['uname'];
    $msg = $_REQUEST['msg'];
    
    include 'partials/dbconn_.php';
    
    $tab = "SELECT name FROM tablename WHERE id=1";
    $res = mysqli_query($conn_, $tab);
    $row = mysqli_fetch_assoc($res);
    $table = $row['name'];
    
    $sql = "INSERT INTO `$table` (username, msg) VALUES('$uname', '$msg') "; 
    if (mysqli_query($conn_, $sql)) 
    {  } 
    else
    { 
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn_); 
    } 
    
    $select = "SELECT * FROM `$table` ORDER BY ID DESC";
    $rs = mysqli_query($conn_, $select);
    $count = mysqli_num_rows($rs);
    if($count>0) {
        while($row = mysqli_fetch_array($rs)){
            echo $row['username'] . ":" ."&nbsp". $row['msg'] . "<br>";
        }
    }
?>