<?php

 class ControllerDatabase
{
    private $model;
    private $view;

    public function __construct($model,$view)
    {
        $this->model=$model;
        $this->view=$view;
    }
    public function updateView()
    {
        $this->view->display();
    }
}

















?>