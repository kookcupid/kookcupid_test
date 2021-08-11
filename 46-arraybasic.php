<?php

// แบบเดี่ยว

$number = [10,20,30,10,20,30,40,10,20,30,40];
$fruit =["ส้ม","มะละกอ","แอปเปิ้ล"=>"กล้วย","ขนุน"=>"น้อยหน่า","องุ่น","แตงโม"];

//print_r(array_count_values($number));

// print("จำนวนสมาชิกมีค่า = " .$total);

// แบบคู่
$colors = ["yellow"=>"สีเหลีอง","red"=>"สีแดง","orange"=>"สีส้ม"];
$animals = ["dog"=>"สุนนัข","cat"=>"แมว","pig"=>"หมู","rabbit"=>"กระต่าย"];

while($item=each($animals)){
    print("key = ".$item["key"]." Value = ".$item["value"]."<br>");
}

?>