<?php
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$number3 = $_POST['number3'];
$number4 = $_POST['number4'];
$number5 = $_POST['number5'];

global $large;


if($number1> $number2 and $number1> $number3 and $number1> $number4 and $number1> $number5)
{
  $large = $number1;
}
elseif($number2> $number1 and $number2> $number3 and $number2> $number4 and $number2> $number5)
{
  $largee = $number2;
}
elseif($number3> $number1 and $number3> $number2 and $number3> $number4 and $number3> $number5)
{
  $large = $number3;
}
elseif($number4> $number1 and $number4> $number2 and $number4> $number3 and $number4> $number5)
{
  $large = $number4;
}
elseif($number5> $number1 and $number5> $number2 and $number5> $number3 and $number5> $number4)
{
  $large = $number5;
}

 
?>

<link rel="stylesheet" href="style.css" />

<section class="container">
    <br><h1>largeest Number</h1><br>
<form method="post">
<div class="input-box">

<input type="number" name="number1" placeholder="Enter Number1"><br><br>
<input type="number" name="number2" placeholder="Enter Number2"><br><br>
<input type="number" name="number3" placeholder="Enter Number3"><br><br>
<input type="number" name="number4" placeholder="Enter Number4"><br><br>
<input type="number" name="number5" placeholder="Enter Number5"><br><br>

<button>Submit</button>
</div>


</form>
    <br>
<?php 
echo "largest number is: "."$large";

?>
</section>





