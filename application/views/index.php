<?php
	include "layouts/header.php";
?>
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
				  <img src="<?php echo base_url(); ?>assets/img/banner1.jpg">
				</div>
				<div class="carousel-item">
				  <img src="<?php echo base_url(); ?>assets/img/banner1.jpg">
				</div>
				<div class="carousel-item">
				  <img src="<?php echo base_url(); ?>assets/img/banner1.jpg">
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

<section id="tabs" class="project-tab">
    <div class="container-fluid">
    	<div class="row">
			<div class="col-md-12 coupon-head">
				<h3>LATEST <span>NEWS</span></h3>
			</div>
		</div>
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content tab-news-box" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="ind-news" role="tabpanel" aria-labelledby="nav-home-tab">
						<div class="row">
							<?php if(count($trendingNews) > 0): ?>
								<?php foreach($trendingNews as $key => $value): ?>
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 indian-news">
								<a href="<?php echo base_url().strtolower('news/'.$value['news_type_name'].'/'.$value['pretty_url']); ?>">
									<img src="<?php echo base_url()."assets/img/news/".$value["news_picture"]; ?>">
									<h3><?php echo $value["news_heading"]; ?></h3>		
								</a>
							</div>
							<?php endforeach; ?>
							<?php else: ?>
								<h3>No Record Found</h3>
							<?php endif; ?>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section  class="coupon-sec">
	<div class="container-fluid">
	<div class="row">
			<div class="col-md-12 coupon-head">
				<h3>FEATURED <span>COUPONS</span></h3>
			</div>
		</div>
		<div class="row">
		
		<div class="large-12 columns">
			  <div class="owl-carousel owl-theme">
				<div class="item">
				  <img src="<?php echo base_url(); ?>assets/img/cera1.png" alt="Image">
				  <h4>The Souled Store</h4>
				  <button class="btn show-code" data-toggle="modal" data-target="#myModal"><img src="<?php echo base_url(); ?>assets/img/copy-cj.png">SHOW CODE</button>
				</div>
				<div class="item">
				 <img src="<?php echo base_url(); ?>assets/img/cera2.png" alt="Image">
				  <h4>Lensfit</h4>
				  <button class="btn show-code"><img src="<?php echo base_url(); ?>assets/img/copy-cj.png">SHOW CODE</button>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/img/cera3.png" alt="Image">
				  <h4>Redwolf</h4>
				  <button class="btn show-code"><img src="<?php echo base_url(); ?>assets/img/copy-cj.png">SHOW CODE</button>
				</div>
				<div class="item">
				<img src="<?php echo base_url(); ?>assets/img/cera4.png" alt="Image">
				  <h4>Bollywoo.ooo</h4>
				  <button class="btn show-code"><img src="<?php echo base_url(); ?>assets/img/copy-cj.png">SHOW CODE</button>
				</div>
				<div class="item">
				  <img src="<?php echo base_url(); ?>assets/img/cera1.png" alt="Image">
				  <h4>The Souled Store</h4>
				  <button class="btn show-code"><img src="<?php echo base_url(); ?>assets/img/copy-cj.png">SHOW CODE</button>
				</div>
				<div class="item">
				 <img src="<?php echo base_url(); ?>assets/img/cera2.png" alt="Image">
				  <h4>Lensfit</h4>
				  <button class="btn show-code"><img src="<?php echo base_url(); ?>assets/img/copy-cj.png">SHOW CODE</button>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/img/cera3.png" alt="Image">
				  <h4>Redwolf</h4>
				  <button class="btn show-code"><img src="<?php echo base_url(); ?>assets/img/copy-cj.png">SHOW CODE</button>
				</div>
				<div class="item">
				<img src="<?php echo base_url(); ?>assets/img/cera4.png" alt="Image">
				  <h4>Bollywoo.ooo</h4>
				  <button class="btn show-code"><img src="<?php echo base_url(); ?>assets/img/copy-cj.png">SHOW CODE</button>
				</div>
				<div class="item">
				  <img src="<?php echo base_url(); ?>assets/img/cera1.png" alt="Image">
				  <h4>The Souled Store</h4>
				  <button class="btn show-code"><img src="<?php echo base_url(); ?>assets/img/copy-cj.png">SHOW CODE</button>
				</div>
				<div class="item">
				 <img src="<?php echo base_url(); ?>assets/img/cera2.png" alt="Image">
				  <h4>Lensfit</h4>
				  <button class="btn show-code"><img src="<?php echo base_url(); ?>assets/img/copy-cj.png">SHOW CODE</button>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/img/cera3.png" alt="Image">
				  <h4>Redwolf</h4>
				  <button class="btn show-code"><img src="<?php echo base_url(); ?>assets/img/copy-cj.png">SHOW CODE</button>
				</div>
				<div class="item">
				<img src="<?php echo base_url(); ?>assets/img/cera4.png" alt="Image">
				  <h4>Bollywoo.ooo</h4>
				  <button class="btn show-code"><img src="<?php echo base_url(); ?>assets/img/copy-cj.png">SHOW CODE</button>
				</div>				
			  </div>
		  </div>			
		</div>
	</div>
