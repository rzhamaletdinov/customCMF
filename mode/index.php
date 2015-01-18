<?php
class mode_index extends baseMode
{
    function process()
    {
        $this->setTitle('Главная');
        $this->setContent('Текст на главной');
    }
}