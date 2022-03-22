<?php

namespace PWKWork\Widgets;

class Panel
{
	public function parse()
	{
		$template = <<<'EOD'
			<div class="row">
				<div class="col-6 bg-danger"> aa </div>
				<div class="col-6 bg-primary"> bb </div>
			</div>
EOD;

		$html = \PWKWork\View::getInstance()->fetch("string:" . $template);

		return $html;
	}
}