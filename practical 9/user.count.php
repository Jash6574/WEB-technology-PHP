<?php


include 'dbcon.php';


$sql_query = " select * from registrationtable";
$query = mysqli_query($con, $sql_query);
$count = mysqli_num_rows($query);

echo "<p>Number of Users: </p><b>$count</b>";


?>