</section>



<section class="coupon-sec">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 coupon-head">
				<h3><span>STORE</span></h3>
			</div>
		</div>
		<div class="row">		
			<div class="large-12 columns">
			  <div class="owl-carousel owl-theme">
				<div class="item">
					<div class="product-grid9">
						<div class="product-image9">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
							</a>
							<a href="#" class="fa fa-search product-full-view"></a>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
							<h3 class="title"><a href="#">Women's Top</a></h3>
							<div class="price"> $12.60 - $40.53</div>
							<a class="add-to-cart" href="">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid9">
						<div class="product-image9">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
							</a>
							<a href="#" class="fa fa-search product-full-view"></a>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
							<h3 class="title"><a href="#">Women's Top</a></h3>
							<div class="price"> $12.60 - $40.53</div>
							<a class="add-to-cart" href="">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid9">
						<div class="product-image9">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
							</a>
							<a href="#" class="fa fa-search product-full-view"></a>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
							<h3 class="title"><a href="#">Women's Top</a></h3>
							<div class="price"> $12.60 - $40.53</div>
							<a class="add-to-cart" href="">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid9">
						<div class="product-image9">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
							</a>
							<a href="#" class="fa fa-search product-full-view"></a>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
							<h3 class="title"><a href="#">Women's Top</a></h3>
							<div class="price"> $12.60 - $40.53</div>
							<a class="add-to-cart" href="">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid9">
						<div class="product-image9">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
							</a>
							<a href="#" class="fa fa-search product-full-view"></a>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
							<h3 class="title"><a href="#">Women's Top</a></h3>
							<div class="price"> $12.60 - $40.53</div>
							<a class="add-to-cart" href="">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid9">
						<div class="product-image9">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
							</a>
							<a href="#" class="fa fa-search product-full-view"></a>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
							<h3 class="title"><a href="#">Women's Top</a></h3>
							<div class="price"> $12.60 - $40.53</div>
							<a class="add-to-cart" href="">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid9">
						<div class="product-image9">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
							</a>
							<a href="#" class="fa fa-search product-full-view"></a>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
							<h3 class="title"><a href="#">Women's Top</a></h3>
							<div class="price"> $12.60 - $40.53</div>
							<a class="add-to-cart" href="">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid9">
						<div class="product-image9">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
							</a>
							<a href="#" class="fa fa-search product-full-view"></a>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
							<h3 class="title"><a href="#">Women's Top</a></h3>
							<div class="price"> $12.60 - $40.53</div>
							<a class="add-to-cart" href="">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid9">
						<div class="product-image9">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
							</a>
							<a href="#" class="fa fa-search product-full-view"></a>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
							<h3 class="title"><a href="#">Women's Top</a></h3>
							<div class="price"> $12.60 - $40.53</div>
							<a class="add-to-cart" href="">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid9">
						<div class="product-image9">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
							</a>
							<a href="#" class="fa fa-search product-full-view"></a>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
							<h3 class="title"><a href="#">Women's Top</a></h3>
							<div class="price"> $12.60 - $40.53</div>
							<a class="add-to-cart" href="">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid9">
						<div class="product-image9">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
							</a>
							<a href="#" class="fa fa-search product-full-view"></a>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
							<h3 class="title"><a href="#">Women's Top</a></h3>
							<div class="price"> $12.60 - $40.53</div>
							<a class="add-to-cart" href="">ADD TO CART</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product-grid9">
						<div class="product-image9">
							<a href="#">
								<img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
								<img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
							</a>
							<a href="#" class="fa fa-search product-full-view"></a>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
							<h3 class="title"><a href="#">Women's Top</a></h3>
							<div class="price"> $12.60 - $40.53</div>
							<a class="add-to-cart" href="">ADD TO CART</a>
						</div>
					</div>
				</div>							
			  </div>
		  </div>			
		</div>
	</div>
