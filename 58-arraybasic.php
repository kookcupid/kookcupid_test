<?php

// แบบเดี่ยว
$number=[10,20,15,20,30,10,20];
//แบบคู่
$colors=["Red"=>"สีแดง","Yellow"=>"สีเหลือง","Green"=>"สีเขียว"];

$colors_keys=array_keys($colors); //ดึง key

$colors_value=array_values($colors); //ดึง value

// print_r($colors_keys);
// print("<br>");
// print_r($colors_value);

//print_r($colors);
//$result=array_flip($colors);
//print("<br>");
//print_r($result);

print_r($number);
print("<br>");
$result=array_unique($number);
print_r($result);
?>