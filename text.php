<?php

function numOfWord($text) {
    return array_count_values(array_filter(mb_split("[[:punct:]]|\s*", mb_strtoupper($text))));
}

function countOfWord($text) {
    return count(array_filter(mb_split("[[:punct:]]|\s*", mb_strtoupper($text))));
}

function create_data (){
    $date = date_create_from_format('U.u', microtime(true));
    return date_format($date, 'Y-m-d H:i:s.u');
}
