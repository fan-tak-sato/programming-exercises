<?php

function myErrorHandler($message, $level) {
    //Get the caller of the calling function and details about it
    $callee = next(debug_backtrace());

    //Trigger appropriate error
    trigger_error($message.' in <strong>'.$callee['file'].'</strong> on line <strong>'.$callee['line'].'</strong>', $level);
}

$old_error_handler = set_error_handler("myErrorHandler", E_ALL|E_STRICT);

// trigger_error("Fatal error", E_USER_ERROR);

nonfunc();

