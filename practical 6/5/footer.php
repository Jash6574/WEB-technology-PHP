<?php
error_reporting(0);
include 'dbcon.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $feedback = mysqli_real_escape_string($con, $_POST['feedback']);

    $insertquery = "insert into feedback (userName, email, feedback) values('$username','$email','$feedback')";

   $iquery = mysqli_query($con,$insertquery);

   if($con){
      ?>
        <script>
            alert("Your response has been recorded\nThankyou!!");
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




<style>
   .form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: grey;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1.2rem;
  color: rgb(45, 45, 45);
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}

.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 2rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}

.form button:hover {
  background: rgb(88, 56, 250);
}
</style>

<section class="footer" style="background-image: url('img/footer-bg.jpg');">
   <div class="box-container" style="padding:0 60px">

      <div class="box">
         <p style="font-size:52px;color:white">Feedback</p>
         
         
      </div>

      <div class="box">
      <form class="form" method="POST">
      <div class="column">
      <div class="input-box">
        <label>User Name</label>
        <input type="text" id="username" name="username" value=" <?php echo $_SESSION['username']; ?>" required />
      </div>
      <div class="input-box">
        <label>Email</label>
        <input type="text" id="username" name="email" placeholder="Enter your Email" required />
      </div>
      </div>
      <div class="input-box">
        <label>Feedback</label>
        <input type="text" id="username" name="feedback" placeholder="Enter your valuable Feedback" required />
      </div>
      
          <button type="submit" name="submit">Submit</button>
        
      </form>
      </div>

      

   </div>

   <h1
    class="credit"> We Appreciate Your Feedback,<br>
Thank You ... </h1>

</section>

