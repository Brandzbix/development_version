        </td>    </tr>
<?php 
    $data["title"]  =   "Compose Email | Apple Therapeutics";
    $this->load->view('admin/layouts/header.php',$data);
?>
            <div class="col-lg-12 animated fadeInRight">
            <div class="mail-box-header">
                <h2>
                    Compose mail
                </h2>
            </div>
               <div class="mail-box">
               <?php foreach($details as $key => $value): ?>
               <div class="mail-body">
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>admin/ContactusController/sendEmail">
                        <div class="form-group"><label class="col-sm-2 control-label">To:</label>

                            <div class="col-sm-10"><input type="text" name = "email" class="form-control" value="<?php echo $value["email"]; ?>"></div>
                            <div class="col-sm-10"><input type="hidden" name = "id" class="form-control" value="<?php echo $value["contact_id_pk"]; ?>"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">CC:</label>

                            <div class="col-sm-10">
                            	<input type="text" name = "ccemail" class="form-control" placeholder="example@gmail.com" value="">
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Subject:</label>

                            <div class="col-sm-10"><input type="text" class="form-control" name="subject" value=""></div>
                        </div>
                </div>

                    <div class="mail-text h-200">
                            <textarea class="summernote" name="reply_message">                            
                            <p>Hello <?php echo $value["first_name"]; ?> <?php echo $value["last_name"]; ?>! </p>
                        </textarea>
                        
<div class="clearfix"></div>
                        </div>
                    <div class="mail-body text-right tooltip-demo">
                        <button type="submit" name="submit" class="btn btn-sm btn-info"><i class="fa fa-reply"></i> Send</button>
                    </div>
                <div class="clearfix"></div>
                                     </form>

             <?php endforeach; ?>
                </div>
            </div>
<?php $this->load->view('admin/layouts/footer.php'); ?>
    <script>
        $(document).ready(function(){

            $('.summernote').summernote();

        });

    </script>