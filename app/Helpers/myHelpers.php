<?php
// app/helpers.php

if (!function_exists('getYoutubeVideoId')) {
    function getYoutubeVideoId($url)
    {
        $videoId = '';
        
        $parsedUrl = parse_url($url);
        
        if (isset($parsedUrl['query'])) {
            parse_str($parsedUrl['query'], $queryParams);
            
            if (isset($queryParams['v'])) {
                $videoId = $queryParams['v'];
            }
        }
        
        return $videoId;
    }
}

?>
