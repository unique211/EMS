
<?php 
	$url = base_url();

  
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Theme/css/main.css">

  





    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Attendancd</title>


  








  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Attendancd System</h1>
      </div>




 <?php if($this->session->flashdata('error_msg')){?>

    <?php 

      echo '<div class="alert alert-danger alert-dismissible"> <button type="button" class="close" data-dismiss="alert">&times;</button>'.$this->session->flashdata('error_msg').'</div>';

   // echo $this->session->flashdata('error_msg');
    
    ?>
 
 <?php } ?>


      <?php
  
  /*
    if(!empty($success_msg)){
        echo '<div class="card-header">'.$success_msg.'</div>';
    }

	elseif(!empty($error_msg))
	{
        echo '<div class="alert alert-danger alert-dismissible"> <button type="button" class="close" data-dismiss="alert">&times;</button>'.$error_msg.'</div>';
    }
    */

	
	/*
	if(!empty($error_msg))
	{
		echo '<div class="alert alert-danger alert-dismissible" style="display:none"> <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
	}
	*/
	

    ?>







      <div class="login-box">

        <form class="login-form"  method="POST" action="<?php echo $url; ?>Auth/LoginChk" id="LoginForm"> 


          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" type="text" placeholder="Email" autofocus name="email" id="email"> 
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control" type="password" placeholder="Password" name="password" id="password">
          </div>

           <!--
   
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
              -->
         

          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Login</button>
          </div>
        </form>

       <!--
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
          -->
           



      </div>
    </section>



    <style>
  #password-error , #email-error
  {
      color: red;
  }
</style>






    <!-- Essential javascripts for application to work-->
    <?php include "Include/Footer.php" ?>

    <script type="text/javascript">
        // Login Page Flipbox control

  
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
 
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>



<script>

jQuery(function ($) {
	//$(function() {
     
      //   alert('a');
		
	jQuery.validator.addMethod("noSpace", function(value, element) { 
	return value.indexOf(" ") < 0 && value != ""; 
	}, "White Space is Not Allowed");
	  



   

$("#LoginForm").validate({
		 
     rules:
     {
       email:
       {
         required: true,
       },
       password:
       {
         required: true,
       },
       
       
     },
     messages:
     {
       email:
       {
         required: 'Please Enter Email.',
         
       },
       password:
       {
         required: 'Please Enter Password.',
         
       },
       
     },
   });

  });
    
   </script>