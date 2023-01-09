<form method="POST" action="practical5.php">
    <input type="number" placeholder="Enter Number" name="number" min="0" max="64" style="width:250px;height:40px;border-radius: 6px;">
    <input type="submit" style="height:40px;border-radius: 6px;width:70px">
</form>

<table class="chessBoard" width="700px" height="700px" border="1px">

    <?php
    $cellNum = 1;
    $user = $_POST['number'];

    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col++) {
            $total = $row + $col;
            if ($total % 2 == 0) {

                if ($cellNum == $user) {
                    echo "<td bgcolor=green style='font-size:25px; text-align:center;'>" . $cellNum . "</td>";
                } else {
                    echo "<td bgcolor=#000000 style='color:white; font-size:25px; text-align:center;'>" . $cellNum . "</td>";
                }
                $cellNum++;
            } else {

                if ($cellNum == $user) {
                    echo "<td bgcolor=green style='font-size:25px; text-align:center;'>" . $cellNum . "</td>";
                } else {
                    echo "<td bgcolor=#ffffff style='color:black; font-size:25px; text-align:center;'>" . $cellNum . "</td>";
                }
                $cellNum++;
            }
        }
        echo "</tr>";
    }



    ?>
</table>
</br></br>