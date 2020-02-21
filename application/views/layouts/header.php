
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Brandzbix</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>assets/img/brandzbixfavicon.ico">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap&subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/docs.theme.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/owlcarousel/assets/owl.theme.default.min.css">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }   
  </style>
</head>
<body>
<header class="navbar-sec" id="topheader">
	<nav class="clearHeader">
	<div class="container-fluid">
		<div class="menu-icon">
		<i class="fa fa-bars fa-2x"></i>
		</div>
		<div class="logo">
			<a href="<?php echo base_url(); ?>">
				<img src="<?php echo base_url(); ?>assets/img/logo-new.png">
			</a>
		</div>
		<div class="menu">
			<ul>
				<li><a class="<?php print ($this->uri->segment(1,2) == "2")? "active": ""; ?>" href="<?php echo base_url(); ?>">HOME</a></li>
				<li><a class="<?php print ($this->uri->segment(1,2) == "news")? "active": ""; ?>" href="<?php echo base_url(); ?>news">NEWS</a></li>
				<li><a class="<?php print ($this->uri->segment(1,2) == "store")? "active": ""; ?>" href="store">STORE</a></li>
				<li><a class="<?php print ($this->uri->segment(1,2) == "jobs")? "active": ""; ?>" href="#">JOBS</a></li>
				<li><a class="<?php print ($this->uri->segment(1,2) == "coupon")? "active": ""; ?>" href="coupon">COUPONS</a></li>
				<li><a class="<?php print ($this->uri->segment(1,2) == "dealwithus")? "active": ""; ?>" href="dealwithus">DEALS</a></li>
				<li class="center-link"><a class="" href="#">QUIZE</a></li>
				<li><a class="" href="client-login"  style="font-weight:600;"><i class="fa fa-user-circle-o" style="margin-right:4px;"></i> Sign In</a></li>
				<li><a class="" href="client-login" style="font-weight:600;"><i class="fa fa-user-circle-o"  style="margin-right:4px;"></i> Sign Up</a></li>
				<li class="count-kart">
					<a class="" href="<?php echo base_url('cart'); ?>" style="font-weight:600;">
						<i class="fa fa-shopping-cart" style="margin-right:4px;">
							
						</i>
						<span class="kart-box"><?php echo count($this->cart->contents()); ?></span>
				 Cart</a>
				</li>								
				<li class="profile-dlt">
					<a href="#" onclick="toggler('myContent');"><img src="<?php echo base_url(); ?>assets/img/complent.png"></a>	</li>
			</ul>						     
		</div>
		</div>
	</nav>
</header> 
<div class="prfle"  id="myContent">
	<div class="prfl-dtl">
		<div class="pro-img">
			<img src="<?php echo base_url(); ?>assets/img/complent.png">
		</div>
		<h3>Rakesh Sharma<span>Andorid Developer</span></h3>
	</div>
	<ul>
		<!--li><a href=""><img src="<?php echo base_url(); ?>assets/img/wishlist.png">Wish List</a></li>-->
		<li><a href="myorder">Orders</a></li>		
		<li><a href="user-profile">View Profile</a></li>
		<li><a href="client-login">Logout</a></li>
	</ul>
</div>