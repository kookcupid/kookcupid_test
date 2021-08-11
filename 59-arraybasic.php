<?php

// แบบเดี่ยว
$number=[10,20,15,20,30,10,20];
//แบบคู่
$colors=["Red"=>"สีแดง","Yellow"=>"สีเหลือง","Green"=>"สีเขียว"];

// if(array_key_exists("Orange",$colors)){
//     print("พบ Yellow ใน array color");
// }else{
//     print("ไม่พบคีย์ที่ค้นหา");
// }

if(in_array("สีส้ม",$colors)){
    print("พบค่า");
 } else{
    print("ไม่พบข้อมูล");

}

?>