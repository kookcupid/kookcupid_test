<?php

$pass="kook123456789";

echo "รหัส =".$pass."<br>";

$result=md5($pass);
echo "md5 =" .$result."<br>";

$result=sha1($pass);
echo "sha1 =" .$result."<br>";

$result=crypt($pass,"//dd");
echo "crypt =" .$result."<br>";

$encude=base64_encode($pass);
echo "encode =".$encude."<br>";

$result=base64_encode($pass);
echo "decode =".$result."<br>";
?>