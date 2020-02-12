<?php 
	include "layouts/header.php";
?>
<section class="user-profile">
	<div class="container-fluid user-pair">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-9 col-lg-9 col-md-12 col-sm-9 col-12">
							<div class="user-pr">
								<img src="<?php echo base_url();?>assets/img/user.png">
								<button class="uplod-img" data-toggle="modal" data-target="#edit-pf">Edit Profile</button>
							</div>
							<div class="user-det">
								<h3>Rajesh Arora</h3>
								<p>PHP Devaloper(3.5 yr)</p>
								<p>Faridabad (Haryana)</p>
								<p>9586956866</p>
								<p>rajesh@gmail.com</p>
																
							</div>
							<div class="uplod-profile">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container profile-back">
		<div class="row">
			<div class="col-xl-9 col-lg-9 col-md-9 col-sm-7 col-12">
				<div class="profile-detaile-upload">
				<!-- summary detail Satart -->
					
					<div class="profile-edit-box">						
						<div class="profile-sum">
							<h3>Parsonal Summary<span style="color:#f00;">*</span></h3>
							<p>Add a personal summary to your profile as a way to introduce who you are.</p>
							<div class="edit-form feedback_form_area">
								<div class="row">
									<div class="col-md-12 summery-text">
										<h3>Summary</h3>
										<p>Highlight your unique experiences, ambitions and strengths.</p>
										<div class="form-group">									
											<textarea rows="6" type="text" id="" class="form-control" ></textarea>
										</div>
										<div class="btn-summary">
											<button class="sum-save">Save</button>
											<button class="sum-cancel">Cancel</button>
										</div>
									</div>
								</div>
							</div>
							<button class="add-summary-btn" id="OpenForm">Add Summary</button>
						</div>
					</div>
					
				<!-- summary detail Satart -->
				
				<!-- carrer detail start -->
				
					<div class="profile-edit-box">						
						<div class="carrer-sum">
							<h3>Carrer History</h3>	
							<div class="save-carrer" style="margin-top:20px;">
								<h4><b style="font-weight:600;">Junior Web Designer</b> at Truxapp pvt. ltd <img src="<?php echo base_url();?>assets/img/edit-pen.png"></h4>
								<h5>Aug 2018 – Present (1 year 3 months)</h5>
								<p>Delhi, India</p>
							</div>
							<div class="save-carrer">
								<h4><b style="font-weight:600;">Junior Web Designer</b> at Truxapp pvt. ltd <img src="<?php echo base_url();?>assets/img/edit-pen.png"></h4>
								<h5>Aug 2018 – Present (1 year 3 months)</h5>
								<p>Delhi, India</p>
							</div>							
							<div class="edit-form carrer-box">
								<div class="row">
									<div class="col-md-12 add-rol-text">
										<h3>Add Role</h3>										
										<div class="form-group">																			
											<label>Job Title<span>*<span></label>
											<input type="text" class="form-control" placeholder="Enter job title">
										</div>
										<div class="form-group">																			
											<label>Roles and Responsibility<span>*<span></label>
											<input type="text" class="form-control" placeholder="Enter Company Name">
										</div>
										<div class="form-group">																			
											<label>Company Name<span>*<span></label>
											<input type="text" class="form-control" placeholder="Enter Company Name">
										</div>
										<div class="form-group">																			
											<label>Location<span>*<span></label>
											<input type="text" class="form-control" placeholder="Enter Location">
										</div>
										<div class="start-date-box">
											<div class="form-group">																			
												<label>Satrt Date<span>*<span></label>
												<select class="months-box form-control">
												  <option value="volvo">Month</option>
												  <option value="saab">Jan</option>
												  <option value="opel">Fab</option>
												  <option value="audi">Mar</option>
												  <option value="saab">Apr</option>
												  <option value="opel">May</option>
												  <option value="audi">Jun</option>
												  <option value="saab">Jul</option>
												  <option value="opel">Aug</option>
												  <option value="audi">Sep</option>
												  <option value="saab">Oct</option>
												  <option value="opel">Nov</option>
												  <option value="audi">Dec</option>
												</select>
												<select class="year-box form-control">
												  <option value="volvo">Year</option>
												  <option value="saab">2009</option>
												  <option value="opel">2010</option>
												  <option value="audi">2011</option>
												  <option value="saab">2012</option>
												  <option value="opel">2013</option>
												  <option value="audi">2014</option>
												  <option value="saab">2015</option>
												  <option value="opel">2016</option>
												  <option value="audi">2017</option>
												  <option value="saab">2018</option>
												  <option value="opel">2019</option>
												  <option value="audi">20120</option>
												</select>																								
											</div>
										</div>
										<div class="end-date-box">
											<div class="form-group end-date">																			
												<label>End Date<span>*<span></label>
												<select class="months-box form-control">
												  <option value="volvo">Month</option>
												  <option value="saab">Jan</option>
												  <option value="opel">Fab</option>
												  <option value="audi">Mar</option>
												  <option value="saab">Apr</option>
												  <option value="opel">May</option>
												  <option value="audi">Jun</option>
												  <option value="saab">Jul</option>
												  <option value="opel">Aug</option>
												  <option value="audi">Sep</option>
												  <option value="saab">Oct</option>
												  <option value="opel">Nov</option>
												  <option value="audi">Dec</option>
												</select>
												<select class="year-box form-control">
												  <option value="volvo">Year</option>
												  <option value="saab">2009</option>
												  <option value="opel">2010</option>
												  <option value="audi">2011</option>
												  <option value="saab">2012</option>
												  <option value="opel">2013</option>
												  <option value="audi">2014</option>
												  <option value="saab">2015</option>
												  <option value="opel">2016</option>
												  <option value="audi">2017</option>
												  <option value="saab">2018</option>
												  <option value="opel">2019</option>
												  <option value="audi">20120</option>
												</select>																								
											</div>
											<div class="in-seclt">
												<div class="chiller_cb">
													<input id="myCheckbox" type="checkbox" checked>
													<label for="myCheckbox">Still in Role</label>
													<span></span>
												 </div>									
											</div>
										</div>
										<div class="btn-summary">
											<button class="sum-save">Save</button>
											<button class="sum-cancel">Cancel</button>
										</div>
									</div>
								</div>
							</div>
							<button class="add-summary-btn" id="career-box">Add Summary</button>
						</div>
					</div>
				
				<!-- carrer detail start -->
				
				
				<!-- Education Detail Start -->
				
				<div class="profile-edit-box">						
						<div class="carrer-sum">
							<h3>Education</h3>	
							<div class="save-carrer" style="margin-top:20px;">
								<h4><b style="font-weight:600;">BCA at Maharshi Dayanand University</b><img src="<?php echo base_url();?>assets/img/edit-pen.png"></h4>
								<h5>Graduated 2017</h5>
								<p>Rohtak(Haryana), India </p>
							</div>
							<div class="save-carrer">
								<h4><b style="font-weight:600;">MCA at Maharshi Dayanand University</b><img src="<?php echo base_url();?>assets/img/edit-pen.png"></h4>
								<h5>Post Graduated 2019</h5>
								<p>Rohtak(Haryana), India </p>
							</div>							
							<div class="edit-form education-box">
								<div class="row">
									<div class="col-md-12 add-rol-text">
										<h3>Add Role</h3>										
										<div class="form-group">																			
											<label>Institution<span>*<span></label>
											<input type="text" class="form-control" placeholder="Enter Institute Name">
										</div>
										<div class="form-group">																			
											<label>Course or qualification<span>*<span></label>
											<input type="text" class="form-control" placeholder="Enter Qualification">
										</div>										
										<div class="start-date-box">
											<div class="edu-complit">
												<div class="chack-box">
													<span></span>
													<label>Qualification complete</label>
												</div>
											</div>
											<div class="form-group">																			
												<label>Satrt Date<span>*<span></label>
												<select class="months-box form-control">
												  <option value="volvo">Month</option>
												  <option value="saab">Jan</option>
												  <option value="opel">Fab</option>
												  <option value="audi">Mar</option>
												  <option value="saab">Apr</option>
												  <option value="opel">May</option>
												  <option value="audi">Jun</option>
												  <option value="saab">Jul</option>
												  <option value="opel">Aug</option>
												  <option value="audi">Sep</option>
												  <option value="saab">Oct</option>
												  <option value="opel">Nov</option>
												  <option value="audi">Dec</option>
												</select>
												<select class="year-box form-control">
												  <option value="volvo">Year</option>
												  <option value="saab">2009</option>
												  <option value="opel">2010</option>
												  <option value="audi">2011</option>
												  <option value="saab">2012</option>
												  <option value="opel">2013</option>
												  <option value="audi">2014</option>
												  <option value="saab">2015</option>
												  <option value="opel">2016</option>
												  <option value="audi">2017</option>
												  <option value="saab">2018</option>
												  <option value="opel">2019</option>
												  <option value="audi">20120</option>
												</select>																								
											</div>
										</div>
										<div class="end-date-box">
											<div class="complit-edu">
												<div class="comlit-box">
													<span><i class="fa fa-check" aria-hidden="true"></i></span>
													<label>Qualification complete</label>
												</div>
											</div>
											<div class="form-group end-date">																			
												<label>Finished <p style="color:#ccc;display:inline-block;">(optional)</p></label>												
												<select class="year-box form-control" style="width:25%;">
												  <option value="volvo">Year</option>
												  <option value="saab">2009</option>
												  <option value="opel">2010</option>
												  <option value="audi">2011</option>
												  <option value="saab">2012</option>
												  <option value="opel">2013</option>
												  <option value="audi">2014</option>
												  <option value="saab">2015</option>
												  <option value="opel">2016</option>
												  <option value="audi">2017</option>
												  <option value="saab">2018</option>
												  <option value="opel">2019</option>
												  <option value="audi">20120</option>
												</select>																								
											</div>											
										</div>
										<div class="form-group">																			
											<label>Course highlights <p style="color:#ccc;display:inline-block;margin-bottom: 0px;">(optional)</p></label>
											<p style="color:#ccc;margin-bottom:0px;font-weight:600;">Add activities, honours, awards or specialities achieved during your study.</p>
											<textarea rows="6" type="text" id="" class="form-control" ></textarea>
										</div>	
										<div class="btn-summary">
											<button class="sum-save">Save</button>
											<button class="sum-cancel">Cancel</button>
										</div>
									</div>
								</div>
							</div>
							<button class="add-summary-btn" id="education-box">Add Summary</button>
						</div>
					</div>
				
				<!-- Education Detail End -->
				<div class="update-pro">
					<button class="updt-pro">Update Profile</button>
				</div>
					
					<!--<ul id="accordion" class="accordion_updown">
					  <li>
						<div class="link">
							<h3>Parsonal Summary </h3>
							<i class="fa fa-chevron-down"></i>
							<button>Add Summary</button>
						</div>
						<div class="submenu">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
					  </li>
					  
					  <li>
						<div class="link"><h3>2nd Paragraph</h3> <i class="fa fa-chevron-down"></i></div>
						<div class="submenu">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
					  </li>
					  
					  <li>
						<div class="link"><h3>3rd Paragraph</h3> <i class="fa fa-chevron-down"></i></div>
						<div class="submenu">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
					  </li>
					</ul>-->
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
	include "layouts/footer.php";
