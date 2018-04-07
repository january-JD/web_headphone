<?php
class cart extends MY_controller
{
	function __construct()
	{
		parent::__construct();
		
	}
	function add()
	{
		$this->load->model('Product_model');
		$id=$this->uri->rsegment(3);
		$product=$this->Product_model->get_info($id);
		if(!$product)
		{
			redirect();
		}
		$qty=1;
		$price=$product->price;
		if($product->discount>0)
		{
			$price=$product->price - $product->discount;
		}
		$data=array();
		$data['id']=$product->id;
		$data['qty']=$qty;
		$data['name']=url_title($product->name);
		$data['image']=$product->image;
		$data['price']=$price;
		$this->cart->insert($data);

		//chuyenn trang danh sach san pham trong gion hang
		redirect(base_url('cart')); 

	}
	//hien thi danh sach san pham trong gio hang
	function index()
	{
		$carts=$this->cart->contents();
		$total_items=$this->cart->total_items();
		$this->data['carts']=$carts;
		$this->data['total_items']=$total_items;

		$this->data['temp']='site/cart/index';
		$this->load->view('site/layout',$this->data);
	}
	function update()
	{
		$carts=$this->cart->contents();
		foreach ($carts as $key => $row) {
			$total_qty=$this->input->post('qty_'.$row['id']);
			$data= array();
			$data['rowid']= $key;
			$data['qty']=$total_qty;
			$this->cart->update($data);
		}
		redirect(base_url('cart')); 
	}
	function del()
	{
		$id=$this->uri->rsegment(3);
		$id=intval($id);
		if($id>0)
		{
			$carts=$this->cart->contents();
			foreach ($carts as $key => $row) {
              if($row['id']==$id)
              {
              	$data= array();
				$data['rowid']= $key;
				$data['qty']=0;
				$this->cart->update($data);
              }
				
			}
		}else
		{
			$this->cart->destroy();
		}
		redirect(base_url('cart')); 
	}
}


?>