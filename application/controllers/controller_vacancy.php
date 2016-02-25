<?php

class Controller_Vacancy extends Controller
{
    function action_index()
    {
        $this->view->generate('vacancy_view.php', 'template_view.php',
            array(
                'title' => 'Наши контакты',
            )
        );
    }
}