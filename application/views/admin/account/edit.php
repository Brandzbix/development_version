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
      <h2>UPDATE ADMIN | DETAILS</h2>
      <ol class="breadcrumb">
   </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="ibox">
		<div class="ibox-title">
		   <h5>UPDATE ADMIN DETAILS</h5>
		</div>
      <div class="ibox-content">
         <form action="<?php echo base_url();?>admin/AccountController/update" method="post">
				<div class="row">
               <?php foreach($result as $key => $value): ?>
                  <div class="col-md-6 col-md-offset-3">
                     <div class="form-group">
                        <label id="firstname">First Name:</label>
                        <input type="text" name="firstname" id="firstname" class="form-control br-0" value="<?php echo $value["first_name"]; ?>">
                        <input type="hidden" name="id" value="<?php echo $value['login_id_pk']; ?>">
                     </div>
                  </div>
                  <div class="col-md-6 col-md-offset-3">
                     <div class="form-group">
                        <label id="lastname">Last Name:</label>
                        <input type="text" name="lastname" id="lastname" class="form-control br-0" value="<?php echo $value["last_name"]; ?>">
                     </div>
                  </div>
                  <div class="col-md-6 col-md-offset-3">
                     <div class="form-group">
                        <label id="phoneno">Phone No:</label>
                        <input type="text" name="phoneno" id="phoneno" class="form-control br-0" value="<?php echo $value["phone"]; ?>">
                     </div>
                  </div>
                  <div class="col-md-6 col-md-offset-3">
   						<div class="form-group">
   							<label id="email">Email:</label>
   							<input type="text" name="email" id="email" class="form-control br-0" value="<?php echo $value["email"]; ?>">
   						</div>
					   </div>
            <div class="col-md-6 col-md-offset-3">
               <div class="form-group">
                  <label id="accesstype">Access Type:</label>
                  <select name="accesstype" id="accesstype" class="form-control">
                     <option>-- Please Select --</option>
                     <option value="1" <?php if($value['account_type'] == '1'): echo 'selected'; endif; ?>>HR</option>
                     <option value="2" <?php if($value['account_type'] == '2'): echo 'selected'; endif; ?>>PTM</option>
                     <option value="3" <?php if($value['account_type'] == '3'): echo 'selected'; endif; ?>>ADMIN</option>
                  </select>
               </div>
            </div>
            <div class="col-md-3 col-md-offset-3">
                  <div class="form-group">
                     <input type="submit" name="submit" id="submit" class="btn btn-info btn-block br-0" value="Update">
                  </div>
            </div>
         <?php endforeach; ?>
         </form>
			</div>
		</div>
	</div>
</div>
<?php
	$this->load->view('admin/layouts/footer');
?>