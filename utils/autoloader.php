<?php
spl_autoload_register(function($class){
    $classPath = __DIR__ ."/../languages/{$class}.php";
    if(!file_exists($classPath)){
    $classPath = __DIR__ ."/../config/{$class}.php";
    }

    if(!file_exists($classPath)){
        $classPath = __DIR__ ."/../utils/{$class}.php";
        }
    require $classPath;
});
// init the COnfig file 
Config::init();