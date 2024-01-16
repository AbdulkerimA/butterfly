<?php

spl_autoload_register('load');

function load ($obj){
    $path = "./classes/";
    $ext = ".class.php";
    $file = $path.$obj.$ext;

    if (!file_exists($file)){
        return false;
    }

    include_once $file;
}