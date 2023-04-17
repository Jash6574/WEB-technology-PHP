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


    if ($pass_decode) {
        header('location:index.php');    
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
                
                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <a href="#">Forgot your password?</a>
                <input type="submit" name="login" value="Login" class="btn-grad">
                <p>Don't have an account? <a href="register.php">click here</a></p>
          
            </form>
        </div>
        </div>

        <div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 style="text-shadow:3px 3px 7px black;color:#9f9f9f">SignIn</h1>
                    <h6 style="color:grey">QuizzUP - A Quiz Application</h6>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</body>
</html>




