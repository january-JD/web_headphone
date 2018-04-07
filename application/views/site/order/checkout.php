<style type="text/css">

.form-error{

}
</style>




<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="carousel-heading">
            <h4>THÔNG TIN KHÁCH HÀNG</h4>
            <div class="carousel-arrows">
                <a href="<?php echo site_url('cart/index') ?>"><i class="icons icon-reply"></i></a>
            </div>
        </div>
        <form action="<?php echo site_url('order/checkout') ?>" method="post">
            <table class="orderinfo-table">

             <tbody><tr>
                <th>Họ & tên</th>
                <td><input type="text" class="form-control" name="name" value="<?php echo isset($user->name) ? $user->name : '' ?>" > 
                   <div class="form-error" name="name_error" style="color: red"><?php echo form_error('name') ?></div> 
               </td>
           </tr> 

           <tr>
            <th>Email</th>
            <td><input type="text" class="form-control" name="email" value="<?php echo isset($user->email) ? $user->email : '' ?>"> 
             <div class="form-error" name="name_error" style="color: red"><?php echo form_error('email') ?></div> 
         </td>
         
     </tr>

     <tr>
        <th>Số điện thoại</th>
        <td><input type="text" name="phone" class="form-control"  value="<?php echo isset($user->phone) ? $user->phone : '' ?>">
            <div class="form-error" name="name_error" style="color: red"><?php echo form_error('phone') ?></div> 
        </td>

    </tr>


    <tr>
        <th>Ghi chú</th>
        <td><textarea name="message" class="form-control" placeholder="vui lòng nhập địa chỉ và thời gian nhận hàng"></textarea>
            <div class="form-error" name="name_error" style="color: red"><?php echo form_error('message') ?></div>  
        </td>

    </tr>

    <tr>


    </tr>
    <tr>
        <th>Payment</th>
        <td><select class="form-control" name="payment">
            <option value="">Vui lòng chọn cổng thanh toán</option>
            <option value="ngan luong">Ngân lượng </option>
            <option value="offline">Thah toán khi nhận hàng</option>
        </select>
        <div class="form-error" name="name_error" style="color: red"><?php echo form_error('payment') ?></div>  
    </td>

</tr>

<tr>
    <th>Tổng tiền</th>
    <td><span class="price"><?php echo number_format($total_amount) ?> VNĐ</span></td>
</tr>
</tbody>

</table>
<input type="submit" class="orange" value="THANH TOÁN" name="submit">
</form>
</div>
</div>