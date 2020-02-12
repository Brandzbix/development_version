<section>
	<footer class="footer-des">
		<div class="container-fluid">
			<div class="row">
				<ul class="list-inline">
					<li>
						<a href="https://www.facebook.com/brandzbix/"><img src="<?php echo base_url(); ?>assets/img/facebook-new.png"></a>
					</li>
					<li>
						<a href="https://www.instagram.com/brandzbix/"><img src="<?php echo base_url(); ?>assets/img/instagram-new.png"></a>
					</li>
					<li>
						<a href="linkedin.com/company/brandzbix"><img src="<?php echo base_url(); ?>assets/img/linkedin-new.png"></a>
					</li>			   							   	
				</ul>
			</div>

			<div class="row">   
				<ul class="menu list-inline">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="news.html">News</a>
					</li>
					<li>
						<a href="store.html">Store</a>
					</li>
					<li>
						<a href="job.html">Jobs</a>
					</li>
					<li>
						<a href="coupon.html">Coupon</a>
					</li>
					<li>
						<a href="dealwithus.html">Deals</a>
					</li>
					<li>
						<a href="quize.html">Qiuz</a>
					</li>
					<li>
						<a href="blog.html">Blogs</a>
					</li>
					<li>
						<a href="advertise.html">Advertise with us</a>
					</li>
					<li>
						<a href="contact-us.html">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="hart-beat">
					<h3>Made with</h3>
					<div class="center">
						<div class="heart"></div>
						
					</div>
				</div>
			</div>
		</div> 
	</footer>
	<div class="copyright">
		<div class="container-fluid">
			<div class="row text-center">
				<p>Copyright © All RIGHTS RESERVED | <a href="#"> BRANDSBIX 2019.</a></p>
			</div>
		</div>
	</div>
</section>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog model-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>         
			</div>
			<div class="modal-body">   
				<div class="row">
					<div class="compny-coupon" style="position:relative;">
						<span class="left-box-round"></span>

						<div class="cmpny-code">
							<img src="<?php echo base_url(); ?>assets/img/cera3.png">
							<div class="coupn-cntnt">
								<h3>FLAT 20%<span style="color:#ff2e4f">*</span></h3>
								<h5>ON YOUR NEXT ORDER</h5>
								<p><span>*</span> Minimum order Rs 499</p>
								<p><span>*</span> New users only</p>
							</div>
						</div>
						<div class="coupn-text">
							<h3>COUPON CODE</h3>
							<div class="code-img">
								<!--<img src="<?php echo base_url(); ?>assets/img/cut-box.png">-->
								<h3>RWBB20</h3>						
							</div>
							<span class="right-box-round"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include "script.php"; ?>
</body>
</html>
<script type="text/javascript">
	$('.nav li').click(function(){
	    $('.nav li').removeClass('active');
	    $(this).addClass('active');
	});
</script>

