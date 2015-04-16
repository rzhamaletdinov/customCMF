<?php

abstract class Controller
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
        $args = explode(Config::MODE_PREFIX, get_called_class());
        return end($args);
    }
}