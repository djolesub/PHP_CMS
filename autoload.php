<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/6/2016
 * Time: 5:33 PM
 */
function autoload($class)
{
    $paths = explode(PATH_SEPARATOR, get_include_path());
    $flags = PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE;
    $r = str_replace('\\', DIRECTORY_SEPARATOR, trim($class, '\\'));
    $file = strtolower($r);
    $file = $file . ".php";
    foreach ($paths as $path) {
        $combined = $path . DIRECTORY_SEPARATOR . $file;

        if (file_exists($combined)) {
            include_once($combined);
            return;
        } else {
            echo "Class $class not found";
        }
    }


}


spl_autoload_register('autoload');

?>