<?php

abstract class Controller
{

    /**
     * @var Model
     */
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    abstract public function action_index();

}
