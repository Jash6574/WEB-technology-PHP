<?php
error_reporting(0);

include "dbcon.php";

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
    <title>Admin</title>
</head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  width:100%;
  background-color: #111;
}

li {
    float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.active {
  background-color: blue;
}
</style>

<body>
<ul>
  <li><a>Admin Dashboard</a></li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
  <li style="float:right"><a class="active" href="Feedback.php">Feedback</a></li>
  <li style="float:right"><a href="admin.php">Users</a></li>
</ul>

    <?php
        $result = mysqli_query($con,"SELECT * FROM feedback ");
        $num_rows = mysqli_num_rows($result);


        echo "<p style='font-size:24px'>User Feedback</p>";
        ?>


         <table border=1px style="width:100%;text-align:center;">
    <tr>
        <th>Sr No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Feedback/Review</th>
    </tr>

    <tr>
        <?php
        $x = 1;
        while($data = mysqli_fetch_assoc($result))
        {?>
<td><?php echo $x;
         $x++ ?></td>
<td><?php echo $data['userName'] ?></td>
<td><?php echo $data['email'] ?></td>
<td><?php echo $data['feedback'] ?></td>
        


</tr>
        <?php
        }
        
        ?>
</table>


</body>
</html>