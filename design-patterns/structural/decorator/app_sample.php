<?php

abstract class application {

    protected $config;

    public function getConfig()
    {
        return $this->config;
    }

    public function setConfig($config)
    {
        $this->config = $config;
    }
}


class app extends application {
	
}


// The config decorator will set the value of the final app class
class configDecorator {
	
    private $_app;

    // passing the app object...
    public function __construct(application $app)
    {
        $this->_app = $app;
    }

    // Decorate the app property
    public function setConfig($config)
    {
        $this->_app->setConfig($config);
    }

}

/*** Usage ***/
$app = new app();

$configDecorator = new configDecorator($app);
$configDecorator->setConfig('this is config');

echo "<pre>".print_r($app, 1)."</pre>";
