
<?php

// session_start();


include 'dbcon.php';


if (isset($_POST['register'])){
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con,  $_POST['email']);
  $phone = mysqli_real_escape_string($con,  $_POST['phone']);
  $password = mysqli_real_escape_string($con,  $_POST['password']);
  $cpassword = mysqli_real_escape_string($con,  $_POST['cpassword']);

  $pass = password_hash($password, PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

  $emailquery = "select * from registrationtable where email = '$email'";
  $query = mysqli_query($con, $emailquery);


  $emailcount = mysqli_num_rows($query);

  if($emailcount>0){
    ?>
          <script>
              alert("ERROR: Email already exist!!!\nTry again with an another email");
          </script>
          <?php 
  }
  else{
    if($password === $cpassword){
      $insertquery = "insert into registrationtable (userName, email, phoneNo,  password, confirmPassword) values('$username','$email','$phone','$pass','$cpass')";

      $iquery = mysqli_query($con,$insertquery);

      if($con){
        ?>
          <script>
              alert("Registration Succsesfully!!!");
              location.replace("login.php")
          </script>
          <?php 
      }
      else{
          ?>
          <script>
              alert("ERROR: Try Again Latter!!!");
          </script>
          <?php
      }


    }else{
      ?>
          <script>
      alert( "Password and confirm password should be same");
      </script>
          <?php
    }
  }


}
   
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <title>Login Page | QuizzUP</title>
</head>
<body>
    <div class="body-container">
    <div class="container" id="container">
        <div>

        <div class="form-container sign-in-container">
            <form action="" method="POST">
                
                <input type="text" name="username" placeholder="Username" required/>
                <input type="email" name="email" placeholder="Email" required/>
                <input type="phone" name="phone" placeholder="Phone Number" pattern="[1-9]{1}[0-9]{9}" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <input type="password" name="cpassword" placeholder="Confirm Password" required/>
                <input type="submit" name="login" value="Login" class="btn-grad">
                <p>Already have an account? <a href="login.php">click here</a></p>
          
            </form>
        </div>
        </div>

        <div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 style="text-shadow:3px 3px 7px black;color:#9f9f9f">SignUp</h1>
                    <h6 style="color:grey">QuizzUP - A Quiz Application</h6>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</body>
</html>




