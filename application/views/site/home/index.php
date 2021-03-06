


<?php $this->load->view('site/slider',$this->data); ?>

<!-- Featured Products -->
<div class="products-row row">

	<!-- Carousel Heading -->
	<div class="col-lg-12 col-md-12 col-sm-12">

		<div class="carousel-heading">
			<h4>Sản phẩm nổi bật</h4>
			<div class="carousel-arrows">
				<i class="icons icon-left-dir"></i>
				<i class="icons icon-right-dir"></i>
			</div>
		</div>

	</div>
	<!-- /Carousel Heading -->

	<!-- Carousel -->
	<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">

		<div class="owl-carousel" data-max-items="3">
			<?php foreach ($product as $row ): ?>
				<!-- Slide -->
				<div>
					<!-- Carousel Item -->

					<div class="product">

						<div class="product-image">
							<img src="<?php echo base_url('upload/product/'.$row->image) ?>" alt="Product1">
							<a href="<?php echo base_url('product/view/'.$row->id) ?>" class="product-hover">
								<i class="icons icon-eye-1"></i> Xem nhanh
							</a>
						</div>

						<div class="product-info">
							<h5><a href="<?php echo base_url('product/view/'.$row->id) ?>"><?php echo $row->name ?></a></h5>


							<?php if($row->discount>0): ?>
								<?php $price_sale=$row->price-$row->discount; ?>
								<div> 
									<span class="price" style="color: red; text-decoration: line-through;"><?php echo number_format( $row->price) ?> vnđ</span> 
								</div>
								<div>
									<span class="price" style="color: red;"><?php echo number_format($price_sale); ?></span> 
								</div>
							<?php else: ?>
								<div>
									<span class="price" style="color: red;"><?php echo number_format( $row->price) ?> vnđ</span> 
								</div>
							<?php endif; ?>

							<div class="rating readonly-rating" data-score="4"></div>
						</div>

						<div class="product-actions">
                       
                               
								<span class="add-to-cart">
									 <a href="<?php echo base_url('cart/add/'.$row->id) ?>">
									<span class="action-wrapper">										
										<i style="color: #fff" class="icons icon-basket-2"></i>
										<span class="action-name">Add to cart</span>
									</span>	
									 </a>								
								</span>
							   
                        


						</div>

					</div>
					<!-- /Carousel Item -->
				</div>
			<?php endforeach; ?>
			<!-- /Slide -->
		</div>
	</div>
	<!-- /Carousel -->

</div>
<!-- /Featured Products -->


<div class="products-row row">

	<!-- Carousel Heading -->
	<div class="col-lg-12 col-md-12 col-sm-12">

		<div class="carousel-heading">
			<h4>TẤT CẢ SẢN PHẨM</h4>
			<div class="carousel-arrows">
				<i class="icons icon-left-dir"></i>
				<i class="icons icon-right-dir"></i>
			</div>
		</div>

	</div>
	<!-- /Carousel Heading -->

	<!-- Carousel -->
	<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">

		<div class="owl-carousel" data-max-items="3">
			<?php foreach ($product_all as $row ): ?>
				<!-- Slide -->
				<div>
					<!-- Carousel Item -->

					<div class="product">

						<div class="product-image">
							<img src="<?php echo base_url('upload/product/'.$row->image) ?>" alt="Product1">
							<a href="<?php echo base_url('product/view/'.$row->id) ?>" class="product-hover">
								<i class="icons icon-eye-1"></i> Xem nhanh
							</a>
						</div>

						<div class="product-info">
							<h5><a href="<?php echo base_url('product/view/'.$row->id) ?>"><?php echo $row->name ?></a></h5>


							<?php if($row->discount>0): ?>
								<?php $price_sale=$row->price-$row->discount; ?>
								<div> 
									<span class="price" style="color: red; text-decoration: line-through;"><?php echo number_format( $row->price) ?> vnđ</span> 
								</div>
								<div>
									<span class="price" style="color: red;"><?php echo number_format($price_sale); ?></span> 
								</div>
							<?php else: ?>
								<div>
									<span class="price" style="color: red;"><?php echo number_format( $row->price) ?> vnđ</span> 
								</div>
							<?php endif; ?>

							<div class="rating readonly-rating" data-score="4"></div>
						</div>

						<div class="product-actions">
                       
                               
								<span class="add-to-cart">
									 <a href="<?php echo base_url('cart/add/'.$row->id) ?>">
									<span class="action-wrapper">										
										<i style="color: #fff" class="icons icon-basket-2"></i>
										<span class="action-name">Add to cart</span>
									</span>	
									 </a>								
								</span>
							   
                        


						</div>

					</div>
					<!-- /Carousel Item -->
				</div>
			<?php endforeach; ?>
			<!-- /Slide -->
		</div>
	</div>
	<!-- /Carousel -->

</div>












<!-- Product Brands -->

<!-- /Product Brands -->

