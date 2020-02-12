<?php 
   $this->load->view('admin/layouts/header',$title);
?>
<div class="row  border-bottom white-bg dashboard-header">
   <div class="col-lg-10">
      <h2>Update Meta Tages</h2>
      <ol class="breadcrumb">
         <li>
            <a href="#">Meta</a>
         </li>
         <li class="active">
            <strong>Update Meta</strong>
         </li>
      </ol>
   </div>
   <div class="col-lg-2">
  <a href="<?php echo base_url().'admin/meta/pages/listing';?>" class="btn  btn-sm btn-success"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
   Back</a>
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
      <?php echo form_open('admin/MetaController/update',array('data-parsley-validate'=>'','enctype'=>'multipart/form-data')); ?>
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
                                 <input type="hidden" name="id" value="<?php echo $pageDetails->meta_tag_id_pk; ?>">
                                 <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                       <label>Meta Title
                                       <span class="mindetory">*</span>
                                       </label>
                                       <input type="text" class="form-control" name="meta-title" placeholder="Meta Title"  value="<?php echo $pageDetails->meta_title; ?>">
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                       <label>URL Slug
                                       <span class="mindetory">*</span>
                                       </label>
                                       <input type="text" class="form-control" name="url-slug" placeholder="Enter URL slug" value="<?php echo $pageDetails->url_slug; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-lg-6">
                                    <label>Meta Description
                                    <span class="mindetory">*</span>
                                    </label>
                                    <textarea name="meta-desc" class="form-control" id="" rows="3" placeholder="Meta description">
                                       <?php    echo $pageDetails->meta_description; ?>
                                    </textarea>
                                 </div>
                                 <div class="col-md-6 col-lg-6">
                                    <label>Meta Keyword
                                    <span class="mindetory">*</span>
                                    </label>
                                    <textarea name="meta-keyword" class="form-control" id="" rows="3" placeholder="Meta keywords">
                                       <?php echo $pageDetails->meta_keyword; ?>
                                    </textarea>
                                 </div>
                                 <!-- <div class="col-md-3">
                                    <div class="form-group">
                                       <label>Meta Image
                                       <span class="mindetory">*</span>
                                       </label>
                                       <input type="file" class="form-control" name="meta_image">
                                    </div>
                                 </div> -->
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
