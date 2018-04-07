<?php
class news extends MY_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('News_model');
	}
	function index()
	{
		//tong so luong cac bai viet trong website
		$total_rows=$this->News_model->get_total();
		$this->data['total_rows']=$total_rows;

		$this->load->library('pagination');
		$config=array();
		$config['total_rows']=$total_rows;
		$config['base_url']=admin_url('news/index');
        $config['per_page']=5;//so luong bai viet hien thi/trang
        $config['uri_segment']=4; //hien thi so id trang hien thi tren url;
        $config['next_link']=' trang kế tiếp';
        $config['prev_link']=' trang trước ';
        $this->pagination->initialize($config);//khi tao cac cau hinhh phan trang

        $segment=$this->uri->segment(4);
        $segment=intval($segment);
        $input=array();
        $input['limit']=array($config['per_page'],$segment);
        


        //kiem tra loc du lieu = id
        $id=$this->input->get('id');
        $id=intval($id);
        $input['where']=array();
        if($id>0)
        {
        	$input['where']['id']=$id; 
        }

        //loc du lieu theo tieu de
        $title=$this->input->get('title');
        if($title)
        {
        	$input['like']=array('title', $title);
        }

        //lay ra danh sach bai viet
        $list=$this->News_model->get_list($input);
        $this->data['list']=$list;

        

        $message=$this->session->flashdata('message');
        $this->data['message']=$message;

        $this->data['temp']='admin/news/index';
        $this->load->view('admin/main',$this->data);



    }
    function add()
    {
    	

    	$this->load->library('form_validation');
    	$this->load->helper('form');
    	if($this->input->post())
    	{
    		$this->form_validation->set_rules('title', 'tên bài viết', 'required');
    		$this->form_validation->set_rules('content_nd', 'tiêu đề bài viết', 'required');



    		if($this->form_validation->run())
    		{


				//lay file hinh anh
    			$this->load->library('upload_library');
    			$upload_path='./upload/news';
    			$upload_data=$this->upload_library->upload($upload_path,'image_link');
    			
    			$image_link='';
    			if(isset($upload_data['file_name']) )
    			{
    				$image_link=$upload_data['file_name'];
    			}

                //luu du lieu can them
    			$data=array(
    				'title'=>$this->input->post('title'),
    				'meta_desc'=>$this->input->post('meta_desc'),
    				'meta_key'=>$this->input->post('meta_key'),
    				'content'=>$this->input->post('content_nd'),
    				'image_link'=>$image_link,

    			);
         	//tao noi dung thong bao
    			if($this->News_model->create($data))
    			{
    				$this->session->set_flashdata('message','Thêm thành công');
    			}else
    			{
    				$this->session->set_flashdata('message','Thêm không thành công');
    			}
            redirect(admin_url('news'));//Chuyen trang danh sach quan tri vien
        }

    }
    $this->data['temp']='admin/news/add';
    $this->load->view('admin/main',$this->data);
} 
function edit()
{

	$id=$this->uri->rsegment(3);
	$news=$this->News_model->get_info($id);
	if(!$news)
	{
		$this->session->set_flashdata('message','bài viết không tồn tại');
		redirect(admin_url('news'));
	}
	$this->data['news']=$news;

    $this->load->model('News_model');
	$this->load->library('form_validation');
	$this->load->helper('form');
	if($this->input->post())
	{
		$this->form_validation->set_rules('title', 'tên bài viết', 'required');
		$this->form_validation->set_rules('content_nd', 'nội dung bài viết', 'required');
		$this->form_validation->set_rules('meta_desc', 'thẻ meta_desc', 'required');
		$this->form_validation->set_rules('meta_key', 'thẻ meta_key', 'required');


		if($this->form_validation->run())
		{
         	//them vao csdl
			
          
		    //lay file hinh anh
			$this->load->library('upload_library');
			$upload_path='./upload/news';
			$upload_data=$this->upload_library->upload($upload_path,'image_link');

			$image_link='';
			if(isset($upload_data['file_name']) )
			{
				$image_link=$upload_data['file_name'];
			}


			$data=array(
    				'title'=>$this->input->post('title'),
    				'meta_desc'=>$this->input->post('meta_desc'),
    				'meta_key'=>$this->input->post('meta_key'),
    				'content'=>$this->input->post('content_nd'),
    			

    			);

			if($image_link!='')
			{
				$data['image_link']=$image_link;

			}	
			
         	//tao noi dung thong bao
			if($this->News_model-> update($news->id,$data))
			{
				$this->session->set_flashdata('message','cập nhật thành công');
			}else
			{
				$this->session->set_flashdata('message','cập nhật không thành công');
			}

            redirect(admin_url('news'));//Chuyen trang danh sach quan tri vien
        }

    }
    $this->data['temp']='admin/news/edit';
    $this->load->view('admin/main',$this->data);
}
function delete()
{
	$id=$this->uri->rsegment('3');	
	$news=$this->News_model->get_info($id);
	if(!$news)
	{
		$this->session->set_flashdata('message','ID không tồn tại');
		redirect(admin_url('news'));
	}
	//delete
	$this->News_model->delete($id);

	$image_link =  '/upload/news'.$news->image_link;
	if(file_exists($image_link))
	{
		unlink($image_link);
	}

	

	$this->session->set_flashdata('message','xoá thành công');
	redirect(admin_url('news'));
}
}
?>