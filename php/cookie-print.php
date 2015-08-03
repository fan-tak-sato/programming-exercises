<?php
print_r($_COOKIE);
setcookie('theme', NULL, time() - 3600);
print_r($_COOKIE);
unset($_COOKIE);

print_r($_COOKIE);
