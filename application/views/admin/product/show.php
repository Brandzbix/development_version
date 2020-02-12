<?php 
   $data['title'] = "Product Details";
   $this->load->view('admin/layouts/header',$data); 
?>
<div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-lg-10">
         <h2>Product Details</h2>
         </div>
            <div class="col-lg-2"><h2>
               <a href="<?php echo base_url();?>admin/product"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Back</a>
            </h2>
         </div>
      </div>
         <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><?php echo $prodcut_details->productname; ?></h5>
                        </div>
                        <div>
                            <div class="ibox-content">
                                <img src="<?php echo base_url();?>assets/product-img/<?php echo $prodcut_details->photobig; ?>" class="img-responsive img-center"> 
                            </div>
                            <div class="feed-activity-list ibox-content profile-content" style="padding-top: 1px;">
                              <h4><strong><?php echo $prodcut_details->category; ?> 
                              <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                              <?php echo $prodcut_details->subcategory_name; ?>
                              </strong></h4>
                                <h5>
                                    <?php echo $prodcut_details->packsize; ?>
                                </h5>
                            </div>
                    </div>
                </div>
                    </div>
                <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content2">
                           <div>
                               <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <div class="media-body ">
                                          <h4>Product Name</h4>
                                          <?php echo $prodcut_details->productname; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <div class="media-body ">
                                          <h4>Composition</h4>
                                          <?php echo $prodcut_details->composition; ?>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <div class="media-body ">
                                          <h4>Indications</h4>
                                          <?php echo $prodcut_details->indications; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <div class="media-body ">
                                          <h4>Dosage</h4>
                                          <?php echo $prodcut_details->dosage; ?>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <div class="media-body ">
                                          <h4>Sideeffects</h4>
                                          <?php echo $prodcut_details->sideeffects; ?>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <div class="media-body ">
                                          <h4>Meta Url Slug</h4>
                                          <?php echo str_replace('-', ' ',$prodcut_details->url_slug); ?>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <div class="media-body ">
                                          <h4>Meta Title</h4>
                                          <?php echo $prodcut_details->meta_title; ?>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <div class="media-body ">
                                          <h4>Description</h4>
                                          <?php echo $prodcut_details->meta_description; ?>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <div class="media-body ">
                                          <h4>Meta Keyword</h4>
                                          <?php echo $prodcut_details->meta_keyword; ?>
                                       </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $this->load->view('admin/layouts/footer'); ?>