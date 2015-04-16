<?php

class mode_index extends Controller
{
    function process()
    {
        $this->set_title('Главная');
        $this->set_content('Текст на главной');
    }
}