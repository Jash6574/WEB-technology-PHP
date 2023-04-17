<?php
session_start();

if (!isset($_SESSION['username'])) {
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Login Page | QuizzUP</title>
</head>
<body>
    <div class="body-container">
    <div class="container" id="container">
    <h1 style="text-align:center">Welcome <?php echo $_SESSION['username']; ?></header>
    </div>
    </div>
</body>
</html>

