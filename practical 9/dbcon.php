<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "cookies";


$con = mysqli_connect($server, $user,$password,$db);

if($con){
  /*  ?>
    <script>
        alert("Connection succsesfully!!!");
    </script>
    <?php */
}
else{
    ?>
    <script>
        alert("ERROR: NO Connection!!!");
    </script>
    <?php
}

?>