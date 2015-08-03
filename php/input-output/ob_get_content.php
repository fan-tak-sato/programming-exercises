<?php
ob_start();
echo "dreaming";
$ob = ob_get_contents();
echo strlen($ob);
ob_flush();

