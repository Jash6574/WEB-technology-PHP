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

		<button type="submit">Find value</button>

	</form>
</body>
</html>



<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number1=$_POST['num1'];
    $number2=$_POST['num2'];
    $number3=$_POST['num3'];
    $number4=$_POST['num4'];
    $number5=$_POST['num5'];
    $search = $_POST['search'];


    // PHP program for implementation
    // of selection sort
    function selection_sort(&$arr, $n)
    {
        for($i = 0; $i < $n ; $i++) {
            $low = $i;
            for($j = $i + 1; $j < $n ; $j++) {
                if ($arr[$j] < $arr[$low]) {
                    $low = $j;
                }
            }

            // swap the minimum value to $ith node
            if ($arr[$i] > $arr[$low]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$low];
                $arr[$low] = $tmp;
            }
        }
    }

    // Driver Code
    $arr = $arr = array($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5']);

    $len = count($arr);
    selection_sort($arr, $len);
    echo "Sorted array : \n";

    for ($i = 0; $i < $len; $i++) {
        echo $arr[$i] . " ";
    }

    // This code is contributed
    // by Deepika Gupta.


}
?>