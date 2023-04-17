<?php

error_reporting(0);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Find Index of Maximum Value</title>
	<style>
		body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
           
        }
		input {
			display: block;
			margin: 10px 0;
		}
		input[type="number"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

		button[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #008CBA;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

		.result {
            margin: 10px ;
            font-size: 24px;
            font-weight: bold;
        }
	</style>
</head>
<body>
	<form method="post">
		<label for="num1">Number 1:</label>
		<input type="number" id="num1" name="num1" required>

		<label for="num2">Number 2:</label>
		<input type="number" id="num2" name="num2" required>

		<label for="num3">Number 3:</label>
		<input type="number" id="num3" name="num3" required>

		<label for="num4">Number 4:</label>
		<input type="number" id="num4" name="num4" required>

		<label for="num5">Number 5:</label>
		<input type="number" id="num5" name="num5" required>

        <label for="num5">Enter the number for searching:</label>
		<input type="number" id="search" name="search" required>

		<button type="submit">Find value</button>
	</form>

	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $number1=$_POST['num1'];
            $number2=$_POST['num2'];
            $number3=$_POST['num3'];
            $number4=$_POST['num4'];
            $number5=$_POST['num5'];
            $search = $_POST['search'];

			$arr = array($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5']);
            $value = $search;
            if(binarySearch($arr, $value) == true) {
                echo $value." Exists";
            }
            else {
                echo $value." Doesnt Exist";
            }
			// $max_index = array_keys($numbers, max($numbers))[0];
			// echo '<div class="result">The index of the maximum value is: ' . $max_index . '</div>';
		}

        
        function binarySearch(Array $arr, $x)
        {
            // check for empty array
            if (count($arr) === 0) return false;
            $low = 0;
            $high = count($arr) - 1;
            
            while ($low <= $high) {
                
                // compute middle index
                $mid = floor(($low + $high) / 2);

                // element found at mid
                if($arr[$mid] == $x) {
                    return true;
                }

                if ($x < $arr[$mid]) {
                    // search the left side of the array
                    $high = $mid -1;
                }
                else {
                    // search the right side of the array
                    $low = $mid + 1;
                }
            }
            
            // If we reach here element x doesnt exist
            return false;
        }
	?>
</body>
</html>
