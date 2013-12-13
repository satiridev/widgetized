<?php

namespace Satiri\Widgetized;

class WidgetRunner
{
	public function __construct($var)
	{
		$b = $var;
		$c = new $b();
		if ($c instanceof Widget) {
			echo $c->make();
		} else {
			echo "Widgetized : Please Implements Satiri\Widgetized\Widget";
		}
	}
}