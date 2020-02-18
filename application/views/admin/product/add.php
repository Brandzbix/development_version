<?php
   $this->load->view('admin/layouts/header', $title);
   
   ?>
<div class="row  border-bottom white-bg dashboard-header">
   <div class="col-lg-8">
      <h2>Add Product</h2>
      <ol class="breadcrumb">
         <li>
            <a href="#">Products</a>
         </li>
         <li class="active">
            <strong>Add Products</strong>
         </li>
      </ol>
   </div>
</div>
<br/>
<?php
   if (!empty($this->session->flashdata('message'))): ?>
<div class="row">
   <div class="col-md-8 col-md-offset-2 text-center">
      <div class="alert <?php echo $this->session->flashdata('alert-class'); ?> text-center">
         <?php echo $this->session->flashdata('message')['message']; ?>
      </div>
   </div>
</div>
<?php endif;?>
<div id="wrapper">
   <div class="wrapper wrapper-content animated fadeIn">
      <?php echo form_open('admin/Product/store', array('name' => 'add_product', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data')); ?>
      <div class="row ">
         <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
            <div class="ibox float-e-margins">
               <div class="col-lg-12 col-md-12">
                  <div class="ibox float-e-margins">
                     <div class="ibox-title">
                        <h5>Product Info</h5>
                     </div>
                     <div class="ibox-content">
                        <div class="row">
                           <div class="col-lg-12 col-md-6">
                              <div class="col-lg-3 col-md-3">
                                 <div class="form-group">
                                    <label>Product Name
                                    <span class="mindetory">*</span>
                                    </label>
                                    <input type="text" name="proName" class="form-control" disabled="" value="Baywatch">
                                    <!--
                                       <?php echo form_input(array('type' => 'text', 'name' => 'product_name', 'placeholder' => 'Enter Product Name', 'class' => 'form-control', 'data-parsley-required' => '', 'data-parsley-error-message' => 'Product Name is mandatory')); ?> -->
                                 </div>
                              </div>
                              <div class="col-lg-3 col-md-3">
                                 <div class="form-group">
                                    <label>Product Type
                                    <span class="mindetory">*</span>
                                    </label>
                                    <select name="proType" id="" class="form-control" data-parsley-required data-parsley-error-message = "This felid is required">
                                       <option value="">--Please Select--</option>
                                       <option value="laptop backpack">Laptop Backpack</option>
                                       <option value="gym bag">Gym Bag</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-3 col-md-3">
                                 <div class="form-group">
                                    <label>SKU
                                    <span class="mindetory">*</span>
                                    </label>
                                    <input type="text" name="proSku" class="form-control" placeholder="Ex:- BW-BP06-BLU" data-parsley-required data-parsley-error-message="SKU code is required.">
                                 </div>
                              </div>
                              <div class="col-lg-3 col-md-3">
                                 <div class="form-group">
                                    <label>Color
                                    <span class="mindetory">*</span>
                                    </label>
                                    <select name="proType" id="proType" class="form-control" data-parsley-required data-parsley-error-message = "Product color is required.">
                                       <option value="">--Please Select--</option>
                                       <option value="blue">Blue</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="ibox float-e-margins">
                     <div class="col-lg-12 col-md-12">
                        <div class="ibox float-e-margins">
                           <div class="ibox-title">
                              <h5>Pricing</h5>
                           </div>
                           <div class="ibox-content">
                              <div class="row">
                                 <div class="col-lg-12 col-md-12">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group">
                                          <label>Item Price
                                          <span class="mindetory">*</span>
                                          </label> 
                                          <span class="input-group">
                                          <span class="input-group-addon">
                                          <i class="fa fa-inr"></i>
                                          </span>
                                          <?php echo form_input(array('type'=>'text','name'=>'item_price','placeholder'=>'Max Retail Price','class'=>'form-control','data-parsley-required'=>'','data-parsley-error-message'=>'Max retail price is maindetory','id'=>'item_price')); ?>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group">
                                          <label>Price after Discount
                                          </label> 
                                          <span class="input-group">
                                          <span class="input-group-addon">
                                          <i class="fa fa-inr"></i>
                                          </span>
                                          <?php echo form_input(array('type'=>'text','name'=>'discount_price','placeholder'=>'Price after Discount','class'=>'form-control','id'=>'discount_price')); ?>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-lg-3 c col-md-3 ">
                                       <div class="form-group">
                                          <label>
                                             <p class="text-justify">You can calculate parcentage between item price or discount after price</p>
                                          </label>
                                          <button type="button" class="btn  btn-success form-control" onclick="calculatPrice()" style="background-color: #1B7BB9; color:white;">Calculat Parcentage</button>                              
                                       </div>
                                    </div>
                                    <div class="ol-lg-offset-4 col-lg-3 col-md-3 col-md-offset-3" style="font-size:25px;">
                                       <div class="animated fadeIn">
                                          <p class="text-center parcent_div" id="percentage">
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <div class="ibox float-e-margins">
                           <div class="col-lg-12 col-md-12">
                              <div class="ibox float-e-margins">
                                 <div class="ibox-title">
                                    <h5>Product Features</h5>
                                 </div>
                                 <div class="ibox-content">
                                    <div class="row">
                                       <div class="col-lg-3 col-md-3">
                                          <div class="form-group">
                                             <label>Ideal For
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" class="form-control" name="idealFor" placeholder="Ex: Men & Women" data-parsley-required data-parsley-error-message="This felid is required.">
                                          <small>If not available please enter N/A</small>
                                          </div>
                                       </div>
                                       <div class="col-lg-3 col-md-3">
                                          <div class="form-group">
                                             <label>Trolley Support
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" class="form-control" name="trolleySupport" placeholder="Ex: Yes/No" data-parsley-required data-parsley-error-message="This felid is required.">
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-lg-3">
                                          <div class="form-group">
                                             <label>Laptop Sleeve
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" class="form-control" name="laptopSleeve" placeholder="Ex: Yes/No"  data-parsley-required data-parsley-error-message="This felid is required.">
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-lg-3">
                                          <div class="form-group">
                                             <label>Rain Cover
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" name="rainCover" class="form-control" placeholder="Ex: Yes/No"  data-parsley-required data-parsley-error-message="This felid is required.">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-3 col-lg-3">
                                          <div class="form-group">
                                             <label>Style Code
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" name="styleCover" class="form-control" placeholder="Like: BP06"  data-parsley-required data-parsley-error-message="This felid is required.">
                                          <small>If not available please enter N/A</small>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-lg-3">
                                          <div class="form-group">
                                             <label>Material
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" name="material" class="form-control" placeholder="Like: Polyester,Cotton etc."  data-parsley-required data-parsley-error-message="This felid is required.">
                                          <small>If not available please enter N/A</small>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-lg-3">
                                          <div class="form-group">
                                             <label>Water Proof
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" name="waterProof" class="form-control" placeholder="Ex: Yes/No"  data-parsley-required data-parsley-error-message="This felid is required.">
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-lg-3">
                                          <div class="form-group">
                                             <label>Capacity
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" name="capacity" class="form-control" placeholder="Ex: 20 Liter"  data-parsley-required data-parsley-error-message="This felid is required.">
                                             <small>If not available please enter N/A</small>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-4 col-lg-4">
                                          <div class="form-group">
                                             <label>Dimension
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" name="dimension" class="form-control" placeholder="Ex: W x H: 12 x 18 inch"  data-parsley-required data-parsley-error-message="This felid is required.">
                                             <small>If not available please enter N/A</small>
                                          </div>
                                       </div>
                                       <div class="col-md-4 col-lg-4">
                                          <div class="form-group">
                                             <label>Weight
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="text" name="weight" class="form-control" placeholder="Ex: 250 g"  data-parsley-required data-parsley-error-message="This felid is required.">
                                             <small>If not available please enter N/A</small>
                                          </div>
                                       </div>
                                       <div class="col-md-4 col-lg-4">
                                          <div class="form-group">
                                             <label>Product Image
                                             <span class="mindetory">*</span>
                                             </label>
                                             <input type="file" name="multiUploade[]" class="form-control" multiple="" data-parsley-required data-parsley-error-message="Product image is required">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6 col-lg-6">
                                          <div class="form-group">
                                             <label>Description
                                             <span class="mindetory">*</span>
                                             </label>
                                             <textarea name="description" id="" rows="3" class="form-control"  data-parsley-required data-parsley-error-message="This felid is required."></textarea>
                                          <small>If not available please enter N/A</small>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-3 col-md-3 ">
                                          <div class="form-group">
                                             <label>
                                                <p></p>
                                             </label>
                                             <button type="submit" class="btn  btn-success form-control"  style="background-color: #1B7BB9; color:white;">Submit</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php echo form_close(); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
   $this->load->view('admin/layouts/footer');
   ?>
<script>
   $(document).ready(function() {
      $("form[name=add_product]").parsley();
   });
</script>
<script>
   /*Calculate price between Item price and price after discount*/
   function calculatPrice(){
      var item_price     =  $("#item_price").val();
      var discount_price    =  $("#discount_price").val();
      if(discount_price != ""){
       var less_price         =  item_price-discount_price;
       var decimal_value   =  less_price/item_price;
       var parcentage      =  100*decimal_value;
       var parcentageSymble   =  parcentage+'%';
       $("#percentage").text(parcentageSymble); 
       $("#percentage").css('visibility','visible');
    }else{
       $("#percentage").css('visibility','hidden');
    }
   }
   $(document).ready(function() {
     $("form[name=subcategoryForm]").parsley();
   });
   function getSubcategory(selectObject) {
     var value = selectObject.value;
     $.ajax({
        type:'POST',
        url:"<?php echo base_url(); ?>admin/Product/getSubcategory",
        data:{'id':value},
        success:function(data){
           $('#subcateid').html('<option value="">Select Subcategory</option>');
           var obj = JSON.parse(data);
           for(key in obj){
              var temp = obj[key];
              var option = $('<option />');
              option.attr('value', temp.subcategory_id_pk).text(temp.subcategory_name);
              $('#subcateid').append(option);
           }
        }
     });
   }
   
</script>