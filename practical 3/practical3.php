<?php

//1.  Write a PHP Script to Show Welcome Message.
echo "Hello Welcome to PHP World<br><br>";
?>


<?php
//2. Write a PHP script to declare variables.
$num1 = 10;
$num2 = 5;

echo "Number 1 : $num1 <br>Number 2 : $num2 <br><br>";
?>


<?php
echo "<br>Arithmatic op<br><br>";

$num1 = 10;
$num2 = 5;

echo "Number 1 : $num1 <br>Number 2 : $num2<br><br>";
//3. Write a PHP script to demonstrate arithmetic operators, comparison operator, and logical operator.
//arithmetic operators
echo "$num1 + $num2 = ".$num1 + $num2."<br>";
echo "$num1 - $num2 = ".$num1 - $num2."<br>";
echo "$num1 * $num2 = ".$num1 * $num2."<br>";
echo "$num1 / $num2 = ".$num1 / $num2."<br>";
echo "$num1 % $num2 = ".$num1 % $num2."<br>";
echo "$num1 ^ $num2 = ".$num1 ** $num2."<br>";
?>



<?php
echo "<br><br>Comparison op<br><br>";

echo "Number 1 : $num1 <br>Number 2 : $num2 <br><br>";

$num1 = 10;
$num2 = 5;
//3. Write a PHP script to demonstrate arithmetic operators, comparison operator, and logical operator.
//comparison operator

if($num1>$num2)
{
echo "$num1 is greater than $num2<br>";
}

if($num1<$num2)
{
echo "$num1 is less than $num2<br>";
}

if($num1>=$num2)
{
echo "$num1 is greater or equal to $num2<br>";
}

if($num1<=$num2)
{
echo "$num1 is less or equal to $num2<br>";
}

if($num1==$num2)
{
echo "$num1 equal to $num2<br>";
}

if($num1===$num2)
{
echo "$num1 equal to $num2 and type too<br>";
}

if($num1!==$num2)
{
echo "$num1 equal to $num2 but type not<br>";
}

if($num1!=$num2)
{
echo "$num1 is equal to $num2<br>";
}
?>


<?php
echo "<br><br>logical op<br><br>";
echo "Number 1 : $num1 <br>Number 2 : $num2 <br><br>";

$num1 = 10;
$num2 = 5;
//3. Write a PHP script to demonstrate arithmetic operators, comparison operator, and logical operator.
//logical operator
if($num1==10 && $num2==5)
{
echo "AND pass <br>";
}
if($num1==10 || $num2==2)
{
echo "OR pass<br>";
}
if($num1==10 xor $num2==2)
{
echo "XOR pass";
}
?>