
<?php $this->load->view('admin/slide/head', $this->data); ?>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				
					<div class="container">
					<h4 ><i class="far fa-plus-square"></i> Thêm mới bài viết</h4>
					<form action="<?php echo admin_url('slide/add') ?>" enctype="multipart/form-data" method="post" id="form"  novalidate="novalidate">
					<br>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-pills" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home">Thông tin chung</a>
						</li>
					
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						
						
						<div id="home" class="container tab-pane active"><br>
                            
								<div class="form-group">
									<label for="name">tiêu đề:</label>
									<input type="text" class="form-control col-md-4" id="name" name="name">
									  <div class="form-error" name="name_error" style="color: red"><?php echo form_error('name'); ?></div>
								</div>
								<div class="form-group">
									<label for="img">Hình ảnh :</label>
									<input type="file" class="form-control col-md-4" id="image" name="image">
									  <div class="form-error" name="image_error" style="color: red"><?php echo form_error('image'); ?></div>
								</div>

	
						</div>
				
						
						<div class="form-actions">
						<button type="submit" class="btn btn-primary" style="margin-top: 30px;">Thêm</button>	
					</div>
					</form>
					</div>
					
						
				</div>
				
				



			</div>
		</div>
	</div>
</div>
