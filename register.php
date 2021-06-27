<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'partials/dbconn.php';
  $alert = false;
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $contact = $_POST["contact"];
  $username = $_POST["email"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
 // $exists = false;
  $existsSql = "SELECT * from users where email='$username'";
  $result = mysqli_query($conn, $existsSql);
  $numRowsExist = mysqli_num_rows($result);
  if($numRowsExist > 0)
      echo "Username Already Exists";
   //   $exists = true;
  else {
     // $exists = false;
      if($password == $cpassword) {
          $hash = password_hash($password, PASSWORD_BCRYPT);
          $sql = "INSERT INTO users (fname, lname, contact, email, password, date) VALUES ('$fname', '$lname', '$contact', '$username', '$hash', current_timestamp())";
          $result = mysqli_query($conn, $sql);
          if ($result) {
              $alert = true;
              echo "<script> alert('Successfully created ! Sign In to continue'); </script>";
          }
          else {
              echo "<script> alert('Passwords do not match'); </script>";
          }  
        }
  }
}
?>

<!doctype html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Registration Form</title>
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
            body{
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-size: 100% 100%;
                color: white;
            }
            fieldset{
                width: 70%;
                height: 70%;
                margin: 0 auto;
              
            }
            label{
              text-align: right;
              font-size: larger;
              padding-top: -20px;
              margin-top: -20px auto;
            }
            input[type=text], input[type=password], input[type=email], input[type=number], input[type=date], input[type=country], #country{
               width: 100%;
               padding: 12px 20px;
               margin-top: -20px;
               height: 11%;
               display: inline-block;
               border: 1px solid #ccc;
               box-sizing: content-box;
               margin-left: 10px;
            }
            button {
               background-color: rgb(0,0,36);
               color: white;
               padding: 15px 30px;
               margin: 25px 40px;
               border: none;
               cursor: pointer;
               width: 100%;
               border-radius: 8px;
            }
            .logo{
              width: 100px;
              height: 100px;
              border-radius: 50%;
              margin: -20px;
            }
            .vl1 {
                margin-bottom: -20px;
                height: 135px;
                border-left: 2px solid gold;
                position: absolute;
                left: 18%;
            }
            .vl2 {
                margin-bottom: -20px;
                height: 135px;
                border-left: 2px solid gold;
                position: absolute;
                margin-top: 0px auto;
                left: 28%;
            }
            .formfill {
                width: 55%;
            }
            
            #text {
                font-size: x-large;
            }
            @media only screen and (max-width: 762px) {
              .formfill {
                width: 90%;
              }
              fieldset{
                  margin: 0px;
              }
              #text{
                  font-size: 15px;
              }
            }
        </style>
    </head>
    <body text="cyan" background="books.jpg" width="100%" height="100%">
        <header class="nav" style="background-color: rgb(0, 0, 36);">
            <div class="bar">
                <a href="index.php" class="previous">&#8249;-</a>
                <span class="tname" style="color: white">Deal It</span>
            </div>
        </header>
        <div class="formfill container" style="background-image: linear-gradient(180deg, rgb(0,0,36),  rgb(118, 201, 248)); opacity: 95%;">
            <fieldset dir="ltr">
            <legend align="left"><h1>SIGN UP!</h1></legend>
                <form action="register.php" method="post">
                    <table align="left" class="row">
                        <h2><tr>
                                <td align="left">  
                                    <label id="text" for="fname"><b>First Name :</b></label>
                                </td>
                                <td align="right">
                                    <input type="text" maxlength="30" placeholder="Enter First Name" name="fname" required><br>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <br><label id="text" for="lname"><b>Last Name :</b></label>
                                </td>
                                <td align="right">
                                    <br><input type="text" maxlength="30" placeholder="Enter Last Name" name="lname" required>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <br><label id="text" for="contact"><b>Contact :</b></label>
                                </td>
                                <td align="right">
                                    <br><input type="number" maxlength="255" placeholder="Enter Contact Number" name="contact" required>    
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <br><label id="text" for="email"><b>Email Id :</b></label>
                                </td>
                                <td align="right">
                                    <br><input type="email" maxlength="40" placeholder="Enter Email Id" name="email" required>    
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <br><label id="text" for="password"><b>Password : </b></label>
                                </td>
                                <td align="right">
                                    <br><input type="password" maxlength="20" minlength="6" placeholder="Enter Password" name="password" required>    
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <br><label id="text" for="cpassword">Re-enter Password :</label>
                                </td>
                                <td align="right">
                                    <br><input type="password" maxlength="20" minlength="6" placeholder="Enter Password Again" name="cpassword" required>
                                </td>
                            </tr>
                            <br>
                        </h2>
                    </table>
                    <div align="center" class="bottom">
                        <button type="submit" style="font-size: large;"><strong>SIGN UP</strong></button>   
                        
                        <button type="submit" style="font-size: large;"><strong><a href="index.php" style="text-decoration: none; color:white;">CANCEL</a></strong></button>
                        
                        <h2 style="margin: -20px; color: rgb(0,0,36); padding-left: 70px;"><br>Already have an account? <a href="login.php" style="color: rgb(0,0,36);">SIGN IN</a></h2>
                        <br>
                    </div>
                </form>
            </fieldset>
        </div>
        <footer>
            <div>
                DEAL IT &#169; 2020
            </div>
        </footer>
    </body>
</html>
 
