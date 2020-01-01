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


        
        <form class="row" method="POST"  action="<?php echo $url; ?>Employee/Employee_Update">  

        <input class="form-control" type="hidden"  name="id" id="id" value="<?php echo $Edit_Emp['id']; ?>">


          <div class="form-group col-md-3">
                <label class="control-label">First Name</label>
                <input class="form-control" type="text" placeholder="Enter First name" name="fname" id="fname" value="<?php echo $Edit_Emp['fname']; ?>">
            </div>


            <div class="form-group col-md-3">
                <label class="control-label">Last Name</label>
                <input class="form-control" type="text" placeholder="Enter Last name" name="lname" id="lname" value="<?php echo $Edit_Emp['lname']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label class="control-label">Email </label>
                <input class="form-control" type="text" placeholder="Enter Email" name="email" id="email" value="<?php echo $Edit_Emp['email']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label class="control-label">Mobile </label>
                <input class="form-control" type="text" placeholder="Enter Mobile " name="mobile" id="mobile" value="<?php echo $Edit_Emp['mobile']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label class="control-label">Address</label>

                <textarea class="form-control" rows="2" name="address" id="address" placeholder="Enter your address"><?php echo $Edit_Emp['address']; ?></textarea>
            </div>

             <div class="form-group col-md-3">
                <label class="control-label">Date Of Birth</label>
                <input class="form-control" type="text"  id="demoDate"  placeholder="Select Date" name="dob" value="<?php echo $Edit_Emp['dob']; ?>">
            </div>


            <div class="form-group col-md-3">
                <label class="control-label">Gender</label>

                <select name="gender" class="form-control">
				<?php if($Edit_Emp['gender'] == "Male") { ?>
				<option value="Male" selected>Male</option>
				<option value="Female" >Female</option>
				<?php } else { ?>
				<option value="Female" selected>Female</option>
				<option value="Male">Male</option>
				<?php }  ?>
                </select>

              
                


              
            </div>


   
             <div class="form-group col-md-3">
                <label class="control-label">Designation</label>
                <input class="form-control" type="text" placeholder="Enter  Designation" name="designation" id="designation" value="<?php echo $Edit_Emp['designation']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label class="control-label">Salary</label>
                <input class="form-control" type="text" placeholder="Enter Salary" name="salary" id="salary" value="<?php echo $Edit_Emp['salary']; ?>">
            </div>


          



            <div class="form-group col-md-3">
                <label class="control-label">Username </label>
                <input class="form-control" type="text" placeholder="Enter Username" name="username" id="username" value="<?php echo $Edit_Emp['username']; ?>">
            </div>

            <!-- 
            <div class="form-group col-md-3">
                <label class="control-label">Password </label>
                <input class="form-control" type="text" placeholder="Enter Password" name="password" id="password">
            </div>

            <div class="form-group col-md-3">
                <label class="control-label">Conform Password </label>
                <input class="form-control" type="text" placeholder="Re Enter Password" name="C_password" id="C_password">
            </div>
                    -->


           


            
            <div class="form-group col-md-3">

                <label class="control-label">Status</label>
                 <select name="status" class="form-control">
				<?php if($Edit_Emp['status'] == "1") { ?>
				<option value="1" selected>Active</option>
				<option value="0" >Deactive</option>
				<?php } else { ?>
				<option value="0" selected>Deactive</option>
				<option value="1">Active</option>
				<?php }  ?>
                </select>
                
             </div>
            


        








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