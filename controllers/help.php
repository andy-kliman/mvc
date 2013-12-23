<?php

class Help extends Controller {
	
	function __construct()
	{
		parent::__construct();
		echo 'Мы внутри help<br />'; 
	}

	public function other($arg = false)
	{
		echo 'Мы внутри other<br />';
		echo 'Опционально:' . $arg . '<br />';
	}
}

?>