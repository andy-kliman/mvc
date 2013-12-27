<?php

	class View {
		
		function __construct()
		{
			echo 'Это ВИД<br />';
		}

		public function render($name) {
			require 'views' . $name .'.php';
		}
	}

?>
