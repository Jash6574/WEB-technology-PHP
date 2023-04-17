<?php

session_start();


foreach($_SESSION['item'] as $item){
    echo "<p>".$item."</p>";
}
?>