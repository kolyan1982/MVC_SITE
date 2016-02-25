<?php

class Controller_Company extends Controller
{
    function action_index()
    {
        $this->view->generate('company_view.php', 'template_view.php',
            array(
                'title' => 'Наши контакты',
            )
        );
    }
}