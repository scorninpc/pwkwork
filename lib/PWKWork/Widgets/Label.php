<?php

namespace PWKWork\Widgets;

class Label
{
	protected $label;

	public function __construct($label="")
	{
		$this->label = $label;
	}

	public function parse()
	{
		return "<div class=\"bg-danger\">" . $this->label . "</div>";
	}
}