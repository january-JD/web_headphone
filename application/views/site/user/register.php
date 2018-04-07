<style type="text/css">
	.form-error{
	margin-left: 278px;
}
.warning{
	color: red;
}
</style>










<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        	
                           <div class="carousel-heading no-margin">
                                <h4>ĐĂNG KÝ THÀNH VIÊN</h4>
                            </div>
                            
                            <div class="page-content">
                            	<form action="<?php echo site_url('user/register') ?>" method="post">
                            	<div class="row">
                                	
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    	<p><strong>Thông tin đăng ký</strong></p>
                                    </div>
                                  
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>E-Mail <span class="warning">*</span></p>
                                    </div>
                                    
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="email" id="email" value="<?php echo set_value('email') ?>">
                                    </div>	
                                      <div class="form-error" name="name_error" style="color: red"><?php echo form_error('email') ?></div> 
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Họ & tên <span class="warning">*</span></p>
                                    </div>
                                      
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="name" id="name" value="<?php echo set_value('name') ?>">
                                    </div>
                                     <div class="form-error" name="name_error" style="color: red"><?php echo form_error('name') ?></div> 	
                                    
                                </div>
                 
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Mật khẩu <span class="warning">*</span></p>
                                    </div>
                                    
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="password" id="password" value="<?php echo set_value('password') ?>">
                                    </div>	
                                     <div class="form-error" name="name_error" style="color: red"><?php echo form_error('password') ?></div> 
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Nhập lại mật khẩu <span class="warning">*</span></p>
                                    </div>

                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="pre_password" id="pre_password" value="<?php echo set_value('pre_password') ?>">
                                    </div>	
                                   <div class="form-error" name="name_error" style="color: red"><?php echo form_error('pre_password') ?></div> 
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Địa chỉ <span class="warning">*</span></p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" id="Address" name="Address" value="<?php echo set_value('Address') ?>">
                                    </div>	
                                     <div class="form-error" name="name_error" style="color: red"><?php echo form_error('Address') ?></div> 
                                </div>
                                
                             
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<p>Phone <span class="warning">*</span></p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                    	<input type="text" name="Phone" id="Phone" value="<?php echo set_value('Phone') ?>">
                                    </div><br>	
                                     <div class="form-error" name="name_error" style="color: red"><?php echo form_error('Phone') ?></div> 
                                </div>
                                
                    
                                
                                <div class="row">
                                 
                                    	
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    	<input class="big" type="submit" value="Đăng ký">
                                        <input class="big" type="reset" value="Thoát">
                                    </div>
                                    
                                </div>
                                </form>
                            </div>
                            
                        	
 
                    	</div>
                    </div>