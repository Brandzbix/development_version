<?php 
   $this->load->view('admin/layouts/header',$title);
   ?>
<div class="row  border-bottom white-bg dashboard-header">
   <div class="col-lg-8">
      <h2>Add Meta Tages</h2>
      <ol class="breadcrumb">
         <li>
            <a href="#">Meta</a>
         </li>
         <li class="active">
            <strong>Pages Add</strong>
         </li>
      </ol>
   </div>
</div>
<br/>
<?php 
   if(!empty($this->session->flashdata('message'))): ?>
<div class="row">
   <div class="col-md-8 col-md-offset-2 text-center">
      <div class="alert <?php echo $this->session->flashdata('alert-class'); ?> text-center">
         <?php echo $this->session->flashdata('message')['message']; ?>
      </div>
   </div>
</div>
<?php endif; ?>
<div id="wrapper">
   <div class="wrapper wrapper-content animated fadeIn">
      <?php echo form_open('admin/MetaController/store',array('name'=>'addMeta','data-parsley-validate'=>'','enctype'=>'multipart/form-data')); ?>
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="ibox float-e-margins">
                     <div class="col-lg-12 col-md-12">
                        <div class="ibox float-e-margins">
                           <div class="ibox-title">
                              <h5>Add Pages Meta Tags</h5>
                           </div>
                           <div class="ibox-content">
                              <div class="row">
                                 <div class="col-lg-3 col-md-3">
                                    <div class="form-group">
                                       <label>Select Pages
                                       <span class="mindetory">*</span>
                                       </label>
                                       <select name="pages" id="" class="form-control" data-parsley-required data-parsley-error-message ='Please select the page'>
                                          <option value="">--Select Pages--</option>
                                          <?php 
                                             foreach ($websitePages as $key => $value) { ?>
                                          <option value="<?php echo $value["id"]; ?>">
                                             <?php echo $value["menu_name"]; ?>
                                          </option>
                                          <?php }  ?>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                       <label>Meta Title
                                       <span class="mindetory">*</span>
                                       </label>
                                       <input type="text" class="form-control" name="meta-title" placeholder="Meta Title" data-parsley-required data-parsley-error-message ='Meta title is required'>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                       <label>URL Slug
                                       <span class="mindetory">*</span>
                                       </label>
                                       <input type="text" class="form-control" name="url-slug" placeholder="Enter URL slug" data-parsley-required data-parsley-error-message ='URL Slug is required'>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-lg-6">
                                    <label>Meta Description
                                    <span class="mindetory">*</span>
                                    </label>
                                    <textarea name="meta-desc" class="form-control" id="" rows="3" placeholder="Meta description" data-parsley-required data-parsley-error-message ='Meta description is required'></textarea>
                                 </div>
                                 <div class="col-md-6 col-lg-6">
                                    <label>Meta Keyword
                                    <span class="mindetory">*</span>
                                    </label>
                                    <textarea name="meta-keyword" class="form-control" id="" rows="3" placeholder="Meta keywords" data-parsley-required data-parsley-error-message ='Meta keyword is required'></textarea>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label>Meta Image
                                       <span class="mindetory">*</span>
                                       </label>
                                       <input type="file" class="form-control" name="meta_image">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
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
   </div>
</div>
<?php 
   $this->load->view('admin/layouts/footer');
   ?>
<script>
   $(document).ready(function() {
      $("form[name=addMeta]").parsley();
   });
</script>