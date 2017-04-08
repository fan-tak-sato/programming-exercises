<?php

$baseUrl = 'https://www.googleapis.com/youtube/v3/';

// https://developers.google.com/youtube/v3/getting-started

$apiKey = 'APIKEY';
$channelId = 'CHANNELID';
 
$params = [
    'id'=> $channelId,
    'part'=> 'contentDetails',
    'key'=> $apiKey
];
$url = $baseUrl . 'channels?' . http_build_query($params);
$json = json_decode(file_get_contents($url), true);
 
$playlist = $json['items'][0]['contentDetails']['relatedPlaylists']['uploads'];
 
$params = [
    'part'=> 'snippet',
    'playlistId' => $playlist,
    'maxResults'=> '50',
    'key'=> $apiKey
];
$url = $baseUrl . 'playlistItems?' . http_build_query($params);
$json = json_decode(file_get_contents($url), true);
 
$videos = [];
foreach($json['items'] as $video)
    $videos[] = $video['snippet']['resourceId']['videoId'];
 
while(isset($json['nextPageToken'])){
    $nextUrl = $url . '&pageToken=' . $json['nextPageToken'];
    $json = json_decode(file_get_contents($nextUrl), true);
    foreach($json['items'] as $video)
        $videos[] = $video['snippet']['resourceId']['videoId'];
}
return $videos;