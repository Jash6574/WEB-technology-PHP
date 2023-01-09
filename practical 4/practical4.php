<?php
//1
echo "1. Write a program to count 5 to 15 using PHP loop.<br><br>";
$count = 5;
while ($count <= 15) {
  echo $count . " ";

  $count++;
}
?>

<?php
//2
echo "<br><br><br>2. Write a program to print “Hello PHP” using php variable.<br><br>";

$a = "Hello PHP";
echo $a;
?>


<?php
//3
echo "<br><br><br>3. Write a program to print “Welcome to the PHP World” using some part of the text in variable & some part directly in echo.<br><br>";

$b = "PHP World";
echo "Welcome to the $b";
?>

<?php
//4
echo "<br><br><br>4. Write a program to print 2 php variables using single echo statement.<br><br>";

$name = "Jash";
$surname = "Mavani";
echo "My name is $name $surname";
?>

<?php
//5
echo "<br><br><br>5. Write a program to check student grade based on the marks using if-else statement.<br><br>";

$marks = 90;
echo $marks . " Marks - ";
if ($marks >= 90) {
  echo "Grade is O";
} elseif ($marks >= 80) {
  echo "Grade is A+";
} elseif ($marks >= 70) {
  echo "Grade is A";
} elseif ($marks >= 60) {
  echo "Grade is B+";
} elseif ($marks >= 50) {
  echo "Grade is B";
} elseif ($marks >= 40) {
  echo "Grade is C";
} elseif ($marks >= 33) {
  echo "Grade is D";
} else {
  echo "FAIL!!! Grade is F";
}
?>

<?php
//6
echo "<br><br><br>6. Write a program to show day of the week (for example: Monday) based on numbers using switch/case statements.<br><br>";

$day = "2";

switch ($day) {
  case "1":
    echo "$day - Sunday";
    break;
  case "2":
    echo "$day - Monday";
    break;
  case "3":
    echo "$day - Tuesday";
    break;
  case "4":
    echo "$day - Wednesday";
    break;
  case "5":
    echo "$day - Thursday";
    break;
  case "6":
    echo "$day - Friday";
    break;
  case "7":
    echo "$day - Saturday";
    break;
}
?>


<?php 
//7
echo "<br><br><br>7. Write a program to calculate factorial of a number using for loop in php.<br><br>";

$actual_number = $number = 4;  
$factorial = 1;  
for ($number; $number>=1; $number--)   
{  
  $factorial = $factorial * $number;  
}  
echo "Factorial of $actual_number is $factorial";   
?>



<?php 
//8
echo "<br><br><br>8. Write a PHP program using nested for loop that creates a chess board.<br><br>";
?>

<table width="500px" height="500" border="1px">
<?php
for($row=1;$row<=8;$row++)
{
	echo "<tr>";
	for($column=1;$column<=8;$column++)
	{
		$total=$row+$column;
		if($total%2==0)
		{
			echo "<td bgcolor=black></td>";
		}
		else
		{
			echo "<td bgcolor=white></td>";
		}
	}
	echo "</tr>";
}
?>
</table>
