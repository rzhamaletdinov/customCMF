<?php

class View
{
    private static $_path;
    private static $_layout;
    private static $_template;
    private static $_theme;
    private static $_loader;
    private static $_var = [];
    private static $_instance;

    private function __construct($path = '')
    {
        self::$_path        = $path;
        self::$_loader      = new Twig_Loader_Filesystem(__DIR__.'/..'.$path);
        self::$_instance    = new Twig_Environment(self::$_loader);
    }

    public static function init($path)
    {
        if (null === self::$_instance)
            new self($path);
        return self::$_instance;
    }

    public static function get_loader()
    {
        if (null === self::$_instance)
            return;
        if (null === self::$_loader)
            return;
        return self::$_loader;
    }

    public static function set_loader($path = '')
    {
        if (null === self::$_instance)
            return;
        if (null === self::$_loader)
            return;
        self::$_path        = $path;
        self::$_loader      = new Twig_Loader_Filesystem(__DIR__.'/..'.$path);
        return self::$_loader;
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