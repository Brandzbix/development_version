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
      <div class="row border-space">
         <?php if($this->cart->total_items() > 0){  ?>
            <?php foreach($cartItems as $item):   ?>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="shoping-img">
            <h2>Shopping Cart</h2>
               <img src="<?php echo base_url().'assets/img/product/'.$item["image"]; ?>" width="100">
               <div class="shoping-dtl">                 
                  <h3><?php echo ucwords($item["name"]); ?></h3>
                  <p>The price and availability of items<br>The price </p>
                  <span class="delet-pro"><a href="<?php echo base_url('CartController/removeItem/'.$item["rowid"]); ?>">Delete</a></span>
               </div>            
            </div>
         </div>
         <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            <div class="price-detail">
               <h3>Price</h3>
               <span><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $item["price"]; ?>.00</span>
            </div>
         </div>
         <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            <div class="quantity-block">
               <h3>Quantity</h3>
               <select class="form-control drop-menu" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')">
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
               </select>
            </div>
         </div>
         <?php endforeach; ?> 
         <?php }else{
            echo "cart is empty";            
         } ?>
        
      </div>
      
      <div class="row">
         <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
            <div class="grnd-btn-kart">
               <h3>Subtotal(<?php echo $this->cart->total_items(); ?> item)<span><i class="fa fa-inr" aria-hidden="true"></i><?php echo number_format($this->cart->total()); ?>.00</span></h3>
               <a href="store.html" class="continue-shoping">Continue Shopping</a>
               <a href="confermation-address.html" class="bye-shoping">Proceed to Buy</a>
            </div>
         </div>
      </div>
      
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="suggest-pro">
               <h3>Suggest Product <a href="#">View all <img src="<?php echo base_url(); ?>assets/img/view-all.png"></a></h3>
            </div>            
         </div>
         <!-- <div class="col-md-12 suggested-pro">
            <div class="row">
               <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                  <div class="MultiCarousel-inner">
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="product-grid-new">
                           <div class="product-image">
                              <a href="#">
                                 <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                                 <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                              </a>
                              <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Sale</span>
                              <span class="product-discount-label">20%</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star disable"></li>
                           </ul>
                           <div class="product-content">
                              <h3 class="title"><a href="#">Women's Blouse</a></h3>
                              <div class="price">$16.00
                                 <span>$20.00</span>
                              </div>
                              <a class="add-to-cart" href="add-kart.html">+ Add To Cart</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <button class="btn leftLst"><img src="<?php echo base_url(); ?>assets/img/left-arrow.png"></button>
                  <button class="btn rightLst"><img src="<?php echo base_url(); ?>assets/img/right-arrow.png"></button>
               </div>
            </div>
         </div> -->
      </div>            
   </div>
</section>
<?php $this->load->view('layouts/footer'); ?>

<script>
function toggler(divId) {
    $("#" + divId).toggle();
}


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
   // optional
      $('#blogCarousel').carousel({
            interval: 5000
      });
</script>

<script>
  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 3,
          nav: false
        },
        1000: {
          items: 5,
          nav: true,
          loop: false,
          margin: 20
        }
      }
    })
  })
</script>
<script>
   function copyToClipboard(element) {
     var $temp = $("<input>");
     $("body").append($temp);
     $temp.val($(element).text()).select();
     document.execCommand("copy");
     $temp.remove();
   }
</script>

<script>
   $( '#topheader .navbar-nav a' ).on( 'click', function () {
   $( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
   $( this ).parent( 'li' ).addClass( 'active' );
});
</script>

<script>
   /* Update item quantity */
   function updateCartItem(obj, rowid){
      alert();
     $.get("<?php echo base_url('CartController/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
       if(resp == 'ok'){
         window.location.reload();
      }else{
         alert('Cart update failed, please try again.');
      }
   });
  }
</script>
