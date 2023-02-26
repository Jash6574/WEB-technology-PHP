
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
  
  // $_SESSION['username'] = $email_pass['userName'];


  $emailcount = mysqli_num_rows($query);

  if($emailcount>0){
    ?>
          <script>
          prompt("ERROR: Email already exist!!!\nTry again with an another email\n\nLogin using username\n\nEnter username:");

          document.writeln(`
          <?php echo 'Welcome '.$username; ?>
          `);
            

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
              location.replace("index.php")
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


<?php
  echo "
  <button type='button' onclick='alertFunc()'>click</button>
  ";

?>

<script>
  function alertFunc(){
    <?php
        $click = true;
      ?>
      alert("Welcome to the page");

      

      document.writeln(`
      <form action="index.php" method="POST">

        <label>User Name</label>
        <input type="text" id="username" name="username" placeholder="Enter Your User Name" required /><br><br>

        <label>Email id</label>
        <input type="email" id="email" name="email" placeholder="Enter Your Email Id" required /><br><br>

        <label>Phone Number</label>
        <input type="phone" id="phone" name="phone" required pattern="[1-9]{1}[0-9]{9}" placeholder="Enter Your Phone Number" /><br><br>

        <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Enter Your Password" required max="12" min="6" /><br><br>

        <label>Confirm Password</label>
        <input type="password" id="cpassword" name="cpassword" placeholder="Enter Confirm Password" required max="12" min="6" /><br><br>

        <a href="login.php">
          <button type="submit" name="register">Register</button>
        </a><br><br>

    </form>
      `)
  }
</script>
