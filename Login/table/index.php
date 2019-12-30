<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/ico" sizes="16x16" href="../../images/tent.png">
    <title>Tensonite</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"  rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<!--===============================================================================================-->
  <?php
      session_start();
      if(isset($_SESSION["user"]))
	  {
		   echo "";
	  }
	  else
	  {
		  header("location:../");
	  }
  ?>
</head>
<body>
	<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="../../images/tent.png"  class="d-inline-block align-top" alt="" style="height: 62px;">
    
  </a>
  <a href="../logout.php" style="font-weight: 900;">Logout</a>
</nav>
	<div class="limiter">
	   
		<div class="container-table100"  style="background:url('images/download.jpg')">
			<div class="wrap-table100">


				<div class="table100 ver2 m-b-110">
				    <div class="table-responsive">
					<table data-vertable="ver2" id="contact_table">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column3" data-column="column3">Email</th>
								<th class="column100 column4" data-column="column4">Subject</th>
								<th class="column100 column5" data-column="column5">Message</th>
								<th class="column100 column5" data-column="column5">Date</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
							   <?php 
							           $con = mysqli_connect("localhost","root","","tensonite");
									   $sql=mysqli_query($con,"select * from contact order by date desc");
									    while($row=mysqli_fetch_assoc($sql))
										{
										?>
										<td class="column100 column1" data-column="column1"><?php echo $row["name"]; ?></td>
										<td class="column100 column3" data-column="column3"><?php echo $row["email"]; ?></td>
										<td class="column100 column4" data-column="column4"><?php echo $row["subject"]; ?></td>
										<td class="column100 column5" data-column="column5"><?php echo $row["message"]; ?></td>
										<td class="column100 column5" data-column="column5"><?php echo $row["date"]; ?></td>
										<?php
										}
								?>
							</tr>

						
							


						</tbody>
					</table>
					</div>
				</div>

				
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
      <!--datatable-->
  
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
  
  <script>
    $(document).ready(function()
	{
		 $('#contact_table').DataTable({
          
		     "aaSorting": [[2,'desc']],
			dom: 'Bfrtip',
			buttons: [
				 'csv', 'excel',
			]
        });
	});
  </script>
</body>
</html>