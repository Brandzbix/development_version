<?php include "layouts/header.php"; ?>
<section class="contact-us">
	<div class="container-fluid">
		<div class="row form-contact">
			<div class="contact-pageheader">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="contact-caption">
								<h1 class="contact-title">Don’t Be Shy, Talk to Us.</h1>								
								</p>
							</div>
						</div>
						<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">
							<div class="contact-form">
								<h3 class="contact-info-title">Contact Us</h3>
								<div class="row">
									<form action="<?php echo base_url(); ?>Sendsms/storeContact" method="post">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="form-group form-new">
												<label class="control-label sr-only " for="Name"></label>
												<input id="name" type="text" placeholder="Name" class="form-control" required>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="form-group form-new">
												<label class="control-label sr-only " for="email"></label>
												<input id="email" type="text" placeholder="Email" class="form-control" required>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="form-group form-new">
												<label class="control-label sr-only " for="Phone"></label>
												<input id="phone" type="text" placeholder="Phone" name="phone" class="form-control" required>
											</div>
										</div>
										<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="form-group form-new">
												<label class="control-label required sr-only" for="select"></label>
												<select class="form-control">
													<option value="">What Are You Getting In Touch?</option>
													<option value="">Relationship</option>
													<option value="">Life Coaching</option>
													<option value="">Leadership</option>
													<option value="">Time Management</option>
												</select>
											</div>
										</div>-->
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20" style="margin-top: 30px;">
											<div class="form-group form-new">
												<label class="control-label sr-only" for="textarea"></label>
												<textarea class="form-control pdt20" id="textarea" name="textarea" rows="4" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
											<button class="btn send-masg" type="submit" name="submit">Send message</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="space-medium">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb60">
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
							<div id="contact-map"></div>
						</div>
						<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-6 col-xs-12">
							<div class="">
								<h3 class="title-bold">Contact Info</h3>
								<p>Please help us serve you better by sharing the following information.
								</p>
							</div>
							<div class="contact-section">
								<div class="contact-icon"><i class="fa fa-map-marker"></i></div>
								<div class="contact-info">
									<p>951 Meadow View Drive Bristol, Hog Camp Road USA06010</p>
								</div>
							</div>
							 <div class="contact-section">
								<div class="contact-icon"><i class="fa fa-phone"></i></div>
								<div class="contact-info">
									<p>+180-123-4567</p>
								</div>
							</div>
							 <div class="contact-section">
								<div class="contact-icon"><i class="fa fa-envelope"></i></div>
								<div class="contact-info">
									<p>john@lifecoach.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center">
					  Created for <a href="https://goo.gl/NPfPMk" target="_blank">easetemplate</a>
					  </div></div>
				</div>
			</div>-->
		</div>
	</div>
</section>
<?php include "layouts/footer.php"; ?>
