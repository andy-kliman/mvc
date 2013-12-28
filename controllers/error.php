<?php 
	
	class Error extends Controller {
		
		function __construct() {
			parent::__construct();
		}

		function index() {
			$this->view->msg = 'Эта страница не существует';
			$this->view->render('error/index');
		}

?>