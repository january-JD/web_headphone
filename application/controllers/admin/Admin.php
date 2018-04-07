<?php
class Admin extends MY_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	function index()
	{
		$input=array();
		$list = $this->admin_model->get_list($input);
		$this->data['list']=$list;

		$total=$this->admin_model->get_total();
		$this->data['total']=$total;

		$message=$this->session->flashdata('message');
		$this->data['message']=$message;

		$this->data['temp']='admin/admin/index';
		$this->load->view('admin/main',$this->data);
	}
	function check_username()
	{
		$username=$this->input->post('username');
		$where =array('username'=>$username);
		if($this->admin_model->check_exists($where))
		{
			$this->form_validation->set_message(__FUNCTION__,'Tài khoản đã tồn tại');
			return false;

		}
		return true;
	}
	function add()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
		if($this->input->post())
		{
			$this->form_validation->set_rules('name', 'tên', 'required|min_length[8]');
			$this->form_validation->set_rules('username', 'tên tài khoản', 'required|callback_check_username');
			$this->form_validation->set_rules('password', 'mật khẩu', 'required');
			$this->form_validation->set_rules('pre_password', 'nhập lại mật khẩu', 'matches[password]');
			if($this->form_validation->run())
			{
         	//them vao csdl
				$name=$this->input->post('name');
				$username=$this->input->post('username');
				$password=$this->input->post('password');
				$data=array(
					'name'=> $name,
					'username'=> $username,
					'password'=> md5($password)	
				);
         	//tao noi dung thong bao
				if($this->admin_model->create($data))
				{
					$this->session->set_flashdata('message','Thêm thành công');
				}else
				{
					$this->session->set_flashdata('message','Thêm không thành công');
				}
            redirect(admin_url('admin'));//Chuyen trang danh sach quan tri vien
        }
        
    }
    $this->data['temp']='admin/Admin/add';
    $this->load->view('admin/main',$this->data);
}
function edit()
{
	
	$id=$this->uri->rsegment('3');
	$id=intval($id); 
	$this->load->library('form_validation');
	$this->load->helper('form');
	$info=$this->admin_model->get_info($id);
	if(!$info)
	{
		$this->session->set_flashdata('message','ID không tồn tại');
		redirect(admin_url('admin'));
	}
	$this->data['info']=$info;
	

        //kiem tra va cap nhat lai du lieu
	if($this->input->post())
	{
		$this->form_validation->set_rules('name', 'tên', 'required|min_length[8]');
		$this->form_validation->set_rules('username', 'tên tài khoản', 'required|callback_check_username');
		
		$password=$this->input->post('password');
		if($password)
		{
			$this->form_validation->set_rules('password', 'mật khẩu', 'required');
			$this->form_validation->set_rules('pre_password', 'nhập lại mật khẩu', 'matches[password]');
		}
		if($this->form_validation->run())
		{
			$name=$this->input->post('name');
			$username=$this->input->post('username');

			$data=array(
				'name'=> $name,
				'username'=> $username,
				
			);
			if($password)
			{
				$data['password']=md5($password);
			}
         	//tao noi dung thong bao
			if($this->admin_model->update($id,$data))
			{
				$this->session->set_flashdata('message','Cập nhật thành công');
			}else
			{
				$this->session->set_flashdata('message','Cập nhật không thành công');
			}
            redirect(admin_url('admin'));//Chuyen trang danh sach quan tri vien
        }
        

    }
    $this->data['temp']='admin/Admin/edit';
    $this->load->view('admin/main',$this->data);
}
function delete()
{
	$id=$this->uri->rsegment('3');
	$id=intval($id);
	$info=$this->admin_model->get_info($id);
	if(!$info)
	{
		$this->session->set_flashdata('message','ID không tồn tại');
		redirect(admin_url('admin'));
	}
	//delete
	$this->admin_model->delete($id);
	$this->session->set_flashdata('message','xoá thành công');
	redirect(admin_url('admin'));
}
function logout()
{
	if($this->session->userdata('login'))
	{
		$this->session->unset_userdata('login');
	}
	redirect(admin_url(login));
}

}
?>