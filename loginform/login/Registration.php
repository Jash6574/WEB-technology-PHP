<?php
session_start();
include 'db.php';

if(isset($_POST['Register'])){
    $name=mysqli_real_escape_string($con, $_POST['name']);
    $email=mysqli_real_escape_string($con, $_POST['email']);
    $pass=mysqli_real_escape_string($con, $_POST['password']);
    $conpass=mysqli_real_escape_string($con, $_POST['confpass']);

    //     if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
    //     $ErrMsg = "Only alphabets and whitespace are allowed.";  
    //             echo $ErrMsg;  
    // } 
    // $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
    // if (!preg_match ($pattern, $email) ){  
    //     $ErrMsg = "Email is not valid.";  
    //             echo $ErrMsg;  
    // } 

    $sql="insert into `registration` (name,email,password,confirmpassword) values ('$name','$email','$pass','$conpass')";
    
    $result = mysqli_query($con, $sql); //allow us to execute query
    
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

}
?>




<!Doctype html>
<html>
    <head>
        <title>Registration-form</title>
        <link rel="stylesheet" href="style.css">
    </head>

<body style="background-color: #ededed;">
    <section class="main_div">
        <div class="left_col">
            <p>R<span style="color:black; font-size:14px;">egister</p>
            <form class="form" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                <h3>Register First !</h3>
                <input type="text" name="name" placeholder="Username" required/>
                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <input type="password" name="confpass" placeholder="Confirm Password" required/>
                <a href="login.php"><button type="submit" name="Register">Register</button></a><br><br>
            </form>
        </div>
        <div class="right_col">
            <h3>Hello, Friend!</h3>
            <h4></h4>
            <p>Fill up personal information and start journey with us.</p>
            
        </div>
    </section>
</body>
</html>