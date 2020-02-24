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

<section>
	<div class="container">
		<div class="col-md-12">
			<div class="product-tabs">
			  <div class="tab-button-outer">
				<ul id="tab-button">
				  <li><a href="#tab01">Bags</a></li>
				  <li><a href="#tab02">Watchs</a></li>				  
				</ul>
			  </div>
			<!--   <div class="tab-select-outer">
				<select id="tab-select">
				  <option value="#tab01">Cloths</option>
				  <option value="#tab02">Watchs</option>				 
				</select>
			  </div> -->
			  <div id="tab01" class="tab-contents">
				<div class="row">
					<?php foreach($bags as $key => $value): 
						$result 	=	explode(',',$value['pro_image1']);

					?>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
						<div class="store-product">
							<img src="<?php echo base_url().'assets/img/product/'.$value['product_id_pk'].'/'.$result[0]; ?>">
							<h3><?php echo $value["product_type"]; ?><span>By Redwolf</span></h3>
							<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png"><?php echo $value["discount_price"]; ?></h4>
							<a href="<?php echo base_url().'Store/addToCart/'.$value["product_id_pk"]; ?>" class="btn btn-krt">ADD TO KART</a>
							<a href="add-kart.html" class="btn btn-buy">BUY NOW</a>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			  </div>
			  <div id="tab02" class="tab-contents">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
						<div class="store-product">
							<img src="<?php echo base_url(); ?>assets/img/watch.png">
							<h3>Team 99 T-shart <span>By Redwolf</span></h3>
							<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
							<a href="add-kart.html" class="btn btn-krt">ADD TO KART</a>
							<a href="add-kart.html" class="btn btn-buy">BUY NOW</a>
						</div>
					</div>
				</div>
			  </div>			  
			</div>
		
		</div>
	</div>
</section>


<!-- <section class="sele-cot">
	<div class="container">
		<div class="row">
			<div class="col-md-12 padd-left">
                <nav class="store-pro">
                  <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="clothing" data-toggle="tab" href="#fashion" role="tab" aria-controls="nav-home" aria-selected="true">Clothing</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Watch</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
                  </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="fashion" role="tabpanel" aria-labelledby="clothing">
						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/tshart.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/tstart2.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/tshart3.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/tshart4.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/tshart.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/tstart2.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/tshart3.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/tshart4.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/watch.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/watch2.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/watch3.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/watch4.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/watch.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/watch2.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/watch3.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="store-product">
									<img src="<?php echo base_url(); ?>assets/img/watch4.png">
									<h3>Team 99 T-shart <span>By Redwolf</span></h3>
									<h4><img src="<?php echo base_url(); ?>assets/img/rupee.png">499</h4>
									<button class="btn btn-krt">ADD TO KART</button>
									<button class="btn btn-buy">BUY NOW</button>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
					  Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
					</div>
					<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
					  Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
					</div>
                </div>
                
                </div>
		</div>
	</div>
</section> -->
<?php include "layouts/footer.php"; ?>
<script>
function toggler(divId) {
    $("#" + divId).toggle();
}


	$(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".candit > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".candit > input").val(now);
                }else{
                    $(".candit > input").val("1");
                }
            })            
            $(".btn-plus").on("click",function(){
                var now = $(".candit > input").val();
                if ($.isNumeric(now)){
                    $(".candit > input").val(parseInt(now)+1);
                }else{
                    $(".candit > input").val("1");
                }
            })                        
        })       
</script>

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
	$(function() {
  var $tabButtonItem = $('#tab-button li'),
      $tabSelect = $('#tab-select'),
      $tabContents = $('.tab-contents'),
      activeClass = 'is-active';

  $tabButtonItem.first().addClass(activeClass);
  $tabContents.not(':first').hide();

  $tabButtonItem.find('a').on('click', function(e) {
    var target = $(this).attr('href');

    $tabButtonItem.removeClass(activeClass);
    $(this).parent().addClass(activeClass);
    $tabSelect.val(target);
    $tabContents.hide();
    $(target).show();
    e.preventDefault();
  });

  $tabSelect.on('change', function() {
    var target = $(this).val(),
        targetSelectNum = $(this).prop('selectedIndex');

    $tabButtonItem.removeClass(activeClass);
    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    $tabContents.hide();
    $(target).show();
  });
});
</script>



</html>
