
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <div class="carousel-heading">
                                <h4>THÔNG TIN THÀNH VIÊN</h4>
                                <div class="carousel-arrows">
                                    <a href="<?php echo base_url() ?>"><i class="icons icon-reply"></i></a>
                                </div>
                            </div>
                            
                            <table class="orderinfo-table">
                                
                                <tbody><tr>
                                    <th>Họ & Tên</th>
                                    <td><?php echo $user->name ?></td>
                                </tr> 
                                
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $user->email ?></td>
                                </tr>
                                
                                <tr>
                                    <th>Số điện thoại</th>
                                    <td><?php echo $user->phone ?></td>
                                </tr>
                                
                                <tr>
                                    <th>Địa chỉ</th>
                                    <td><?php echo $user->address ?></td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                        <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-6 align-left">
                                       <a href="<?php echo site_url('user/edit') ?>"><input type="submit" class="orange" value="Cập nhật"></a> 
                            </div>
                        </div>
                      
                        </div>
</div>
