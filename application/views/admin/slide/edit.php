
<?php $this->load->view('admin/slide/head', $this->data); ?>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				
					<div class="container">
					<h4 ><i class="far fa-plus-square"></i> Cập nhật slide mới</h4>
					<form action="" enctype="multipart/form-data" method="post" id="form"  novalidate="novalidate">
					<br>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-pills" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home">Thông tin slide</a>
						</li>
						
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						
						
						<div id="home" class="container tab-pane active"><br>
                            
								<div class="form-group">
									<label for="name">tiêu đề:</label>
									<input type="text" class="form-control col-md-4" id="name" name="name" value="<?php echo $slide->name ?>">
									  <div class="form-error" name="name_error" style="color: red"></div>
								</div>
								<div class="form-group">
									<label for="img">Hình ảnh :</label>
									<input type="file" class="form-control col-md-4" id="image" name="image">
									<img style="width: 100px;height: 100px;" src="<?php echo base_url('upload/slide/'.$slide->image); ?>">
									  <div class="form-error" name="image_error" style="color: red"></div>
								</div>
	
						</div>
					    
					
						<div class="form-actions">
						<button type="submit" class="btn btn-primary" style="margin-top: 30px;">Cập nhật</button>	
					</div>
					</form>
					</div>
					
						
				</div>
				
				



			</div>
		</div>
	</div>
</div>
