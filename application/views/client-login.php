<?php include "layouts/client-header.php"; ?>
<section class="client-login">
	<div class="container-fluid main-cont">
		<div class="row">
			<div class="col-md-12">
				<div class="logo-img">
					<img src="<?php echo base_url(); ?>assets/img/white-logo.png">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 border-box">
				<div class="user-login">
					<div class="login-detail form-button">
						<a href="#" id="view-form">
							<img src="<?php echo base_url(); ?>assets/img/user-login.png">
							<h3>User Login</h3>
						</a>
					</div>				
					
					<div class="user-form" style="display:none;">
						<div class="client-detail-form">
							<h3>User Login</h3>
							<div class="form-group">							
								<input type="email" class="form-control" id="eml" placeholder="abc@gmail.com">
							</div>
							<div class="form-group">							
								<input type="password" class="form-control" id="pwd" placeholder="password">
							</div>
							<div class="form-group">							
								<label class="label-b"><input class="form-check-input" type="checkbox"> Remember Me</label>
							</div>
							<div class="user-btns">
								<a href="index.html" class="user-btn">Login</a>
								<span>or</span>
								<button class="facebook-btn"><i class="fa fa-facebook-official" aria-hidden="true"></i> facebook</button>
								<button class="google-btn"><i class="fa fa-google" aria-hidden="true"></i> Google</button>
								<p>Not Registered? <a class="forgot-opn" href="#">Forget Password?</a><a class="account-crt" style="display:block;" href="#">Create an account</a> </p>
							</div>														
						</div>
						
						<div class="forget-pass" style="display:none;">
							<h3>Rest Password</h3>
							<div class="form-group form-group-sm">
								<label for="firstname" class="control-label">Reg. Mobile</label>
								<input type="text" class="form-control" id="firstname" placeholder="Reg. Mobile">
							</div>
							<div class="user-btns">
								<button class="gen-otp">Generate OTP</button>
							</div>
							<div class="form-group">
								<label for="lastname" class="control-label">OTP</label>
								<input type="otp" class="form-control" id="lastname" placeholder="****">
							</div>
							<div class="otp-btn-submit">
								<button class="send-otp-sub">SUBMIT</button>
							</div>																							
						</div>
						
						<div class="new-pass" style="display:none;">
							<h3>New Password</h3>
							<div class="form-group">	
								<label for="lastname" class="control-label">Password</label>							
								<input type="password" class="form-control" id="pass" placeholder="Password">
							</div>
							<div class="form-group">	
								<label for="lastname" class="control-label">Retype Password</label>
								<input type="password" class="form-control" id="repass" placeholder="Retype password">
							</div>
							<div class="otp-btn-submit">
								<button class="main-sub">SUBMIT</button>
							</div>																							
						</div>
						
						<div class="user-sign" style="display:none;">
							<h3>User Sign Up</h3>
							<div class="form-group">							
								<input type="text" class="form-control" id="name" placeholder="Entar Your Name">
							</div>
							<div class="form-group">							
								<input type="mobile" class="form-control" id="no" placeholder="Entar Mobile No.">
							</div>
							<div class="form-group">							
								<input type="email" class="form-control" id="eml" placeholder="Entar Email id">
							</div>
							<!--<div class="form-group">							
								<input type="password" class="form-control" id="pass" placeholder="Password">
							</div>
							<div class="form-group">							
								<input type="password" class="form-control" id="repass" placeholder="Retype password">
							</div>-->
							<div class="user-btns">
								<button class="user-btn otp-snd">Send OTP</button>
								<span>or</span>
								<button class="facebook-btn"><i class="fa fa-facebook-official" aria-hidden="true"></i> facebook</button>
								<button class="google-btn"><i class="fa fa-google" aria-hidden="true"></i> Google</button>
								<p>Not Registered? 
								<a class="forgot-opn" href="#">Forget Password?</a>
								<a class="login-from" style="display:block;" href="#">Login</a> 
								</p>
							</div>
						</div>
						<div class="otp-pass" style="display:none;">																				
							<div class="form-group">
								<label for="lastname" class="control-label">OTP</label>
								<input type="otp" class="form-control" id="lastname" placeholder="****">
							</div>
							<div class="form-group">
								<label for="lastname" class="control-label">Password</label>							
								<input type="password" class="form-control" id="pass" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="repass" class="control-label">Retype password</label>							
								<input type="retype-pass" class="form-control" id="repass" placeholder="Retype password">
							</div>
							<div class="otp-btn-submit">
								<button class="send-otp">SUBMIT</button>
							</div>																							
						</div>						
					</div>
					
					<!--<div class="user-signUp" style="display:none;">
						<div class="user-sign">
							<h3>User Sign Up</h3>
							<div class="form-group">							
								<input type="text" class="form-control" id="name" placeholder="Entar Your Name">
							</div>
							<div class="form-group">							
								<input type="mobile" class="form-control" id="no" placeholder="Entar Mobile No.">
							</div>
							<div class="form-group">							
								<input type="email" class="form-control" id="eml" placeholder="Entar Email id">
							</div>
							<div class="form-group">							
								<input type="password" class="form-control" id="pass" placeholder="Password">
							</div>
							<div class="form-group">							
								<input type="password" class="form-control" id="repass" placeholder="Retype password">
							</div>
							<div class="user-btns">
								<button class="user-btn">OTP</button>
								<span>or</span>
								<button class="facebook-btn"><i class="fa fa-facebook-official" aria-hidden="true"></i> facebook</button>
								<button class="google-btn"><i class="fa fa-google" aria-hidden="true"></i> Google</button>
								<p>Not Registered? 
								<a href="forget-password.html">Forget Password?</a>
								<a style="display:block;" href="signUp.html">Login</a> 
								</p>
							</div>
						</div>
					</div>-->
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="brand-login">
					<div class="brand-detail">
						<a href="#" id="brand-view">
							<img src="<?php echo base_url(); ?>assets/img/brand-login.png">
							<h3>Brand Login</h3>
						</a>
					</div>
					<div class="brand-form" style="display:none;"> 
						<div class="brand-detail-form">
							<h3>Brand Login</h3>
							<div class="form-group">							
								<input type="email" class="form-control" id="eml" placeholder="abc@gmail.com">
							</div>
							<div class="form-group">							
								<input type="password" class="form-control" id="pwd" placeholder="password">
							</div>
							<div class="form-group">							
								<label class="label-b"><input class="form-check-input" type="checkbox"> Remember Me</label>
							</div>
							<div class="brnad-btns">
								<a href="brand-profile-edit.html" class="brand-btn">Login</a>
								<!--<span>or</span>
								<button class="facebook-btn"><i class="fa fa-facebook-official" aria-hidden="true"></i> facebook</button>
								<button class="google-btn"><i class="fa fa-google" aria-hidden="true"></i> Google</button>-->
								<p>Not Registered? <a class="brnd-forgot-pass" href="#">Forget Password?</a><a style="display:block;" class="crt-brand" href="#">Create an account</a> </p>
							</div>							
						</div>
						
						<div class="brand-sign" style="display:none;">
							<h3>Brand Sign Up</h3>
							<div class="form-group">							
								<input type="text" class="form-control" id="name" placeholder="Entar Company Name">
							</div>
							<div class="form-group">							
								<input type="mobile" class="form-control" id="no" placeholder="Entar Mobile No.">
							</div>
							<div class="form-group">							
								<input type="email" class="form-control" id="eml" placeholder="Entar Email id">
							</div>
							<!--<div class="form-group">							
								<input type="password" class="form-control" id="pass" placeholder="Password">
							</div>
							<div class="form-group">							
								<input type="password" class="form-control" id="repass" placeholder="Retype password">
							</div>-->
							<div class="user-btns">
								<button class="brnd-user-btn">Send OTP</button>								
							</div>
						</div>
						
						<div class="brnd-otp-pass" style="display:none;">																				
							<div class="form-group">
								<label for="lastname" class="control-label">OTP</label>
								<input type="otp" class="form-control" id="lastname" placeholder="****">
							</div>
							<div class="form-group">
								<label for="lastname" class="control-label">Password</label>							
								<input type="password" class="form-control" id="pass" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="repass" class="control-label">Retype password</label>							
								<input type="retype-pass" class="form-control" id="repass" placeholder="Retype password">
							</div>
							<div class="otp-btn-submit">
								<button class="brnd-send-otp">SUBMIT</button>
							</div>																							
						</div>
						
						<div class="brnd-forget-pass" style="display:none;">
							<h3>Rest Password</h3>
							<div class="form-group form-group-sm">
								<label for="firstname" class="control-label">Reg. Mobile</label>
								<input type="text" class="form-control" id="firstname" placeholder="Reg. Mobile">
							</div>
							<div class="user-btns">
								<button class="gen-otp">Generate OTP</button>
							</div>
							<div class="form-group">
								<label for="lastname" class="control-label">OTP</label>
								<input type="otp" class="form-control" id="lastname" placeholder="****">
							</div>
							<div class="otp-btn-submit">
								<button class="brnd-send-otp brnd-repass">SUBMIT</button>
							</div>																							
						</div>
						
						<div class="brnd-new-pass" style="display:none;">
							<h3>New Password</h3>
							<div class="form-group">	
								<label for="lastname" class="control-label">Password</label>							
								<input type="password" class="form-control" id="pass" placeholder="Password">
							</div>
							<div class="form-group">	
								<label for="lastname" class="control-label">Retype Password</label>
								<input type="password" class="form-control" id="repass" placeholder="Retype password">
							</div>
							<div class="otp-btn-submit">
								<button class="main-sub">SUBMIT</button>
							</div>																							
						</div>
						
						
					</div>
					
					<!--<div class="brand-signUp" style="display:none;">
						<div class="brand-sign" style="display:none;">
							<h3>Brand Sign Up</h3>
							<div class="form-group">							
								<input type="text" class="form-control" id="name" placeholder="Entar Your Name">
							</div>
							<div class="form-group">							
								<input type="mobile" class="form-control" id="no" placeholder="Entar Mobile No.">
							</div>
							<div class="form-group">							
								<input type="email" class="form-control" id="eml" placeholder="Entar Email id">
							</div>
							<div class="form-group">							
								<input type="password" class="form-control" id="pass" placeholder="Password">
							</div>
							<div class="form-group">							
								<input type="password" class="form-control" id="repass" placeholder="Retype password">
							</div>
							<div class="user-btns">
								<button class="user-btn">Submit</button>								
							</div>
						</div>
					</div>-->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="skip-btn">
					<a href="<?php echo base_url(); ?>" class="skip">Skip <img src="<?php echo base_url(); ?>assets/img/skip-arrow.png"></a>
				</div>
			</div>
		</div>
	</div>
</section>

</body>


</html>
