<?php include "Include/Head.php" ?>
<?php include "Include/Header.php" ?>
<?php include "Include/Sidebar.php" ?>
<?php $url = base_url(); ?>
  

 
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Employee  Records</h1>
     <!--     <p>Table to display analytical data effectively</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
       
          <li class="breadcrumb-item active"><a href="#">Employee Records</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Dob</th>
                      <th>Gender</th>
                      <th>Designation</th>

                      
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Dob</th>
                      <th>Gender</th>
                      <th>Designation</th>
                      <th>Status</th>
                    <th>Action</th>
                    </tr>
                  </tfoot>

                  
                  <tbody>

                  <?php foreach($Emp_Records as $row) { ?>
                    <tr>
                      <?php  $FullNAme = $row['fname']. " ". $row['lname']; ?>
                      <td><?php echo $FullNAme;  ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['mobile']; ?></td>
                      <td><?php echo $row['dob']; ?></td>
                      <td><?php echo $row['gender']; ?></td>
                      <td><?php echo $row['designation']; ?></td>
                      
                      <td>
                    
                      <?php
                      if($row['status']==1)
                      {
                        ?>
                            <span class="badge badge-primary">Active</span>
                        <?php 
                      }
                      else
                      {
                        ?>
                              <span class="badge badge-danger">Denactive</span>
                        <?php  
                      }
                      ?>
                    
                    </td>

                      <td>

                

                      <?php 
                      /*
                      <a href="<?php echo $url. "Emp_Records/Edit_Employee/".$row->id; ?>" class="fas fa-fw fa-edit"></a>
                      */
                      ?>
                  
                   <a  class="fa fa-edit" href="<?php echo $url. "Emp_Records/Edit_Employee/".$row['id']; ?>"></a>
                    
                    <button data-toggle="tooltip"  data-placement="right" title="Delete" data-original-title="Delete" type="button" class="btn btn-sm btn-default" onclick="Delete_Employee(<?php echo $row['id']; ?>)">
                    <i class="fa fa-close"></i>
                    </button>

                      
                      </td>
                    </tr>
                  <?php } ?>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
   


  
 
   






        
  <?php include "Include/Footer.php" ?>





  <script type="text/javascript">
    /*
  if (isConfirm) {
      			swal("Deleted!", "Your imaginary file has been deleted.", "success");
      		} else {
      			swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
          */

       var base_url="<?php  echo base_url(); ?>";
          function Delete_Employee(id)
          {

                $(document).ready(function(){

                
                 swal({
                  title: "Are you sure to delete ?",
                  text: "You will not be able to recover this Data !!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Yes, delete it !!",
                  closeOnConfirm: false
                },
                function(isConfirm) {
                        $.ajax({
                              url  : "<?php  echo base_url('Emp_Records/Delete_Employee/')?>"+id,
                              type : "POST",
                              data : { id: id },
                              success: function(data)
                              {
                              
                                  if (data = 1) 
                                  {
                                     swal("Good job!", "Record Deleted Success Fully", "success"); 
                                     //  swal("Good job!", "Record Deleted Success Fully", "success"); 
                                        //   $('.closehideshow').trigger('click');
                                          $('.confirm').on('click' ,function(){

                                            location.reload();
                                            //  alert('clk');
                                        
                                          //   new PNotify({
                                          //   title: 'Record Delete',
                                          //   text: 'Record Delete Success Fully',
                                          //   type: 'Danger',
                                          //   styling: 'bootstrap3'
                                          //   });

                                           // load_data();
                                          
                                         });
                                    }
                                    else 
                                    {
                                    //  alert("s");
                                      errorTost("Data Delete Failed");
                                    }
                                   
                              },
                              error: function(data) 
                              {
                                alert("t");
                                  console.log('Error:', data);
                              }
                        });
                          return false;
                });
          });
      }
</script>