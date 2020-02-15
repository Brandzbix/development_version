<?php 
   $this->load->view('admin/layouts/header',$title);
?>
<style type="text/css">


</style>
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-11">
      <h2>Edit News</h2>
      <ol class="breadcrumb">
   </div>
   <div class="col-lg-1">
      <br>
      <a href="<?php echo base_url(); ?>admin/news" class="btn btn-default btn-sm"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</a>
   </div>
</div>
<br>
<?php 
   if(!empty($this->session->flashdata('message'))): ?>
<div class="row">
   <div class="col-md-8 col-md-offset-2 text-center">
      <div class="alert <?php print_r($this->session->flashdata('alert-class')); ?> text-center">
         <?php print_r($this->session->flashdata('message')['message']); ?>
      </div>
   </div>
</div>
<?php endif; ?> 
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>News</h5>
            </div>
            <div class="ibox-content">
               <?php foreach($result as $key => $value): 
                  $statusJson    =  json_decode($value["news_flags"]);
               ?>
               <form roll="form" action="<?php echo base_url().'admin/NewsController/update';?>"  method="POST" enctype="multipart/form-data" name="addNews">
                  <div class="row">
                     <div class="form-group">
                        <div class="col-md-12">
                           <label for="newTitle">News Title</label>
                           <textarea rows="4" class="form-control" id="newTitle" name="newsTitle" ><?php echo $value["news_heading"]; ?></textarea>
                        </div>
                        <div>
                           <input type="hidden" name="newId" value="<?php echo $value["news_id_pk"]; ?>">
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="newsDesc">News Description</label>
                              <textarea rows="4" class="form-control summernote"  name="newsDesc">  
                              <?php echo $value["news_description"]; ?>      
                              </textarea>
                           </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                           <label id="image">Image</label>
                           <input type="file" name="newsImage" class="form-control">
                           <input type="hidden" name="existImage" value="<?php echo $value["news_picture"]; ?>">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="newsType">News Type</label>
                           <select class="form-control" id="newsType" name="newsType" >
                              <option value="">--Select News Type--</option>
                              <?php foreach($newsType as $key1 => $value1): 

                                 ?>
                                 <option value="<?php echo $value1["news_type_id_pk"]; ?>" <?php if($value1["news_type_id_pk"]==$value["news_type"]){echo "selected";} ?>><?php echo $value1["news_type_name"]; ?></option>
                              <?php endforeach; ?>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <img src="<?php echo base_url().'assets/img/news/'.$value['news_picture']; ?>" width="20%">
                        </div>
                     </div>
                      <div class="col-md-4">
                        <div class="form-group">
                           <label for="topNews">Top News</label>
                              <select name="topNews" id="topNews" class="form-control" data-parsley-required data-parsley-error-message="This felid is required.">
                                 <option value="">--Please Select--</option>
                                 <option value="1" <?php if($statusJson->topNews==1): echo "selected"; endif; ?> >Yes</option>
                                 <option value="0" <?php if($statusJson->topNews==0): echo "selected"; endif; ?>>No</option>
                              </select>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="latestNews">Latest News</label>
                              <select name="latestNews" id="latestNews" class="form-control" data-parsley-required data-parsley-error-message="This felid is required.">
                                 <option value="">--Please Select--</option>
                                 <option value="1" <?php if($statusJson->topNews==1): echo "selected"; endif; ?>>Yes</option>
                                 <option value="0" <?php if($statusJson->topNews==0): echo "selected"; endif; ?>>No</option>
                              </select>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="suggestedNews">Suggested</label>
                              <select name="suggestedNews" id="suggestedNews" class="form-control" data-parsley-required data-parsley-error-message="This felid is required.">
                                 <option value="">--Please Select--</option>
                                 <option value="1"<?php if($statusJson->topNews==1):   echo "selected"; endif; ?>>Yes</option>
                                 <option value="0" <?php if($statusJson->topNews==1):  echo "selected"; endif; ?>>No</option>
                              </select>
                        </div>
                     </div>
                     <div class="col-md-12 text-right">
                        <div class="form-group">
                           <input type="submit" name="submit" class="btn btn-info btn-sm">
                        </div>
                     </div>
                     </div>
                  </div>
               </form>
            <?php endforeach; ?>
            </div>
         </div>
      </div>
   </div>
</div>

<?php 
   $this->load->view('admin/layouts/footer');
   ?>
<!-- SUMMERNOTE -->
<script>
      $(document).ready(function() {
      $("form[name=addNews]").parsley();
   });   


   $(document).ready(function(){
      $('.summernote').summernote();
   });
</script>