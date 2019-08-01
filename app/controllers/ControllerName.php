<?php
    use Contoller\Contoller as Controller;
    use Model\Model as Model;
    use View\View as View;

    class ControllerName extends Controller{
        
        function __construct(){
            $this->model = new ModelName();
            $this->view = new View();
        }

        function actionIndex(){
            
            $data = $this->model->getData();
            $this->view->generate('viewName.php', 'templateView.php', $data);

        }

    }