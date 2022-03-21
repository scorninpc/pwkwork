<?php

namespace PWKWork;

class Application
{
	/**
	 * 
	 */
	public function __construct($defaultController=NULL, $defaultAction=NULL)
	{
		// Da o parse da URI, e caso não tiver, seta o default
		$uri = explode("/", substr($_SERVER['REQUEST_URI'], 1));

		// Seta o controlador padrão
		if((!isset($uri[0])) || (strlen($uri[0]) == 0)) {
			$uri[0] = $defaultController;
		}

		// Seta o action padrão
		if((!isset($uri[1])) || (strlen($uri[1]) == 0)) {
			$uri[1] = $defaultAction;
		}

		// Cria o nome do controller
		$controllerName = "\\App\\Controllers\\" . $uri[0];
		if(!class_exists($controllerName)) {
			throw new \Exception("Controlador " . $controllerName . " not found");
		}
		$controller = new $controllerName;

		// Inicia o view
		$view = \PWKWork\View::getInstance();
		$controller->setView($view);

		// Chama o action
		$methodName = $uri[1];
		if(!method_exists($controller, $methodName)) {
			throw new \Exception("Method " . $methodName . " not found on controller " . $controllerName);
		}
		$controller->$methodName();

		// Seta o template
		$templateFile = APPLICATION_PATH . "/Views/" . $uri[0] . ".tpl";
		if(!file_exists($templateFile)) {
			throw new \Exception("Template file " . $templateFile . " not found");
		}
		$view->setTemplateFile($templateFile);

		// Renderiza
		$html = $view->render();

		die($html);
	}
}