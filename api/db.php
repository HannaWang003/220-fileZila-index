<?php
date_default_timezone_set('Asia/Taipei');
session_start();

function dd($ary)
{
    echo "<pre>";
    print_r($ary);
    echo "</pre>";
}
function to($url)
{
    header("location:$url");
}
Class DB{
    
}
?>