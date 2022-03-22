<?php

namespace PWKWork\Widgets;

class Window
{
	protected $child;

	public function setChild($widget)
	{
		$this->child = $widget;
	}

	public function parse()
	{
		$child = $this->child->parse();

		$template = "<div class=\"pwk_window\">{$child}</div>";

		$html = \PWKWork\View::getInstance()->fetch("string:" . $template);

		return $html;
	}
}