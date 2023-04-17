<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "tourism";


$con = mysqli_connect($server, $user,$password,$db);

if(!$con){
    ?>
    <script>
        alert("ERROR: NO Connection!!!");
    </script>
    <?php
}

?>