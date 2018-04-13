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
		$id=$this->uri->rsegment(3);
		$product=$this->Product_model->get_info($id);
		$product=$this->Product_model->get_list($input);
		if(!$product)
		{
			redirect();
		}
		$this->data['product']=$product;




        $id=$this->uri->rsegment(3);
        		$input['limit']=array(20,6);
		$product_all=$this->Product_model->get_info($id);
		$product_all=$this->Product_model->get_list($input);
		if(!$product_all)
		{
			redirect();
		}
		$this->data['product_all']=$product_all;


		$message=$this->session->flashdata('message');
		$this->data['message']=$message;



		
		
		$this->data['temp']='site/home/index';
		$this->load->view('site/layout',$this->data);
		
	}
}
?>
