
<?php


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

      $insertquery = "insert into registrationtable (userName, email, phoneNo, password, confirmPassword) values('$username','$email','$phone','$pass','$cpass')";

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
<html>

<head>

  <title>Register</title>

  <link rel="stylesheet" href="css/login.style.css" />



</head>

<body>
  <section class="container">
    <header>Register</header>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="form" method="POST" class="form">


      <div class="input-box">
        <label>User Name</label>
        <input type="text" id="username" name="username" placeholder="Enter Your User Name" required />

        <label>Email id</label>
        <input type="email" id="email" name="email" placeholder="Enter Your Email Id" required />

        <label>Phone Number</label>
        <input type="phone" id="phone" name="phone" required pattern="[1-9]{1}[0-9]{9}" placeholder="Enter Your Phone Number" />

        <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Enter Your Password" required max="12" min="6" />

        <label>Confirm Password</label>
        <input type="password" id="cpassword" name="cpassword" placeholder="Enter Confirm Password" required max="12" min="6" />

        <a href="login.php">
          <button type="submit" name="register">Register</button>
        </a><br><br>

        <center>
          <p>Have an account? <a href="login.php">click here</a></p>
        </center>

      </div>



    </form>
  </section>
</body>

</html>