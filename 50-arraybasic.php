<?php

// แบบ 2มิติ

$products = array(
    array("คีบอร์ด","Keyboard",900),
    array("เมาส์","Mouse",1900),
    array("โต๊ะ","Table",2500),
    array("จอ","Monitor",12000),
);

// การเข้าถึง => แถว , คอลัมน์
for($row=0;$row<count($products);$row++){
    print("ชิ้นที่ = ".$row."<br>");
    for($column=0;$column<count($products[$row]);$column++){
        print($products[$row][$column]."<br>");
    }

    print("<hr>");
}

?>