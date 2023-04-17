<?php  


if(!isset($_COOKIE["username"])) {  
    echo "Sorry, username is not found!";  
} else {  
    echo "<br/>User: " . $_COOKIE["username"];  
}  

?> 