</section>


<section class="blog-sec">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 coupon-head">
				<h3><span>BLOG</span></h3>
			</div>
		</div>
		
		<div class="row">		
		<div class="large-12 columns">
			  <div class="owl-carousel owl-theme">
				<div class="item">
					<div class="blog-head">
						<img src="<?php echo base_url(); ?>assets/img/new-img.jpg">
						<h3>PM Modi to Congress: Explain your love of Article 370 to mothers who lost sons</h3>
						<a href="#">READ MOR0E...</a>
					</div>
				</div>
				<div class="item">
					<div class="blog-head">
						<img src="<?php echo base_url(); ?>assets/img/new-img.jpg">
						<h3>PM Modi to Congress: Explain your love of Article 370 to mothers who lost sons</h3>
						<a href="#">READ MOR0E...</a>
					</div>
				</div>
				<div class="item">
					<div class="blog-head">
						<img src="<?php echo base_url(); ?>assets/img/new-img.jpg">
						<h3>PM Modi to Congress: Explain your love of Article 370 to mothers who lost sons</h3>
						<a href="#">READ MOR0E...</a>
					</div>
				</div>
				<div class="item">
					<div class="blog-head">
						<img src="<?php echo base_url(); ?>assets/img/new-img.jpg">
						<h3>PM Modi to Congress: Explain your love of Article 370 to mothers who lost sons</h3>
						<a href="#">READ MOR0E...</a>
					</div>
				</div>
				<div class="item">
					<div class="blog-head">
						<img src="<?php echo base_url(); ?>assets/img/new-img.jpg">
						<h3>PM Modi to Congress: Explain your love of Article 370 to mothers who lost sons</h3>
						<a href="#">READ MOR0E...</a>
					</div>
				</div>
				<div class="item">
					<div class="blog-head">
						<img src="<?php echo base_url(); ?>assets/img/new-img.jpg">
						<h3>PM Modi to Congress: Explain your love of Article 370 to mothers who lost sons</h3>
						<a href="#">READ MOR0E...</a>
					</div>
				</div>
				<div class="item">
					<div class="blog-head">
						<img src="<?php echo base_url(); ?>assets/img/new-img.jpg">
						<h3>PM Modi to Congress: Explain your love of Article 370 to mothers who lost sons</h3>
						<a href="#">READ MOR0E...</a>
					</div>
				</div>
				<div class="item">
					<div class="blog-head">
						<img src="<?php echo base_url(); ?>assets/img/new-img.jpg">
						<h3>PM Modi to Congress: Explain your love of Article 370 to mothers who lost sons</h3>
						<a href="#">READ MOR0E...</a>
					</div>
				</div>
				<div class="item">
					<div class="blog-head">
						<img src="<?php echo base_url(); ?>assets/img/new-img.jpg">
						<h3>PM Modi to Congress: Explain your love of Article 370 to mothers who lost sons</h3>
						<a href="#">READ MOR0E...</a>
					</div>
				</div>
				<div class="item">
					<div class="blog-head">
						<img src="<?php echo base_url(); ?>assets/img/new-img.jpg">
						<h3>PM Modi to Congress: Explain your love of Article 370 to mothers who lost sons</h3>
						<a href="#">READ MOR0E...</a>
					</div>
				</div>
				<div class="item">
					<div class="blog-head">
						<img src="<?php echo base_url(); ?>assets/img/new-img.jpg">
						<h3>PM Modi to Congress: Explain your love of Article 370 to mothers who lost sons</h3>
						<a href="#">READ MOR0E...</a>
					</div>
				</div>
				<div class="item">
					<div class="blog-head">
						<img src="<?php echo base_url(); ?>assets/img/new-img.jpg">
						<h3>PM Modi to Congress: Explain your love of Article 370 to mothers who lost sons</h3>
						<a href="#">READ MOR0E...</a>
					</div>
				</div>										
			  </div>
		  </div>			
		</div>
	</div>
