<?php include "layouts/header.php";
?>
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
	
	<div class="container botton-sec">
		<div class="row">			
			<div class="col-md-12">
				<div class="ae-election">
					<a href="#"><img src="<?php echo base_url(); ?>assets/img/ae-2019.jpg"></a>
				</div>
			</div>
			<!-- <div class="col-md-12">			
				<div class="brking-news">
					<span class="breaktext"><a href="#" target="_blank">BRAKING NEWS</a></span>
					<p class="breakinghead"><a href="#" target="_blank">Mumbai: MNS leader Raj Thackeray arrives at Siddhivinayak temple</a><span><i class="fa fa-times" aria-hidden="true"></i></span></p>					
				</div>
			</div>	 -->				
		</div>
		<div class="row news-main">
			<div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
				<div class="new-video-box">
					<!-- <div class="new-video">
						<a href="#"><img src="<?php echo base_url(); ?>assets/img/haryana-bjp.jpg"></a>		
						<h4><a href="#">In the Haryana Assembly elections, BJP has entered the electoral arena with the intention of crossing 75</a></h3>
					</div> -->
					<div class="row new-dis">
						<?php foreach($getAllNews as $key => $value): ?>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
							<div class="small-dis">
								<a href="#"><img src="<?php echo base_url()."assets/img/news/".$value["news_picture"]; ?>"></a>					
								<h4><a href="#"><?php echo $value["news_heading"]; ?></a></h3>
							</div>
						</div>
					<?php endforeach; ?>
						
					</div>
				</div>
			</div>
			<div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
				<div class="top-tabs">
				<h3>TOP NEWS</h3>
					 <div class="scrollbars">
						<div class="srol-news">
							<?php foreach($getAllNews as $key => $value):
								$newStatus = json_decode($value["news_flags"]);
								echo $newStatus;
								die();
								if($newStatus->topNews == 1){ ?>
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
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 update-trnd">
				<div class="tranding-update">
					<a href="#">
						<h3>MOVIE <i class="fa fa-long-arrow-right text-right" aria-hidden="true"></i></h3>					
						<img src="<?php echo base_url(); ?>assets/img/movie.webp">
						<h4>Akshay reveals what happened on Housefull 4 Express</h4>
					</a>
					<a href="#">
						<h4>Dileep and wife Kavya Madhavan shared first picture of their daughter Mahalakshmi.</h4>
					</a>
					<a href="#">
						<h4>Dileep and wife Kavya Madhavan shared first picture of their daughter Mahalakshmi.</h4>
					</a>
					<span><a href="#">READ MORE...</a></span>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 update-trnd">
				<div class="tranding-update">
					<a href="#">
						<h3>SPORTS <i class="fa fa-long-arrow-right text-right" aria-hidden="true"></i></h3>					
						<img src="<?php echo base_url(); ?>assets/img/sports.webp">
						<h4>Ranchi Test: Virat Kohli breaks Mohammad Azharuddin record </h4>
					</a>
					<a href="#">
						<h4>Dileep and wife Kavya Madhavan shared first picture of their daughter Mahalakshmi.</h4>
					</a>
					<a href="#">
						<h4>Dileep and wife Kavya Madhavan shared first picture of their daughter Mahalakshmi.</h4>
					</a>
					<span><a href="#">READ MORE...</a></span>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 update-trnd">
				<div class="tranding-update">
					<a href="#">
						<h3>TRENDING <i class="fa fa-long-arrow-right" aria-hidden="true"></i></h3>					
						<img src="<?php echo base_url(); ?>assets/img/gun_0_0.webp">
						<h4>Viral video: Coach disarms high school student, hugs him</h4>
					</a>
					<a href="#">
						<h4>Dileep and wife Kavya Madhavan shared first picture of their daughter Mahalakshmi.</h4>
					</a>
					<a href="#">
						<h4>Dileep and wife Kavya Madhavan shared first picture of their daughter Mahalakshmi.</h4>
					</a>
					<span><a href="#">READ MORE...</a></span>
				</div>
			</div>
		</div>
		
	</div>
</section>
<?php include "layouts/footer.php"; ?>