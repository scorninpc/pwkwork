<?php

namespace App\Controllers;

class formMain extends \PWKWork\Controller
{
	public function onload()
	{
		$window = new \PWKWork\Widgets\Window();

		$panel = new \PWKWork\Widgets\Panel();

		$window->setChild($panel);




		$this->view->window = $window->parse();
	}
}