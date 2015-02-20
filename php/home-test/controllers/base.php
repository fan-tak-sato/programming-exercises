<?php

/**
 * Class ControllerBase
 */
class ControllerBase {

	protected $view;

	/**
	 * costruttore
	 *
	 * @param object $view oggetto relativo alla view usare nella
	 *                     creazione dell'html da inviare all'utente
	 **/
	public function __construct(&$view) {
		$this->view = &$view;
	}

	/**
	 * metodo che analizza l'url, identifica quale controller chiamare
	 * ed esegue la chiamata dopo aver istanziato l'oggetto.
	 * gli url saranno del tipo http://....../<controller>/<azione>
	 * esempio: 
	 *    url: http://......../test/dummy
	 * 	  controller: test
	 * 	  azione: dummy
	 **/
	static public function exec() {
		$controller = 'index';
		$azione 	= 'index';

	 	if(isset($_SERVER['PATH_INFO'])) {
			$pathInfo = explode("/", $_SERVER['PATH_INFO']);

			if (!empty($pathInfo[1]) and !empty($pathInfo[2])) {
				$controller = $pathInfo[1];
				$azione 	= $pathInfo[2];
			}
		}

		require_once(__DIR__.'/'.strtolower($controller).'.php');

		$class_controller = 'Controller'.ucfirst(strtolower($controller));
		$view       	  = new ViewBase(strtolower($controller).'/'.$azione);
		$obj = new $class_controller($view);
		return $obj->$azione();
	}

	/**
	 * @return string
	 */
	protected function getCurrentUrl() {
		return "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	}

	/**
	 * @return string
	 */
	protected function getIndexPath() {
		if (isset($_SERVER['PATH_INFO'])) {
			$path = str_replace($_SERVER['PATH_INFO'], "", $this->getCurrentUrl());
		} else {
			$path = $this->getCurrentUrl();
		}

		if (!preg_match("/\index.php$/", $path)) {
			$path .= "index.php";
		}

		return $path;
	}
}
