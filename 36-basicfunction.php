<?php 

// แบบที่ 3
function getAddress(){
    $x="ชลบุรี";
    return $x;
}

function getBonus(){
    $bonus = 100;
    //ประมวลผล
    return $bonus;
}

//เรียกใช้งาน
print("จำนวนโบนัส = ".getBonus());
print("<br");
$salary = 10000+getBonus();

print("เงินเดือนรวมโบนัส = ".$salary);

?>