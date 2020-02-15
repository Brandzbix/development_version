<?php include "layouts/header.php"; ?>
<section class="main-news-op">
	<div class="container-fluid top-news">
		<div class="container" style="padding-left:4px;">
			<div class="row">
				<div class="col-md-12 main-news-menu">
					<div class="news-list">
						<?php include "layouts/news-navbar.php"; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if(count($fetchHeadNews) > 0): ?>
		<div class="container botton-sec">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12 side-padd">
				<?php foreach($fetchHeadNews as $key => $value): ?>
					<div class="head-ind">
						<h3><?php echo strtoupper($value["news_type_name"]); ?></h3>
					</div>
					<div class="row">
						<div class="col-md-12" style="margin-bottom:30px;">
							<a href="<?php echo base_url().strtolower('news/'.$value['news_type_name'].'/'.$value['pretty_url']); ?>">
								<img src="<?php echo base_url()."assets/img/news/".$value["news_picture"]; ?>">
								<h3><?php echo $value["news_heading"]; ?></h3>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
					<div class="row india-news">
						<?php foreach($fetchNewsBySubcategory as $key => $value): ?>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 img-border">
							<a href="<?php echo base_url().strtolower('news/'.$value['news_type_name'].'/'.$value['pretty_url']); ?>"><img src="<?php echo base_url()."assets/img/news/".$value["news_picture"]; ?>"></a>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12 new-cntnt">
							<a href="<?php echo base_url().strtolower('news/'.$value['news_type_name'].'/'.$value['pretty_url']); ?>"><h3><?php echo $value["news_heading"]; ?></h3>
							<p class="text-justify">
								<?php 
									$string = strip_tags($value["news_description"]);
									if (strlen($string) > 250) {
										echo  $stringCut = substr($string, 0, 200);
									}
								?>
							</p></a>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 suggst-np">
					<div class="row">
						<div class="col-md-12 citizen-post">
							<img src="<?php echo base_url(); ?>assets/img/citizen-reporter.jpg">
						</div>
					</div>
					<div class="row suggested-news">
						<div class="col-md-12">
							<div class="suggeted-head">
								<h3>Suggested News</h3>
							</div>
							<?php foreach($getAllNews as $key => $value):
								$newStatus = json_decode($value["news_flags"]);
								if($newStatus->suggestedNews == 1){ ?>
									<div class="row">
										<div class="col-md-4">
											<img src="<?php echo base_url()."assets/img/news/".$value["news_picture"]; ?>" alt="">
										</div>
										<div class="col-md-8">
											<a href="<?php echo base_url().strtolower('news/'.$value['news_type_name'].'/'.$value['pretty_url']); ?>" style="color:black;">
												<?php echo $value["news_heading"]; ?>
											</a>
										</div>
									</div>

								<?php }	endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php else: ?>
			<div class="container botton-sec">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12 side-padd">
					<div class="head-ind">
					</div>
					<div class="row">
						<div class="col-md-12" style="margin-bottom:30px;">
							<h1>No Record Found.</h1>
						</div>
					</div>
					
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 suggst-np">
					<div class="row">
						<div class="col-md-12 citizen-post">
							<img src="<?php echo base_url(); ?>assets/img/citizen-reporter.jpg">
						</div>
					</div>
					<div class="row suggested-news">
						<div class="col-md-12">
							<div class="suggeted-head">
								<h3>Suggested News</h3>
							</div>
							<?php foreach($getAllNews as $key => $value):
						$newStatus = json_decode($value["news_flags"]);
						if($newStatus->suggestedNews == 1){ ?>
							<div class="row">
									<div class="col-md-4">
										<img src="<?php echo base_url()."assets/img/news/".$value["news_picture"]; ?>" alt="">
									</div>
									<div class="col-md-8">
										<a href="<?php echo base_url().strtolower('news/'.$value['news_type_name'].'/'.$value['pretty_url']); ?>" style="color:black;">
											<?php echo $value["news_heading"]; ?>
										</a>
									</div>
							</div>

						<?php }	endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<?php endif; ?>
</section>
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
