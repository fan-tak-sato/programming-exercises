<?php

passthru("/bin/funnytext " . $_GET['USER_INPUT']);

// Reference http://php.net/manual/en/function.passthru.php

/**
 * To avoid shell injections we must use:
 *
 * escapeshellarg to escape a string to be used as a shell argument
 * escapeshellcmd to escape shell metacharacters
 *
 */

