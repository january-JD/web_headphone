  <?php 
  class MY_controller extends CI_controller
  {
      //gui du lieu sang view
    public $data=array();
    function __construct()
    {
      parent::__construct();
      $controller = $this->uri->segment(1);
      switch ($controller) {
        case 'admin':
        $this->load->helper('admin');
        $this->_check_login();
        break;

        default:
                       //lay danh sach danh muc san pham
    
        $this->load->model('Catalog_model');
        $this->load->model('Product_model');

        $input['limit']=array(2,0);
        $input['order']=array('price','DESC');
        $product_db=$this->Product_model->get_list($input);
        $this->data['product_db']=$product_db;
        
        $input['order']=array('buyed','DESC');
        $product_sell=$this->Product_model->get_list($input);
        $this->data['product_sell']=$product_sell;


         $input=array();
        $input['where']=array('parent_id'=>0);
        $catalog_list=$this->Catalog_model->get_list($input);

          



        foreach ($catalog_list as $row) {
         $input['where']=array('parent_id'=>$row->id);
         $subs=$this->Catalog_model->get_list($input);
         $row->subs=$subs;
       }

       $this->data['catalog_list']=$catalog_list;  
      
       //kiem tra user da dang nhap chua
       $user_id_login=$this->session->userdata('user_id_login');
       $this->data['user_id_login']=$user_id_login;
       if($user_id_login)
       {
        $this->load->model('User_model');
        $user_info=$this->User_model->get_info($user_id_login);
        $this->data['user_info']=$user_info;

       }

   
       $this->load->library('cart');
        $carts=$this->cart->contents();
       $this->data['total_items']=$this->cart->total_items();
       $this->data['carts']=$carts;
   
       break;
     } 
   }
   private function _check_login()
   {
    $controller=$this->uri->rsegment('1');
    $controller=strtolower($controller);
    $login=$this->session->userdata('login');
    if(!$login && $controller!='login')
    {
      redirect(admin_url('login'));
    }
    if($login && $controller =='login')
    {
      redirect(admin_url('home'));
    }
  }
}


?>