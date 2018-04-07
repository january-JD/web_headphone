<?php $this->load->view('admin/catalog/head', $this->data); ?>



<div style="margin-left: 20px; background-color: #deeefa;">
     <?php  $this->load->view('admin/message', $this->data); ?>
 </div>
 <div class="container-fluid">
  <div class="row-fluid">
     <div class="span12">
    <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Danh mục sản phẩm</h5><span style="float: right"><h5>SUM:<?php echo count($list); ?></h5></span>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên danh mục chính</th>
              
                  <th>Thứ tự hiển thị </th>
                  <th>loại danh mục</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($list as $row): ?>
                <tr class="odd gradeX">
                  <td><?php echo $row->id; ?></td>
                   <td class="center"> <?php echo $row->name; ?></td>
                  
                  <td><?php echo $row->sort_order; ?></td>
                  <td><?php echo $row->parent_id; ?></td>
                  <td >
                    <a href="<?php echo admin_url('catalog/edit/'.$row->id); ?>"><button type="button" class="btn btn-success" style="float: right">Cập nhật</button>  </a>

                    <a href="<?php echo admin_url('catalog/delete/'.$row->id); ?>"><button type="button" class="btn btn-warning" style="float: right">Xóa</button></a>
                  </td>

                </tr>
               <?php endforeach; ?>
              </tbody>
            </table>
           <div class="pagination"> 
              <?php echo $this->pagination->create_links() ?> 
           </div>
          </div>
        </div>
 </div>
  </div>
   
 </div>

