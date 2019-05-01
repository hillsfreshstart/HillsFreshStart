<?php
//index.php

$error = '';
$pID = $_POST["pID"];


$handle = fopen('owes.csv', 'r');
$valid = false; // init as false
while (($buffer = fgets($handle)) !== false) {
    if (strpos($buffer, $pID) !== false) {
        $valid = TRUE;
        break; // Once you find the string, you should break out the loop.
    }      
}
fclose($handle);
if($valid === TRUE){
  echo "<script> location.href='https://hillsfreshstart.github.io/HillsFreshStart/paymentConfirm.html'; </script>";
}else{
  echo "<script> location.href='http://www.HillsFreshStart.com'; </script>";
}


?>
