<?php
session_start();
include 'db.php';


if (!isset($_SESSION['username'])) {
?>
    <script>
        alert('Session Expired!!!')
    </script>
<?php
    header('location:login.php');
}

?>

<body>
    <section class="container">
        <header>Welcome <?php echo $_SESSION['username']; ?></header>
    </section>

    <a href="logout.php">Logout</a>
</body>