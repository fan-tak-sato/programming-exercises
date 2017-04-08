<?php
error_reporting(E_ALL);

$id = NULL;
$channel_id = '<YOUR-CHANNEL-ID>';

$xml = simplexml_load_file(sprintf('https://www.youtube.com/feeds/videos.xml?channel_id=%s', $channel_id));

// var_dump( $xml ); // all videos feed XML

// get the ID of the LAST video
if (!empty($xml->entry[0]->children('yt', true)->videoId[0])){
    $id = $xml->entry[0]->children('yt', true)->videoId[0];
}

echo $id; // Outputs the video ID.