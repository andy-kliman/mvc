<?php

	class View {
		
		function __construct()
		{
			echo 'Это View';
		}

		publiс function render($name) {
			require 'views' . $name .'.php';
		}
	}

?>
