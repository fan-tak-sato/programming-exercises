<?php

class Model
{
    public $string;
 
    public function __construct()
	{
        $this->string = "MVC + PHP = Awesome, click here!";
    }
 
}

class Controller
{
    private $model;
 
    public function __construct($model)
	{
        $this->model = $model;
    }
}


class View
{
    private $model;
	
    private $controller;
 
    public function __construct($controller, $model)
	{
        $this->controller = $controller;
        $this->model = $model;
    }
    
    public function output()
	{
		return "<p>". $this->model->string ."</p>";
    }
}

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action']))
{
    $controller->{$_GET['action']}();
}

echo $view->output();

/*
$page = $_GET['page'];
if (!empty($page)) {

    $data = array(
        'about' => array('model' => 'AboutModel', 'view' => 'AboutView', 'controller' => 'AboutController'),
        'portfolio' => array('model' => 'PortfolioModel', 'view' => 'PortfolioView', 'controller' => 'PortfolioController')
    );
 
    foreach($data as $key => $components){
        if ($page == $key) {
            $model = $components['model'];
            $view = $components['view'];
            $controller = $components['controller'];
            break;
        }
    }
 
    if (isset($model)) {
        $m = new $model();
        $c = new $controller($model);
        $v = new $view($model);
        echo $v->output();
    }
}
*/
