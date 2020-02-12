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
	 <div class="col-lg-10">
		  <h2>Patient Information</h2>        
	 </div>    

</div>
<br/>
<?php 
	if(!empty($this->session->flashdata('message'))): ?>
<div class="row">
	<div class="col-md-8 col-md-offset-2 text-center">
		<div class="alert <?php echo $this->session->flashdata('alert-class'); ?> text-center">
			<?php print_r($this->session->flashdata('message')['message']); ?>
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
							<th>Meta Image</th>
							<th>Page Name</th>
							<th>Meta Title</th>
							<th>Meta Description</th>
							<th>Meta Keyword</th>
							<th>Action</th>
						 </tr>
					</thead>
					<tbody>
					<?php 
					$sno = 1;
					foreach($pages as $key => $value): ?>
					<tr>
						<td><?php echo $sno; ?></td>
						<td>
							<img src="<?php echo base_url().'assets/meta_image/'.$value['meta_image'];?>" alt="<?php echo $value['url_slug']; ?>" class="img-responsive">
						</td>
						<td>
							<?php echo $value["url_slug"]; ?>
						</td>
						<td><?php echo $value['meta_title']; ?></td>
						<td><?php echo $value['meta_description']; ?></td>
						<td><?php echo $value['meta_keyword']; ?></td>
						<td>
							<a href="<?php echo base_url().'admin/meta/pages/edit/'.$value['page_id_fk'];?>" class="btn btn-xs btn-success btn-block">Edit</a>
							<a href="<?php echo base_url().'admin/meta/pages/',$value['page_id_fk'];?>" class="btn  btn-xs btn-danger btn-block">Delete</a>
						</td>

					</tr>
					<?php 
					 $sno++;
					endforeach;
					?>
					</tbody>
					<tfoot>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Discription</th>
						<th>Image</th>
						<th>Post Date</th>
						<th>Action</th>
					</tr>
					</tfoot>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	$this->load->view('admin/layouts/footer');
?>
