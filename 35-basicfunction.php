<?php 

// การสร้าง function
function show($messeage){//พารามิเตอร์
    print("<b>Hello ".$messeage."</b>");
    print("<br>");
    print("<hr>");
}
function add($number1,$number2,$number3){
    $result= $number1+$number2+$number3;
    print($number1."+".$number2."+".$number3."=".$result);
    print("<br>");
    print("<br>");
}

// เรียกฟังก์ชั่น
add(100,200,300);
add(1000,5000,200);

?>