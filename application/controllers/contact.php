<?php 
class contact extends MY_controller
{
	
	function __construct()
	{
		parent::__construct();
		
			
		
	}
    function index()
    {
    	 $this->data['temp']='site/contact/contact';
        $this->load->view('site/layout', $this->data);
    }
}

?>