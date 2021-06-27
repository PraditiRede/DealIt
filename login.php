<?php
$login = false;
if($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'partials/dbconn.php';
  $username = $_POST["uname"];
  $password = $_POST["passw"];
  
  $sql = "SELECT * from users where email='$username'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    while($row = mysqli_fetch_assoc($result)){
      
      $new_pass = $row['password'];
      
      if(password_verify($password, $new_pass)) {
          $escapedPW = mysqli_real_escape_string($conn, $_REQUEST['password']);

          if (isset($_REQUEST['remember']))
            $escapedRemember = mysqli_real_escape_string($conn, $_REQUEST['remember']);
                            
            $cookie_time = 60 * 60 * 24 * 30;          // 30 days
            $cookie_time_Onset = $cookie_time+ time();
            if (isset($escapedRemember)) {
              setcookie("uname", $usernameVal, $cookie_time_Onset);
              setcookie("passw", $escapedPW, $cookie_time_Onset);  
            } 
            else {
              $cookie_time_fromOffset=time() -$cookie_time;
              setcookie("uname", '', $cookie_time_fromOffset );
              setcookie("passw", '', $cookie_time_fromOffset);          
            }
        
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: index.php");   
      }
      else {
          echo "<script> alert('Invalid Credentials'); </script>";
      }
    }
  }
  else {
      echo "<script> alert('Invalid Credentials'); </script>";
  }
}

?>

<!doctype html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
        <link rel="stylesheet" href="website/css/sellform.css">
         <style>
            html, body{
              width: 100%;
              height: 100%;
              overflow-x:hidden;
            }
            fieldset{
              /* padding-top: -100px; */
              /* margin: 0 auto; */
              margin-left: auto;
              width:600px;
              height: 470px;
            }
            label{
              width: 200px;
              text-align:left;
            }
            input[type=text], input[type=password] {
               width: 45%;
               padding: 12px 20px;
               /* margin: 3px 10px; */
               height: 11%;
               display: inline-block;
               border: 1px solid #ccc;
               box-sizing: border-box;
            }
            button {
               background-color: rgb(0,0,36);
               /* color:gold; */
               padding: 10px 10px;
               margin: -6px 0;
               border: none;
               cursor: pointer;
               width: 48%;
               height: 50px;
            }
            #image {
               margin: 0 auto;
               padding-top: 1%;
            }
            #login{
              margin-bottom: 10px; 
              margin-top: 10px;
              color: white;
            }
            .logo{
              width:20%;
              border-radius: 50%;
              margin: -20px;
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
            span.forgotpsw{
              float:right;
              padding-top: 20px;
            }
            .formfill {
              width: 50%;
              height: 70%;
              margin-bottom: 6.1%;
            }
            @media only screen and (max-width: 762px) {
              .formfill {
                width: 80%;
                height: 85%;
              }
              fieldset{
                padding: 10px;
              }
            }
            #text {
              color: white;
              font-size: x-large;
            }
        </style>
    </head>
 
    <body>
    <header class="nav" style="background-color: rgb(0, 0, 36);">
        <div class="bar">
            <a href="index.php" class="previous">&#8249;-</a>
            <span class="tname" style="color: white">Deal It</span>
        </div>
    </header>
    <div class="formfill" style="background-image: linear-gradient(180deg, rgb(0,0,36),  rgb(118, 201, 248)); opacity: 95%; padding-bottom: 50px">
      <form action="login.php" method="post"> 
          <table class="text">
            <fieldset dir="ltr">
              <legend style="color:white;"><h1>LOGIN</h1></legend> 
                <label align="left" id="text" for="uname"><b>Username</b></label>
                <br>
                <input type="text" value="<?php if(isset($_COOKIE['uname'])) echo $_COOKIE['uname']; ?>" placeholder="Enter registered E-mail id" name="uname" required>
                <br><br>
                <label for="passw" id="text"><b>Password</b></label>
                <br>
                <input type="password" maxlength="20" minlength="6" placeholder="Must be atleast 6 characters" value="<?php if(isset($_COOKIE['passw'])) echo $_COOKIE['passw']; ?>" name="passw" required>
                
                <div class="form-group" style="display: flex; flex-direction: row;">
                    <span class="forgotpsw" style="margin-left: 10px;">
                      <input type="checkbox" name="remember" <?php if(isset($_COOKIE['uname'])){echo "checked='checked'"; } ?> value="1">
                      <label for="remember" id="text">Remember Me</label><br>
                      <a href="forgot_passw.php" style="text-decoration: none; color:rgb(0,0,36); font-size: x-large;"><b>Forgot Password?</b></a>
                    </span>
                </div>
                <div class="container sub row" style="display: flex; flex-direction: row; width: 50%;">
                    <button class="col-sm-12" type="submit" id="login" style="font-size: large;">LOGIN</button>
                    <button class="signup col-sm-12" type="submit"><a href="register.php" style="text-decoration: none; color:white; font-size: large;">SIGN UP</a></button>
                </div>
            </fieldset>
          </table> 
      </form>
    </div>  
      <footer>
          <div>
              DEAL IT &#169; 2020
          </div>
      </footer>
    </body>
</html>
