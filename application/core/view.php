<?php

class View
{
    //public $template_view; // здесь можно указать общий вид по умолчанию.
    /**
     * @param $content_view - виды отображающие контент страниц;
     * @param $template_view - общий для всех страниц шаблон;
     * @param null $data -  массив, содержащий элементы контента страницы. Обычно заполняется в модели.
     */
    function generate($content_view, $template_view, $data = null)
    {

        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }


        include 'application/views/' . $template_view;
    }
}
