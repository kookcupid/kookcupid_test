<?php 

// รับเงินเดือนเข้ามา
// ส่งผลการคำนวณรายได้ภาษี 


function getTotal($salary,$count){
    //คำนวณเงินเดือน * จำนวนเดือนที่ทำงาน
    return $salary*$count;
}

$amount = 30000;//เงินเดือน
$month = 20;
print("เงินเดือนของฉัน =" .$amount." บาท");
print("<br>");
print("ระยะเวลา = ".$month."เดือน");
print("<br>");
$total=getTotal($amount,$month);
print("รายได้ = ".$total."บาท");

?>