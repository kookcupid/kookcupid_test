<?php 

// ชื่อ นามสกุล ที่อยู่

function showData($fname,$lname,$city="กรุงเทพมหานคร"){
    print("ชื่อ = ".$fname."<br>");
    print("ชื่อ = ".$lname."<br>");
    print("ที่อยู่ = ".$city."<br>");
    print("<hr>");
}
// การเรียกใช้งาน

ShowData("ก้อง","รักสยาม","นนทบุรี");
ShowData("โจโจ้","ใจดี","น่าน");

ShowData("สมหมาย","ใจกล้า");
ShowData("สมปอง","ใจดี");
?>