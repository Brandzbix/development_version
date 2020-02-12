
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Brandbix</title>
    <link href="<?php echo base_url('assets/admin_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin_assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
    <!-- Toastr style -->
    <link href="<?php echo base_url('assets/admin_assets/css/plugins/toastr/toastr.min.css');?>" rel="stylesheet">
    <!-- Gritter -->
    <link href="<?php echo base_url('assets/admin_assets/js/plugins/gritter/jquery.gritter.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin_assets/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin_assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin_assets/css/custom-style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin_assets/css/index.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin_assets/css/profile_details.css');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400i,400,600,600i,700,700i" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #F2F4F9;
        }
        
        .logo-heading {
            color: #192932;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-style: normal;
            "

        }
        
        input[type="file"],
        input[type="text"],
        input[type="password"],
        input[type="datetime"],
        input[type="datetime-local"],
        input[type="date"],
        input[type="month"],
        input[type="time"],
        input[type="week"],
        input[type="number"],
        input[type="email"],
        input[type="url"],
        input[type="search"],
        input[type="tel"],
        input[type="color"],
        .uneditable-input,
        select,
        textarea {
            width: 100%;
            border: 1px solid #D5D5D5;
            padding: 20px;
        }
        .b-radious{
        border-radius: 0px;
        background-color: #192932;  
        border:1px solid #192932;
      }
        .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary {
        background-color: #192932;  
        border:1px solid #192932;
        }
        .parsley-custom-error-message {
    font-style: normal;
    font-family: 'Poppins', sans-serif;
    font-style: 'normal';
    font-weight: 600;
    font-size: 16px;
    color: red;
    list-style-type: none;
        float: left
}
label{
    color:#192932;
        font-size: 12px;

    }
    .middle-box{
        padding-top: 0px;
    }
    #bottom{
        display: none;
    }
    #footer{
        display: none;
    }
    </style>

</head>
<body>
    <div class="text-center animated fadeInDown">
        <div class="">
            <div class="logo-name">
                  <a href=""></a>
                  <image src="<?php echo base_url();?>/assets/admin_assets/img/logo.png">
            </div>
            <!-- <h1 class="logo-name">N+</h1> -->
        </div>
       <h3 class="logo-heading">ADMIN LOGIN</h3>
 
    </div>
<div class="container middle-box animated fadeInUp">
   <div class="row justify-content-center">
      <div class="col-md-12 mb-5 element-animate fadeInUp element-animated">
         <form action="<?php echo base_url();?>admin/LoginController/loginAuthontication" method="post" name="adminLogin" id="feedbackForm" novalidate="">
            <div class="row">
               <div class="col-md-12 form-group">
                  <label for="email" class="newsbox-head">Email *</label>
                  <input type="email" class="form-control form-control-lg" id="email" data-parsley-required="" data-parsley-error-message="Email is required" placeholder="Enter email here" name="email" data-parsley-type="email">
               </div>
               <div class="col-md-12 form-group">
                  <label for="password" class="newsbox-head">Password *</label>
                  <input type="password" class="form-control form-control-lg" id="password" placeholder="Enter password here." name="password" data-parsley-required="" data-parsley-error-message="Password id is required">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 form-group">
                  <input type="submit" value="Login" class="btn btn-primary btn-lg btn-block b-radious btn-description newsbox-head">
               </div>
            </div>
            <a href="<?php echo base_url(); ?>forgot-password">Forgot Password</a>
            <div class="row">
               <div class="col-md-12 form-group">
                <?php 
                  if(!empty($this->session->flashdata('message'))): ?>
                    <div class="row">
                       <div class="col-md-12 text-center">
                          <div class="alert <?php print_r($this->session->flashdata('alert-class')); ?> text-center" style="font-weight: bold;">
                             <?php print_r($this->session->flashdata('message')['message']); ?>
                          </div>
                       </div>
                    </div>
                <?php endif; ?>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
    <script type="text/javascript" src="<?php echo base_url('assets/js/parsley.extend.js');?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.min.js"></script>
    <script>
        $(document).ready(function() {
            $("form[name=adminLogin]").parsley();
        });
    </script>
</body>