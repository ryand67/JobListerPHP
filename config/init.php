<?php
//Config File
require_once 'config.php';

//Autoloader
function myAutoload($class_name){
    require_once 'lib/' . $class_name . '.php';
}

spl_autoload_register('myAutoload');

?>