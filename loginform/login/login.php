<?php
session_start();

include 'db.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
  
  
    $email_search = " select * from `registration` where email='$email' ";
    $query = mysqli_query($con, $email_search);

    $email_count=mysqli_num_rows($query);

     if ($email_count) {
        $email_pass = mysqli_fetch_assoc($query);
        $dbpass = $email_pass['password'];
    
         $_SESSION['username'] = $email_pass['name'];

    }
     $pass_decode = ($password);
    
        if ($pass_decode) {
         
            header('location:index.php');
          
        } else {
            ?>
                  <script>
                    alert("ERROR: Email or Password are incorrect!!!")
                  </script>
                <?php
                }
              } 
            
            ?>
            

<!Doctype html>
<html>
    <head>
        <title>Login-form</title>
        <link rel="stylesheet" href="style.css">
    </head>

<body style="background-color: #ededed;">
    <section class="main_div">
        <div class="left_col">
            <p>E<span style="color:black; font-size:14px;">xam</p>
            <form class="form" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                <h3>Login here !</h3><br><br><br>
                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="password"  id="password" placeholder="Password" required/>
                <a href="index.php"><button type="submit" name="login">Login</button></a><br><br>
            </form>
        </div>
        <div class="right_col">
            <h3>Hello, Friend!</h3>
            <h4></h4>
            <p>Here you go.</p>
            
        </div>
    </section>
</body>
</html>