</section>
<section class="client-sec">
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-12 client-head">
				<h3>OUR PARTNERS</h3>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
				<img src="<?php echo base_url(); ?>assets/img/cera1.png">
			</div>
			<div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
				<img src="<?php echo base_url(); ?>assets/img/cera2.png">
			</div>
			<div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
				<img src="<?php echo base_url(); ?>assets/img/cera3.png">
			</div>
			<div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
				<img src="<?php echo base_url(); ?>assets/img/cera4.png">
			</div>
			<div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
				<img src="<?php echo base_url(); ?>assets/img/cera4.png">
			</div>
			<div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
				<img src="<?php echo base_url(); ?>assets/img/cera4.png">
			</div>
		</div>
	</div>  
</section>
<?php include "layouts/footer.php"; ?>
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
window.onload = function() {
  document.getElementById('button').onclick = function() {
    document.getElementById('modalOverlay').style.display = 'none'
  };
};


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


<script>
	$(document).ready(function () 
	 { 
	  $("#new-colplaint").click(function()
	  {
		$("#new-colplaint-show:hidden").show('slow');
	   $("#exisiting-cmplaint-show").hide();
	   $("#show-me-three").hide();
	   });
	   $("#new-colplaint").click(function()
	  {
		if($('new-colplaint').prop('checked')===false)
	   {
		$('#new-colplaint-show').hide();
	   }
	});
   
	$("#existing-colplaint").click(function()
	  {
		$("#exisiting-cmplaint-show:hidden").show('slow');
	   $("#new-colplaint-show").hide();
	   $("#show-me-three-ad").hide();
	   });
	   $("#existing-colplaint").click(function()
	  {
		if($('see-me-two-ad').prop('checked')===false)
	   {
		$('#exisiting-cmplaint-show').hide();
	   }
	});
  
	$("#look-me-ad").click(function()
	  {
		$("#show-me-three-ad:hidden").show('slow');
	   $("#new-colplaint-show").hide();
	   $("#exisiting-cmplaint-show").hide();
	   });
	   $("#look-me-ad").click(function()
	  {
		if($('see-me-three-ad').prop('checked')===false)
	   {
		$('#show-me-three-ad').hide();
	   }
	  });
	  
	});
    
	
	
	
	$(document).ready(function () 
	 { 
	  $("#watch-me").click(function()
	  {
		$("#show-me:hidden").show('slow');
	   $("#show-me-two").hide();
	   $("#show-me-three").hide();
	   });
	   $("#watch-me").click(function()
	  {
		if($('watch-me').prop('checked')===false)
	   {
		$('#show-me').hide();
	   }
	});
   
	$("#see-me").click(function()
	  {
		$("#show-me-two:hidden").show('slow');
	   $("#show-me").hide();
	   $("#show-me-three").hide();
	   });
	   $("#see-me").click(function()
	  {
		if($('see-me-two').prop('checked')===false)
	   {
		$('#show-me-two').hide();
	   }
	});
  
	$("#look-me").click(function()
	  {
		$("#show-me-three:hidden").show('slow');
	   $("#show-me").hide();
	   $("#show-me-two").hide();
	   });
	   $("#look-me").click(function()
	  {
		if($('see-me-three').prop('checked')===false)
	   {
		$('#show-me-three').hide();
	   }
	  });
	  
	});



	$(document).ready(function () 
	 { 
	  $("#watch-me-ad").click(function()
	  {
		$("#show-me-ad:hidden").show('slow');
	   $("#show-me-two-ad").hide();
	   $("#show-me-three").hide();
	   });
	   $("#watch-me-ad").click(function()
	  {
		if($('watch-me-ad').prop('checked')===false)
	   {
		$('#show-me-ad').hide();
	   }
	});
   
	$("#see-me-ad").click(function()
	  {
		$("#show-me-two-ad:hidden").show('slow');
	   $("#show-me-ad").hide();
	   $("#show-me-three-ad").hide();
	   });
	   $("#see-me-ad").click(function()
	  {
		if($('see-me-two-ad').prop('checked')===false)
	   {
		$('#show-me-two-ad').hide();
	   }
	});
  
	$("#look-me-ad").click(function()
	  {
		$("#show-me-three-ad:hidden").show('slow');
	   $("#show-me-ad").hide();
	   $("#show-me-two-ad").hide();
	   });
	   $("#look-me-ad").click(function()
	  {
		if($('see-me-three-ad').prop('checked')===false)
	   {
		$('#show-me-three-ad').hide();
	   }
	  });
	  
	});
</script>

<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

