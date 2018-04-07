<?php $this->load->view('admin/admin/head', $this->data); ?>
<hr>
<div style="margin-left: 20px; background-color: #deeefa;">
 <?php  $this->load->view('admin/message', $this->data); ?>
</div>

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
          <h5>Admin list</h5><span style="float: right"><h5> SUM:<?php echo $total; ?></h5></span>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>UserName</th>

                
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($list as $row): {
                  # code...
              } ?>
              <tr class="odd gradeX">
                <td><?php echo $row->id; ?></td>
                <td class="center"> <?php echo $row->name; ?></td>
                <td><?php echo $row->username; ?></td>

                
                
                <td >
                  <a href="<?php echo admin_url('admin/edit/'.$row->id); ?>"><button type="button" class="btn btn-primary" style="float: right">Edit</button>  </a>
                  <a href="<?php echo admin_url('admin/delete/'.$row->id); ?>"><button type="button" class="btn btn-warning" style="float: right">Delete</button></a>
                </td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
</div>

</div>
