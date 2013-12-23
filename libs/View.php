<?php

	class View {
		
		function __construct()
		{
			echo 'Это View';
		}

		public function render($name) {
			require 'views' . $name .'.php';
		}
	}

?>
