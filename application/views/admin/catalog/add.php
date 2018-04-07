
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

         <div class="widget-content nopadding">
          <form class="form-group col-md-4" method="post" action="<?php echo admin_url('catalog/add') ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">
            <div class="form-group">
              <label>Danh mục <span style="color: red;">*</span></label>
              <input type="text" class="form-control" name="name_cata" id="name_cata" value="<?php echo set_value('name_cata') ?>">
              <div class="form-error" name="name_error" style="color: red"><?php echo form_error('name_cata'); ?></div>     
            </div>


            <div class="form-group">
              <label> Loại danh mục </label>
              <select class="form-control" name="parent_id">
                <option value="Chọn thể loại" ></option>
                <?php foreach ($list as $row) :?>
                  <?php if(count($row->subs)>1): ?>
                    <optgroup label="<?php echo $row->name ?>">
                      <?php foreach ($row ->subs as $sub) : ?>
                        <option style="color: black" value="<?php echo $sub->id ?>"><?php echo $sub->name ?></option>
                     <?php endforeach; ?>  
                   </optgroup>
                 <?php else: ?>
                  <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                <?php endif; ?>
              <?php endforeach; ?>
            </select>              
            <div class="form-error" name="name_error" style="color: red"><?php echo form_error('parent_id'); ?></div>           
          </div>

          <div class="form-group">
            <label >Thư tự hiển thị </label>
            <div class="controls">
              <input type="text" name="sort_order" class="form-control" id="sort_order" value="<?php echo set_value('sort_order') ?>">
              <div class="form-error" name="name_error" style="color: red"><?php echo form_error('sort_order'); ?></div>
            </div>                 
          </div>


          <div class="form-actions">
            <input type="submit" value="Thêm" class="btn btn-success">
          </div>
        </form>
      </div>


    </div>
  </div>
</div>
</div>
</div>