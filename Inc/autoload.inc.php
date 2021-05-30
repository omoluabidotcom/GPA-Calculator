<?php

// Below a function is called inside a built in function
spl_autoload_register('autoloader');

// Below a function that autoload files and folder into a specific file it's included
function autoloader($className) {

    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url, 'Classes') !== false) {

        $path = '../Inc/';
     } else {

        $path = 'Inc/';
    }

    $ext = ".class.php";

    $fullpath = $path . $className . $ext;

    include $fullpath;
}

?>