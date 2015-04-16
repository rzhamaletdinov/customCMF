<?php

class Load
{
    static function mode($class_name)
    {
        $args = explode(Config::MODE_PREFIX, $class_name);
        $mode = end($args);
        $url = __DIR__.'/../'.Config::MODE_DIR.'/'.$mode.'.php';
        if (is_readable($url))
            require_once($url);
    }
}
spl_autoload_register('Load::mode');