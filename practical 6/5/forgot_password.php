
<!DOCTYPE html>
<html>

<head>

  <title>Login</title>

  <link rel="stylesheet" href="css/login.style.css" />



</head>

<body>
  <section class="container">
    <header>Forgot Password</header>
    <form id="form" method="post" class="form">



     <div class="input-box">

      <label>Email id</label>
      <input type="email" id="email" name="email" placeholder="Enter Your Email Id" required/><br><br>
   
        <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Enter Your Password" required max="12" min="6"/><br><br>
      
        <label>Confirm Password</label>
        <input type="password" id="f_confirm_password" name="fconfirmpassword" placeholder="Re-Enter Your Password" required max="12" min="6"/><br><br>
      <center>
    <a href="index.php"> <button>Reset Password</button></a><br><br>
</center>
    
        

     </div>
    

       

    </form>
  </section>
</body>
</html>