<?php 
	$this->load->view('admin/layouts/header');
?>
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:100,200,200i,300,300i,400,400i,500,600,600i,700,700i,900,900i" rel="stylesheet">

<style type="text/css">
	/*Font Slim*/
	.ft-s{
		color: black;
   	font-family: "Source sans pro", Arial, Helvetica, sans-serif;
   	font-weight: 400;
   	font-style: normal;
    	font-size: 16px;
    	padding:3px;
		text-align: justify;
    	text-justify: inter-word;    
		display: inline;
	}
	.resume li{
		display: inline;
		padding-left: 10px;
	}
	.ibox-content{
		background-color: #F0F8FF;
	}
	.form-control[disabled], fieldset[disabled] .form-control{
		background-color: #fff;
	}
	hr{
		border: 1px solid #fff;
		width: 100%;
	}
</style>
<div class="row  border-bottom white-bg dashboard-header">
	<div class="col-lg-8">
		<h2>User Profile Details</h2>
	</div>
</div>
<div class="row margin-top20">
	<div class="col-lg-12">
		<div class="ibox float-e-margins">
			<div class="ibox-content">
				<?php foreach($data as $key => $value): ?>
				<div class="row">
					<div class="col-md-8 col-xs-6"><img src="<?php echo base_url();?>assets/admin_assets/img/users.png"> <p class="ft-s">User Information:</p></div>
					<div class="col-md-4 col-xs-6">
						<ul class="resume">
							<li class="">Resume:</li>
							<li><a href="<?php echo base_url();?>assets/resume/<?php echo $value["resume"]; ?>" class="btn btn-info btn-xs br-0" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> View</a></li>
							<li><a href="<?php echo base_url();?>assets/resume/<?php echo $value["resume"]; ?>" download class="btn btn-primary btn-xs br-0"><i class="fa fa-download" aria-hidden="true"></i> Download</a></li>
						</ul>
					</div>
				</div>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">First Name:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["first_name"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Last Name:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["last_name"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Email:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["email"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Phone No:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["mobile_no"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">State:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["state"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Country:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["country"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Seeking Level:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["seeking_level"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Current Job Title:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["current_job_title"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Annual Remenueration:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["annual_remuneration"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Annual Remenueration Expected:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["annual_remuneration_expected"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Persent Orgnaization:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["present_organization"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Present Industry:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["present_industry"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Experience:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["experience"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Skills:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["skills"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Relocate:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["relocate"]; ?></div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s">Additional Information:</div>
							<div class="col-md-3 col-xs-6 col-sm-6 ft-s"><?php echo $value["additional_information"]; ?></div>
					</div>
					<hr class="hr-line-dashed">
					<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<div class="col-md-12 col-xs-12 col-sm-12">
										<label id="mobile_no">Send SMS</label>
									</div>
									<div class="col-md-12 col-xs-12 col-sm-12">
										<div class="form-group">
											<input type="text" class="form-control" name="mobile_no" value="<?php echo $value["mobile_no"]; ?>" id="mobile_no" disabled title="This felid is not editable">
										</div>
									</div>
									<div class="col-md-12 col-xs-12 col-sm-12">
										<div class="form-group">
											<textarea id="message" rows="10" class="form-control" placeholder ="Type message here.."></textarea>
										</div>
									</div>
									<div class="col-md-4 col-xs-12 col-sm-12">
										<input type="button" name="" class="btn btn-danger btn-block br-0" value="Send">
									</div>							
								</div>
						</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<br/>
<br/>
<?php 
	$this->load->view('admin/layouts/footer');
	?>