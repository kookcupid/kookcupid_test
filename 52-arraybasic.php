<?php

// แบบ 2มิติ

$products = array(
    array("TH"=>"คีบอร์ด","EN"=>"Keyboard","Price"=>900),
    array("TH"=>"เมาส์","EN"=>"Mouse","Price"=>1900),
    array("TH"=>"โต๊ะ","EN"=>"Table","Price"=>2500),
    array("TH"=>"จอ","EN"=>"Monitor","Price"=>12000),
);

foreach($products as $product){
    print("ชื่อสินค้า (TH) = ".$product["TH"]."<br>");
    print("ชื่อสินค้า (EN) = ".$product["EN"]."<br>");
    print("ราคา = ".$product["Price"]."บาท <br>");
    print("<hr>");
}

?>