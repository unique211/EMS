
    <!-- Page specific javascripts-->
  
  <!-- Essential javascripts for application to work-->



    <!-- Page specific javascripts-->
   


 


 




    <script src="<?php echo $url; ?>Theme/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo $url; ?>Theme/js/popper.min.js"></script>
	<script src="<?php echo $url; ?>Theme/js/bootstrap.min.js"></script>
	<script src="<?php echo $url; ?>Theme/js/main.js"></script>

      <!-- The javascript plugin to display page loading on top-->


	<script src="<?php echo $url; ?>Theme/js/plugins/pace.min.js"></script>


	<script src="<?php echo $url; ?>Theme/js/plugins/bootstrap-notify.min.js"></script>
	<script src="<?php echo $url; ?>Theme/js/plugins/sweetalert.min.js"></script>

	<script type="text/javascript">
	/*
      $('#demoNotify').click(function(){
      	$.notify({
      		title: "Update Complete : ",
      		message: "Something cool is just updated!",
      		icon: 'fa fa-check' 
      	},{
      		type: "info"
      	});
      });
      $('#demoSwal').click(function(){
      	swal({
      		title: "Are you sure?",
      		text: "You will not be able to recover this imaginary file!",
      		type: "warning",
      		showCancelButton: true,
      		confirmButtonText: "Yes, delete it!",
      		cancelButtonText: "No, cancel plx!",
      		closeOnConfirm: false,
      		closeOnCancel: false
      	}, function(isConfirm) {
      		if (isConfirm) {
      			swal("Deleted!", "Your imaginary file has been deleted.", "success");
      		} else {
      			swal("Cancelled", "Your imaginary file is safe :)", "error");
      		}
      	});
	  });
	  */
    </script>











	    <!-- Data table plugin-->
		<script type="text/javascript" src="<?php echo $url; ?>Theme/js/plugins/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo $url; ?>Theme/js/plugins/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">$('#sampleTable').DataTable();</script>






	<script type="text/javascript" src="<?php echo $url; ?>Theme/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>Theme/js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>Theme/js/plugins/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="<?php echo $url; ?>Theme/js/plugins/dropzone.js"></script>
	
	 <script type="text/javascript">
      $('#sl').on('click', function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').on('click', function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#demoSelect').select2();
    </script>


	 <!-- Page specific javascripts-->
    <script type="text/javascript" src="<?php echo $url; ?>Theme/js/plugins/chart.js"></script>







	<script type="text/javascript">
	/*
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
	  var pieChart = new Chart(ctxp).Pie(pdata);
	  */
    </script>
    <!-- Google analytics script-->
  
  </body>
</html>