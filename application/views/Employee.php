<?php include "Include/Head.php" ?>
    <?php include "Include/Header.php" ?>
    <?php include "Include/Sidebar.php" ?>


  
 
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Employee</h1>
          <!-- <p>Sample forms</p>  -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
  
          <li class="breadcrumb-item"><a href="">Employee</a></li>
        </ul>
      </div>
      <div class="row">
 
 
 
 
 
    

        <div class="clearix"></div>
        <div class="col-md-12">
        <div class="tile">
        <h3 class="tile-title"> Employee</h3>

        <div class="tile-body">


        
        <form class="row" method="POST"  action="<?php echo $url; ?>Employee/Employee_Add" id="Emp_Form">


          <div class="form-group col-md-3">
                <label class="control-label">First Name</label>
                <input class="form-control" type="text" placeholder="Enter First name" name="fname" id="fname">
            </div>


            <div class="form-group col-md-3">
                <label class="control-label">Last Name</label>
                <input class="form-control" type="text" placeholder="Enter Last name" name="lname" id="lname">
            </div>

            <div class="form-group col-md-3">
                <label class="control-label">Email </label>
                <input class="form-control" type="text" placeholder="Enter Email" name="email" id="email">
            </div>

            <div class="form-group col-md-3">
                <label class="control-label">Mobile </label>
                <input class="form-control" type="text" placeholder="Enter Mobile " name="mobile" id="mobile">
            </div>

            <div class="form-group col-md-3">
                <label class="control-label">Address</label>

                <textarea class="form-control" rows="2" name="address" id="address" placeholder="Enter your address"></textarea>
            </div>

             <div class="form-group col-md-3">
                <label class="control-label">Date Of Birth</label>
                <input class="form-control" type="text"  id="demoDate"  placeholder="Select Date" name="dob">
            </div>


            <div class="form-group col-md-3">
                <label class="control-label">Gender</label>

                <select name="gender" id="gender" class="form-control">
			      <option value="Male">Male</option>
				    <option value="Female" >Female</option>
             </select>

         </div>


   
             <div class="form-group col-md-3">
                <label class="control-label">Designation</label>
                <input class="form-control" type="text" placeholder="Enter  Designation" name="designation" id="designation">
            </div>

            <div class="form-group col-md-3">
                <label class="control-label">Salary</label>
                <input class="form-control" type="text" placeholder="Enter Salary" name="salary" id="salary">
            </div>


          



            <div class="form-group col-md-3">
                <label class="control-label">Username </label>
                <input class="form-control" type="text" placeholder="Enter Username" name="username" id="username">
            </div>

            <div class="form-group col-md-3">
                <label class="control-label">Password </label>
                <input class="form-control" type="text" placeholder="Enter Password" name="password" id="password">
            </div>

            <div class="form-group col-md-3">
                <label class="control-label">Conform Password </label>
                <input class="form-control" type="text" placeholder="Re Enter Password" name="C_password" id="C_password">
            </div>


           


            <!--
            <div class="form-group col-md-3">
                <label class="control-label">Status</label>
                <input class="form-control" type="text" placeholder="Enter status">
            </div>
            -->


        








            <div class="form-group col-md-4 align-self-end">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>




            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</main>










        
  <?php include "Include/Footer.php" ?>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>

<style>
    .error
    {
        color: red;
    }
</style>

  <script>

    jQuery(function ($) {
	//$(function() {
     
      //   alert('a');
		
	jQuery.validator.addMethod("noSpace", function(value, element) { 
	return value.indexOf(" ") < 0 && value != ""; 
	}, "White Space is Not Allowed");
	  


$("#Emp_Form").validate({
	
	 rules:
    {
        fname:
        {
            required: true,
            //noSpace: true,
        //	remote:
        //	{
        //		url :"<?php // echo base_url(); ?>Main_Controller/check_username_avalibility",
        //		type: "POST",
        //	},
        },
        lname:
        {
            required: true,
           
        },

        


        email:
        {
        
            //noSpace: true,
            required: true,
            email: true,
    //		remote:
    //		{
    //			url :"<?php // echo base_url(); ?>Main_Controller/Match_Email",
    //			type: "POST",
                
    //		},
        },
        mobile:
        {
            required: true,
            maxlength: 10
        },
        address:
        {
            required: true,
           
        },
        dob:
        {
            required: true,
        },
        gender:
        {
            required: true,
        },
        designation:
        {
            required: true,
        },
        salary:
        {
            required:true,
        },
        username:
        {
            required:true,
        },
        password:
        {
            required: true,
        },
        C_password:
        {
            equalTo: "#password",
        },
      
      //   type_user:
      //   {
      //       required: true,
      //   },
        
    },
    
    messages:
    {
        fname:
        {
            required: 'Please Enter First Name.',
            
        },
        lname:
        {
            required: 'Please Enter Last Name.',
        },
        
        email:
        {
            required: 'Please Enter Email.',
            email: "Please enter a valid email address!",
            remote: "The email is already in use by another user!",

            
        },
        mobile:
        {
            required: 'Please Enter Mobile Number.',
            maxlength: jQuery.validator.format("Only 10 Digit Number Allowed"),
            
            
        },
        address:
        {
            required: 'Please Enter Address.',
        },
        dob:
        {
            required: 'Please Enter Date of Birth.',
        },
        gender:
        {
            required: 'Please Enter Gender.',
        },
        designation:
        {
            required: 'Please Enter Designation.',
        },
        salary:
        {
            required: 'Please Enter salary.',
        },
        username:
        {
            required: 'Please Enter username.',
        },
        password:
        {
            required: 'Please Enter Password.',
        },
        C_password:
        {     
             required: "Password Does Not Match ",     
          //  equalTo : "Password Does Not Match",
        },
       
        
        
    },
});

});



</script>