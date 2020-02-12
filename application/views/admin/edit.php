<?php
  $data['title'] = 'Edit Products | appletherapeutics';
  $this->load->view('header',$data);
?>
   <style type="text/css">
      /*FORM INPUT REMOVE BORDER*/
   .b-radious{
      border-radius: 0px;
   }
   .btn-description{
      cursor: pointer;
   }
   .btn-description:hover{
      background-color: #303E57;
   }
  .vl{
    border-left: 1px solid #d2d2d2;
      height: auto;
   }  
   .cont-heading{
    color:black;  animation-duration: 1s;  animation-name: fadeInLeft; font-family: 'Poppins', sans-serif; font-weight: 600; font-style: normal; color: #192932;" 
   }
   .cont-desc{
    padding-left: 15px;
   }
   .owl-carousel.home-slider.inner-page .slider-item {
    height: calc(50vh - 117px);
    min-height: 320px;
}
.owl-carousel.home-slider.inner-page .slider-item .slider-text {
    color: #fff;
    height: calc(50vh - 117px);
    min-height: 337px;
}
label,h3{
  color:#192932;  animation-duration: 1s;  animation-name: fadeInLeft; font-family: 'Poppins', sans-serif; font-weight: 600; font-style: normal;"
}
.contact-address{
 color:black;  animation-duration: 1s;  animation-name: fadeInLeft; font-family: 'Poppins', sans-serif; font-weight: 600; font-style: normal; color: #192932;"  
}
.owl-carousel .owl-item img {
     display: block; 
     width: 100%; 
}
   </style>
    <section class="section" style="background-color: #F2F4F9;">
      <div class="container">
         <?php if(!empty($this->session->flashdata('message'))): ?>
           <div class="row">
             <div class="col-md-6 col-md-offset-3 text-center">
               <div class="alert <?php echo $this->session->flashdata('alert-class') ?> text-center">
                 <?php echo $this->session->flashdata('message'); ?>
               </div>    
             </div>  
           </div>  
         <?php endif; ?>   
  <div class="row justify-content-md-center">
    <h3 class="text-uppercase">edit products</h3>
  </div>   
   <?php foreach($products as $keyProduct => $valProduct): ?> 
        <div class="row justify-content-md-center">
          <div class="col-md-12 mb-5 element-animate">
          <form action="<?php echo base_url();?>admin/productController/update" method="post" name="myForm" id="myForm" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="product-name" class="newsbox-head">Product Name</label>
                  <input type="text" class="form-control form-control-lg b-radious" name="product-name" value="<?php echo $valProduct["productname"]; ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label for="pack-size" class="newsbox-head">Packsize</label>
                  <input type="text" class="form-control form-control-lg b-radious" id="pack-size" placeholder="Enter Packsize" name="pack-size"  value="<?php echo $valProduct["packsize"]; ?>">
                  <input type="hidden" name="product_id" value="<?php echo $valProduct['product_id_pk']; ?>">
                </div>
              </div>
              <div class="row">
               <div class="col-md-6 form-group">
                  <label for="category">Category</label>
                  <select class="form-control form-control-lg b-radious" id="category" name="category">
                     <option value="0">-- Select Category --</option>
                     <?php foreach($categoery as $catKey => $catVal): ?>
                        <option value="<?php echo $catVal['category_id']; ?>"
                     <?php 
                     if($catVal['category_id'] == $valProduct["category_id_fk"]){ ?>
                        selected='selected'
                     <?php  }  ?> 
                         ><?php echo $catVal['cate_name']; ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="col-md-6 form-group">
                  <label for="sub_category">Subcategory</label>
                  <select class="form-control form-control-lg b-radious" id="sub_category" name="sub_category" data-parsley-required   data-parsley-error-message="Subcategory is required.">
                  <option >Please Select</option>

                  </select>
               </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="composition" class="newsbox-head">Composition</label>
                  <textarea name="composition" id="composition" class="form-control form-control-lg b-radious"  rows="5"><?php echo $valProduct["composition"]; ?></textarea>
                  <p>if composition N/A Write N/A in box.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="composition" class="newsbox-head">Indications</label>
                  <textarea name="indications" id="indications" class="form-control form-control-lg b-radious"  rows="5"  ><?php echo $valProduct["indications"]; ?></textarea>
                  <p>if indications N/A Write N/A in box.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="composition" class="newsbox-head">Dosage</label>
                  <textarea name="dosage" id="dosage" class="form-control form-control-lg b-radious"  rows="5" ><?php echo $valProduct["dosage"]; ?></textarea>
                  <p>if dosage N/A Write N/A in box.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="composition" class="newsbox-head">Sideeffects</label>
                  <textarea name="sideeffects" id="sideeffects" class="form-control form-control-lg b-radious"  rows="5"><?php echo $valProduct["sideeffects"]; ?></textarea>
                  <p>if sideeffects N/A Write N/A in box.</p>
                </div>
              </div>
              <div class="row">
                 <div class="col-md-6 form-group">
                    <label for="product_image">Product Image</label>
                    <input type="file" name="product_image" class="form-control form-control-lg b-radious"  rows="5" value="<?php echo $valProduct['photobig']; ?>">
                 </div>
                 <div class="col-md-6 form-group">
                    <label for="trending">This product is trending</label>
                    <select type="file" name="trending" class="form-control form-control-lg b-radious">
                     <option>-- Please Select --</option>
                        <?php 
                           if($valProduct['is_trending'] == "1"):
                        ?>
                        <option value="1" selected>Yes</option>
                        <option value="0" >No</option>
                        <?php else: ?>
                        <option value="0" >Yes</option>
                        <option value="0" selected>No</option>
                     <?php endif; ?>
                    </select>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-6 form-group">
                  <a href="<?php echo base_url().'assets/product-img/'.$valProduct['photobig'] ?>">
                     <img src="<?php echo base_url().'assets/product-img/'.$valProduct['photobig'] ?>" width="150" height="150">
                  </a>
                 </div>
                 <input type="text" name="imagename" value="<?php echo $valProduct['photobig']; ?>">
              </div>
              <div class="row">
                <div class="col-md-3 form-group">
                  <input type="submit" value="Submit" class="btn btn-primary btn-lg btn-block b-radious btn-description newsbox-head">
                </div>

              </div>
            </form>
          </div>
        </div>
   <?php endforeach; ?>
      </div>
    </section>
<?php $this->load->view('footer'); ?>
<script>
  $(document).ready(function() {
    $("form[name=myForm]").parsley();  
  });
   $( window ).on( "load", function() {
      var id = $("#category").val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>appletherapeutics/getSubcategoryById",
            data: {
                id: id
            },
            success: function(result) {
                if (result) {
                    $('#sub_category').html('<option value="">-- Select Subcategory --</option>');
                    var dataObj = jQuery.parseJSON(result);
                    if (dataObj) {
                        $(dataObj).each(function() {
                            var option = $('<option />');
                            option.attr('value', this.category_id_fk).text(this.subcategory_name);
                            $('#sub_category').append(option);
                        });
                    }

                }
            }
        });
   });
     $("#category").on('change',function(){
      var id = $(this).val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>appletherapeutics/getSubcategoryById",
            data: {
                id: id
            },
            success: function(result) {
                if (result) {
                    $('#sub_category').html('<option value="">-- Select Subcategory --</option>');
                    var dataObj = jQuery.parseJSON(result);
                    if (dataObj) {
                        $(dataObj).each(function() {
                            var option = $('<option />');
                            option.attr('value', this.subcategory_id_pk).text(this.subcategory_name);
                            $('#sub_category').append(option);
                        });
                    }

                }
            }
        });
   });
</script>