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
<div class="row">
   <div class="col-lg-12 col-md-12">
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
                              <input type="text" name="proSku" class="form-control" placeholder="Ex:- BW-BP06-BLU">
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                           <div class="form-group">
                              <label>Color
                              <span class="mindetory">*</span>
                              </label>
                              <select name="proType" id="" class="form-control" data-parsley-required data-parsley-error-message = "This felid is required">
                                 <option value="">--Please Select--</option>
                                 <option value="blue">Blue</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                           <div class="form-group">
                              <label>Ideal For
                              <span class="mindetory">*</span>
                              </label>
                              <input type="text" name="idealFor" class="form-control" placeholder="Ex:- Men & Women">
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
                        <h5>SEO,Meta Deta</h5>
                     </div>
                     <div class="ibox-content">
                        <div class="row">
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label>Meta Title
                                 <span class="mindetory">*</span>
                                 </label>
                                 <input type="text" class="form-control" name="meta-title" placeholder="Meta Title">
                              </div>
                           </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label>URL Slug
                                 <span class="mindetory">*</span>
                                 </label>
                                 <input type="text" class="form-control" name="url-slug" placeholder="Enter URL slug">
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-6">
                              <label>Meta Description
                              <span class="mindetory">*</span>
                              </label>
                              <textarea name="meta-desc" class="form-control" id="" rows="3" placeholder="Meta description"></textarea>
                           </div>
                           <div class="col-md-6 col-lg-6">
                              <label>Meta Keyword
                              <span class="mindetory">*</span>
                              </label>
                              <textarea name="meta-keyword" class="form-control" id="" rows="3" placeholder="Meta keywords"></textarea>
                           </div>
                           <div class="col-lg-3 c col-md-3 ">
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
<?php
$this->load->view('admin/layouts/footer');
?>
<script>
   $(document).ready(function() {
      $("form[name=add_product]").parsley();
   });
</script>
<script>
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