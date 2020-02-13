<?php 
	include "layouts/header.php";
?>
<section class="main-news-op">
	<div class="container-fluid top-news">
		<div class="container" style="padding-left:4px;">
			<div class="row">
				<div class="col-md-12 main-news-menu">
					<div class="news-list">
						<ul>
							<li><a href="india">INDIA</a></li>
							<li><a href="world">WORLD</a></li>
							<li><a href="movie">MOVIE</a></li>
							<li><a href="teach">TEACH</a></li>
							<li><a href="sports">SPORTS</a></li>
							<li><a href="business">BUSINESS</a></li>
							<li><a href="startup">STARTUP</a></li>
						</ul>
					</div>
				</div>			
			</div>	
		</div>		
	</div>
	<div class="container botton-sec-full">				
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12">				
				<div class="row">
				<?php foreach($newsByUrl as $key => $val):?>
					<div class="col-md-12 full-news">	
						<h3><?php echo $val->news_heading; ?></h3>					
						<img src="<?php echo base_url()."assets/img/news/".$val->news_picture; ?>">						
						<p class="text-justify" style="font-size: 14px;">
							<?php echo $val->news_description; ?>
						</p>
					</div>
				<?php endforeach; ?>
				</div>			
			</div>
			
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 suggst-np">				
				<div class="row">
					<div class="col-md-12">
						<div class="odi-sc matches-score">
							<h3><a href="#">Live Cricket Score ></a> <b>LIVE</b></h3>
						</div>
						<!--<div class="matches-score">
							
							<h3><img src="img/india.jpg"> <span>IND</span></h3>
							<h3><img src="img/pak.jpg"> <span>PAK</span></h3>
							<p>Match 36. Live</p>
						</div>-->
						<div class="cb-lv-scrs-well cb-lv-scrs-well-complete"> 
							<div class="cb-col">							
								<div class="cb-scr-wll-chvrn"> 								
									<div class="cb-lv-scrs-col text-black">									
										<span class="text-bold"><img src="img/pak.jpg"> PAK: 162, 133-all out (48.0 Ovs)</span>  
										<span class="text-bold"><img src="img/india.jpg"> IND: 497/9 decl</span> 
									</div>
									<div class="cb-lv-scrs-col cb-text-complete">India won by an innings and 202 runs
									</div> 
								</div> 
								<div class="cb-scr-wll-chvrn">
									<div class="cb-ico cb-lv-scr-chvrn-bg">
									</div> 
								</div>
							</div>	
						</div>
						<div class="cb-lv-scrs-well cb-lv-scrs-well-complete"> 
							<div class="cb-col">							
								<div class="cb-scr-wll-chvrn"> 								
									<div class="cb-lv-scrs-col text-black">									
										<span class="text-bold"><img src="img/pak.jpg"> PAK: 162, 133-all out (48.0 Ovs)</span>  
										<span class="text-bold"><img src="img/india.jpg"> IND: 497/9 decl</span> 
									</div>
									<div class="cb-lv-scrs-col cb-text-complete">India won by an innings and 202 runs
									</div> 
								</div> 
								<div class="cb-scr-wll-chvrn">
									<div class="cb-ico cb-lv-scr-chvrn-bg">
									</div> 
								</div>
							</div>	
						</div>
						<div class="cb-lv-scrs-well cb-lv-scrs-well-complete"> 
							<div class="cb-col">
								<div class="cb-scr-wll-chvrn"> 								
									<div class="cb-lv-scrs-col text-black">									
										<span class="text-bold"><img src="img/pak.jpg"> PAK: 162, 133-all out (48.0 Ovs)</span>  
										<span class="text-bold"><img src="img/india.jpg"> IND: 497/9 decl</span> 
									</div>
									<div class="cb-lv-scrs-col cb-text-complete">India won by an innings and 202 runs
									</div> 
								</div> 
								<div class="cb-scr-wll-chvrn">
									<div class="cb-ico cb-lv-scr-chvrn-bg">
									</div> 
								</div>
							</div>	
						</div>						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12 fuel-price">
						<div class="fuel-gas-price">
							<h3>Fuel and Gas price in india</h3>
						</div>
						<div id="tabs" class="project-tab-2">							
								<nav>
									<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
										<a class="nav-item nav-link active" id="fuel" data-toggle="tab" href="#fuel-price" role="tab" aria-controls="nav-home" aria-selected="true">FUEL</a>
										<a class="nav-item nav-link" id="autogas" data-toggle="tab" href="#gas-price" role="tab" aria-controls="nav-profile" aria-selected="false">CNG GAS</a>												
									</div>
								</nav>
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="fuel-price" role="tabpanel" aria-labelledby="fuel">
										<h3 class="patrol-price-box">
											<span class="patrol">Patrol</span>
											<span class="patrol-price">77.15 <i class="fa fa-caret-up" aria-hidden="true"></i></span>
											<span class="patrol-more"><button>MORE</button></span>
										</h3>
										<h3 class="patrol-price-box">
											<span class="patrol">Diesel</span>
											<span class="patrol-price">69.92 <i class="fa fa-caret-up" aria-hidden="true"></i></span>
											<span class="patrol-more"><button>MORE</button></span>
										</h3>
									</div>
									<div class="tab-pane fade" id="gas-price" role="tabpanel" aria-labelledby="autogas">
										<h3 class="gas-price-box">
											<span class="gas">Gas</span>
											<span class="gas-price">47.10 <i class="fa fa-caret-up" aria-hidden="true"></i></span>
											<span class="gas-more"><button>MORE</button></span>
										</h3>
									</div>											
								</div>									
							</div>
						</div>
					</div>				
				<div class="row suggested-news">
					<div class="col-md-12">
						<div class="suggeted-head">
							<h3>Suggested News</h3>
						</div>						
						<div class="suggst-news">
							<a href="#">
								<img src="img/mobile-1.png">
								<h3>Samsung Diwali Sale: Top offer deals on smartsphones,headphons and more</h3>
							</a>
						</div>
						<div class="suggst-news">
							<a href="#">
								<img src="img/mobile-1.png">
								<h3>Samsung Diwali Sale: Top offer deals on smartsphones,headphons and more</h3>
							</a>
						</div>
						<div class="suggst-news">
							<a href="#">
								<img src="img/mobile-1.png">
								<h3>Samsung Diwali Sale: Top offer deals on smartsphones,headphons and more</h3>
							</a>
						</div>
						<div class="suggst-news">
							<a href="#">
								<img src="img/mobile-1.png">
								<h3>Samsung Diwali Sale: Top offer deals on smartsphones,headphons and more</h3>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include "layouts/footer.php"; ?>
  


 <script src="js/highlight.js"></script>
    <script src="js/app.js"></script>
</body>
<script>
function toggler(divId) {
    $("#" + divId).toggle();
}

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
</html>
