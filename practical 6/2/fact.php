<?php

global $number; 
global $actual_number;
global $factorial;

$number= $_POST["number"];

$actual_number = $number;  
$factorial = 1;  
for ($number; $number>=1; $number--)   
{  
  $factorial = $factorial * $number;  
}  
 
?>

<link rel="stylesheet" href="style.css" />

<section class="container">
    <br><h1>Factorial Counter</h1><br>
<form method="post">
<div class="input-box">
<input type="number" name="number" palceholder="Enter Number">
<button>Submit</button>
</div>


</form>

    <br>
<?php echo "Factorial of $actual_number is $factorial";  ?>
</section>
