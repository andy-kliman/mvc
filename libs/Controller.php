<?php

	class Controller {
		
		function __construct() {
			echo 'Главный КОНТРОЛЛЕР<br />';
			$this->view = new View();
		}
	}
?>