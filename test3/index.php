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


<link rel="stylesheet" href="style.css" />



</head>

<body>
    <section class="container">
        <header>Welcome <?php echo $_SESSION['username']; ?></header>
        <form id="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
            <div class="input-box ">
                <label class="">Pyramid</label>
                    <button type="submit" name="Pyramid" >Pyramid</button><br>
            </div>
            <div class="input-box ">
                <label>Square</label>
                <button type="submit" name="Square" >Square</button><br>
            </div>
            <div class="input-box ">

                <label>Rectangle</label>
                <button type="submit" name="Rectangle" >Rectangle</button><br>
            </div>
            <div class="input-box ">

                <label>Reverse Pyramid</label>
                <button type="submit" name="ReversePyramid" >Reverse Pyramid</button><br>
            </div>
            <div class="input-box ">

                <label>Rhombus</label>
                <button type="submit" name="Rhombus" >Rhombus</button><br><br><br><br>
            </div>
        </form>
        
        <a href="logout.php">Logout</a> 
    </section>

    <section class="container" style="margin:50px">
        <div>
            <center>
                <h1>Pattern</h1><br>
                <?php
                if (array_key_exists('Pyramid', $_POST)) {
                    Pyramid();
                } else if (array_key_exists('Square', $_POST)) {
                    Square();
                } else if (array_key_exists('Rectangle', $_POST)) {
                    Rectangle();
                } else if (array_key_exists('ReversePyramid', $_POST)) {
                    ReversePyramid();
                } else if (array_key_exists('Rhombus', $_POST)) {
                    Rhombus();
                }
                function Pyramid()
                {
                    $size = 5;
                    for ($i = 0; $i < $size; $i++) {
                        for ($j = 0; $j < $size - $i - 1; $j++) {
                            // echo "&nbsp;&nbsp;";
                        }
                        for ($k = 0; $k < 2 * $i + 1; $k++) {
                            echo "*";
                        }
                        echo "<br>";
                    }
                }
                function Square()
                {

                    $size = 5;
                    for ($i = 0; $i < $size; $i++) {
                        for ($j = 0; $j < $size; $j++) {
                            echo "***";
                        }
                        echo "<br>";
                    }
                }
                function Rectangle()
                {
                    $size = 5;
                    for ($i = 0; $i < $size; $i++) {
                        for ($j = 0; $j < $size; $j++) {
                            echo "*******";
                        }
                        echo "<br>";
                    }
                }
                function ReversePyramid()
                {
                    $size = 5;
                    for ($i = 0; $i < $size; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            // echo "&nbsp;&nbsp;";
                        }
                        for ($k = 0; $k < 2 * ($size - $i) - 1; $k++) {
                            echo "*";
                        }
                        echo "<br>";
                    }
                }
                function Rhombus()
                {
                    $size = 5;
                    for ($i = 0; $i < $size; $i++) {
                        for ($j = 0; $j < $size - $i - 1; $j++) {
                            // echo "&nbsp;&nbsp;";
                        }
                        for ($k = 0; $k < 2 * $i + 1; $k++) {
                            echo "*";
                        }
                        echo "<br>";
                    }
                    $size = 5;
                    for ($i = 0; $i < $size; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            // echo "&nbsp;&nbsp;";
                        }
                        for ($k = 0; $k < 2 * ($size - $i) - 1; $k++) {
                            echo "*";
                        }
                        echo "<br>";
                    }

                }
                ?>
            </center>
        </div>
        </section>

</body>

</html>