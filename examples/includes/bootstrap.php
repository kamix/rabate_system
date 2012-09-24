<?php
set_include_path(realpath(dirname(__FILE__).'/../../src/')  . PATH_SEPARATOR . get_include_path() );

function __autoload($classname) {
    $class = str_replace('\\','/',$classname);
    include_once($class . '.php');
}
