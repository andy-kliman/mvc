<?php

class Help extends Controller {
	
	function __construct() {
		parent::__construct();
		$this->view->render('help/index');
		// echo 'Мы внутри help<br />'; 
	}

	public function other($arg = false)
	{
		echo 'Мы внутри other<br />';
		echo 'Опционально:' . $arg . '<br />';

		require 'models/help_model.php';
		$model = new Help_Model();
	}
}

?>