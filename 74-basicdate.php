<?php
date_default_timezone_set("Asia/Bangkok");

echo time();
echo "<br>";

echo "วันปัจจุบัน =".date("d/m/y",time());
echo "<br>";

$days3 = time()+(60*60*24*3);
echo "3 วันข้างหน้าคือ =".date("d/m/y",$days3);
echo "<br>";

$week = time()+(60*60*24*7);
echo "สัปดาห์ข้างหน้าคือ =".date("d/m/y",$week);
?>