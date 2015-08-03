<?php
if(strcmp("hi", "HI")) echo "hello";
elseif(strcasecmp("hi","HI")) echo "world";
else throw new Exception("HI");