?>

<div class="edit-pff">
	<!-- Modal -->
  <div class="modal fade" id="edit-pf" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">          
          <h4 class="modal-title">Profile Edit</h4>
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">        
			<div class="row">
				<div class="col-md-12">
					<div class="pro-ed">
						<div class="columns">
							<div class="circle">
							<!-- User Profile Image -->
							<img class="profile-pic" src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg">
	
							<!-- Default Image -->
							<!-- <i class="fa fa-user fa-5x"></i> -->
							</div>
							<div class="p-image">
							<i class="fa fa-pencil upload-button"></i>
								<input class="file-upload" type="file" accept="image/*"/>
							</div>
						</div>
						<div class="form-group">
							<label>Name</label>
							<input class="form-control" type="text" placeholder="Enter your name">
						</div>
						<div class="form-group">
							<label>Job Title</label>
							<input class="form-control" type="text" placeholder="Enter your job title">
						</div>
						<div class="form-group">
							<label>Experience</label>
							<div class="month-time">
								<label>Year</label>
								<select class="form-control">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="date-time">
								<label>Month</label>
								<select class="form-control">
									<option>0</option>
									<option>5</option>
									<option>7</option>
									<option>9</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>Location</label>
							<input class="form-control" type="text" placeholder="Enter your location">
						</div>
						<div class="form-group">
							<label>Mobile No.</label>
							<input class="form-control" type="text" placeholder="Enter your mobile no.">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input class="form-control" type="text" placeholder="Enter your email">
						</div>												
						<div class="form-group">
							<button class="ed-save">Save</button>
						</div>
					</div>
				</div>
			</div>
        </div>     
      </div>
      
    </div>
  </div>
