<?php
ob_start();
echo "dreaming";
$ob = ob_get_contents();
echo strlen($ob);
ob_flush();

// Output: dreaming8

// We turn on output buffering, put "dreaming" into it, then grab the contents of the output buffer – but we haven't destroyed it. So when we echo strlen("dreaming"), an 8 goes into the output buffer as well, and then we flush it.

