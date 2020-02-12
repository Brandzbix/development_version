<?php 
	$data['title'] = 'Admin accounts | appletherapeutics';
	$this->load->view('admin/layouts/header',$data);
?>
	<style type="text/css">
   .btn-default{
   color:#fff;
   background: #439DFF;
   }
   .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
   background-color: #273038;
   color: #FFFFFF;
   }
</style>
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>CREATE ADMIN | ACCOUNTS</h2>
      <ol class="breadcrumb">
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="ibox">
		<div class="ibox-title">
		   <h5>CREATE ADMIN ACCOUNTS</h5>
		</div>
      <div class="ibox-content">
         <?php 
            if(!empty($this->session->flashdata('message'))): ?>
            <div class="row">
               <div class="col-md-6 col-md-offset-3 text-center">
                  <div class="alert <?php print_r($this->session->flashdata('alert-class')); ?> text-center">
                     <?php print_r($this->session->flashdata('message')); ?>
                  </div>
               </div>
            </div>
         <?php endif; ?>
         <form action="<?php echo base_url();?>admin/AccountController/store" method="post">
				<div class="row">
                  <div class="col-md-6 col-md-offset-3">
                     <div class="form-group">
                        <label id="firstname">First Name:</label>
                        <input type="text" name="firstname" id="firstname" class="form-control br-0" placeholder="Enter first name here">
                     </div>
                  </div>
                  <div class="col-md-6 col-md-offset-3">
                     <div class="form-group">
                        <label id="lastname">Last Name:</label>
                        <input type="text" name="lastname" id="lastname" class="form-control br-0" placeholder="Enter last name here">
                     </div>
                  </div>
                  <div class="col-md-6 col-md-offset-3">
                     <div class="form-group">
                        <label id="phoneno">Phone No:</label>
                        <input type="text" name="phoneno" id="phoneno" class="form-control br-0" placeholder="Enter phone number here">
                     </div>
                  </div>
                  <div class="col-md-6 col-md-offset-3">
   						<div class="form-group">
   							<label id="email">Email:</label>
   							<input type="text" name="email" id="email" class="form-control br-0" placeholder="Enter user name here">
   						</div>
					   </div>
            <div class="col-md-6 col-md-offset-3">
                  <div class="form-group">
                     <label id="password">Password:</label>
                     <input type="text" name="password" id="password" class="form-control br-0" placeholder="Enter password here">
                  </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
               <div class="form-group">
                  <label id="accesstype">Access Type:</label>
                  <select name="accesstype" id="accesstype" class="form-control">
                     <option>-- Please Select --</option>
                     <option value="1">HR</option>
                     <option value="2">PTM</option>
                     <option value="3">ADMIN</option>
                  </select>
               </div>
            </div>
            <div class="col-md-3 col-md-offset-3">
                  <div class="form-group">
                     <input type="submit" name="submit" id="submit" class="btn btn-info btn-block br-0" value="Submit">
                  </div>
            </div>
         </form>
			</div>
		</div>
	</div>
</div>
<?php
	$this->load->view('admin/layouts/footer');
?>