<?php 
/**
* 
*/
class Order extends MY_controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function checkout()
	{
        
        $carts=$this->cart->contents();
        $total_items=$this->cart->total_items();	
        if($total_items<=0)
        {
          redirect();
        }
      
         //tong so tien can thanh toan
        $total_amount=0;
        foreach ($carts as $row ) {
        	 $total_amount=$total_amount + $row['subtotal'];

        }
        $this->data['total_amount']=$total_amount;
         


		$user_id=0;
		$user=0;	
		if($this->session->userdata('user_id_login'))
		{
          $user_id=$this->session->userdata('user_id_login');
		$user=$this->User_model->get_info($user_id);
		}
		$this->data['user']=$user;
        
        $this->load->library('form_validation');
		$this->load->helper('form');
		if($this->input->post())
		{   
		
			$this->form_validation->set_rules('name', 'tên','required');
			$this->form_validation->set_rules('phone', 'Sô điện thoại','required|min_length[10]');
		    $this->form_validation->set_rules('email', 'email đăng nhập','required|valid_email');
		    $this->form_validation->set_rules('message', 'Ghi chú', 'required');
		    $this->form_validation->set_rules('payment', 'Cổng thanh toán','required');
			if($this->form_validation->run())
			{
         	//them vao csdl
				
				
				$payment=$this->input->post('payment');
				
				$data=array(
					'user_name'=> $this->input->post('name'),
					'status'=>0,// trnag thai chua thanh toán
					'user_id'=>$user_id,
					'user_phone'=>$this->input->post('phone'),
					'user_email'=>$this->input->post('email'),
					'message'=>$this->input->post('message'),
					'amount'=>$total_amount,//tong so tien thang toan
					'payment'=>$payment,
				
				);
				//them du leiu vao bang 
				
				$this->load->model('Transaction_model');
                $this->Transaction_model->create($data);
                $transaction_id=$this->db->insert_id();//lay ra id cua giao dich vua them vao

				$this->load->model('Order_model');
				foreach ($carts as $row) {
					$data=array(
					'transaction_id'=>$transaction_id,
					'product_id'=>$row['id'],
					'qty'=>$row['qty'],
					'amount'=>$row['subtotal'],
					'status'=>'0',
				);
					$this->Order_model->create($data);
				}
				$this->cart->destroy();
				$this->session->set_flashdata('message','Đặt hàng thành công, chúng tôi sẽ kiểm tra và gửi hàng cho bạn');
            redirect(site_url());//Chuyen trang danh sach quan tri vien
        }
        
    }
       
        $this->data['temp']='site/order/checkout';
        $this->load->view('site/layout', $this->data);
	}
}


?>