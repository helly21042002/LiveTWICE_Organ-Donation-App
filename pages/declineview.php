<html>

<head>

<title>Live Twice</title>

<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../icofont/icofont.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
<div id="wrapper">

<?php include 'includes/nav.php'?>

<div  style='color:#e74e63' id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">Rejected Donors Detail</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Total Records of Rejected organ requests
                                </div>
								
								 <div style='color:#e74e63' class="panel-body" >
                                    <div class="table-responsive" >
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "dbconnect.php";

						$qry="select * from reject";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead style='background-color:#e74e63'>
						<tr >
                        <th>Blood Group</th>
						<th>Organ Name</th>
						<th>Full Name</th>
						<th>Gender</th>
						<th>D.O.B</th>
						<th>Weight</th>
						<th>Address</th>
						<th>Contact</th>
						<th>Blood Quantity</th>
						<th>Collection Date</th>
							<th>Status </th>
						</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
                          <td>".$row['bloodgroup']."</td>
						  <td>".$row['organ']."</td>
						  <td>".$row['name']."</td>
						  <td>".$row['gender']."</td>
						  <td>".$row['dob']."</td>
						  <td>".$row['weight']."</td>
						  <td>".$row['address']."</td>
						  <td>".$row['contact']."</td>
						  <td>".$row['bloodqty']."</td>
						  <td>".$row['collection']."</td>
						 <td> Rejected </td>
						</tr>
						</tbody>";
						}

						?>
						</table>
									
				</div>
				</div>		
		</div>
		</div>	
		</div>	
		</div>
		</div>

</div>

  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>