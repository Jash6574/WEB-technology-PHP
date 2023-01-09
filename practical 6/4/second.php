<?php

global $fName;
global $eNumber;
global $sub1;
global $sub2;
global $sub3;
global $sub4;
global $sub5;
global $total;

$fName = $_POST['fName'];
$eNumber = $_POST['eNumber'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];

$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />

  <title>Result</title>
</head>

<body>
  <div class="container" style="padding: 0;">
    <div style="background-color: rgb(0, 0, 0);padding-top: 10px; height: auto;">
      <header id="result_name" style="font-size: 40px; font-weight: 300; color: rgba(250, 235, 215, 0.736);font-family: 'Times New Roman', serif;line-height: 1.7;text-transform: capitalize;"><?php echo $fName ?>
      </header>

      <div class="subheadder" style="text-align: center; align-items: center">
        <p>
          <span id="result_phone" style="color: rgba(128, 128, 128, 0.912);"><?php echo $eNumber ?></span><br><br>
        </p>
      </div>


    </div>

    <div class="bodyContainer" style="margin: 20px;">
      <table class="table" border="1" width="100%">
        <tr>
          <th width="60%" style="padding:25px">Subject</th>
          <th width="15%">Total Marks</th>
          <th width="15%">Obtained Marks</th>
          <th width="10%">Grade</th>
        </tr>
        <tr>
          <td style="padding:5px 20px;">Gujarati</td>
          <td style="text-align: center;">100</td>
          <td style="text-align: center;"><?php echo $sub1 ?></td>
          <td style="text-align: center;"><?php
                                          if ($sub1 > 90) echo "O";
                                          elseif ($sub1 > 80) echo "A+";
                                          elseif ($sub1 > 70) echo "A";
                                          elseif ($sub1 > 60) echo "B+";
                                          elseif ($sub1 > 50) echo "B";
                                          elseif ($sub1 > 40) echo "C";
                                          elseif ($sub1 > 33) echo "P";
                                          else echo "<span style='color:red;font-weight:600'>F</span>";
                                          ?>
                                          </td>

        </tr>
        <tr>
          <td style="padding:5px 20px;">English</td>
          <td style="text-align: center;">100</td>
          <td style="text-align: center;"><?php echo $sub2 ?></td>
          <td style="text-align: center;"><?php
                                          if ($sub2 > 90) echo "O";
                                          elseif ($sub2 > 80) echo "A+";
                                          elseif ($sub2 > 70) echo "A";
                                          elseif ($sub2 > 60) echo "B+";
                                          elseif ($sub2 > 50) echo "B";
                                          elseif ($sub2 > 40) echo "C";
                                          elseif ($sub2 > 33) echo "P";
                                          else echo "<span style='color:red;font-weight:600'>F</span>";
                                          ?>
                                          </td>
        </tr>
        <tr>
          <td style="padding:5px 20px;">Hindi</td>
          <td style="text-align: center;">100</td>
          <td style="text-align: center;"><?php echo $sub3 ?></td>
          <td style="text-align: center;"><?php
                                          if ($sub3 > 90) echo "O";
                                          elseif ($sub3 > 80) echo "A+";
                                          elseif ($sub3 > 70) echo "A";
                                          elseif ($sub3 > 60) echo "B+";
                                          elseif ($sub3 > 50) echo "B";
                                          elseif ($sub3 > 40) echo "C";
                                          elseif ($sub3 > 33) echo "P";
                                          else echo "<span style='color:red;font-weight:600'>F</span>";
                                          ?>
                                          </td>

        </tr>
        <tr>
          <td style="padding:5px 20px;">Maths</td>
          <td style="text-align: center;">100</td>
          <td style="text-align: center;"><?php echo $sub4 ?></td>
          <td style="text-align: center;"><?php
                                          if ($sub1 > 90) echo "O";
                                          elseif ($sub4 > 80) echo "A+";
                                          elseif ($sub4 > 70) echo "A";
                                          elseif ($sub4 > 60) echo "B+";
                                          elseif ($sub4 > 50) echo "B";
                                          elseif ($sub4 > 40) echo "C";
                                          elseif ($sub4 > 33) echo "P";
                                          else echo "<span style='color:red;font-weight:600'>F</span>";
                                          ?>
                                          </td>

        </tr>
        <tr>
          <td style="padding:5px 20px;">Science</td>
          <td style="text-align: center;">100</td>
          <td style="text-align: center;"><?php echo $sub5 ?></td>
          <td style="text-align: center;"><?php
                                          if ($sub5 > 90) echo "O";
                                          elseif ($sub5 > 80) echo "A+";
                                          elseif ($sub5 > 70) echo "A";
                                          elseif ($sub5 > 60) echo "B+";
                                          elseif ($sub5 > 50) echo "B";
                                          elseif ($sub5 > 40) echo "C";
                                          elseif ($sub5  >= 33) echo "P";
                                          else echo "<span style='color:red;font-weight:600'>F</span>";
                                          ?>
                                          </td>

        </tr>
      </table>

      <div style="text-align:center;margin:20px 0px 10px 0px">
        <p>Obtained: <span><?php echo "<span style='font-weight:600'>$total</span>" ?></span> Out OF <span>500</span></p>
      </div>
      <hr>
      <div style="text-align:center;margin:20px 0px 10px 0px">
        <p><span style="margin-right: 30px;">Result: <?php if($sub1 < 33 or $sub2 < 33 or $sub3 < 33 or $sub4 < 33 or $sub5 < 33)
        echo "<span style='color:red;font-weight:600'>FAIL</span>";
      else
        echo "<span style='color:green;font-weight:600'>PASS</span>";
      ?> </span><span>Percentage: <?php echo $total / 5; echo "%" ?></span><span style="margin-left: 30px;"> Grade: <?php
      if (($total/5 > 90) and ($sub1 >=33 and $sub2 >= 33 and $sub3 >= 33 and $sub4 >= 33 and $sub5 >= 33)) echo "O";
      elseif ($total/5 > 80 and ($sub1 >=33 and $sub2 >= 33 and $sub3 >= 33 and $sub4 >= 33 and $sub5 >= 33)) echo "A+";
      elseif ($total/5 > 70 and ($sub1 >=33 and $sub2 >= 33 and $sub3 >= 33 and $sub4 >= 33 and $sub5 >= 33)) echo "A";
      elseif ($total/5 > 60 and ($sub1 >=33 and $sub2 >= 33 and $sub3 >= 33 and $sub4 >= 33 and $sub5 >= 33)) echo "B+";
      elseif ($total/5 > 50 and ($sub1 >=33 and $sub2 >= 33 and $sub3 >= 33 and $sub4 >= 33 and $sub5 >= 33)) echo "B";
      elseif ($total/5 > 40 and ($sub1 >=33 and $sub2 >= 33 and $sub3 >= 33 and $sub4 >= 33 and $sub5 >= 33)) echo "C";
      elseif ($total/5  >= 33 and ($sub1 >=33 and $sub2 >= 33 and $sub3 >= 33 and $sub4 >= 33 and $sub5 >= 33)) echo "P";
      else echo "NA";
      ?></span></p>
      </div>
    </div>

  </div>
</body>

</html>