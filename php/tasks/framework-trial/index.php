<?php

if (version_compare(PHP_VERSION, '5.4.0')<0) {
    if (get_magic_quotes_gpc()) {
        function no_slashes(&$v) {
            if (!is_array($v))
                return stripslashes($v);
            foreach ($v as $k=>$x)
                $v[$k] = no_slashes($x);
            return $v;
        }
        no_slashes($_GET);
        no_slashes($_POST);
        no_slashes($_COOKIE);
    }
}

define('IS_DEBUG', false);

ob_start();

require_once(__DIR__.'/db/db.php');
require_once(__DIR__.'/models/base.php');
require_once(__DIR__.'/controllers/base.php');
require_once(__DIR__.'/views/base.php');

echo ControllerBase::exec();

ob_end_flush();

