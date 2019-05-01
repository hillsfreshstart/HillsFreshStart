<?php
//index.php

$error = '';
$pID = '';


if(isset($_POST["submit"]))
{
 

 if(empty($_POST["pID"]))
 {
  $error .= '<p><label class="text-danger">Patient ID is required</label></p>';
 }
 

 if($error == '')
 {
  $file_open = fopen("patients.csv", "a");
  $no_rows = count(file("patients.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'pID' => $pID
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Thank you for contacting us</label>';
  $pID = '';
 }
}

?>
