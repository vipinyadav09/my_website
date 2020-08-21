<?php
/*echo date("h:i:s") . "<br>";
echo date("F d, Y h:i:s A") . "<br>";
echo date("h:i a"). "<br>";*/
//$timestamp = time();
//echo($timestamp)."<br>"
//$timestamp=1394003958;
//echo(date("F d, Y h:i:s", $timestamp))."<br>"
//echo mktime()."<br>";
echo mktime(15, 20, 12, 5, 10, 2020)."<br>";
$futureDate = mktime(0, 0, 0, date("m")+3, date("d")+6, date("Y")+2);
echo date("d/m/Y", $futureDate);


?>
