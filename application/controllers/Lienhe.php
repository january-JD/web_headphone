<?php 
/**
* 
*/
class Lienhe extends MY_controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		
    $this->data['temp']='site/lienhe/index';
    $this->load->view('site/layout', $this->data);
	}
}

?>