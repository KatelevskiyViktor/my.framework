<?php
function debug($data, $die = false)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
    if($die) {
        die;
    }
}

function hsch($str){
    return htmlspecialchars($str);
}