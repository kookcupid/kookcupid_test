<?php
date_default_timezone_set("Asia/Bangkok");

$result=checkdate(1,31,2021);

if($result){
    echo "รูปแบบวันถูกต้อง";
}else{
    echo "รูปแบบวันไม่ถูกต้อง";
}
?>