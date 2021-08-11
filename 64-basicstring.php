<?php


$str1="   natthapon   ";
$str2="nattHapon";


echo $str1;
echo "<br>";
$count = strlen($str1); //ความยาวของข้อความใน str1
echo "ความยาวข้อความ =".$count;
echo "<hr>";

//after
echo $str1;
echo "<br>";
$result = trim($str1); // ตัดซ้าย-ขวา
echo "ความยาวข้อความ =".strlen($result);
echo "<hr>";

//left
echo $str1;
echo "<br>";
$result = ltrim($str1); // ตัดซ้าย
echo "ความยาวข้อความ =".strlen($result);
echo "<hr>";

//right
echo $str1;
echo "<br>";
$result = rtrim($str1); // ตัดขวา
echo "ความยาวข้อความ =".strlen($result);
echo "<hr>";


?>