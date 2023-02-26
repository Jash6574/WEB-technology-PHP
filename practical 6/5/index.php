<?php
session_start();

if(!isset($_SESSION['username'])){
  ?>
   <script>
    alert('Session Expired!!!')
   </script>
   <?php
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link rel="stylesheet" href="css/style.css">
    <title>Travel With Us</title>
</head>
<style>
    .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background: rgba(241, 235, 235, 0.07);
  backdrop-filter: blur(10px);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 32px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

span{
  font-size: 30px;
  font-weight: 500;
  margin-left: 20px;
  color:aliceblue;
  transition: .3s;
}
span:hover{
  transition: .3s;
  color: black;
  cursor: pointer;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style> 
</style>
<body>

<div class="header-container" style="background: url('img/winterbanner1.jpg');background-size:cover;" no-repeat;>
        <!-- <section class="header" style="background-color:azure">
            <a href="index.php" class="logo"><span style="font-weight:900;font-size:40px;color:#4997cd">T</span><span style="color:rgba(0, 0, 0, 0.616);font-weight: 600;">ravel.</span></a>
            <nav class="navbar">
                <a href="index.php" style="color:#4997cd;font-weight:900">home</a>
                <a href="about.php">about</a>
                <a href="destinations.php">destinations</a>
                <a href="contact.php">contact us</a>
            </nav>
        </section> -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Top Destinations</a>
  <a href="#">Fair And Festivals</a>
  <a href="#">See Gujarat As Your Interest</a>
  <a href="#">Explore Gujarat</a>
  <a href="#">See, Hear and Visit</a>
  <a href="logout.php">Logout</a>
</div><br>
        <span onclick="openNav()">&#9776;</span>
        <a href="#"><span>
      <?php echo $_SESSION['username']; ?>
      </span></a>
        

    </div>



<div class="discover-container">
    <h1 style="margin-bottom:-20px;color:white;text-shadow:4px 4px 1px black;">Explore</h1></div>
<?php require "explore.php";
?>

<div style="background-color:white">
<?php require "destinations.php"
?>
</div>

<div style="width:100vw;background-color:white">
<div class="fair-container">
<h1>Fair and Festivals</h1></div>
<?php require "fair_festival.php" ?>
<br><br><br><br><br>
</div>

<div style="width:100vw;background-color:white">
<div class="fair-container">
<h1>See Gujarat As Per Your Interest</h1></div>
<?php 
require "intereset.php"
?>
<br><br><br><br><br>
</div>


<?php
require "footer.php";       
?>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "auto";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>

</html>