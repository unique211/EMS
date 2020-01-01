<?php include "Include/Head.php" ?>
    <?php include "Include/Header.php" ?>
    <?php include "Include/Sidebar.php" ?>


  
 
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Employee Report</h1>
          <!-- <p>Sample forms</p>  -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
  
          <li class="breadcrumb-item"><a href="">Report</a></li>
        </ul>
      </div>
      <div class="row">
 
 
 
 
 
    

        <div class="clearix"></div>
        <div class="col-md-12">
        <div class="tile">
       <!--  <h3 class="tile-title"> Employee Report</h3> -->

        <div class="tile-body">

        <?php /* <?php echo $url; ?>Employee/Employee_Add */?>
        
        <form class="row" method="POST"  action="" id="Emp_Form">


      
    
         

             <div class="form-group col-md-6">
                <label class="control-label">From Date </label>
                <input class="form-control" type="text"  id="FromDate"  placeholder="Select Date" name="FromDate">
            </div>

            <div class="form-group col-md-6">
                <label class="control-label"> To Date </label>
                <input class="form-control" type="text"  id="ToDate"  placeholder="Select Date" name="ToDate">
            </div>


            <div class="form-group col-md-6">
                <label class="control-label">Employee </label>


                <select name="id" id="id" class="form-control">
                <option value="All">All </option>

                <?php 
                foreach ($Select_Employee as $row)
                 {
                 ?>

				<option value="<?php echo $row['id']; ?>"><?php  echo $row['fname'] . " ". $row['lname'];  ?> </option>
				
                <?php } ?>
                
                </select>

            </div>



            <div class="form-group col-md-6">
                <label class="control-label">&nbsp; </label><br>
                 <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Search</button>
            </div>






           
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive"></div>


                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                     <th>Date</th>
                      <th>Name</th>

                      <th>in </th>
                      <th>out  </th>

                      <th>H : M : S</th>

                  
        
                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                    <th>Date</th>
                    <th>Name</th>


                    <th>in </th>
                      <th>out  </th>



                    <th>H : M : S</th>


         
                  
                    </tr>
                  </tfoot>

                  
                  <tbody>

                  <?php foreach($Select_Employee_entry as $row) { ?>
                    <tr>
                    
                      <td>    <?php  echo $row['date']; ?></td>
                      <?php  $FullNAme = $row['fname']. " ". $row['lname']; ?>
                      <td><?php echo $FullNAme;  ?></td>


                      <td>    <?php  echo $row['in_time']; ?></td>
                      <td>    <?php  echo $row['out_time']; ?></td>

                        <?php 

                            $In_Time_TimeStamp =   $row['in_time'];
                            $Out_Time_TimeStamp =   $row['out_time'];

                            $date1 = strtotime($In_Time_TimeStamp);  
                            $date2 = strtotime( $Out_Time_TimeStamp);  
                            $diff = abs($date2 - $date1); 

                           $years = floor($diff / (365*60*60*24));  
                           $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                           $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); 
                          $hours = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24) / (60*60)); 
                           $minutes = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24  - $hours*60*60)/ 60); 
                             $seconds = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60)); 

                          

                        ?>



                  <td>  
                      <?php

                    //  printf("%d years, %d months, %d days, %d hours, " . "%d minutes, %d seconds", $years, $months, $days, $hours, $minutes, $seconds);
                         printf("%d hours - " . "%d minutes - %d seconds",  $hours, $minutes, $seconds);
                   
                      
                      ?> </td>



                   
              
                
                   </tr>
                  <?php } ?>
                  
                  </tbody>
                </table>
                
                </div>
                </div>
                </div>
 




  
         

         





            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</main>










        
  <?php include "Include/Footer.php" ?>



<script>
    /*
txtFrom   txtTo
*/
// $("#FromDate, #ToDate").datepicker({});
  </script>







<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
type="text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
rel="Stylesheet"type="text/css"/>
<script type="text/javascript">
$(function () {
    $("#FromDate").datepicker({
     //   numberOfMonths: 2,
     dateFormat: 'd-m-y',
       onSelect: function (selected) {
        $("#ToDate").datepicker("option","minDate", selected)
      
        }
    });

   
    $("#ToDate").datepicker({
      //  format: 'd-m-Y',
      dateFormat: 'd-m-y',
      //  numberOfMonths: 2,
        onSelect: function (selected) {
        $("#FromDate").datepicker("option","maxDate", selected)
        }
    });
 

});
</script>





<script type="text/javascript">
/*
$(function () {
  
    $("#FromDate").datepicker({
      //   numberOfMonths: 2,
        onSelect: function (selected) {
            var dt = new Date(selected);
            alert(dt);
            dt.setDate(dt.getDate() + 1);
         
            $("#ToDate").datepicker("option", "minDate", dt);
        }
    });
    $("#ToDate").datepicker({
     //   numberOfMonths: 2,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#FromDate").datepicker("option", "maxDate", dt);
        }
    });
});
*/
</script>












 <!--
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
-->
<style>
    .error
    {
        color: red;
    }
</style>

  <script>
/*
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


*/
</script>
