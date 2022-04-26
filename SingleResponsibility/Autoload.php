<?php

spl_autoload_register('Autoloader');


function Autoloader($classes){
    
    $extention = ".php";
    $full_path = $classes . $extention;

    if (!file_exists($full_path)) {
      return false;
    }

    require $full_path;

}
