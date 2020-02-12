<?php $this->load->view('admin/layouts/header');

 ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Dashboard</h2>        
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
		<div class="col-md-3 col-lg-3">
			<div class="ibox float-e-margins ">
				<div class="ibox-title">
                    <h5 ><a href="" >Products</a></h5>
                </div>
                <div class="ibox-content ">
	                <h1 class="no-margins "><a href="#"><?php echo $total_products; ?></a></h1>	                
	                <small class="">Total Products</small>
	            </div>
			</div>
		</div>
	</div>
	<hr class="hr-line-dashed">
</div>
<?php $this->load->view('admin/layouts/footer'); ?>