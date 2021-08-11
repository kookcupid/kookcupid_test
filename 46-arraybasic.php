<?php

// แบบเดี่ยว
$number = [10,20,30,10,20,30,40,10,20,30,40];
$fruits =["ส้ม","มะละกอ","แอปเปิ้ล","กล้วย","ขนุน","น้อยหน่า","กล้วย","องุ่น","แตงโม"];

// foreach($fruits as $fruit){
//     print($fruit."<br>");
// }

// แบบคู่
$colors = ["yellow"=>"สีเหลีอง","red"=>"สีแดง","orange"=>"สีส้ม"];
$animals = ["dog"=>"สุนัข","cat"=>"แมว","pig"=>"หมู","rabbit"=>"กระต่าย"];

foreach($animals as $key=>$value){
    print($key."=>".$value."<br>");
}
?>