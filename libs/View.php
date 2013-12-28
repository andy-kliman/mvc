<?php

	class View {
		
		function __construct(){
			// echo 'Это ВИД<br />';
		}
		// Метод, собирающий header.php и footer.php в одну страницу
		public function render($name, $noInclude = false) {
			if ($noInclude == true) {
				require 'views/'.$name.'.php';
			}
			else {
				require 'views/header.php';
				require 'views/' . $name .'.php';
				require 'views/footer.php';
			}
		}
	}

?>
