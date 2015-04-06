<?php

final class Application
{
    protected static $_instance;

    const VAR_TITLE     = 'title';
    const VAR_CONTENT   = 'content';

    private function __construct()
    {
        $class_name = self::_get_class();
        $page = new $class_name();
        $page->process();
        self::_render($page);
    }

    private function __clone()
    {
    }

    public static function run() {
        if (null === self::$_instance)
            self::$_instance = new self();
        return self::$_instance;
    }

    private function _get_class()
    {
        $mode = trim($_SERVER['REQUEST_URI'], "/");
        $mode = current(explode("?", $mode));
        if(!$mode)
            $mode = config::MODE_INDEX_PAGE;
        if(!class_exists(config::MODE_PREFIX . $mode))
            $mode = config::MODE_404_PAGE;
        return config::MODE_PREFIX . $mode;
    }

    private function _render($page)
    {
        $view = new View(config::TEMPLATE_PATH);
        $view->set(self::VAR_TITLE, $page->get_title());
        $view->set(self::VAR_CONTENT, $page->get_content());

        $view->display(config::HEADER_LINK);
        $view->display($page->mode());
        $view->display(config::FOOTER_LINK);
    }
}


abstract class base_mode
{
    private  $_title;
    private  $_content;

    abstract function process();

    function get_title()
    {
        return $this->_title;
    }

    function set_title($title)
    {
        $this->_title = $title;
    }

    function get_content()
    {
        return $this->_content;
    }

    function set_content($content)
    {
        $this->_content = $content;
    }
    
    function mode()
    {
    	$args = explode(config::MODE_PREFIX, get_called_class());
    	return end($args);
    }
}