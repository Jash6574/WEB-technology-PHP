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

        

		<button type="submit">Sort</button>
	</form>

	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $number1=$_POST['num1'];
            $number2=$_POST['num2'];
            $number3=$_POST['num3'];
            $number4=$_POST['num4'];
            $number5=$_POST['num5'];
           

			$arr = array($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5']);
            $arr_size = sizeof($arr);

            echo "Given array is \n";
            printArray($arr, $arr_size);
            
            mergeSort($arr, 0, $arr_size - 1);
            
            echo "\nSorted array is \n";
            printArray($arr, $arr_size);
            return 0;
			// $max_index = array_keys($numbers, max($numbers))[0];
			// echo '<div class="result">The index of the maximum value is: ' . $max_index . '</div>';
		}

        
        function merge(&$arr, $l, $m, $r)
        {
            $n1 = $m - $l + 1;
            $n2 = $r - $m;

            /* create temp arrays */
            $L = array();
            $R = array();
            /* Copy data to temp arrays L[] and R[] */
            for ($i = 0; $i < $n1; $i++)
                $L[$i] = $arr[$l + $i];
            for ($j = 0; $j < $n2; $j++)
                $R[$j] = $arr[$m + 1 + $j];

            /* Merge the temp arrays back into arr[l..r]*/
            $i = 0; // Initial index of first subarray
            $j = 0; // Initial index of second subarray
            $k = $l; // Initial index of merged subarray
            while ($i < $n1 && $j < $n2) {
                if ($L[$i] <= $R[$j]) {
                    $arr[$k] = $L[$i];
                    $i++;
                }
                else {
                    $arr[$k] = $R[$j];
                    $j++;
                }
                $k++;
            }

            /* Copy the remaining elements of L[], if there
            are any */
            while ($i < $n1) {
                $arr[$k] = $L[$i];
                $i++;
                $k++;
            }

            /* Copy the remaining elements of R[], if there
            are any */
            while ($j < $n2) {
                $arr[$k] = $R[$j];
                $j++;
                $k++;
            }
        }
        /*

        */
        /* l is for left index and r is right index of the
        sub-array of arr to be sorted */
        function mergeSort(&$arr, $l, $r)
        {
            if ($l < $r) {
                // Same as (l+r)/2, but avoids overflow for
                // large l and h
                $m = $l + (int)(($r - $l) / 2);

                // Sort first and second halves
                mergeSort($arr, $l, $m);
                mergeSort($arr, $m + 1, $r);

                merge($arr, $l, $m, $r);
            }
        }

        /* UTILITY FUNCTIONS */
        /* Function to print an array */
        function printArray($A, $size)
        {
            for ($i = 0; $i < $size; $i++)
                echo $A[$i]." ";
            echo "\n";
        }

	?>
</body>
</html>
