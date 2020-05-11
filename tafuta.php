<?php 
$dateVariable      = strtotime('2019-03-09');//your date variable goes here
$date_plus_60_days = date('Y-m-d', strtotime('+ 548 days', $dateVariable));
echo $date_plus_60_days;

 ?>