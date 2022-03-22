<?php

namespace PWKWork\Widgets;

class VBox
{
	protected $childs = [];
	
	public function addChild($widget)
	{
		$this->childs[] = $widget;
	}

	public function parse()
	{
		$smarty = new \PWKWork\View();

		$template = "<div class=\"container-fluid p-0\">";
		foreach($this->childs as $index => $child) {
			$childName = "child".$index;

			$template .= "
				<div class=\"row\">
					<div class=\"col-12\">{\$" . $childName . "}</div>
				</div>
			";

			$smarty->$childName = $child->parse();
		}
		$template .= "</div>";


		$smarty->setTemplateFile("string: " . $template);
		$html = $smarty->render();

		return $html;
	}
}