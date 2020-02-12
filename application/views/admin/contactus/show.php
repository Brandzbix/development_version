<?php $this->load->view('admin/layouts/header'); ?>
<div class="row  border-bottom white-bg dashboard-header">
     <div class="col-lg-10">
         <h2>Contact Details</h2>        
     </div>    
     <div class="col-lg-2">
         <a href="<?php echo base_url();?>admin/contactus" style="line-height: 38px;"><p>
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
         </p></a>        
     </div>    
</div>
<?php foreach($details as $key => $value): ?>
<div class="row m-b-lg m-t-lg">
                <div class="col-md-6">
                    <div class="profile-image">
                        <img src="<?php echo base_url();?>assets/admin_assets/img/group.png" class="img-circle circle-border m-b-md" alt="profile">
                    </div>
                    <div class="profile-info">
                        <div class="">
                            <div>
                                <h2 class="no-margins">
                                    <?php echo $value['first_name']; ?> <?php echo $value['last_name']; ?>
                                </h2>
                                <h4><?php echo $value['email']; ?></h4>
                                <p class="">
                                    <?php echo $value['message']; ?>                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <table class="table small m-b-xs">
                        <tbody>
                        <tr>
                            <td>
                                <strong>Phone No.</strong><br><?php echo $value['phone'] ?>
                            </td>
                            <td>
                                <strong>Applied Date</strong><br><?php echo $value['current_date_time']; ?>
                            </td>
                            <td>
                              <a href="<?php echo base_url().'admin/contactus/compose/'.$value['contact_id_pk'];?>" class="btn  btn-xs btn-success btn-block">Reply</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

</div>
<div class="row">
    <br/>
    <br/>
<div class="col-lg-8 col-md-offset-2">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">         <div>
                   <div class="chat-activity-list">
                  <?php 
                     $id = $this->uri->segment(4);
                     $sql = "select first_name,last_name,email,message,product_enquiry,current_date_time from tbl_contact where contact_id_pk = '$id' AND if_user = '1'";
                     $query = $this->db->query($sql);
                     $result = $query->result_array();   
                  ?>     
                  <?php foreach($result as $key => $value): ?>
                    <div class="chat-element">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="<?php echo base_url();?>assets/admin_assets/img/group.png">
                        </a>
                        <div class="media-body ">
                            <strong><?php echo $value['first_name']; ?> <?php echo $value['last_name']; ?></strong>
                           <?php 
                           if(!empty($value['product_enquiry'])){ ?>
                              <p class="m-b-xs">
                                 I want to know about <strong><?php echo $value['product_enquiry']; ?></strong>
                              </p>
                           <?php } ?>
                           <p class="m-b-xs">
                              <?php echo $value['message']; ?>
                           </p>
                           <small class="text-muted"> <?php 
                              echo date('M j Y g:i A', strtotime($value['current_date_time'])); ?>
                           </small>
                        </div>
                    </div>
                  <?php endforeach; ?>
                  <?php 
                     $sql1 = "select contact_id_fk,email,cc_email,message as reply_message,time_stemp,if_user from tbl_contact_reply where contact_id_fk = '$id'";
                     $query1 = $this->db->query($sql1);
                     $result1 = $query1->result_array();   
                  ?>
                  <?php foreach($result1 as $key1 => $value1): ?>
                    <?php if($value1["if_user"]=="0"){?>
					<div class="chat-element right">
                        <a href="#" class="pull-right">
                            <img alt="image" class="img-circle" src="<?php echo base_url();?>assets/admin_assets/img/logo.png">
                        </a>
                        <div class="media-body text-right ">
                            <strong>Apple Therapeutics</strong>
                            <p class="m-b-xs">
                              <?php echo $value1['reply_message']; ?>
                            </p>
                            <?php 
                            if (!empty($value1["cc_email"])) { ?>
                                <p class="m-b-xs">
                                    <b>CC: Marked</b>
                                  <?php echo $value1['cc_email']; ?>
                                </p>
                            <?php }else{ ?>
                                
                            <?php } ?>
                           <small class="text-muted">
                              <?php echo date('M j Y g:i A', strtotime($value1["time_stemp"])); ?>
                           </small>
                        </div>
                    </div>
					<?php } ?>
                    <?php if($value1["if_user"] == 1){ ?>
                        <div class="chat-element left">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="<?php echo base_url();?>assets/admin_assets/img/group.png">
                        </a>
                        <div class="media-body text-left ">
                            <strong>Apple Therapeutics</strong>
                            <p class="m-b-xs">
                              <?php echo $value1['reply_message']; ?>
                            </p>
                           <small class="text-muted">
                              <?php echo date('M j Y g:i A', strtotime($value1["time_stemp"])); ?>
                           </small>
                        </div>
                    </div>
                    <?php } ?>
               <?php endforeach; ?>
                </div>
                </div>
               </div>
            </div>
            </div>
</div>
<?php endforeach; ?>

<?php $this->load->view('admin/layouts/footer'); ?>