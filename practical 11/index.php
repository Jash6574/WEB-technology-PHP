<?php

error_reporting(0)

?>



<!DOCTYPE html>
<html>

<head>

    <title>bill</title>

    <link rel="stylesheet" href="style.css" />



</head>

<body>
    <section class="container" style="margin-left:auto;margin-right:auto;margin-top:30px;">
        <form id="form" action="" method="POST" class="form" style="padding:50px">



            <div class="input-box">

                <label>Amount</label>
                <input type="number" id="amount" name="amount" placeholder="Enter Your Amount" required /><br><br>


                <label>Tip Type</label><br>
                <div class="select-box">
                    <select name="tiptype">
                        <option hidden>Select Your Tip Method</option>
                        <option>Integer</option>
                        <option>Float</option>
                    </select>
                </div><br>

                <label>Tip</label>
                <input type="number" id="tip" name="tip" placeholder="Enter Your Tip" required step="0.01" /><br><br>

                <input type="submit" value="Get Your Bill" name="bill">
            </div>
        </form>

        <div style="padding:50px">
            <?php
            if (isset($_POST['bill'])) {
                $amount = $_POST['amount'];
                $tip = $_POST['tip'];
                $tip_amount = $amount * $tip;


                if ($_POST['tiptype'] == 'Integer') {
                    echo "<p>Your tip : $" . $tip . "</p>";
                    echo "<p>Your Total bill : $" . $tip + $amount . "</p>";
                } else {
                    echo "<p>Your tip : $" . $tip_amount . "</p>";
                    echo "<p>Your Total bill : $" . $tip_amount + $amount . "</p>";
                }
            }


            ?>
        </div>

    </section>
</body>

</html>