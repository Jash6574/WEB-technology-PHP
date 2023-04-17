<?php

$i = 2;
$sum = 1;

while ($i <= 100) {
    for ($j = 2; $i > $j; $j++) {
        if ($i % $j == 0) {
            break;
        }else{
            echo "{$i}<br/>";
            $sum = $sum + $i;
            break;
        }
    }

    $i++;
}
echo "sum: {$sum}";
?>

<br>


<?php
function distance($x1, $y1, $x2, $y2)
{
    return sqrt(pow($x2 - $x1, 2) + 
                pow($y2 - $y1, 2) * 1.0);
}  
echo(distance(3, 4, 4, 3));
?>

<br>
<?php
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
?>