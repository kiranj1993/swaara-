<?php
$inputemail = $_POST[‘inputEmail’];
$inputPassword = $_POST[’inputPassword’];
$fp = fopen(”data.txt”, “a”);
$savestring = $inputemail . “,” . $inputPassword . “n”;
fwrite($fp, $savestring);
fclose($fp);
echo “<h1>You data has been saved in a text file!</h1>”;
?>