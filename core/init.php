<?php

final class Application
{
    protected static $_instance;

    const VAR_TITLE     = 'title';
    const VAR_CONTENT   = 'content';

    private function __construct()
    {
    }

    private function _init()
    {
        $class_name = Handler::get_handle();
        $controller = new $class_name();
        $controller->process();
        self::_render($controller);
    }

    private function __clone()
    {
    }

    public static function run() {
        if (null === self::$_instance)
        {
            self::$_instance = new self();
            self::$_instance->_init();
        }
        return self::$_instance;
    }

    private function _render($page)
    {
        $twig = View::init(Config::TEMPLATE_PATH);
        $twig->display(Config::HEADER_LINK.'.tpl');
        $twig->display($page->mode().'.tpl', ['text' => 'Twig, Twig, Twig!']);
        $twig->display(Config::FOOTER_LINK.'.tpl');
    }
}