<?php

namespace App\Controllers;

class formMain extends \PWKWork\Controller
{
	public function onload()
	{
		$window = new \PWKWork\Widgets\Window();

		$vbox = new \PWKWork\Widgets\VBox();
		$vbox->addChild(new \PWKWork\Widgets\Label("Label 1"));
		$vbox->addChild(new \PWKWork\Widgets\Panel());

		$window->setChild($vbox);




		$this->view->window = $window->parse();
	}
}