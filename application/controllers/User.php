<?php 
/**
* 
*/
class User extends MY_controller
{
	
	function __construct()
	{
		parent::__construct();
		
			$this->load->model('User_model');
		
	}
	function index()
	{
		if(!$this->session->userdata('user_id_login'))
		{
          redirect();
		}
		$user_id=$this->session->userdata('user_id_login');
		$user=$this->User_model->get_info($user_id);
		if(!$user)
		{
			redirect();
		}
		$this->data['user']=$user;
		 $this->data['temp']='site/user/index';
        $this->load->view('site/layout', $this->data);

	}
	function check_email()
	{
		$email=$this->input->post('email');
		$where =array('email'=>$email);
		if($this->User_model->check_exists($where))
		{
			$this->form_validation->set_message(__FUNCTION__,'email đã tồn tại');
			return false;

		}
		return true;
	}
	function register()
	{

        $this->load->library('form_validation');
		$this->load->helper('form');
		if($this->input->post())
		{
			$this->form_validation->set_rules('name', 'tên', 'required');
			$this->form_validation->set_rules('email', 'email đăng nhập', 'required|valid_email|callback_check_email');
			$this->form_validation->set_rules('password', 'mật khẩu', 'required');
			$this->form_validation->set_rules('pre_password', 'nhập lại mật khẩu', 'matches[password]');
			$this->form_validation->set_rules('Phone', 'Sô điện thoại', 'required|min_length[10]');
			$this->form_validation->set_rules('Address', 'Địa chỉ', 'required');
			if($this->form_validation->run())
			{
         	//them vao csdl
				
				$password=$this->input->post('password');
				$password=md5($password);
				
				$data=array(
					'name'=> $this->input->post('name'),
					'email'=>$this->input->post('email'),
					'phone'=>$this->input->post('Phone'),
					'address'=>$this->input->post('Address'),
					'password'=> $password
				);
         	//tao noi dung thong bao
				if($this->User_model->create($data))
				{
					$this->session->set_flashdata('message','Đăng ký thành viên thành công');
				}else
				{
					$this->session->set_flashdata('message','Đăng ký không thành công');
				}
            redirect(site_url());//Chuyen trang danh sach quan tri vien
        }
        
    }



		 $this->data['temp']='site/user/register';
        $this->load->view('site/layout', $this->data);
	}
	function check_login()
	{
		$user=$this->_get_user_info();
		if($user)
		{
			return true;
		}
		$this->form_validation->set_message(__FUNCTION__,' Đăng nhập không thành công');
		return false;
	}
	function login()
	{
         
        if($this->session->userdata('user_id_login'))
		{
          redirect(site_url('user'));
		}




        $this->load->library('form_validation');
		$this->load->helper('form');
		if($this->input->post())
		{
			$this->form_validation->set_rules('email', 'email đăng nhập', 'required|valid_email');
			$this->form_validation->set_rules('password', 'mật khẩu', 'required');
			$this->form_validation->set_rules('login','login','callback_check_login');
			if($this->form_validation->run())
			{
				
				$user=$this->_get_user_info();
                
				$this->session->set_userdata('user_id_login', $user->id);
				$this->session->set_flashdata('message','Đăng nhập thành công');
				redirect();
			}
		}

	    $this->data['temp']='site/user/login';
        $this->load->view('site/layout', $this->data);
	}
	private function _get_user_info()
	{
          $email=$this->input->post('email');
		$password=$this->input->post('password');
		$password=md5($password);
	
		$where=array('email'=>$email, 'password'=>$password);
		$user=$this->User_model->get_info_rule($where);
		return $user;
	}
	function logout()
{
	if($this->session->userdata('user_id_login'))
	{
		$this->session->unset_userdata('user_id_login');
	}
		$this->session->set_flashdata('message','Đăng xuất thành công');
	redirect();
}
function edit()
{
	if(!$this->session->userdata('user_id_login'))
		{
          redirect(site_url('user/login'));
		}
		$user_id=$this->session->userdata('user_id_login');
		$user=$this->User_model->get_info($user_id);
		if(!$user)
		{
			redirect();
		}
		$this->data['user']=$user;
        
                $this->load->library('form_validation');
		$this->load->helper('form');
		if($this->input->post())
		{   
			$password=$this->input->post('password');
			$this->form_validation->set_rules('name', 'tên', 'required');
			 if($password)
			 {
			 	$this->form_validation->set_rules('password', 'mật khẩu', 'required');
			   $this->form_validation->set_rules('pre_password', 'nhập lại mật khẩu', 'matches[password]');
			 }
			
			$this->form_validation->set_rules('Phone', 'Sô điện thoại', 'required|min_length[10]');
			$this->form_validation->set_rules('Address', 'Địa chỉ', 'required');
			if($this->form_validation->run())
			{
         	//them vao csdl
				
				
				
				
				$data=array(
					'name'=> $this->input->post('name'),
					
					'phone'=>$this->input->post('Phone'),
					'adress'=>$this->input->post('Address'),
				
				);
				if($password)
				{
					$data['password']=md5($password);
				}
         	//tao noi dung thong bao
				if($this->User_model->update($user_id, $data))
				{
					$this->session->set_flashdata('message','Chỉnh sửa thông tin thành viên thành công');
				}else
				{
					$this->session->set_flashdata('message','Chỉnh sửa không thành công');
				}
            redirect(site_url('user'));//Chuyen trang danh sach quan tri vien
        }
        
    }



		 $this->data['temp']='site/user/edit';
        $this->load->view('site/layout', $this->data);
}
}
	

?>