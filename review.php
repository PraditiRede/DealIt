<?php
    session_start();
    
    include 'partials/dbconn.php';
    include 'partials/dbconn_rev.php';
    
    $uname = $_SESSION['username'];
    $msg = $_POST["revmsg"];
    $starval = $_POST["output"];
    
    $tab = "SELECT fname, lname FROM users WHERE email='$uname'";
    $res = mysqli_query($conn, $tab);
    $row = mysqli_fetch_assoc($res);
    $fname = $row['fname'];
    $lname = $row['lname'];

    if($starval == 0) {
        $_SESSION['star_empty'] = 1;
        header("location: index.php");
        exit;
    }
    
    $sql = "INSERT INTO review (uname, fname, lname, rating, message) VALUES ('$uname', '$fname', '$lname', '$starval', '$msg')";
    $result = mysqli_query($conn_rev, $sql);
    $flag = 0;
    if($result) {
        $flag = 1;
    }
    $_SESSION['flag_val'] = $flag;
    header("location: index.php");
?>