</div>



 <script src="js/highlight.js"></script>
    <script src="js/app.js"></script>
</body>


<!-- profile edit acordian -->

<script>

function toggler(divId) {
    $("#" + divId).toggle();
}


	$(document).ready(function(){
        $("#OpenForm").click(function(){
            $(".feedback_form_area").animate({
                width: "toggle"
            });
        });
    });
	
	
	<!-- carrer box -->
	
	$(document).ready(function(){
        $("#career-box").click(function(){
            $(".carrer-box").animate({
                width: "toggle"
            });
        });
    });
	
	<!-- Education box -->
	
	$(document).ready(function(){
        $("#education-box").click(function(){
            $(".education-box").animate({
                width: "toggle"
            });
        });
    });
</script>



<!-- file-upload -->


<script>

	$(document).ready( function() {
    
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		});
		
		$("#clear").click(function(){
		    $('#img-upload').attr('src','');
		    $('#urlname').val('');
		});
	});
	
</script>

<script>
	 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<!-- file-upload -->

<script>
 $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
	})
</script>

<script>
	// optional
		$('#blogCarousel').carousel({
				interval: 5000
		});
</script>

<script>
  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 3,
          nav: false
        },
        1000: {
          items: 5,
          nav: true,
          loop: false,
          margin: 20
        }
      }
    })
  })
</script>
<script>
	function copyToClipboard(element) {
	  var $temp = $("<input>");
	  $("body").append($temp);
	  $temp.val($(element).text()).select();
	  document.execCommand("copy");
	  $temp.remove();
	}
</script>

<script>
	$( '#topheader .navbar-nav a' ).on( 'click', function () {
	$( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});
</script>


<!-- upload image sec js -->


<script>
	$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});
</script>

</html>
