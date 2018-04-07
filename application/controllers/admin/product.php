<?php
class Product extends MY_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
	}
	function index()
	{
		//tong so luong cac san pham trong website
		$total_rows=$this->Product_model->get_total();
		$this->data['total_rows']=$total_rows;

		$this->load->library('pagination');
		$config=array();
		$config['total_rows']=$total_rows;
		$config['base_url']=admin_url('product/index');
        $config['per_page']=5;//so luong san pham hien thi/trang
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

        //loc du lieu theo ten
        $name=$this->input->get('name');
        if($name)
        {
        	$input['like']=array('name', $name);
        }




        //lay ra danh sach sp
        $list=$this->Product_model->get_list($input);
        $this->data['list']=$list;
        
        
        



        //lay danh sach san pham
        $this->load->model('Catalog_model');
        $input=array();
        $input['where']=array('parent_id'=>0);
        $catalog=$this->Catalog_model->get_list($input);
        foreach ($catalog as $row) {
        	$input['where']=array('parent_id'=>$row->id);
        	$subs=$this->Catalog_model->get_list($input);
        	$row->subs=$subs;
        }
        $this->data['catalog']=$catalog;
      
        $message=$this->session->flashdata('message');
        $this->data['message']=$message;

        $this->data['temp']='admin/product/index';
        $this->load->view('admin/main',$this->data);



    }
    function add()
    {
    	$this->load->model('Catalog_model');
    	$input=array();
    	$input['where']=array('parent_id'=>0);
    	$catalog=$this->Catalog_model->get_list($input);
    	foreach ($catalog as $row) {
    		$input['where']=array('parent_id'=>$row->id);
    		$subs=$this->Catalog_model->get_list($input);
    		$row->subs=$subs;
    	}
    	$this->data['catalog']=$catalog;
    	$this->load->library('form_validation');
    	$this->load->helper('form');
    	if($this->input->post())
    	{
    		$this->form_validation->set_rules('name', 'tên sản phẩm', 'required');
            $this->form_validation->set_rules('code_id', 'mã sản phẩm', 'required');
    		$this->form_validation->set_rules('price', 'Giá sản phẩm', 'required');
    		$this->form_validation->set_rules('catalog', 'thể loại', 'required');


    		if($this->form_validation->run())
    		{
         	//them vao csdl
    			$name=$this->input->post('name');
                $code_id=$this->input->post('code_id');
    			$catalog_id=$this->input->post('catalog');	
    			$price=$this->input->post('price');
    			$price=str_replace(',', " ", $price);
				//lay file hinh anh
    			$this->load->library('upload_library');
    			$upload_path='./upload/product';
    			$upload_data=$this->upload_library->upload($upload_path,'image');
    			
    			$image_link='';
    			if(isset($upload_data['file_name']) )
    			{
    				$image_link=$upload_data['file_name'];
    			}
    			//upload cac anh kkem theo
    			$image_list=array();
    			$image_list=$this->upload_library->upload_file($upload_path,'image_list');
    			$image_list=json_encode($image_list);


    			$data=array(
    				'name'=> $name,
    				'code_id'=>$code_id,
    				'price'=>$price,
    				'image'=>$image_link,
    				'image_list'=>$image_list,
    				'discount'=>$this->input->post('discount'),    				
    				'content'=>$this->input->post('content'),
    				'catalog_id'=>$catalog_id,
    			);
         	//tao noi dung thong bao
    			if($this->Product_model->create($data))
    			{
    				$this->session->set_flashdata('message','Thêm thành công');
    			}else
    			{
    				$this->session->set_flashdata('message','Thêm không thành công');
    			}
            redirect(admin_url('product'));//Chuyen trang danh sach quan tri vien
        }

    }
 
    $this->data['temp']='admin/product/add';
    $this->load->view('admin/main',$this->data);
} 
function edit()
{

	$id=$this->uri->rsegment(3);
	$product=$this->Product_model->get_info($id);
	if(!$product)
	{
		$this->session->set_flashdata('message','sản phẩm không tồn tại');
		redirect(admin_url('product'));
	}
	$this->data['product']=$product;

	$this->load->model('Catalog_model');
	$input=array();
	$input['where']=array('parent_id'=>0);
	$catalog=$this->Catalog_model->get_list($input);
	foreach ($catalog as $row) {
		$input['where']=array('parent_id'=>$row->id);
		$subs=$this->Catalog_model->get_list($input);
		$row->subs=$subs;
	}
	$this->data['catalog']=$catalog;

	$this->load->library('form_validation');
	$this->load->helper('form');
	if($this->input->post())
	{
		$this->form_validation->set_rules('name', 'tên sản phẩm', 'required');
        $this->form_validation->set_rules('code_id', 'mã sản phẩm', 'required');
		$this->form_validation->set_rules('price', 'Giá sản phẩm', 'required');
		$this->form_validation->set_rules('catalog_id', 'thể loại', 'required');


		if($this->form_validation->run())
		{
         	//them vao csdl
			$name=$this->input->post('name');
            $code_id=$this->input->post('code_id');
			$catalog_id=$this->input->post('catalog_id');	
			$price=$this->input->post('price');
			$price=str_replace(',', " ", $price);
				//lay file hinh anh
			$this->load->library('upload_library');
			$upload_path='./upload/product';
			$upload_data=$this->upload_library->upload($upload_path,'image');

			$image_link='';
			if(isset($upload_data['file_name']) )
			{
				$image_link=$upload_data['file_name'];
			}
    			//upload cac anh kkem theo
			$image_list=array();
			$image_list=$this->upload_library->upload_file($upload_path,'image_list');
			$image_list_json=json_encode($image_list);


			$data=array(
				'name'=> $name,
                'code_id'=>$code_id,
				'price'=>$price,
				'discount'=>$this->input->post('discount'),    				
				'content'=>$this->input->post('content'),
				'catalog_id'=>$catalog_id,
		
			);

			if($image_link!='')
			{
				$data['image']=$image_link;

			}
			if(!empty($image_list))
			{
				$data['image_list']=$image_list_json;
			}
         	//tao noi dung thong bao
			if($this->Product_model-> update($product->id,$data))
			{
				$this->session->set_flashdata('message','cập nhật thành công');
			}else
			{
				$this->session->set_flashdata('message','cập nhật không thành công');
			}

            redirect(admin_url('product'));//Chuyen trang danh sach quan tri vien
        }

    }

    $this->data['temp']='admin/product/edit';
    $this->load->view('admin/main',$this->data);
}
function delete()
{
	$id=$this->uri->rsegment('3');	
	$product=$this->Product_model->get_info($id);
	if(!$product)
	{
		$this->session->set_flashdata('message','ID không tồn tại');
		redirect(admin_url('product'));
	}
	//delete
	$this->Product_model->delete($id);

	$image_link =  '/upload/product'.$product->image_link;
	if(file_exists($image_link))
	{
		unlink($image_link);
	}
	$image_list=json_decode($product->image_list);
	if(is_array($image_list))
	{
		foreach ($image_list as $image) {
			$image_link= './upload/product'.$image;
			if(file_exists($image_link))
			{
				unlink($image_link);
			}
		}
	}
	

	$this->session->set_flashdata('message','xoá thành công');
	redirect(admin_url('product'));
}
}
?>