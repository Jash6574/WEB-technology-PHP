<?php

include 'dbcon.php';

$query = "select * from data";
$result = mysqli_query($con, $query);
// $fetch_query = mysqli_fetch_array($query_sql);

?>
<style>
    tr,th,td{
        border: 1px solid #000;
        padding: 5px 15px 5px 15px;
    }

    th{
        width: auto;
    }
</style>

<link rel="stylesheet" href="style.css" />


<section class="container">
<table style="width: 100%;">
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Video Link</th>
    </tr>

    <tr>
        <?php
        $x = 1;
        while($row = mysqli_fetch_assoc($result))
        {?>
<td><?php echo $x;
         $x++ ?></td>
<td><?php echo $row['title'] ?></td>
        <td><?php     
        echo $row['link'] ?></td>


</tr>
        <?php
        }
        
        ?>
</table>
</div>








