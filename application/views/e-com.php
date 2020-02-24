<?php $this->load->view('layouts/header'); ?>
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

<section class="sele-cot">
	<div class="container-fluid">
		<div class="row">
			<?php foreach($proDetails as $key => $value): 
				$img 	=	explode(",",$value["pro_image1"]);
			?>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 padd-left">
				<div class="img-tab">
					<img src="<?php echo base_url().'assets/img/product/'.$value['product_id_pk'].'/'.$img[0]; ?>">
				</div>
				<div class="small-img">
					<img src="<?php echo base_url().'assets/img/product/'.$value['product_id_pk'].'/'.$img[1]; ?>">
					<img src="<?php echo base_url().'assets/img/product/'.$value['product_id_pk'].'/'.$img[2]; ?>">
				</div>
			</div>
			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-12  padd-left">
				<div class="pro-dis">
					<h3><?php echo ucwords($value["product_type"]); ?></h3>
					<h2>SKU: <Span><?php echo $value["sku"]; ?></span></h2>
					<h2>Categories: <Span>Gym Bagpack</span></h2>
					<h2>Price: <Span style="color:#fbd021">₹ <?php echo $value["discount_price"]; ?> </span></h2>
					<h2>Color: <Span><?php echo $value["color"]; ?></span></h2>
				</div>
				<style>
					.proFeture ul li{
						list-style-type: none;
					}
					.short-dis ul li{
						font-size: 12px;
					}
				</style>
				<div class="short-dis">
					<div class="row">
						<div class="col-md-3">
							<ul>
								<li>Ideal For</li>
								<li>Trolley Support</li>
								<li>Laptop Sleeve</li>
								<li>Rain Cover</li>
								<li>Weight</li>
							</ul>
						</div>
						<div class="col-md-3 proFeture">
							<ul>
								<li><?php echo $value["ideal_for"]?></li>
								<li><?php echo $value["trolley_support"]; ?></li>
								<li><?php echo $value["laptop_sleeve"]; ?></li>
								<li><?php echo $value["rain_cover"]; ?></li>
								<li><?php echo $value["weight"]; ?></li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul>
								<li>Style Code</li>
								<li>Material</li>
								<li>Water Proof</li>
								<li>Capacity</li>
								<li>Dimension</li>
							</ul>
						</div>
						<div class="col-md-3 proFeture">
							<ul>
								<li><?php echo $value["style_code"]; ?></li>
								<li><?php echo $value["material"]; ?></li>
								<li><?php echo $value["water_proof"]; ?></li>
								<li><?php echo $value["capacity"]; ?></li>
								<li><?php echo $value["dimension"]; ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="cantdit">
				<form action="<?php echo base_url('Store/addToCart/').$value['product_id_pk']; ?>" method="post"> 

					<div class="add-more">
						<div class="candit">
							<div class="btn-minus">
								<i class="fa fa-minus" aria-hidden="true"></i>
							</div>
							<input value="1" name="qty" />
							<div class="btn-plus">
								<i class="fa fa-plus" aria-hidden="true"></i>
							</div>						
						</div>
						<div class="btn-prp">
							<button class="add-cart ">
								<a href="#" onclick="$(this).closest('form').submit()" style="color:white;" >ADD TO KART</a>
							</button>
							<button class="buy-now"><a href="#"style="color:white;">BUY NOW</a></button>
						</div>
					</div>
				</form>
					<div class="bluk-inqury">
						<form class="form-inline">
						  <div class="form-group pin-code">
							<label for="email" style="margin-right:20px;">Delivery</label>
							<input type="email" class="form-control" id="email" placeholder="Enter pin code">
							<button class="btn-chk">CHECK</button>
						  </div>
						  <div class="form-group blk-in">
							<label for="email">Bulk Enquiries ? <span style="font-size: 10px;color: #a9a9a9;margin: 0px 0px 0px 7px;position: relative;bottom: -4px;">(Min 100 qty)</span></label>
							<input type="email" class="form-control" id="email" placeholder="Enter the Email Id">
							<button type="submit" class="inqry-snd">SEND</button>
						  </div>						  
						  
						<h3 class="dispatch-time"><img src="<?php echo base_url(); ?>assets/img/deliver-truck.png">dispatch in 3 to 7 business days</h3>
					</div>
					<div class="re-view">
						<div class="tabbable-panel margin-tops4 ">
						  <div class="tabbable-line">
							<ul class="nav nav-tabs tabtop  tabsetting">
							  <li class="active"> <a href="#tab_default_1" data-toggle="tab">Delivery</a> </li>
							  <li> <a href="#tab_default_2" data-toggle="tab">Reviews</a> </li>							  
							</ul>
							<div class="tab-content margin-tops">
							  <div class="tab-pane active fade in" id="tab_default_1">								
								<div class="col-md-12 tab-in">
									<div class="fav-quets">
										<p>Powered by the most advanced mobile processors from the new Core 2 Duo Macbook Pro is over 50% faster than the original Core Duo Macbook Pro and now supports up tp 4GB</p>
									</div>
								</div>
							  </div>
							  <div class="tab-pane fade" id="tab_default_2">								
								<div class="col-md-12 tab-in">
									<div class="fav-quets">
										<p>Star powered by the most advanced mobile processors from the new Core 2 Duo Macbook Pro is over 50% faster than the original Core Duo Macbook Pro and now supports up tp 4GB</p>
									</div>
								</div>
							  </div>							  
							</div>
						  </div>
						</div>
					</div>					
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 padd-left">
				<div class="offer-img">
					<a href="#"><img src="<?php echo base_url(); ?>assets/img/up-to.png"></a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>		
	</div>
</section>
<?php $this->load->view('layouts/footer'); ?>

