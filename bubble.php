<?php
function bubbleSort($arr)
    {
        $n = sizeof($arr);

        for($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j+1]) {
                    $t = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $t;
                }
            }
        }
    }

    $arr = array(1,4,2,5,8);

    $len = sizeof($arr);
    bubbleSort($arr);

    echo "Sorted array : \n";

    for ($i = 0; $i < $len; $i++) {
        echo $arr[$i]." ";
    }
?>

