<?php

$fruies=["มะละกอ","ฝรั่ง","มะนาว","ทุเรียน"];
print_r($fruies);

//array_push($fruies,"มะม่วง");
//array_push($fruies,"มังคุด");

print("<br>");
array_unshift($fruies,"มังคุด");
array_unshift($fruies,"เงาะ");
print_r($fruies);
print("<br>");
array_shift($fruies);
print_r($fruies);
?>