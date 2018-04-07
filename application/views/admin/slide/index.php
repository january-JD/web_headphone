
<?php $this->load->view('admin/slide/head', $this->data); ?>




<div style="margin-left: 30px; background-color: #deeefa; margin-top: 60px; ">
	<?php  $this->load->view('admin/message', $this->data); ?>
</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
					<h5>Danh mục bài viết</h5>
				</div>
				<div class="widget-content nopadding">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th><i class="icon icon-check"></i></th>
								<th>ID</th>
								<th>tiêu đề</th>
								<th>hình ảnh</th>
								<th>Thao tác</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($list as $row): ?>
								<tr class="odd gradeX">		
								    <td><input type="checkbox" name="" value="<?php echo $row->id ?>"></td>					
									<td><?php echo $row->id ?></td>
									<td class="center"><?php echo $row->name ?></td>                             
                                   
									<td>
										<img height="100"  src="<?php echo base_url('upload/slide/'.$row->image); ?>"><br>
										
									</td>

							
									<td >
										<a href="<?php echo admin_url('slide/edit/'.$row->id); ?>"><button type="button" class="btn btn-success" style="float: right">Cập nhật</button>  </a> 
                                   
										<a href="<?php echo admin_url('slide/delete/'.$row->id); ?>"><button type="button" class="btn btn-warning" style="float: right">Xóa</button></a>
									</td>
								</tr>
							<?php endforeach; ?>

						</tbody>
                       
					</table>
                  
				</div>

			</div>
				
			<div class="list_action itemActions" style="float: right">
				<a href="" id="submit" name="submit" class="btn btn-info">
					<span style="color: white">Xóa tất cả</span>
				</a>
			</div>	
			
		</div>
	</div>

</div>

