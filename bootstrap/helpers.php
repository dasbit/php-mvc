<?php

if(!function_exists('dd'))
{
    function dd(...$vars)
    {
        foreach ($vars as $var){
            echo '<pre>';
            var_dump($var);
            echo '</pre>';
        }
        die;
    }
}

if(!function_exists('app_url'))
{
    function app_url($uri = '')
    {
        return env('APP_URL') . '/'. $uri;
    }
}