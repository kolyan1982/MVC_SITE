<?php

class Controller_Contact extends Controller
{
    function action_index()
    {
        $this->view->generate('contact_view.php', 'template_view.php',
            array(
                'title' => 'Наши контакты',
            )
        );
    }
}