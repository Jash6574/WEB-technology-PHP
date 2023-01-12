<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link rel="stylesheet" href="css/style.css">
    <title>Travel With Us</title>
</head>
<body>

<div class="header-container" style="background: url('./img/winterbanner1.jpg');background-size:cover" no-repeat;>
        <section class="header" style="background-color:azure">
            <a href="index.php" class="logo"><span style="font-weight:900;font-size:40px;color:#4997cd">T</span><span style="color:rgba(0, 0, 0, 0.616);font-weight: 600;">ravel.</span></a>
            <nav class="navbar">
                <a href="index.php" style="color:#4997cd;font-weight:900">home</a>
                <a href="about.php">about</a>
                <a href="destinations.php">destinations</a>
                <a href="contact.php">contact us</a>
            </nav>
        </section>

        <!-- <div class="img-text">
            <h1>Statue of Unity</h1>
            <h2>World’s tallest statue</h2>
            <h3>Know More</h3>
        </div> -->
    </div>



<div class="discover-container">
    <h1 style="margin-bottom:-20px">Explore</h1></div>
<?php require "explore.php";
?>


<?php
require "footer.php";       
?>


</body>

</html>