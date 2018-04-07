
<?php $this->load->view('admin/product/head', $this->data); ?>




<div style="margin-left: 30px; background-color: #deeefa; margin-top: 60px; ">
	<?php  $this->load->view('admin/message', $this->data); ?>
</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
					<h5>Danh mục sản phẩm</h5><span style="float: right"><h5>SUM: <?php echo $total_rows ?></h5></span>
				</div>
				<div class="widget-content nopadding">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th><i class="icon icon-check"></i></th>
								<th>ID</th>
								<th>Tên sản phẩm</th>
								<th>mã sản phẩm</th>
								<th>Hình ảnh</th>
								<th>Mô tả </th>
								<th>Giá</th>
								<th>Ngày tạo</th>

								<th>Thao tác</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($list as $row): ?>
								<tr class="odd gradeX">
									<td><input type="checkbox" name="" value="<?php echo $row->id ?>"></td>
									<td><?php echo $row->id ?></td>
									<td class="center"><?php echo $row->name ?></td>
									<td class="center"><?php echo $row->code_id ?></td>


									<td>
										<img height="100"  src="<?php echo base_url('upload/product/'.$row->image); ?>"><br>
										<div>
											Đã bán: <?php echo $row->buyed ?> | lượt xem: <?php echo $row->view ?>
										</div>
									</td>
									<td><?php echo $row->description_technical ?></td>


									<td class="gia">
										<?php if($row->discount>0): ?>
											<?php $price_sale=$row->price-$row->discount; ?>
											<div>
												Giá gốc: <span style="color: red;"><?php echo number_format( $row->price) ?> vnđ</span> 
											</div>
											<div>
												Giá sale : <span style="color: red; text-decoration: line-through;"><?php echo number_format($price_sale); ?></span> 
											</div>
										<?php else: ?>
											<div>
												Giá gốc: <span style="color: red;"><?php echo number_format( $row->price) ?> vnđ</span> 
											</div>
										<?php endif; ?>
									</td>



									<td><?php echo $row->create_date?></td>
									<td >
										<a href="<?php echo admin_url('product/edit/'.$row->id); ?>"><button type="button" class="btn btn-success" style="float: right">Cập nhật</button>  </a> 
                                   
										<a href="<?php echo admin_url('product/delete/'.$row->id); ?>"><button type="button" class="btn btn-warning" style="float: right">Xóa</button></a>
									</td>
								</tr>
							<?php endforeach; ?>

						</tbody>
                       
					</table>
                  
				</div>

			</div>
			 <?php echo $this->pagination->create_links() ?>	
			<div class="list_action itemActions" style="float: right">
				<a href="" id="submit" name="submit" class="btn btn-info">
					<span style="color: white">Xóa tất cả</span>
				</a>
			</div>	
			
		</div>
	</div>

</div>

