<?php include "layouts/header.php"; ?>
<section class="deal-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="deal-head">
					<h3>Deal With Us</h3>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
				<div class="deal-bl">				
					<img src="<?php echo base_url(); ?>assets/img/deal.jpg">
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
				<div class="deal-bl">				
					<img src="<?php echo base_url(); ?>assets/img/deal.jpg">
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
				<div class="deal-bl">				
					<img src="<?php echo base_url(); ?>assets/img/deal.jpg">
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
				<div class="deal-bl">				
					<img src="<?php echo base_url(); ?>assets/img/deal.jpg">
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
				<div class="deal-bl">				
					<img src="<?php echo base_url(); ?>assets/img/deal.jpg">
				</div>
			</div><div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
				<div class="deal-bl">				
					<img src="<?php echo base_url(); ?>assets/img/deal.jpg">
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
				<div class="deal-bl">				
					<img src="<?php echo base_url(); ?>assets/img/deal.jpg">
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
				<div class="deal-bl">				
					<img src="<?php echo base_url(); ?>assets/img/deal.jpg">
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
				<div class="deal-bl">				
					<img src="<?php echo base_url(); ?>assets/img/deal.jpg">
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
				<div class="deal-bl">				
					<img src="<?php echo base_url(); ?>assets/img/deal.jpg">
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
				<div class="deal-bl">				
					<img src="<?php echo base_url(); ?>assets/img/deal.jpg">
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
				<div class="deal-bl">				
					<img src="<?php echo base_url(); ?>assets/img/deal.jpg">
				</div>
			</div>			
		</div>
	</div>
</section>
<?php include "layouts/footer.php"; ?>


<script>
function toggler(divId) {
    $("#" + divId).toggle();
}

function flip() {
	$('.card').toggleClass('flipped');
}
</script>

<script>
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


<script>
	function progress(timeleft, timetotal, $element) {
    var progressBarWidth = timeleft * $element.width() / timetotal;
    $element.find('div').animate({ width: progressBarWidth }, 500).html(Math.floor(timeleft/60) + ":"+ timeleft%60);
    if(timeleft > 0) {
        setTimeout(function() {
            progress(timeleft - 1, timetotal, $element);
        }, 1000);
    }
	};

	progress(10, 10, $('#progressBar'));
</script>



</html>
