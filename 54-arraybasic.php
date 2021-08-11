<?php

$fruies=["มะละกอ","ฝรั่ง","มะนาว","ทุเรียน"];

//array_splice("ชื่อ array","ตำแหน่ง index","จำนวนที่ต้องการลบ")
print_r($fruies);
print_r("<br>");
$newFruits = array("องุ่น","มะม่วง");
array_splice($fruies,1,0,$newFruits);
print_r($fruies);
?>