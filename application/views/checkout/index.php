<?php $this->load->view('layouts/header');?>
<!--Checkout Page Heading Start-->
<div class="page-top-info">
   <div class="container">
      <h4>Your cart</h4>
      <div class="site-pagination">
         <a href="">Home</a> /
         <a href="">Your cart</a>
      </div>
   </div>
</div>
<!--Checkout Page Heading Ends-->
<!-- Checkout Section Start -->
   <section class="checkout-section spad">
      <?php foreach ($userDetails as $key => $value) { ?>
         <div class="container">
            <div class="row">
               <div class="col-lg-8 order-2 order-lg-1">
                  <form class="checkout-form" method="post">
                      <input type="hidden" name="cutomerid" id="cutomerid" value="<?php echo $value['customer_id_pk']; ?>">
                     <div class="cf-title">Billing Address</div>
                     <div class="row">
                        <div class="col-md-7">
                           <p>Billing Information</p>
                           <p><?php echo $value["name"]; ?><br><?php echo $value["address_1"]; ?><br><?php echo $value["city"]; ?>,<?php echo $value["state"]; ?>-<?php echo $value["postal_code"]; ?></p>
                           
                        </div>
                        <div class="col-md-5">
                           <div class="cf-radio-btns address-rb">
                              <div class="cfr-item">
                                 <input type="radio" name="pm" id="one">
                                 <label for="one">Use a different address</label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row address-inputs" style="display: none;">
                        <div class="col-md-12">
                           <input type="text" placeholder="Address">
                           <input type="text" placeholder="Address line 2">
                           <input type="text" placeholder="Country">
                        </div>
                        <div class="col-md-6">
                           <input type="text" placeholder="Zip code">
                        </div>
                        <div class="col-md-6">
                           <input type="text" placeholder="Phone no.">
                        </div>
                     </div>
                     <div class="cf-title">Delievery Info</div>
                     <div class="row shipping-btns">
                        <div class="col-6">
                           <h4>Standard</h4>
                        </div>
                        <div class="col-6">
                           <div class="cf-radio-btns">
                              <div class="cfr-item">
                                 <input type="radio" name="shipping" id="ship-1">
                                 <label for="ship-1">Free</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <h4>Next day delievery  </h4>
                        </div>
                        <div class="col-6">
                           <div class="cf-radio-btns">
                              <div class="cfr-item">
                                 <input type="radio" name="shipping" id="ship-2">
                                 <label for="ship-2">$3.45</label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="cf-title">Payment</div>
                     <ul class="payment-list">
                        <li><input type="radio" name="payment_method" id="paytm" value="paytm"> Paypal<a href="#">
                           <img src="img/paypal.png" alt=""></a></li>
                        <li><input type="radio" name="payment_method" id="debit">
                           Credit / Debit card<a href="#">
                           <img src="img/mastercart.png" alt=""></a></li>
                        <li><input type="radio" name="payment_method" id="cash"> Cash on delivery</li>
                     </ul>
                     <button class="site-btn submit-order-btn" type="submit" name="placeOrder">Place Order</button>
                  </form>
               </div>
               <div class="col-lg-4 order-1 order-lg-2">
                  <div class="checkout-cart">
                     <h3>Your Cart</h3>
                     <ul class="product-list">
                     <?php foreach($cartItems as $key => $value): ?> 
                        <li>
                           <div class="pl-thumb"><img src="<?php echo base_url(); ?>assets/img/product-image/<?php echo $value["image"]; ?>" alt="<?php echo $value['name']; ?>"></div>
                           <h6><?php echo $value['name']; ?></h6>
                           <p><?php echo $value["subtotal"]; ?>.00</p>
                        </li>
                  <?php endforeach; ?>
                     </ul>
                     <ul class="price-list">
                        <li>Shipping<span>free</span></li>
                        <li class="total">Total<span><?php echo number_format($this->cart->total()); ?>.00</span></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      <?php }  ?>
   </section>
<!-- Checkout Section Ends -->
<?php $this->load->view('layouts/footer'); ?>
