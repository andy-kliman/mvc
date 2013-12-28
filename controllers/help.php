<?php

class Help extends Controller {
	
	function __construct() {
		parent::__construct();
		// echo 'Мы внутри help<br />'; 
	}

	function index() {
		$this->view->render('help/index');
	}

	public function other($arg = false)
	{
		// echo 'Мы внутри other<br />';
		// echo 'Опционально:' . $arg . '<br />';

		require 'models/help_model.php';
		$model = new Help_Model();
		$this->view->blah = $model->blah();
	}
}

?>