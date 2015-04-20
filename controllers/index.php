<?php

class mode_index extends Controller
{
    function process()
    {
        $this->set_title('Главная');
        $this->set_content('Текст на главной');

//        $load = new Twig_Loader_Filesystem(__DIR__.'/../templates/');
//        $twig = new Twig_Environment($load);
//        $twig->display('twig_test.tpl', ['text' => 'Twig, Twig, Twig!']);
    }
}