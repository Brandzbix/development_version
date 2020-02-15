<?php 

	$this->load->view('admin/layouts/header',$title);
?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-11">
                    <h2>News Details</h2>
                </div>
                <div class="col-lg-1">
                    <br>
                    <a href="<?php echo base_url(); ?>admin/news" class="btn btn-default btn-sm"><i class="fa fa-angle-left" aria-hidden="true"></i>
                     Back</a>
                </div>
            </div>	
            <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>News</h5>
                        </div>
                        <div>
                        <?php foreach($result as $key => $value):
                        ?>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-responsive" src="<?php echo base_url().'assets/img/news/'.$value['news_picture']; ?>" style="width: 100%;">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong>Brandzbix</strong></h4>
                                <p><i class="fa fa-map-marker"></i> New Delhi, India</p>
                                <p>
                                   <?php 
                                       $old_date_timestamp = strtotime($value['create_date']);
                                       $new_date = date('d-m-Y', $old_date_timestamp); 
                                       echo "<i class='fa fa-calendar' aria-hidden='true'>
                                 ".$new_date."</i>";
                                    ?>
                                </p>
                                 <p>
                                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>

                                  <?php echo $value['news_type_name']; ?> 
                                </p>
                           </div>
                    </div>
                </div>
                    </div>
                <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>News History</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                 <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <h4 for="feed-activity-list">New Heading</h4>
                                <div class="feed-activity-list">
                                    <div class="feed-element text-justify">
                                      <?php echo $value['news_heading']; ?>
                                    </div>
                                </div>
		                     </div>
                             <div>
                                <h4 for="feed-activity-list">New Description</h4>
                                <div class="feed-activity-list">
                                    <div class="feed-element text-justify">
                                      <?php echo $value['news_description']; ?>
                                    </div>
                                </div>
                             </div>
                         <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<?php 
	$this->load->view('admin/layouts/footer');
?>