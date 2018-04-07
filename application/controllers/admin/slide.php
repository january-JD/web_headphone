<?php
class slide extends MY_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Slide_model');
	}
	function index()
	{
		//tong so luong cac bai viet trong website
	

        //lay ra danh sach slide
        $input['where']=array();
        $list=$this->Slide_model->get_list($input);
        $this->data['list']=$list;
        

        $message=$this->session->flashdata('message');
        $this->data['message']=$message;

        $this->data['temp']='admin/slide/index';
        $this->load->view('admin/main',$this->data);



    }
    function add()
    {
    	

    	$this->load->library('form_validation');
    	$this->load->helper('form');
    	if($this->input->post())
    	{
    		$this->form_validation->set_rules('name', 'tên bài viết', 'required');
    	


    		if($this->form_validation->run())
    		{


				//lay file hinh anh
    			$this->load->library('upload_library');
    			$upload_path='./upload/slide';
    			$upload_data=$this->upload_library->upload($upload_path,'image');
    			
    			$image_link='';
    			if(isset($upload_data['file_name']) )
    			{
    				$image_link=$upload_data['file_name'];
    			}

                //luu du lieu can them
    			$data=array(
    				'name'=>$this->input->post('name'),
    				'image'=>$image_link,

    			);
         	//tao noi dung thong bao
    			if($this->Slide_model->create($data))    
    			{
    				$this->session->set_flashdata('message','Thêm thành công');
    			}else
    			{
    				$this->session->set_flashdata('message','Thêm không thành công');
    			}
            redirect(admin_url('slide'));//Chuyen trang danh sach quan tri vien
        }

    }
    $this->data['temp']='admin/slide/add';
    $this->load->view('admin/main',$this->data);
} 
function edit()
{

	$id=$this->uri->rsegment(3);
	$slide=$this->Slide_model->get_info($id);
	if(!$slide)
	{
		$this->session->set_flashdata('message','slide không tồn tại');
		redirect(admin_url('slide'));
	}
	$this->data['slide']=$slide;

    $this->load->model('slide_model');
	$this->load->library('form_validation');
	$this->load->helper('form');
	if($this->input->post())
	{
		$this->form_validation->set_rules('name', 'tên slide', 'required');
	


		if($this->form_validation->run())
		{
         	//them vao csdl
			
          
		    //lay file hinh anh
			$this->load->library('upload_library');
			$upload_path='./upload/slide';
			$upload_data=$this->upload_library->upload($upload_path,'image');

			$image_link='';
			if(isset($upload_data['file_name']) )
			{
				$image_link=$upload_data['file_name'];
			}


			$data=array(
    				'name'=>$this->input->post('name'),
    			

    			);

			if($image_link!='')
			{
				$data['image']=$image_link;

			}	
			
         	//tao noi dung thong bao
			if($this->Slide_model-> update($slide->id,$data))
			{
				$this->session->set_flashdata('message','cập nhật thành công');
			}else
			{
				$this->session->set_flashdata('message','cập nhật không thành công');
			}

            redirect(admin_url('slide'));//Chuyen trang danh sach quan tri vien
        }

    }
    $this->data['temp']='admin/slide/edit';
    $this->load->view('admin/main',$this->data);
}
function delete()
{
	$id=$this->uri->rsegment('3');	
	$slide=$this->Slide_model->get_info($id);
	if(!$slide)
	{
		$this->session->set_flashdata('message','slide không tồn tại');
		redirect(admin_url('slide'));
	}
	//delete
	$this->Slide_model->delete($id);

	$image_link =  '/upload/slide'.$slide->image_link;
	if(file_exists($image_link))
	{
		unlink($image_link);
	}

	

	$this->session->set_flashdata('message','xoá thành công');
	redirect(admin_url('slide'));
}
}
?>