<?php 
	$this->load->view('admin/layouts/header');
?>
<style type="text/css">
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    justify-content: center;

}
.pagination a:active{
	background-color: #192932;
	color:white;
}
tr td{
	color:#192932;
	font-family: 'Poppins', sans-serif;
	font-weight: 100;
	font-style: normal; 
	font-size: 16px;
}
</style>
<div class="row  border-bottom white-bg dashboard-header">
    <div class="col-lg-8">
        <h2>Accounts Details</h2>        
    </div>    
    <div class="col-lg-4">
   <form method='post' action="<?php echo base_url();?>admin/account" >
            <div class="input-group">
                <input type="text" name="search" placeholder="Search" class="form-control" value='<?= $search ?>'>
                <span class="input-group-btn">
                    <button type='submit' name='submit' value='Submit' class="btn btn-primary"><i class="fa fa-search"></i></button> 
                </span>
            </div>
        </form>
    </div>
</div>
<br/>
<?php 
   if(!empty($this->session->flashdata('message'))): ?>
<div class="row">
   <div class="col-md-6 col-md-offset-3  text-center">
      <div class="alert <?php print_r($this->session->flashdata('alert-class')); ?> text-center">
         <?php print_r($this->session->flashdata('message')['message']); ?>
      </div>
   </div>
</div>
<?php endif; ?>
<div class="row margin-top20">
   <div class="col-lg-12">
      <div class="ibox float-e-margins">
         <div class="ibox-content">
            <table class="table table-hover table-bordered">
               <thead class="bg-success">
                  <tr>
                     <th>#</th>
                     <th>First Name</th>
                     <th>Last Name</th>
                     <th>Email</th>
                     <th>Phone No</th>
                     <th>Account Status</th>
                     <th>Created Date</th>
                     <th>Action</th>
                   </tr>
               </thead>
               <tbody>
               <?php 
               $sno = $row+1;
	               foreach($result as $key => $value): ?>
               <tr>
                  <td><?php echo $sno; ?></td>
                  <td><?php echo $value['first_name']; ?></td>
                  <td><?php echo $value['last_name']; ?></td>
                  <td><?php echo $value['email']; ?></td>
                  <td><?php echo $value['phone']; ?></td>
                  <td>
                     <select status-id="<?php echo $value["login_id_pk"]; ?>" class="form-control" id="status">
                       <option value="A" <?php if($value['account_status'] == 'A'): echo 'selected'; endif; ?>>Active</option>
                       <option value="D" <?php if($value['account_status'] == 'D'): echo 'selected'; endif; ?>>Deactive</option>
                       <option value="S" <?php if($value['account_status'] == 'S'): echo 'selected'; endif; ?>>Suspended</option>
                     </select>
                  </td>
	               <td><?php echo $value['created_on']; ?></td>
                  <td>
                     <a href="<?php echo base_url().'admin/account/edit/'.$value['login_id_pk'];?>" class="btn btn-success btn-sm btn-block">Edit</a>
                     <a href="<?php echo base_url().'admin/account/delete/',$value['login_id_pk'];?>" class="btn btn-danger btn-sm btn-block">Delete</a>
                  </td>
               </tr>
            	<?php 
            	 $sno++;
           		endforeach;
           		if(count($result) == 0){
				      echo "<tr>";
				      echo "<td colspan='3'>No record found.</td>";
				      echo "</tr>";
				    }
            	?>
               </tbody>
               <tfoot>
               <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Phone No</th>
                  <th>Account Status</th>
                  <th>Created Date</th>
                  <th>Action</th>
               </tr>
               </tfoot>
            </table>
            <div class="pagination-wrapper text-center">
	            <div class="pagination">
					  <?= $pagination; ?>
					</div>
   			</div>
            </div>
      </div>
   </div>
</div>
<?php 
	$this->load->view('admin/layouts/footer');
?>
<script type="text/javascript">
   $('select').on('change',function() {    
   var item =  $(this).val();
   var id   =  $(this).attr("status-id");
   alert(id);
    if (confirm('Are you sure you want to do this?')) {
      $.ajax({
         type: "POST",
         url: "<?php echo base_url();?>admin/AccountController/updateAccountStatus",
         data:{item:item,id:id},
      success: function(res) {
            if(res){
              alert(res); 
            }
         }
      });
   }
});
</script>