<div id="content-header">
    <div id="breadcrumb"> 
    	<a href="#" ><i class="icon-home"></i> Home</a> <a href="#" class="current">admin</a> 
    </div>

    <h1>Quản trị viên</h1>
        <div style="float: right; ">
         <a href="<?php echo admin_url('admin/add'); ?>"><input type="submit" value="thêm mới" class="btn btn-warning"> </a> 
        </div>
    	<div style="float: right; ">
         <a href="<?php echo admin_url('admin/index'); ?>"><input type="submit" value="Danh sách" class="btn btn-info"> </a> 
        </div>
   
    
 </div>


<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Cập nhật thông tin</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
              <div class="control-group">
                <label class="control-label">Tên <span style="color: red;">*</span></label>
                <div class="controls">
                  <input type="text" name="name" id="name" value="<?php echo $info->name; ?>">
                   <div class="form-error" name="name_error" style="color: red"><?php echo form_error('name'); ?></div>
                </div>
               
              </div>
              <div class="control-group">
                <label class="control-label">Tên tài khoản <span style="color: red;">*</span></label>
                <div class="controls">
                  <input type="text" name="username" id="username" value="<?php echo $info->username ?>">
                  <div class="form-error" name="name_error" style="color: red"><?php echo form_error('username'); ?></div>
                </div>
                 
              </div>
              <div class="control-group">
                <label class="control-label">Mật khẩu <span style="color: red;">*</span></label>
                <div class="controls">
                  <input type="password" name="password" id="password" value="<?php echo set_value('password') ?>">
                  <div class="form-error" name="name_error" style="color: red"><?php echo form_error('password'); ?></div>
                </div>
                 
              </div>
              <div class="control-group">
                <label class="control-label">Nhập lại mật khẩu <span style="color: red;">*</span></label>
                <div class="controls">
                  <input type="password" name="pre_password" id="pre_password" value="<?php echo set_value('pre_password') ?>">
                  <div class="form-error" name="name_error" style="color: red"><?php echo form_error('pre_password'); ?></div>
                </div>
                 
              </div>
              <div class="form-actions">
                <input type="submit" value="Cập nhật" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>