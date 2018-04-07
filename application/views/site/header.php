
<link rel="stylesheet" type="text/css" href="<?php echo public_url()?>/site/js/jquery-ui-1.12.1.custom/jquery-ui.css">
<script type="text/javascript" src="<?php echo public_url()?>/site/js/jquery-ui-1.12.1.custom/jquery-ui.js"></script>





<script type="text/javascript">
$(function()
{  
    //sử dụng autocomplete với input có id = key
    $( "#text-search" ).autocomplete({
        source:'<?php echo site_url('product/search/1') ?>', //link xử lý dữ liệu tìm kiếm
    });
});
</script>
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<!-- Top Header -->
					<div id="top-header" class="style2">
						
						<div class="row">
							
							<nav id="top-navigation" class="col-lg-12 col-md-12 col-sm-12">
								<ul class="pull-right">
									<li><a href="<?php echo site_url('user/index') ?>">My Account</a></li>
									<li><a href="orders_list.html">List Order</a></li>
									<li><a href="<?php echo site_url('order/checkout') ?>">Checkout</a></li>
									<li><a href="<?php echo site_url('lienhe/index') ?>">About Us</a></li>
									<li><a href="<?php echo base_url('contact/index') ?>">Contact</a></li>
								</ul>
							</nav>
							
						</div>
						
					</div>
					<!-- /Top Header -->
					
					
					
					<!-- Main Header -->
					<div id="main-header" class="style2">
						
						<div class="row">
							
							<div id="logo" class="col-lg-4 col-md-4 col-sm-4">
								<a href="<?php echo public_url() ?>/site/img/logo.png"><img src="img/logo.png" alt="Logo"></a>
							</div>
							
							<nav id="middle-navigation" class="col-lg-8 col-md-8 col-sm-8">
								<ul class="pull-right">
									
									
												<li class="orange"><a href="<?php echo base_url('cart') ?>"><i class="icons icon-basket-2"></i><?php echo $total_items ?></a>
										   
                                    	<ul id="cart-dropdown" class="box-dropdown parent-arrow">
                                    		 <?php $total_amount=0; ?>
										<?php foreach ($carts as $row): ?>
											  <?php $total_amount=$total_amount + $row['subtotal']; ?>
											<li>
                                            	<div class="box-wrapper parent-border">
                                        
                                                    
                                                    <table class="cart-table">
                                                    	<tr>
                                                    		 <td class="image-column"><a href="#"><img src="<?php echo base_url('upload/product/'. $row['image']) ?>" alt=""></a></td>
                                                            <td>
                                                                <h6><?php echo $row['name'] ?></h6>
                                                               
                                                            </td>
                                                            <td>
                                                            	<span class="quantity"><span class="light" name="qty_<?php echo $row['id']; ?>" value=""><?php echo $row['qty']; ?>x</span><?php echo number_format($row['price'])  ?></span>
                                                                <a href="<?php echo base_url('cart/del/'. $row['id']) ?>" class="parent-color">Remove</a>
                                                            </td>
                                                        </tr>
                                                       
                                                    </table>
                                                    
                                                    <br class="clearfix">
                                                </div>
                                                 <?php endforeach; ?>
												<div class="footer">
													<table class="checkout-table pull-right">
                                                    	
                                                      
                                                        <tr>
                                                        	<td class="align-right"><strong>Total:</strong></td>
                                                            <td><strong class="parent-color"><?php echo number_format($total_amount); ?> VND</strong></td>
                                                        </tr>
                                                    </table>
												</div>
                                                 
                                                <div class="box-wrapper no-border">
                                                    <a class="button pull-right parent-background" href="<?php echo site_url('order/checkout') ?>">Checkout</a>
													<a class="button pull-right" href="<?php echo base_url('cart') ?>">View Cart</a>
                                                </div>
											</li>
										
										</ul>
                                  
                                    </li>
                                      <li class="blue">
										<a href="<?php echo site_url('user/logout') ?>"><i class="icons icon-logout"></i>Logout</a>
                                    </li>
                                    	<?php if(isset($user_info)): ?>
                                    		<li class="login-create purple" style="background-color: #6600ff; color: #fff" >
                                    	<i style="color: #fff" class="icons icon-user"></i>
                                        <p>Hello :<a href="<?php echo site_url('user/index') ?>" style="font-weight: bold;color: #fff"><?php echo $user_info->name ?></a></p>
										
                                    </li>
                                  
                                    	<?php else: ?>
                                    <li class="" style="background-color: #6600cc;">
                                    	<a href="<?php echo site_url('user/login') ?>"><i class="icons icon-user"></i>Login</a>
										
										<ul id="login-dropdown" class="box-dropdown">
											<li>
                                            	<div class="box-wrapper">
                                                    <h4>LOGIN</h4>
                                                    <div class="iconic-input">
                                                        <input type="text" placeholder="Username">
                                                        <i class="icons icon-user-3"></i>
                                                    </div>
                                                    <div class="iconic-input">
                                                        <input type="text" placeholder="Password">
                                                        <i class="icons icon-lock"></i>
                                                    </div>
                                                    <input type="checkbox" id="loginremember"> <label for="loginremember">Remember me</label>
                                                    <br>
                                                    <br>
                                                    <div class="pull-left">
                                                        <input type="submit" class="orange" value="Login">
                                                    </div>
                                                    <div class="pull-right">
                                                        <a href="#">Forgot your password?</a>
                                                        <br>
                                                        <a href="#">Forgot your username?</a>
														<br>
                                                    </div>
                                                    <br class="clearfix">
                                                </div>
												<div class="footer">
													<h4 class="pull-left">NEW CUSTOMER?</h4>
													<a class="button pull-right" href="create_an_account.html">Create an account</a>
												</div>
											</li>
										</ul>
                                    </li>
                                    <li class="red">
										<a href="<?php echo site_url('user/register') ?>"><i class="icons icon-lock"></i>Account</a>
                                    </li>
									<?php endif; ?>
								</ul>
							</nav>
							
						</div>
						
					</div>
					<!-- /Main Header -->
					
					
					<!-- Main Navigation -->
					<nav id="main-navigation" class="style1">
						<ul>
							
							<li class="home-green current-item">
								<a href="<?php echo base_url() ?>">
									<i class="icons icon-shop-1"></i>
									<span class="nav-caption">Trang Chủ</span>
									
								</a>
								
								
							</li>
							
							<li class="red">
								<a href="category_v1.html">
									<i class="icons  icon-headphones-1"></i>
									<span class="nav-caption">Thương hiệu</span>
							
								</a>
								
								<ul class="wide-dropdown normalAniamtion">
									<li>
										<ul>
											<li><span class="nav-caption">BEATS</span></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> beats solo</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> beats mixr</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> beats pill & beatbox</a></li>
										</ul>
									</li>
									<li>
										<ul>
											<li><span class="nav-caption">SONY</span></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> sony extra bass</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> headphone </a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> speaker</a></li>
											
										</ul>
									</li>
									
								</ul>
								
							</li>
					
							<li class="orange">
								<a href="category_v1.html">
									<i class="icons  icon-music"></i>
									<span class="nav-caption">BEATS</span>
							
								</a>
							</li>
							
							<li class="green">
								<a href="blog.html">
									<i class="icons  icon-music"></i>
									<span class="nav-caption">SONY</span>
								
								</a>
							</li>
							
							<li class="purple">
								<a href="<?php echo site_url('lienhe/index') ?>">
									<i class="icons icon-location-7"></i>
									<span class="nav-caption">Liên hệ</span>
							
								</a>
							</li>
							
							<li class="nav-search">
                                	<i class="icons icon-search-1"></i>
							</li>
							
						</ul>
						
						<div id="search-bar">
							<form action="<?php echo site_url('product/search') ?>" method="get">
									<div class="col-lg-12 col-md-12 col-sm-12">
                            	<table id="search-bar-table">
                                    <tr>
                                    	<td class="search-column-1">
                                         
                                            <input type="text" placeholder="Enter your keyword" aria-autocomplete='list' role='textbox' name="key-search" id="text-search"  value="<?php echo isset($key) ? $key:"" ?>">
                                        </td>
                                      
                                    </tr>
                                </table>
							</div>
							<div id="search-button">
								<input type="submit" value="" name="but" id="but">
								<i class="icons icon-search-1"></i>
							</div>
							</form>
						
						</div>
						
					</nav>
					<!-- /Main Navigation -->
					
				</div>
				
