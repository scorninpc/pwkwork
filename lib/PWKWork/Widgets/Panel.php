<?php

namespace PWKWork\Widgets;

class Panel
{
	public function parse()
	{
		$template = "<div class=\"row\">

			<div class=\"col-6 bg-danger\"> aa </div>
			<div class=\"col-6 bg-primary\"> bb </div>

		</div>";

		$html = \PWKWork\View::getInstance()->fetch("string:" . $template);

		return $html;
	}
}