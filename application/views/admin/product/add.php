
<?php $this->load->view('admin/product/head', $this->data); ?>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="container">
					<h3 ><i class="far fa-plus-square"></i> Thêm mới sản phẩm</h3>	
					<br>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-pills" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home">Thông tin chung</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#menu2">Bài viết</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div id="home" class="container tab-pane active"><br>

							<form action="<?php echo admin_url('product/add') ?>" class="col-md-4" enctype="multipart/form-data" method="post" id="form">
								<div class="form-group">
									<label for="name">Tên sản phẩm:</label>
									<input type="text" class="form-control" id="name" name="name">
									<div class="form-error" name="name_error" style="color: red"><?php echo form_error('name'); ?></div>
								</div>
								<div class="form-group">
									<label for="name">mã sản phẩm:</label>
									<input type="text" class="form-control" id="code_id" name="code_id">
									<div class="form-error" name="name_error" style="color: red"><?php echo form_error('code_id'); ?></div>
								</div>
								<div class="form-group">
									<label for="img">Hình ảnh :</label>
									<input type="file" class="form-control" id="image" name="image">
									<div class="form-error" name="image_error" style="color: red"></div>
								</div>
								<div class="form-group">
									<label for="img"> Ảnh kèm theo :</label>
									<input type="file" class="form-control" id="image_list[]" name="image_list[]" multiple>
									<div class="form-error" name="image_list[]_error" style="color: red"></div>
								</div>
								<div class="form-group">
									<label for="price">Giá:</label>
									<input type="text" class="form-control " id="price" name="price" step="3" class="number_format">
									<div class="form-error" name="price_error" style="color: red"></div>
								</div>
								<div class="form-group">
									<label for="discount">khuyến mãi ( % ) :</label>
									<input type="text" class="form-control" id="discount" name="discount">
									<div class="form-error" name="discount_error" style="color: red"></div>
								</div>
								<label>Thể loại: </label>
								<select class="form-control" name="catalog">
									<option value="Chọn thể loại" ></option>
									<?php foreach ($catalog as $row) :?>
										<?php if(count($row->subs)): ?>
											<optgroup label="<?php echo $row->name ?>">									
												<?php foreach ($row->subs as $sub) : ?>
													<option style="color: black" value="<?php echo $sub->id ?>"><?php echo $sub->name ?></option>
												<?php endforeach; ?>									
											<?php else: ?> 
												<option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>  
											</optgroup>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
								<button type="submit" class="btn btn-primary">Thêm</button>
							</form>
						</div>
						<div id="menu2" class="container tab-pane fade col-md-11"><br>
							<textarea name="ten" id="ten"></textarea>
							<script>CKEDITOR.replace('ten');</script>
						</div>
					</div>
				</div>



			</div>
		</div>
	</div>
</div>
