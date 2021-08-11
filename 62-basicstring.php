<?php

// PHP => Php strcmp
// Strcasecmp PHP>php

$str1="natthapon";
$str2="nattHapon";

// $result=strcmp($str1,$str2); //ไม่คิด case พิมพ์

// if($result!=0){
//     echo "ข้อความมีค่าไม่เท่ากัน";
// }else{
//     echo "ข้อความมีค่าเท่ากัน";
// }

$total = strspn($str1,$str2);
echo "จำนวนที่พบ = ".$total;

echo "<hr>";

$total = strcspn($str1,$str2);
echo "จำนวนที่ไม่พบ = ".$total;

?>