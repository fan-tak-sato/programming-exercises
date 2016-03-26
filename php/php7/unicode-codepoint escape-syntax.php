<?php

// This takes a Unicode codepoint in hexadecimal form, and outputs that codepoint in UTF-8 to a double-quoted string or a heredoc. Any valid codepoint is accepted, with leading 0's being optional.

echo "\u{aa}";
echo "\u{0000aa}";
echo "\u{9999}";
