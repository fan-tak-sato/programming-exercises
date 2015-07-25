<?php
header ('Cache-Control: must-revalidate, post-check=0, pre-check=0'); 
header ('Content-Type: application/octet-stream');
// header ('Content-Type: text/plain');
header ("Content-Disposition: attachment; filename=\"txtfile.txt\"");

echo "My Text\r\n";
echo "\r\n";
echo "My Text\r\n";
echo "\r\n";
echo "My Text\r\n";