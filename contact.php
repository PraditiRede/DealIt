<?php
    error_reporting(0);
    $to = "praditi.rede@gmail.com";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $from = $_POST['email'];
    $msg = $_POST['message'];
    $subject = "Email from DEAL IT Website.";
    $message = nl2br("From " . $from . "\r\n\r\n    " . $msg . "\r\n\r\nRegards, \r\n" . $fname . " " . $lname);

    $headers .= "Content-type: text/html;\r\n";
    $headers .= "From: $from";

    if (mail($to, $subject, $message, $headers)) {    
?>
    <script> 
        alert('Message has been sent! Thank you <?php echo $fname; ?>');
        window.location = "index.php";
    </script>
<?php    
    }
    else {
?>
    <script> 
        alert('ERROR ! Message failed. Try again later..');
        window.location = "index.php";
    </script>
<?php
    }
?>