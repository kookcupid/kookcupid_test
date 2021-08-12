<?php

// $arr=array("Hello","World","I","Love","PHP");
// $str=implode("-",$arr); // รวม string โดยแยกข้อความด้วย -
// echo $str;

$str ="natthapon:20:bangkok"; // string => array

$arr=explode(":",$str);
echo "อายุ =".$arr[1]."<br>";
echo "ที่อยู่ =".$arr[2]."<br>";

?>