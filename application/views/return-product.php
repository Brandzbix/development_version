<?php  include "layouts/header.php"; ?>
<section class="slider-sec">
	<div class="container-fluid">
		<div class="row">
			<div id="demo" class="carousel slide" data-ride="carousel">

			  <!-- Indicators -->
			  <ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			  
			  <!-- The slideshow -->
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="<?php echo base_url();?>assets/img/banner1.jpg">
				</div>
				<div class="carousel-item">
				  <img src="<?php echo base_url();?>assets/img/banner1.jpg">
				</div>
				<div class="carousel-item">
				  <img src="<?php echo base_url();?>assets/img/banner1.jpg">
				</div>
			  </div>
			  
			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </a>
			</div>	
		</div>
	</div>
</section>

<section class="return-pro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="return-head">
					<h3>Product Return</h3>
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="row detail-fill">
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12">
						<div class="return-form">
							<form>
								<div class="form-group">
									<label>Reason for Return<span style="color:#ff0000;">*</span></label>
									<input type="text" class="form-control" placeholder="Select Reason">
								</div>
								<div class="form-group">
									<label>Reason Details<span style="color:#ff0000;">*</span></label>
									<input type="text" class="form-control" placeholder="Select Reason Details">
								</div>
								<div class="form-group">
									<label>Comments<span style="color:#ff0000;">*</span></label>
									<textarea class="form-control" rows="7" cols="50" name="comment" form="usrform" placeholder="eg: The phone's display was damaged"></textarea>
								</div>
								<div class="form-group">
									<button class="ret-submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
						<div class="item-detail">
							<h2>Item Detail</h2>
							<div class="pro-ret">
								<img src="<?php echo base_url();?>assets/img/tshart.png">
								<h3>Team 99 T-shart</h3>
							</div>
							<h3><i class="fa fa-rupee"></i> 499<span>QTY 1</span></h3>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</section>
<?php  include "layouts/footer.php"; ?>


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
							<img class="profile-pic" src="<?php echo base_url();?>assets/http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg">
	
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
