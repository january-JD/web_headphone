<div class="products-row row">

	<!-- Carousel Heading -->
	<div class="col-lg-12 col-md-12 col-sm-12">

		<div class="carousel-heading">
			<h4><?php echo $catalog->name ?></h4>
			
		</div>

	</div>
	<!-- /Carousel Heading -->

	<!-- Carousel -->
	<div class= " col-lg-12 col-md-12 col-sm-12">

		<?php foreach ($list as $row ): ?>
			<!-- Slide -->
			<div>
				<!-- Carousel Item -->

				<div class="product col-md-4" >

					<div class="product-image ch-info-icons " >
						
						<img src="<?php echo base_url('upload/product/'.$row->image) ?>" alt="Product1" >

						
						<a href="<?php echo base_url('upload/product/'.$row->image) ?>" class="product-hover" >
							<i class="icons icon-eye-1"></i>XEM NHANH
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
							<span class="action-wrapper">
								<i class="icons icon-basket-2"></i>
								<span class="action-name">Mua ngay</span>
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
		<?php endforeach; ?>
		<!-- /Slide -->


		<!-- /Carousel -->
		<div class="pagination">
			<?php echo $this->pagination->create_links() ?>
		</div>


	</div>