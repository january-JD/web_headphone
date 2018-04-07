				<!-- Main Content -->
				<section >
					
					
					
					<!-- Product -->
					<div class="product-single">
						
						<div class="row">
							
							<!-- Product Images Carousel -->
							<div class="col-lg-5 col-md-5 col-sm-5 product-single-image">
								
								<div id="product-slider">
									<ul class="slides">
										<li>
											<img class="cloud-zoom" src="<?php echo base_url('upload/product/'.$product->image) ?>" data-large="<?php echo base_url('upload/product/'.$product->image) ?>"  alt=""/>
											<a class="fullscreen-button" href="<?php echo base_url('upload/product/'.$product->image) ?>">
												<div class="product-fullscreen">
													<i class="icons icon-resize-full-1"></i>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div id="product-carousel">
									<ul class="slides">
										<?php if(is_array($image_list)): ?>
											<?php foreach ($image_list as $img):?>
												<li>
													<a class="fancybox" rel="product-images" href="<?php echo base_url('upload/product/'.$img) ?>"></a>
													<img src="<?php echo base_url('upload/product/'.$img) ?>" data-large="<?php echo base_url('upload/product/'.$img) ?>" alt=""/>
												</li>
											<?php endforeach; ?>
										<?php endif; ?>
										
									</ul>
									<div class="product-arrows">
										<div class="left-arrow">
											<i class="icons icon-left-dir"></i>
										</div>
										<div class="right-arrow">
											<i class="icons icon-right-dir"></i>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Images Carousel -->
							
							<div class="col-lg-7 col-md-7 col-sm-7 product-single-info full-size">
								
								<h1><?php echo $product->name ?></h1>
								
								<table>
									
									
									<tr>
										<td>Mã sản phẩm: </td>
										<td><?php echo $product->code_id ?></td>
									</tr>
								</table>
								
								<p>Giá: </p>
								<?php if($product->discount>0): ?>
									<?php $price_sale=$product->price-$product->discount; ?>
									<div> 
										<span class="price" style="color: red; text-decoration: line-through;"><?php echo number_format( $product->price) ?> vnđ</span> 
									</div><br>
									<div>
										<span class="price" style="color: red;"><?php echo number_format($price_sale); ?> vnđ</span> 
									</div>
								<?php else: ?>
									<div>
										<span class="price" style="color: red;"><?php echo number_format( $product->price) ?> vnđ</span> 
									</div>
								<?php endif; ?>
								
								
								
								<table class="product-actions-single">
									<tr>
										
										
										<td>	
											
											<a href="<?php echo base_url('cart/add/'.$product->id) ?>">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span>
												</span>
											</a>
										</td>
									</tr>
								</table> 
								
								
								
								
								<div class="social-share">
									<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21"style="border:none; overflow:hidden; height:21px; width:100px;"></iframe>
									
									<iframe
									src="https://platform.twitter.com/widgets/tweet_button.html"
									style="width:100px; height:20px;"></iframe>
									
									<!-- Place this tag where you want the +1 button to render. -->
									<div class="g-plusone" data-size="medium"></div>
									
									<!-- Place this tag after the last +1 button tag. -->
									<script type="text/javascript">
										(function() {
											var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
											po.src = 'https://apis.google.com/js/platform.js';
											var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
										})();
									</script>
									
									
									
									<!-- Please call pinit.js only once per page -->
									<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
									
								</div>
								
							</div>
							
						</div>
						
					</div>
					<!-- /Product -->
					
					
					<div class="row">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<!-- Accordion -->
							<div class="accordion">
								
								<ul>
									<!-- Item -->
									<li>
										
										<div class="accordion-header">
											<h4>Description</h4>
											<span class="accordion-button">
												<i class="icons icon-plus-1"></i>
											</span>
										</div>
										<div class="accordion-content page-content">
											<p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. </p>
											<p><strong>Specifications:</strong></p>
											<ul>
												<li><i class="icons icon-right-dir"></i> Speaker type: Hi-Definition MicroSpeaker</li>
												<li><i class="icons icon-right-dir"></i> Frequency range: 25Hz-18.5kHz</li>
												<li><i class="icons icon-right-dir"></i> Impedance (1kHz): 26 Ohms</li>
												<li><i class="icons icon-right-dir"></i> Sensitivity (1mW): 114 dB SPL/mW</li>
												<li><i class="icons icon-right-dir"></i> Cable length (with extension): 18.0 in./45.0 cm (54.0 in./137.1 cm)</li>
											</ul>
											<p>Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. <br><br>
											Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. </p>
											<p class="tags home-green"><strong>Tags:</strong> <a href="#" class="tag-item">digital camera</a>
												<a href="#" class="tag-item">lorem</a>
												<a href="#" class="tag-item">gps</a></p>
											</div>
											
										</li>
										<!-- /Item -->
										
										
									
								
										
									</ul>
									<!-- /Accordion -->
								</div>
								
								
							</div>
							
						</div>
						
						
						
						<!-- New Collection -->
						<div class="products-row row">
							
							<!-- Carousel Heading -->
							<div class="col-lg-12 col-md-12 col-sm-12">
								
								<div class="carousel-heading">
									<h4>SẢN PHẨM CÙNG LOẠI có:<?php echo $total_rows ?></h4>
									<div class="carousel-arrows">
										<i class="icons icon-left-dir"></i>
										<i class="icons icon-right-dir"></i>
									</div>
								</div>
								
							</div>
							<!-- /Carousel Heading -->
							
							<!-- Carousel -->
                         
							<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
								
								<div class="owl-carousel" data-max-items="4">
									
									<!-- Slide -->
								<?php foreach ($list as $row) :?>
									<div>
										<!-- Carousel Item -->
									
										<div class="product">
											
											<div class="product-image">
												<img src="<?php echo base_url('upload/product/'.$row->image) ?>" alt="Product1">
												<a href="" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html"></a></h5>
												<span class="price"><?php echo $row->name ?></span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
												
										</div>
										<!-- /Carousel Item -->
								
									</div>
									<!-- /Slide -->
								<?php endforeach; ?>
									
						
									
								</div>
							</div>
				
						</div>
						<!-- /New Collection -->
						
						
						
					</section>
				<!-- /Main Content -->