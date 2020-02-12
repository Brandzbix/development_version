<?php
include "layouts/header.php"; ?>
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

<?php 
$tab_menu = '';
$tab_content = '';
$i = 0;
$connect = mysqli_connect("localhost", "root", "", "brandbix");

foreach($getNewsType as $key => $value){
	if($i==0){
		$tab_menu	.='
			<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#newSection'.$value["news_type_id_pk"].'" role="tab" aria-controls="nav-home" aria-selected="true">
				<h3>'.$value["news_type_name"].'</h3>
			</a>
		';
		$tab_content .='
			 <div class="tab-pane fade in active" id="'.$value["news_type_id_pk"].'"> 
		';
	}else{
			$tab_menu	.='
			<a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#newSection'.$value["news_type_id_pk"].'" role="tab" aria-controls="nav-home" aria-selected="true">
				<h3>'.$value["news_type_name"].'</h3>
			</a>
		';
		$tab_content .='
			 <div class="tab-pane fade" id="newSection'.$value["news_type_id_pk"].'"> 
		';
	}
		$product_query = "SELECT * FROM tbl_news WHERE news_type = '".$value["news_type_id_pk"]."'";
	 	$product_result = mysqli_query($connect, $product_query);
		while($sub_row = mysqli_fetch_array($product_result)){
	    $tab_content .= '
	    	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 indian-news">
				<a href="#">
					<img src="assets/img/news/'.$sub_row["news_picture"].'">
					<h3>'.$sub_row["pretty_url"].'</h3>										
				</a>
			</div>
	    ';
	 	}
	 	$tab_content .= '<div style="clear:both"></div></div>';
	 	$i++;
	}
?>

<section id="tabs" class="project-tab">
    <div class="container-fluid">
            <div class="col-md-12">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">										
                        <?php
						    echo $tab_menu;
						?>                                       
                    </div>
                </nav>
                <div class="tab-content tab-news-box" id="nav-tabContent">
                    <?php
					    echo $tab_content;
					?>
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

