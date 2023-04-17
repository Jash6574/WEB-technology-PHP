<?php

session_start();

if (isset($_POST['submit'])) {
    if (!empty($_POST['check_list'])) {
        foreach ($_POST['check_list'] as $selected) {
            echo "<p>" . $selected . "</p>";
            $_SESSION['item'] = $_POST['check_list'];
        }
    } else {
        echo "<b>Please Select Minimum One Option.</b>";
    }
}


?>
<form action="checkout.php" method="post">
    <button type="submit">Check out</button>
</form>