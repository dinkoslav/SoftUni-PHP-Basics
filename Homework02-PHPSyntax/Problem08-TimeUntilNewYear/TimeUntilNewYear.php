<?php
$now = new DateTime();
$dateNow = $now->format('Y-m-d H:i:s');
$newYear = '2014-12-31 23:00:00';
$diff=strtotime($newYear)-strtotime($dateNow);

$temp=$diff/86400;
$days=floor($diff/86400);
$hours=floor(24*($temp-$days));
$minutes=floor(60*((24*($temp-$days))-$hours));
$seconds=floor(60*((60*((24*($temp-$days))-$hours))-$minutes)); echo "seconds: $seconds<br/>\n<br/>\n";
$hoursOnly = $hours + ($days*24);
$minutesOnly = $minutes + ($hoursOnly*60);
$secondsOnly = $seconds + ($minutesOnly*60);
echo "Hours until new year : $hoursOnly<br/>";
echo "Minutes until new year : $minutesOnly<br/>";
echo "Seconds until new year : $secondsOnly<br/>";
echo 'Days:Hours:Minutes:Seconds '.$days.':'.sprintf("%02d",$hours).':'.sprintf("%02d",$minutes).':'.sprintf("%02d",$seconds).'.<br/>';

?> 