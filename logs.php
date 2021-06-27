<?php
    include 'partials/dbconn_.php';
    
    $tab = "SELECT name FROM tablename WHERE id=1";
    $res = mysqli_query($conn_, $tab);
    $row = mysqli_fetch_assoc($res);
    $table = $row['name'];
    
    $select = "SELECT * FROM `$table` ORDER BY ID DESC";
    $rs = mysqli_query($conn_, $select);
    $count = mysqli_num_rows($rs);
    if($count>0){
        while($row = mysqli_fetch_array($rs)){
            echo $row['username'] . ":" ."&nbsp". $row['msg'] . "<br>";
        }
    }
?>