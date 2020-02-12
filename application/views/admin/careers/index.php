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
		  <h2>Job Applications</h2>        
	 </div>    
	 <div class="col-lg-4">
	<form method='post' action="<?php echo base_url();?>admin/careers" >
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
				<div class="table-responsive">
					<table class="table table-hover table-bordered">
						<thead class="">
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Email</th>
								<th>Phone No</th>
								<th>State</th>
								<th>Seeking Lavel</th>
								<th>It's resolve</th>
								<th>Applied Date</th>
								<th>Action</th>
							 </tr>
						</thead>
						<tbody>
						<?php 
						$sno = $row+1;
							foreach($result as $key => $value): ?>
						<tr>
							<td><?php echo $sno; ?></td>
							<td><?php echo $value['first_name']; ?>&nbsp; <?php echo $value['last_name']; ?></td>
							<td><?php echo $value['email']; ?></td>
							<td><?php echo $value['mobile_no']; ?></td>
							<td><?php echo $value['state']; ?></td>
							<td><?php echo $value['seeking_level']; ?></td>
							<td>
								<select status-id="<?php echo $value["job_application_id_pk"]; ?>" class="form-control" id="status">
										<option value="1" <?php if($value['its_resolve'] == '1'): echo 'selected'; endif; ?>>Yes</option>
										<option value="0" <?php if($value['its_resolve'] == '0'): echo 'selected'; endif; ?>>No</option>
			               </select>
							</td>
							<td>
								<?php 
									echo date('Y-m-d',strtotime($value['apply_date_time']));
								?>
							</td>
							<td>
								<a href="<?php echo base_url().'admin/careers/show/'.$value['job_application_id_pk'];?>" class="btn btn-info btn-xs btn-block br-0">Show</a>
								<a href="<?php echo base_url().'admin/careers/delete/',$value['job_application_id_pk'];?>" class="btn btn-danger btn-xs btn-block br-0">Delete</a>
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
							<th>Created Date</th>
							<th>Seeking Lavel</th>
							<th>It's resolve</th>
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
<script type="text/javascript">
	$('select').on('change',function() {    
	var item =  $(this).val();
	var id   =  $(this).attr("status-id");
	if (confirm('Are you sure you want to do this?')) {
		$.ajax({
			type: "POST",
			url: "<?php echo base_url();?>admin/CareerController/updateJobStatus",
			data:{item:item,id:id},
			success: function(res) {
				if(res){
				  alert(res); 
				}
			}
		});
	}
});
 
$('input[name="radio-btn"]').wrap('<div class="radio-btn"><i></i></div>');
$(".radio-btn").on('click', function () {
    var _this = $(this),
        block = _this.parent().parent();
    block.find('input:radio').attr('checked', false);
    block.find(".radio-btn").removeClass('checkedRadio');
    _this.addClass('checkedRadio');
    _this.find('input:radio').attr('checked', true);
});
$('input[name="check-box"]').wrap('<div class="check-box"><i></i></div>');
$.fn.toggleCheckbox = function () {
    this.attr('checked', !this.attr('checked'));
}
$('.check-box').on('click', function () {
    $(this).find(':checkbox').toggleCheckbox();
    $(this).toggleClass('checkedBox');
});
</script>