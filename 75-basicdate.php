<?php
date_default_timezone_set("Asia/Bangkok");

$date_time=getdate();
echo "วันที่ =".$date_time["mday"]."<br>";
echo "เดือน =".$date_time["month"]."<br>";
echo "ปี =".$date_time["year"]."<br>";

echo $date_time["mday"],"/",$date_time["month"],"/",$date_time["year"]."<br>";

echo "ชั่วโมง = ".$date_time["hours"]."<br>";
echo "นาที = ".$date_time["hours"]."<br>";
echo "วินาที = ".$date_time["hours"]."<br>";

echo $date_time["hours"],":",$date_time["minutes"],":",$date_time["seconds"];


?>