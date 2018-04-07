<?php 
class Catalog extends MY_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Catalog_model');
	}
	function index()
	{

       $total_rows=$this->Catalog_model->get_total();
		$this->data['total_rows']=$total_rows;

		$this->load->library('pagination');
		$config=array();
		$config['total_rows']=$total_rows;
		$config['base_url']=admin_url('catalog/index');
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
        $name=$this->input->get('name');
        if($name)
        {
        	$input['like']=array('name', $name);
        }

    
		$list = $this->Catalog_model->get_list($input);
		$this->data['list']=$list;
        

		$message=$this->session->flashdata('message');
		$this->data['message']=$message;

		$this->data['temp']='admin/catalog/index';
		$this->load->view('admin/main',$this->data);
	}
	function add()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
		if($this->input->post())
		{
			$this->form_validation->set_rules('name_cata', 'tên danh mục', 'required');
          
			if($this->form_validation->run())
			{
         	//them vao csdl
				$name=$this->input->post('name_cata');
				$sort_order=$this->input->post('sort_order');
				$parent_id=$this->input->post('parent_id');
				$data=array(
					'name'=> $name,
					'parent_id'=>$parent_id,
					'sort_order'=>intval($sort_order),
					
				);

         	//tao noi dung thong bao
				if($this->Catalog_model->create($data))
				{
					$this->session->set_flashdata('message','Thêm thành công');
				}else
				{
					$this->session->set_flashdata('message','Thêm không thành công');
				}
            redirect(admin_url('Catalog'));//Chuyen trang danh sach quan tri vien
        }
        	
    }
    $input=array();
    $input['where']=array('parent_id' => 0 );
    $list=$this->Catalog_model->get_list($input);
    $this->data['list']=$list;
    $this->data['temp']='admin/catalog/add';
    $this->load->view('admin/main',$this->data);
}
function edit()
{
	$this->load->library('form_validation');
	$this->load->helper('form');


	$id=$this->uri->rsegment(3);
	$info=$this->Catalog_model->get_info($id);
	if(!$info)
	{
		$this->session->set_flashdata('message','Danh mục không tồn tại');
		redirect(admin_url('Catalog'));
	}

	$this->data['info']=$info;
	if($this->input->post())
	{
		$this->form_validation->set_rules('name_cata', 'tên danh mục', 'required');

		if($this->form_validation->run())
		{
         	//them vao csdl
			$name=$this->input->post('name_cata');		
			$parent_id=$this->input->post('parent_id');	
			$sort_order=$this->input->post('sort_order');
			$data=array(
				'name'=> $name,				
				'parent_id'=>$parent_id,
				'sort_order'=>intval($sort_order),

			);
         	//tao noi dung thong bao
			if($this->Catalog_model->update($id,$data))
			{
				$this->session->set_flashdata('message','Cập nhật thành công');
			}else
			{
				$this->session->set_flashdata('message','Cập nhật không thành công');
			}
            redirect(admin_url('Catalog'));//Chuyen trang danh sach quan tri vien
        }
        
    }
     $this->load->model('Catalog_model');
    $input=array();
    $input['where']=array('parent_id' => 0 );
    $list=$this->Catalog_model->get_list($input);
     $this->data['list']=$list;
      foreach ($list as $row) {
        	$input['where']=array('parent_id'=>$row->id);
        	$subs=$this->Catalog_model->get_list($input);
        	$row->subs=$subs;
        }
   

    $this->data['temp']='admin/catalog/edit';
    $this->load->view('admin/main',$this->data);





}




function delete()
{
	$id=$this->uri->rsegment('3');
	$id=intval($id);
	$info=$this->Catalog_model->get_info($id);
	if(!$info)
	{
		$this->session->set_flashdata('message','ID không tồn tại');
		redirect(admin_url('Catalog'));
	}
	//delete
	$this->Catalog_model->delete($id);
	$this->session->set_flashdata('message','xoá thành công');
	redirect(admin_url('catalog'));
}
}

?>