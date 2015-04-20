<?php

class View
{
    private $_path;
    private $_template;
    private $_load;
    private $_var = array();
    private static $_instance;

    private function __construct($path = '')
    {
        $this->_path = $path;
        $this->_load = new Twig_Loader_Filesystem(__DIR__.'/..'.$path);
        self::$_instance = new Twig_Environment($this->_load);
    }

    public static function init($path)
    {
        if (null === self::$_instance)
            new self($path);
        return self::$_instance;
    }
//    public function set($name, $value)
//    {
//        $this->_var[$name] = $value;
//    }
//
//    public function __get($name)
//    {
//        if (isset($this->_var[$name])) return $this->_var[$name];
//        return '';
//    }
}