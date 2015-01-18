<?php

final class Application
{
    protected static $_instance;
    protected static $_mode;

    const VAR_TITLE     = 'title';
    const VAR_CONTENT   = 'content';

    private function __construct()
    {
        config::checkRequirements();
        self::_getMode();
        $className = config::MODE_PREFIX.self::$_mode;
        $page = new $className(self::$_mode);
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

    private function _getMode()
    {
        $mode = trim($_SERVER['REQUEST_URI'], "/");
        $mode = current(explode("?", $mode));
        if(!$mode)
            $mode = config::MODE_INDEX_PAGE;
        if(!class_exists(config::MODE_PREFIX.$mode))
            $mode = config::MODE_404_PAGE;
        self::$_mode = $mode;
    }

    private function _render($data)
    {
        $mode       = $data->getMode();
        $title      = $data->getTitle();
        $content    = $data->getContent();

        $view = new View(config::TEMPLATE_PATH);

        $view->set(self::VAR_TITLE, $title);
        $view->set(self::VAR_CONTENT, $content);

        $view->display(config::HEADER_LINK);
        $view->display($mode);
        $view->display(config::FOOTER_LINK);
    }
}


abstract class baseMode
{
    private  $_mode;
    private  $_title;
    private  $_content;

    function __construct($mode)
    {
        $this->_mode = $mode;
    }

    abstract function process();

    function getMode()
    {
        return $this->_mode;
    }

    function getTitle()
    {
        return $this->_title;
    }

    function setTitle($title)
    {
        return $this->_title = $title;
    }

    function getContent()
    {
        return $this->_content;
    }

    function setContent($content)
    {
        return $this->_content = $content;
    }
}