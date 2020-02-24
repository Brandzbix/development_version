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
<section class="address-sec">
   <div class="container-fluid">
      <div class="row">
         <?php foreach($cartItems as $key => $value): 
         $result     =   explode(',',$value['image']);

         ?>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="product-img">
               <img src="<?php echo base_url().'assets/img/product/'.$value['id'].'/'.$result[0]; ?>" width="100">
               <div class="product-dtl">
                  <h3><?php echo $value['name']; ?></h3>
                  <p>The price and availability of items<br>The price <?php echo $value["subtotal"]; ?>.00</p>
                  <span class="delet-pro">Delete</span>
               </div>
               <div class="btn-kart">
                  <a href="store.html" class="continue-shoping">Continue Shopping</a>
                  <button class="bye-shoping">Buy Now</button>
               </div>
            </div>
         </div>
         
         <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            <div class="quantity-block">
               <h3>Quantity</h3>
               <?php echo $value["qty"]; ?>
            </div>
         </div>
         <?php endforeach; ?>
         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="deliver-address">
               <h3>CHNADAN <span>14-a Aurangeb road back gate <br>Khan market<br>NEW DELHI, DELHI 110003<br> India</span></h3>
               <button class="edit-btn">Edit</button>
               <button class="delete-btn">Delete</button>
               <a href="e-comm.html" class="add-new-btn" style="display:block;width:64%;">Add New Address</a>
            </div>      
         </div>
      </div>
   </div>
</section>

<section>

<?php $this->load->view('layouts/footer'); ?>