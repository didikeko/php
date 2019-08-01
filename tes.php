<?php
 
//Our YYYY-MM-DD date.
$ymd = '2015-08-10';
 
//Convert it into a timestamp.
$timestamp = strtotime($ymd);
 //hhhhhhhgfgdfgd
//Convert it to DD-MM-YYYY
$dmy = date("d-m-Y", strtotime($ymd));
 
//Echo it
echo $dmy;
//echo $timestamp ;

?>