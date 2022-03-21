<?php

namespace PWKWork;

class Controller
{
	public $view;

	/**
	 * 
	 */
	public function __construct()
	{
		
	}

	/**
	 * 
	 */
	public function setView($view)
	{
		$this->view = $view;
	}
}