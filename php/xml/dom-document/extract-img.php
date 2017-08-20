<?php

$texthtml = 'Who is Sara Bareilles on Sing Off<br>
<img alt="Sara" title="Sara" src="475993565.jpg"/><br>
<img alt="Sara" title="Sara two" src="475993434343434.jpg"/><br>';

preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $texthtml, $image);

echo $image['src'];
