<?php
class Home extends MY_controller
{
	function index()
	{
		$this->load->model('Slide_model');
		$slide_list=$this->Slide_model->get_list();		
		$this->data['slide_list']=$slide_list;
		//lay sanh sach sp moi 

		$this->load->model('Product_model');
		$input=array();
		$input['limit']=array(5,5);
		$product_new=$this->Product_model->get_list($input);
		$this->data['product_new']=$product_new;

		$input['limit']=array(8,6);
		$product_good=$this->Product_model->get_list($input);
		$this->data['product_good']=$product_good;


	    $message=$this->session->flashdata('message');
		$this->data['message']=$message;

	

		
		
		$this->data['temp']='site/home/index';
		$this->load->view('site/layout',$this->data);
		
	}
}
?>