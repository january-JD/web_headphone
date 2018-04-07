<div id="content-header">
  <div id="breadcrumb"> 
   <a href="#" ><i class="icon-home"></i> Home</a> <a href="#" class="current">danh mục</a> 
 </div>

 <h1>Danh mục sản phẩm</h1>
 <form class="form-inline" style="float: left" action="<?php echo admin_url('catalog') ?>">
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" id="id" name="id" placeholder="ID" value="<?php echo $this->input->get('id') ?>">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" id="name" name="name" placeholder="............." value="<?php echo $this->input->get('name') ?>" >   
  </div>
  <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>&nbsp 
  <button type="reset" onclick="window.location.href='<?php echo admin_url('catalog') ?>'" class="btn btn-primary mb-2">Reset</button>
</form>
<div style="float: right; ">
 <a href="<?php echo admin_url('catalog/add'); ?>"><input type="submit" value="thêm mới" class="btn btn-warning"> </a> 
</div>
<div style="float: right; ">
 <a href="<?php echo admin_url('catalog/index'); ?>"><input type="submit" value="Danh sách" class="btn btn-info"> </a> 
</div>


</div>
