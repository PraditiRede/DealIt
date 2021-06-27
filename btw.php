<?php
    include 'partials/dbconn_.php';

    $email = $_POST["email"];
    $uname = $_POST["uname"];
    $id = $_POST["id"];

    $count_uname = strlen($uname);
    $count_email = strlen($email);
    if ($count_email >= $count_uname) 
        $table = "$email"."_"."$uname"."_"."$id";
    else 
        $table = "$uname"."_"."$email"."_"."$id";
    $sql = "CREATE TABLE IF NOT EXISTS `$table` (ID INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT, username VARCHAR(100), msg TEXT, datetime DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn_, $sql);

    $select_ifexists = "SELECT * FROM all_tables WHERE table_name='$table'";
    $rs = mysqli_query($conn_, $select_ifexists);
    $count_ifexists = mysqli_num_rows($rs);
    if($count_ifexists == 0) {
        $alltabs = "INSERT INTO all_tables (username, table_name, sr_no) VALUES ('$uname', '$table', '$id')";
        $alltabs_result = mysqli_query($conn_, $alltabs);    
    }
    
    $insert = "UPDATE tablename SET name='$table' WHERE id=1";
    mysqli_query($conn_, $insert);
?>