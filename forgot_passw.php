<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'partials/dbconn.php';
  $username = $_POST["uname"];
  $password = $_POST["passw"];
  $cpassword = $_POST["passw2"];
  
  $existsSql = "SELECT * FROM users WHERE email='$username'";
  $result = mysqli_query($conn, $existsSql);
  $numRowsExist = mysqli_num_rows($result);
    if($numRowsExist > 0) {
        if($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $sql = "UPDATE users SET password='$hash' WHERE email='$username'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $alert = true;
                echo "<script> alert('Successfully resetted ! Kindly Sign In to access the website..'); </script>";
                header("location: login.php");
            }
            else {
                echo "<script> alert('Error! Passwords do not match'); </script>";
               
            }  
         }
    }
}
?>

<!doctype html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Reset Password</title>
        <link rel="stylesheet" href="website/css/sellform.css">
        <style>
            fieldset{
              padding: left 300;
              padding-top: -100px;
              margin: 0 auto;
              width:600px;
              height: 540px;
            }
            label{
              width: 200px;
              text-align:left;
            }
            input[type=email], input[type=password] {
               width: 100%;
               height: 11%;
               padding: 12px 20px;
               margin: 3px 0;
               display: inline-block;
               border: 1px solid #ccc;
               box-sizing: border-box;
            }
            button {
               background-color: rgb(0,0,36);
               color: white;
               font-size: large;
               padding: 10px 10px;
               margin: -6px 0;
               border: none;
               cursor: pointer;
               width: 100%;
               height: 50px;
            }
            .text {
               position: fixed;
               margin: 0 auto;
               left:0;
               right:0;
               top: 10%;
               padding: 6px;
               text-align: justify;
            }
            .formfill {
              width: 50%;
            }
            #text {
              color: white;
              font-size: x-large;
            }
        </style>
    </head>
 
    <body text="black" width="100%" height="100%">
    <header class="nav" style="background-color: rgb(0, 0, 36);">
        <div class="bar">
            <a href="index.php" class="previous">&#8249;-</a>
            <span class="tname" style="color: white">Deal It</span>
        </div>
    </header><br>
    <div class="formfill" style="background-image: linear-gradient(180deg, rgb(0,0,36),  rgb(118, 201, 248)); opacity: 95%;">
      <form action="forgot_passw.php" method="post"> 
          <br><br>
          <table class="text"><br>
            <fieldset dir="ltr">
              <legend style="padding-top: -50px;" id="text"><h2>RESET PASSWORD</h2></legend>  <br>
                <label align="left" id="text" for="uname"><b>Username</b></label>
                <br>
                <input type="email" placeholder="Enter registered E-mail id" name="uname" required>
                <br><br>
                <label for="passw" id="text"><b>Password</b></label>
                <br>
                <input type="password" maxlength="20" minlength="6" placeholder="Must be atleast 6 characters" name="passw" required><br>
                <br>
                <label for="passw" id="text"><b>Re-enter Password</b></label>
                <br>
                <input type="password" maxlength="20" minlength="6" placeholder="Must be atleast 6 characters" name="passw2" required><br><br>
                <br>
                <button type="submit" id="login">RESET PASSWORD</button>
            </fieldset>
          </table>
            <br><br><br><br>
      </form>
    </div><br>
      <footer style="color: rgb(0,0,36);">
          <div>
              DEAL IT &#169; 2020
          </div>
      </footer>
    </body>
</html>