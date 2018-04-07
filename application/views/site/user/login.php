<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12">
    
      <div style="border: 1px solid #ffb3b3; border-radius: 2px; width: 802px; margin-bottom: 5px; text-align: left; background-color:#ffb3b3 ">
           <h3 style="color: #fff;"><?php echo form_error('login') ?></h3>
      </div>
     
      <div class="carousel-heading no-margin">
        <h4>Đăng nhập</h4>
    </div>

    <div class="page-content">
       <form action="<?php echo site_url('user/login') ?>" method="post">
        <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="iconic-input">
                <input type="text" placeholder="Tên đăng nhạp" name="email" value="<?php echo set_value('email') ?>">
                <i class="icons icon-user-3"></i>
            </div>
            <div class="form-error" name="name_error" style="color: red"><?php echo form_error('email') ?></div> 
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
           <div class="iconic-input">
            <input type="text" placeholder="Mật khẩu" name="password" <?php echo set_value('password') ?>>
            <i class="icons icon-lock"></i>
        </div>
        <div class="form-error" name="name_error" style="color: red"><?php echo form_error('password') ?></div> 
    </div>
</div>

<input type="checkbox" id="login-remember-2"> <label for="login-remember-2">ghi nhớ đăng nhập</label>
<br><br>
<div class="row">
   <div class="col-lg-6 col-md-6 col-sm-6 align-left">
       <input type="submit" class="orange" value="Đăng nhập">
   </div>
   <div class="col-lg-6 col-md-6 col-sm-6 align-right">
    <small>
     <a class="align-right" href="#">Quên mật khẩu?</a>
     <br>
     <a class="align-right" href="#">Quên tên đăng nhập?</a>
     <br>
 </small>
</div>
</div>
</form>
</div>

</div>

</div>