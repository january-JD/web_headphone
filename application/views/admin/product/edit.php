
<?php $this->load->view('admin/product/head', $this->data); ?>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="container">
					<h3 ><i class="far fa-plus-square"></i> Cập nhật sản phẩm</h3>
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

							<form action="" class="col-md-7" enctype="multipart/form-data" method="post" id="form">
								<div class="form-group">
									<label for="name">Tên sản phẩm:</label>
									<input type="text" class="form-control" id="name" name="name" value="<?php echo $product->name ?>">
									  <div class="form-error" name="name_error" style="color: red"></div>
								</div>
									<div class="form-group">
									<label for="name">mã sản phẩm:</label>
									<input type="text" class="form-control" id="code_id" name="code_id" value="<?php echo $product->code_id ?>">
									  <div class="form-error" name="name_error" style="color: red"></div>
								</div>
								<div class="form-group">
									<label for="img">Hình ảnh :</label>
									<input type="file" class="form-control" id="image" name="image">
									<img style="width: 100px;height: 100px;" src="<?php echo base_url('upload/product/'.$product->image); ?>">
									  <div class="form-error" name="image_error" style="color: red"></div>
								</div>
								<?php $image_list=json_decode($product->image_list); ?>
								
								<div class="form-group">
									
									<label for="image"> Ảnh kèm theo :</label>
									<input type="file" class="form-control" id="image_list" name="image_list[]" multiple>
									<?php foreach ($image_list as $img):?>
										<img style="width: 100px;height: 100px; margin: 5px; float: left;" src="<?php echo base_url('upload/product/'.$img) ?>">
									<?php endforeach; ?>
									  <div class="form-error" name="image_list[]_error" style="color: red"></div>

								</div>

								<br><br><br><br><br><br>

								<div class="form-group">
									<label for="price">Giá:</label>
									<input type="text" class="form-control " id="price" name="price" value="<?php echo $product->price ?>" class="number_format">
									  <div class="form-error" name="price_error" style="color: red"></div>
								</div>
								<div class="form-group">
									<label for="discount">khuyến mãi ( % ) :</label>
									<input type="text" class="form-control" id="discount" value="<?php echo $product->discount ?>" name="discount">
									  <div class="form-error" name="discount_error" style="color: red"></div>
								</div>
								<label>Thể loại: </label>
								<select class="form-control" name="catalog_id">
									<option value="Chọn thể loại" ></option>
									<?php foreach ($catalog as $row) :?>
										<?php if(count($row->subs)): ?>
											<optgroup label="<?php echo $row->name ?>">
												<?php foreach ($row ->subs as $sub) : ?>
                                                 <option value="<?php echo $sub->id ?>"<?php if($sub->id==$product->catalog_id) echo 'selected' ;?>><?php echo $sub->name ?></option>
                                                <?php endforeach; ?>
                                                  <?php else: ?>

								         	<option value="<?php echo $row->id ?>" <?php if($row->id==$product->catalog_id) echo 'selected' ;?>><?php echo $row->name ?></option>
											</optgroup>
								       
								         <?php endif; ?>
								     <?php endforeach; ?>
								</select>

								
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox"> Remember me
									</label>
								</div><br>
								<button type="submit" class="btn btn-primary">Cập nhật</button>
							</form>
						</div>
						<div id="menu2" class="container tab-pane fade col-md-11"><br>
							<textarea name="noidung" id="noidung">
								
								
							</textarea>
							<script>CKEDITOR.replace('noidung');</script>
						</div>
					</div>
				</div>



			</div>
		</div>
	</div>
</div>
