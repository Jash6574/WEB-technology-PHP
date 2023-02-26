
<b>
   >> Read file
</b><br>
<?php
$rfile = fopen("text.txt","r");
while(! feof($rfile)) {
    $rline = fgets($rfile);
    echo $rline. "<br>";
  }
fclose($rfile);
?>
<br>
<b>
    >> Write file
</b>
<br>
<?php
$wfile = fopen("text.txt","a");
$wtext = "hyyy";
fwrite($wfile, $wtext);
while(! feof($wfile)) {
    $wline = fgets($wfile);
    echo $wline. "<br>";
  }
fclose($file);
?>

