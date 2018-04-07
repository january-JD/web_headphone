

<!-- Categories -->
<div class="row sidebar-box purple">

	<div class="col-lg-12 col-md-12 col-sm-12">

		<div class="sidebar-box-heading">
			<i class="icons icon-folder-open-empty"></i>
			<h4>Danh mục</h4>
		</div>

		<div class="sidebar-box-content">
			<ul>
				<?php foreach ($catalog_list as $row): ?>
					<li><a href="<?php echo base_url('product/catalog/'.$row->id) ?>"><?php echo $row->name ?><i class="icons icon-right-dir"></i> </a>
						<ul class="sidebar-dropdown">
							<li>
								<?php if(!empty($row->subs)): ?>
									<ul>
										<?php foreach ($row->subs as $sub ): ?>
											<li><a href="<?php echo base_url('product/catalog/'.$sub->id) ?>"><?php echo $sub->name ?></a></li>

										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</li>                       
						</ul>
					</li>
				<?php endforeach; ?>

			</ul>
		</div>

	</div>

</div>
<!-- /Categories -->





<!-- Carousel -->


<!-- /Carousel -->


<!-- Bestsellers -->
<div class="row sidebar-box red">

	<div class="col-lg-12 col-md-12 col-sm-12">

		<div class="sidebar-box-heading">
			<i class="icons icon-award-2"></i>
			<h4>Sản phẩm bán chạy</h4>
		</div>

		<div class="sidebar-box-content">
			<table class="bestsellers-table">
             <?php foreach ($product_sell as $row ):?>
				<tr>
					<td class="product-thumbnail"><a href="#"><img src="<?php echo base_url('upload/product/'.$row->image) ?>" alt="Product1"></a></td>
					<td class="product-info">
						<p><a href="<?php echo base_url('product/catalog/'.$row->id) ?>"><?php echo $row->name ?></a></p>
						<span class="price"><?php echo $row->price ?></span>
					</td>
				</tr>

				<?php endforeach; ?>

			</table>
		</div>

	</div>

</div>
<!-- /Bestsellers -->


<!-- Tag Cloud -->



<!-- Specials -->
<div class="row products-row sidebar-box orange">

	<div class="col-lg-12 col-md-12 col-sm-12">

		<!-- Carousel Heading -->
		<div class="carousel-heading no-margin">

			<h4><i class="icons icon-magic"></i> đặt biệt</h4>
			<div class="carousel-arrows">
				<i class="icons icon-left-dir"></i>
				<i class="icons icon-right-dir"></i>
			</div>

		</div>
		<!-- /Carousel Heading -->

	</div>

	<!-- Carousel -->
	<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">

		<div class="owl-carousel" data-max-items="1">
        <?php foreach ($product_db as $row):?>
			<!-- Slide -->
			<div>
				<!-- Carousel Item -->
				<div class="product">

					<div class="product-image">
						<img src="<?php echo base_url('upload/product/'.$row->image) ?>" alt="Product1">
						<a href="<?php echo base_url('product/catalog/'.$row->id) ?>" class="product-hover">
							<i class="icons icon-eye-1"></i> Xem nhanh
						</a>
					</div>

					<div class="product-info">
						<h5><a href="<?php echo base_url('product/catalog/'.$row->id) ?>"><?php echo $row->name ?></a></h5>
						<span class="price"><?php echo $row->price ?></span>
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
		</div>

	</div>
	<!-- / Carousel -->


</div>
<!-- /Specials -->


