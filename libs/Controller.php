<?php

	class Controller {
		
		function __construct() {
			echo 'Главный контроллер<br />';
			$this->view = new View();
		}
	}
?>