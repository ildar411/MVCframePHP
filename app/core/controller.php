<?php
    namespace Controller;
    
    use View\View as View;

    class Controller{
        public $model;
        public $view;

        function __construct(){
            $this->view = new View();
        }

        function actionIndex(){

        }
    }