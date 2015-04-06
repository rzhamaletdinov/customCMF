<?php

class mode_index extends base_mode
{
    function process()
    {
        $this->set_title('Главная');
        $this->set_content('Текст на главной');
    }
}