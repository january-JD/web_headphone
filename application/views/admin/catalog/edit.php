<div id="content-header">
    <div id="breadcrumb"> 
    	<a href="<?php echo admin_url('admin') ?>" ><i class="icon-home"></i> Home</a> <a href="#" class="current">Sản phẩm</a> 
    </div>

    <h1>Quản lý sản phẩm</h1>
        <div style="float: right; ">
         <a href="<?php echo admin_url('catalog/add'); ?>"><input type="submit" value="thêm mới" class="btn btn-warning"> </a> 
        </div>
    	<div style="float: right; ">
         <a href="<?php echo admin_url('catalog/index'); ?>"><input type="submit" value="Danh sách" class="btn btn-info"> </a> 
        </div>
   
    
 </div>

<div class="container-fluid">
<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="container">
               <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Thêm danh mục sản phẩm</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-group col-md-4" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
              <div class="form-group">
                <label >Danh mục chính<span style="color: red;">*</span></label>
                  <input type="text" class="form-control" name="name_cata" id="name_cata" value="<?php echo $info->name ?>">
                   <div class="form-error" name="name_error" style="color: red"><?php echo form_error('name_cata'); ?></div>     
              </div>
            
               <div class="form-group">
                <label > Loại danh mục </label>
                  <select class="form-control" name="parent_id" id="parent_id">
                <option value="Chọn thể loại" >Danh mục</option>
              
                <?php foreach ($list as $row) :?>     
                 
                  <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
               
              <?php endforeach; ?>  
            
            </select>         
                  <div class="form-error" name="name_error" style="color: red"><?php echo form_error('parent_id'); ?></div>          
              </div>

              <div class="form-group">
                <label >Thư tự hiển thị </label>
                  <input type="text" class="form-control" name="sort_order" id="sort_order" value="<?php echo $info->sort_order ?>">
                  <div class="form-error" name="name_error" style="color: red"><?php echo form_error('sort_order'); ?></div>
                
              </div>
       
            
              <div class="form-actions">
                <input type="submit" value="Cập nhật" class="btn btn-success">
              </div>
            </form>
          </div>
          </div>
      
        </div>
      </div>
    </div>
  </div>