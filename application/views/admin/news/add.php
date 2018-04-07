
<?php $this->load->view('admin/news/head', $this->data); ?>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				
					<div class="container">
					<h4 ><i class="far fa-plus-square"></i> Thêm mới bài viết</h4>
					<form action="<?php echo admin_url('news/add') ?>" enctype="multipart/form-data" method="post" id="form"  novalidate="novalidate">
					<br>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-pills" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home">Thông tin chung</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " data-toggle="tab" href="#menu1">SEO Onepage</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#menu2">Bài viết</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						
						
						<div id="home" class="container tab-pane active"><br>
                            
								<div class="form-group">
									<label for="name">tiêu đề:</label>
									<input type="text" class="form-control col-md-4" id="title" name="title">
									  <div class="form-error" name="name_error" style="color: red"><?php echo form_error('title'); ?></div>
								</div>
								<div class="form-group">
									<label for="img">Hình ảnh :</label>
									<input type="file" class="form-control col-md-4" id="image_link" name="image_link">
									  <div class="form-error" name="image_error" style="color: red"><?php echo form_error('image_link'); ?></div>
								</div>
	
						</div>
					    <div id="menu1" class="container tab-pane fade col-md-11">
					    	<label for="name">Meta_desc :</label>
                            <span><textarea cols="" rows="4" id="meta_desc" name="meta_desc" class="form-control col-md-4" ></textarea></span><br>
                             <div class="form-error" name="image_error" style="color: red"><?php echo form_error('meta_desc'); ?></div>

                            <label for="name">Meta_key :</label>
                            <span><textarea cols="" rows="4" id="meta_key" name="meta_key" class="form-control col-md-4" ></textarea></span><br>
                             <div class="form-error" name="image_error" style="color: red"><?php echo form_error('meta_key'); ?></div>
					    </div>
						<div id="menu2" class="container tab-pane fade col-md-11"><br>
							<textarea name="content_nd" id="content_nd"></textarea>
							<script>CKEDITOR.replace('content_nd');</script>
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
