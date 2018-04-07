<?php 
class product extends MY_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');

	}
	function catalog()
	{
		$id=intval($this->uri->rsegment(3)) ;
		$this->load->model('Catalog_model');
		$catalog=$this->Catalog_model->get_info($id);
		if(!$catalog)
		{
			redirect();
		}
		$this->data['catalog']=$catalog;
		$input=array();
		$input['where']=array('catalog_id'=>$id);

		$total_rows=$this->Product_model->get_total($input);
		$this->data['total_rows']=$total_rows;

		$this->load->library('pagination');
		$config=array();
		$config['total_rows']=$total_rows;
		$config['base_url']=base_url('product/catalog/'.$id);
    $config['per_page']=10;//so luong san pham hien thi/trang
    $config['uri_segment']=4; //hien thi so id trang hien thi tren url;
    $config['next_link']=' trang kế tiếp';
    $config['prev_link']=' trang trước ';
    $this->pagination->initialize($config);//khi tao cac cau hinhh phan trang

    $segment=$this->uri->segment(4);
    $segment=intval($segment);

    $input['limit']=array($config['per_page'],$segment);

    if(isset($catalog_subs_id))
    {
      $this->db->where_in('catalog_id',$catalog_subs_id);
    }
    $list=$this->Product_model->get_list($input);
    $this->data['list']=$list;



    $this->data['temp']='site/product/catalog';
    $this->load->view('site/layout', $this->data);



  }
  function view()
  {
   $id=$this->uri->rsegment(3);
   $product=$this->Product_model->get_info($id);
   if(!$product)
   {
    redirect();
  }
  $this->data['product']=$product;
    	//lay sanh sach sp kem theo
  $image_list=@json_decode($product->image_list);
  $this->data['image_list']=$image_list;

         //dem so luot xem cua san pham
  $data=array();
  $data['view']=$product->view+1;
  $this->Product_model->update($product->id,$data);


  $catalog=$this->Catalog_model->get_info($product->catalog_id);
  $this->data['catalog']=$catalog;

  $input=array();
 
  $total_rows=$this->Product_model->get_total($input);
  $this->data['total_rows']=$total_rows;
  $list=$this->Product_model->get_list($input);
  $this->data['list']=$list;




  $this->data['temp']='site/product/view';
  $this->load->view('site/layout', $this->data);

}
function search()
{
 if($this->uri->rsegment('3')==1)
        {     //lay du lieu tu autocomplete
          $key=$this->input->get('term');
        }else
        {
          $key=$this->input->get('key-search');
        }
        
        $this->data['key']=trim($key);
        $input=array();
        $input['like']=array('name',$key );
        $total_rows=$this->Product_model->get_total($input);
        $this->data['total_rows']=$total_rows;
        $list=$this->Product_model->get_list($input);
        $this->data['list']=$list;


        if($this->uri->rsegment('3')==1)
        {
         $result=array();
         foreach ($list as $row ) {
          $item=array();
          $item['id']=$row->id;
          $item['label']=$row->name;
          $item['value']=$row->name;
          $result[]=$item;
        }
        die(json_encode($result));
      }else
      {
              //load view
       $this->data['temp']='site/product/search';
       $this->load->view('site/layout', $this->data);
     }


   }
 }


 ?>