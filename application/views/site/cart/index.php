<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">

       <div class="carousel-heading">
        <h4>Shopping Cart</h4>
        <span>( <?php echo $total_items ?> ) Sản phẩm</span>
    </div>
    <?php  if($total_items>0 ) :?>
<form action="<?php echo base_url('cart/update') ?>" method=post>
    <table class="shopping-table">

        <tbody><tr>
         <th colspan="2">Sản phẩm</th>

         <th>Giá bán</th>
         <th>Số lượng</th>

         <th>Tổng số</th>
         <th></th>
     </tr>
     <?php $total_amount=0; ?>
     <?php foreach ($carts as $row): ?>
       <?php $total_amount=$total_amount + $row['subtotal']; ?>
       <tr>

        <td class="image-column"><a href="#"><img src="<?php echo base_url('upload/product/'. $row['image']) ?>" alt=""></a></td>
        <td><p><a href="#"><?php echo $row['name'] ?></a></p></td>

        <td><p><?php echo number_format($row['price']); ?></p></td>
        <td class="quantity">
         <input type="text" name="qty_<?php echo $row['id']; ?>" value="<?php echo $row['qty']; ?>">
        
     </td>


     <td><p><?php echo number_format($row['subtotal']); ?> VND</p></td>
     <td>

         <a href="<?php echo base_url('cart/del/'. $row['id']) ?>" class="red-hover"><i class="icons icon-cancel-3"></i> Xóa</a>
     </td>

 </tr> 
<?php endforeach; ?>
<tr>
    <td class="align-right" colspan="5">Tổng tiền thanh toán: </td>
    <td><strong><?php echo number_format($total_amount); ?> VND</strong></td>   
</tr>
<tr>
<td class="align-right" colspan="6">
    <a  style="height: 70px;
    padding: 9px 20px;
    font-size: 18px; background-color: #3399ff;color: #fff;" href="<?php  echo  base_url('cart/del') ?>"><i class="icons icon-cancel-3"></i> XÓA TOÀN BỘ</a> 
    
    <input style="margin-bottom: 20px;" class="big" type="submit" value="CẬP NHẬT"><br>
   
    <a  style="height: 70px;margin-right: 50px;
    padding: 9px 20px;
    font-size: 18px; background-color:#e74c3c;color: #fff;" href="<?php echo site_url('order/checkout') ?>">MUA HÀNG</a>
</td>    
</tr>

</tbody>
</table> 
</form>
<?php else: ?>
    <h4>không có sản phẩm nào trong giỏ hàng</h4>
<?php endif; ?>                           
</div>
</div>
