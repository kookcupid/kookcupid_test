<?php

//$txt ="natthapon"; // char = [k,o,o,k]//char[0]

// echo $txt."<br>";
// echo substr($txt,3)."<br>"; //จุดเริ่มต้น
// echo substr($txt,3,4);  //ตัดที่3 และนับไปอีก 3 ตัว

$txt ="natthapon"; 

$arr=str_split($txt,4);
print_r($arr);

?>