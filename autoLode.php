<?php
include "App/iran.php";

spl_autoload_register(function ($class){
    $classFile = __DIR__ . '/' . $class . '.php';
        if(!file_exists($classFile) AND is_readable($classFile))
            die("$class not found");
        include $classFile; 
});

