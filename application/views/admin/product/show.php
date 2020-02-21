<?php 
$data['title'] = "Product Details";
$this->load->view('admin/layouts/header',$data); 

?>

<link href="<?php echo base_url(); ?>assets/admin_assets/css/plugins/slick/slick.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin_assets/css/plugins/slick/slick-theme.css" rel="stylesheet">
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-11">
    <h2>Product Details</h2>
 </div>
 <div class="col-lg-1">
    <br>
    <a href="<?php echo base_url(); ?>admin/product/listing" class="btn btn-primary btn-sm"><i class="fa fa-angle-double-left fa-1x" aria-hidden="true"></i> Back</a>
 </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox product-detail">
            <div class="ibox-content">
               <div class="row">
                  <div class="col-md-5">
                     <div class="product-images">
                        <?php foreach($proImg as $imgKey => $imgVal){ ?>
                           <div>
                              <div class="image-imitation" style="padding: 0;">
                                 <img src="<?php echo base_url().'assets/img/product/'.$imgVal['pro_image']; ?>" width="437" height="437" alt="">
                              </div>
                           </div>
                        <?php } ?>
                     </div>
                  </div>
                  <div class="col-md-7">
                     <?php foreach($result as $value){ ?>
                        <h2 class="font-bold m-b-xs">
                         <?php  echo strtoupper($value->product_type); ?>
                      </h2>
                      <small>Many desktop publishing packages and web page editors now.</small>
                      <div class="m-t-md">
                        <h2 class="product-main-price">&#8377; <?php echo $value->pro_price; ?> <small class="text-muted">Exclude Tax</small> </h2>`
                     </div>
                     <h4>Product description</h4>
                     <div class="small text-muted">
                        <?php echo $value->description; ?>
                     </div>
                     <div class="row m-t-md">
                        <div class="col-md-4">
                           <label>SKU</label>
                           <p><small><?php echo $value->sku; ?></small></p>
                        </div>
                        <div class="col-md-4">
                           <label>Color</label>
                           <p>
                              <small><?php echo $value->color; ?></small>
                           </p>
                        </div>
                        <div class="col-md-4">
                           <label>Ideal For</label>
                           <p>
                              <small><?php echo $value->ideal_for; ?></small>
                           </p>
                        </div>
                     </div>
                     <div class="row m-t-md">
                        <div class="col-md-4">
                           <label>Trolley Support</label>
                           <p><small><?php echo $value->trolley_support; ?></small></p>
                        </div>
                        <div class="col-md-4">
                           <label>Laptop Sleeve</label>
                           <p>
                              <small><?php echo $value->laptop_sleeve; ?></small>
                           </p>
                        </div>
                        <div class="col-md-4">
                           <label>Rain Cover</label>
                           <p>
                              <small><?php echo $value->rain_cover; ?></small>
                           </p>
                        </div>
                     </div>
                     <div class="row m-t-md">
                        <div class="col-md-4">
                           <label>Style Code</label>
                           <p><small><?php echo $value->style_code; ?></small></p>
                        </div>
                        <div class="col-md-4">
                           <label>Metarial</label>
                           <p>
                              <small><?php echo $value->material; ?></small>
                           </p>
                        </div>
                        <div class="col-md-4">
                           <label>Water Proof</label>
                           <p>
                              <small><?php echo $value->water_proof; ?></small>
                           </p>
                        </div>
                     </div>
                     <div class="row m-t-md">
                        <div class="col-md-4">
                           <label>Capacity</label>
                           <p><small><?php echo $value->capacity; ?></small></p>
                        </div>
                        <div class="col-md-4">
                           <label>Dimension</label>
                           <p>
                              <small><?php echo $value->dimension; ?></small>
                           </p>
                        </div>
                        <div class="col-md-4">
                           <label>Weight</label>
                           <p>
                              <small><?php echo $value->weight; ?></small>
                           </p>
                        </div>
                     </div>
                     <hr>
                     <div>
                        <div class="btn-group">
                           <button class="btn btn-primary btn-sm"><i class="fa fa-paste"></i> Edit</button>
                           <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                        </div>
                     </div>
                  </div>
               <?php  } ?>

            </div>
         </div>
         <div class="ibox-footer">
            <span class="pull-right">
               Full stock - <i class="fa fa-clock-o"></i> 14.04.2016 10:04 pm
            </span>
            The generated Lorem Ipsum is therefore always free
         </div>
      </div>
   </div>
</div>

</div>

<?php $this->load->view('admin/layouts/footer'); ?>

<!-- slick carousel-->
<script src="<?php echo base_url(); ?>assets/admin_assets/js/plugins/slick/slick.min.js"></script>
<script>
  $(document).ready(function(){
    $('.product-images').slick({
      dots: true
   });
 });
</script>
