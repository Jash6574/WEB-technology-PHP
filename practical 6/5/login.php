$uname_search = " select * from registrationtable where userName='$username' ";
  $uname_query = mysqli_query($con, $uname_search);
  $uname_pass = mysqli_fetch_assoc($uname_query);
  $dbpass = $uname_pass['username'];
  

<?php
session_start();


include 'dbcon.php';

if (isset($_POST['login'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];


  $email_search = " select * from registrationtable where email='$email' ";
  $query = mysqli_query($con, $email_search);

  $email_count = mysqli_num_rows($query);

  if ($email_count) {
    $email_pass = mysqli_fetch_assoc($query);
    $dbpass = $email_pass['password'];

    $_SESSION['username'] = $email_pass['userName'];

    $pass_decode = password_verify($password, $dbpass);

    // $isAdmin = "select * from registrationtable where isAdmin='1'";
    // $getAdmin = mysqli_query($con, $isAdmin);
    // $checkAdmin = mysqli_fetch_assoc($getAdmin);

    if ($pass_decode) {
      if ($checkAdmin == 1) {
        header('location:admin.php');
      } else {
        header('location:index.php');
      }
    } else {
?>
      <script>
        alert("ERROR: Email or Password are incorrect!!!")
      </script>
    <?php
    }
  } else {
    ?>
    <script>
      alert("ERROR: Email Invalid!!!\n Please register and then login")
    </script>
<?php
  }
}
?>






<!DOCTYPE html>
<html>

<head>

  <title>Login</title>

  <link rel="stylesheet" href="css/login.style.css" />



</head>

<body>
  <section class="container">
    <header>LogIn</header>
    <form id="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="form">



      <div class="input-box">

        <label>Email id</label>
        <input type="email" id="email" name="email" placeholder="Enter Your Email Id" required /><br><br>

        <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Enter Your Password" required max="12" min="6" /><br><br>


        <center>
          <a href="recover_email.php">Forgot Password</a>


          <a href="index.php"> <button type="submit" name="login">Login</button></a><br><br>
          <p>Don't have an account? <a href="register.php">click here</a></p>

        </center>



      </div>




    </form>
  </section>
</body>

</html>