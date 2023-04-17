<?php 

// $s1 = "Hello,";
// $s2 = "I am Jash Mavani";

// $s3=$s1.$s2;

// echo $s3;




// echo 'It\'ll be interesting to know about the string. ';
// echo "\n";
 
// echo 'A \\ is named as backslash.';
// echo "\n";

// $string = 'Jash';
// echo 'I am $string.';
// echo "\n";

// echo 'Hey \n nice to meet you ';

 

// echo "I am Jash Mavani.";
// echo"\n";
// echo "It'll be interesting to know about the string.";
// echo"\n";
// echo "This is a simple string.";
// echo"\n";
// $string = 'ABC';
// echo "The word is $string.";
 

// $str = "   Hello I'm Jash                               ";
// echo trim($str);


// $str = "   Hello I'm Jash                       Mavani        ";
// echo trim($str);



// $str = "20SE02IT036-JASH";
// echo "Before rtrim: $str"."<br>";
// echo "After rtrim:",rtrim($str,'-JASH');


// echo "First occurence is at index: ",strpos("I am in 3rd year Btech IT P.P.Savani University","year");


// echo ucwords("i am in 3rd year Btech IT P.P.Savani University");


// $str="I am in 2nd year Btech IT P.P.Savani University";
// echo "Befor str_replace: ".$str."<br>";
// echo "After str_replace: ".str_replace("2nd","3rd",$str);


// $str="I am Jash Mavani";
// echo "Length of string: ".strlen($str);


?>
<form method="post">
Enter the string: <input type="text" name="field">
<button>Submit</button>
</form>

<?php

echo "<b>Output:</b>"."<br>";
$str= $_POST['field'];

echo "The original string ".$str."<br>";
echo "Reverse of string: ".strrev($str)."<br>";
echo "Length of string: " . strlen($str)."<br>";
echo "Capitalized string: ".strtoupper($str)."<br>";
echo "Number of characters: ".strlen($str)."<br>";
echo "Number of words:".str_word_count($str);
