<?php
    use Controller\Contreller as Controller;

    class ControllerMain extends Controller{
        function actionIndex(){
            $this->view->generate('mainView.php', 'templateView.php');
        }
    }
