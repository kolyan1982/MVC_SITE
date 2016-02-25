<?php

class Controller_Shipowners extends Controller
{
    function action_index()
    {
        $this->view->generate('shipowners_view.php', 'template_view.php',
            array(
                'title' => 'Наши контакты',
            )
        );
    }
}