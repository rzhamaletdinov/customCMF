<?php

final class Application
{
    protected static $_instance;

    const VAR_TITLE     = 'title';
    const VAR_CONTENT   = 'content';

    private function __construct()
    {
        $class_name = Handler::get_class();
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

    private function _render($page)
    {
        $view = new View(Config::TEMPLATE_PATH);
        $view->set(self::VAR_TITLE, $page->get_title());
        $view->set(self::VAR_CONTENT, $page->get_content());

        $view->display(Config::HEADER_LINK);
        $view->display($page->mode());
        $view->display(Config::FOOTER_LINK);
    }
}