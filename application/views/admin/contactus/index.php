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
</style>
<div class="row  border-bottom white-bg dashboard-header">
	 <div class="col-lg-8">
		  <h2>Contact Us</h2>        
	 </div>    
	 <div class="col-lg-4">
	<form method='post' action="<?php echo base_url();?>admin/contactus/" >
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
	<div class="col-md-8 col-md-offset-2 text-center">
		<div class="alert <?php echo $this->session->flashdata('alert-class'); ?> text-center">
			<?php echo $this->session->flashdata('message'); ?>
		</div>
	</div>
</div>
<?php endif; ?>
<div class="row margin-top20">
	<div class="col-lg-12">
		<div class="ibox float-e-margins">
			<div class="ibox-content">
				<div  class="table-responsive">
				<table class="table table-bordered">
					<thead class="">
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						 </tr>
					</thead>
					<tbody>
					<?php 
					$sno = $row+1;
						foreach($result as $key => $value): ?>
					<tr>
						<td><?php echo $sno; ?></td>
						<td><?php echo $value['first_name']; ?> <?php echo $value['last_name']; ?></td>
						<td>
							<?php echo $value['email']; ?>
						</td>
						<td>
							<?php echo $value['phone']; ?>
						</td>
						<td width="25%;" class="text-justify">
							<?php 
							$string 	=	 $value['message']; 
							if (strlen($string) > 200) {
						   // truncate string
						   $stringCut = substr($string, 0, 200);
						   $endPoint = strrpos($stringCut, ' ');

						    //if the string doesn't contain any space then it will cut without word basis.
						   $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
						   $url = base_url().'admin/contactus/show/'.$value['contact_id_pk'];
						   $string .= "... <a href='$url'>Read More</a>";
							}
							echo $string;	
							?>
						</td>
						<td>
							<?php 
								$old_date_timestamp = strtotime($value['current_date_time']);
                        $new_date = date('d-m-Y', $old_date_timestamp); 
								echo $new_date; 
							?>
						</td>
						<td>
							<a href="<?php echo base_url().'admin/contactus/compose/'.$value['contact_id_pk'];?>" class="btn  btn-xs btn-success btn-block">Reply</a>
							<a href="<?php echo base_url().'admin/contactus/show/'.$value['contact_id_pk'];?>" class="btn  btn-xs btn-info btn-block">Show</a>
							<a href="<?php echo base_url().'admin/contactus/delete/',$value['contact_id_pk'];?>" class="btn  btn-xs btn-danger btn-block">Delete</a>
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
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Message</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
					</tfoot>
				</table>
			</div>
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
