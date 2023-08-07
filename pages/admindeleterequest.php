<html>

<head>

<title>LIVETWICE</title>

<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../icofont/icofont.min.css">

</head>


<body  >
<div  id="wrapper">

<?php include 'includes/nav.php'?>

<div style='color:#e74e63' id="page-wrapper">
<div   class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">Delete Requesters</h1>
                </div>
  </div>  

				<div class="row">
                        <div  class=".col-lg-12">
                            <div  class="panel panel-default">
                                <div   class="panel-heading">
                                    Total Records of available Requesters
                                </div>
								
								 <div style='background-color: rgb(255, 179, 197); color:#e74e63' class="panel-body">
                                    <div class="table-responsive">
									<table  class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "dbconnect.php";

						$qry="select * from organ_requests";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead style='background-color:#e74e63'>
						<tr  >
							<th>Name</th>
							<th>Gender</th>
							<th>D.O.B</th>
							<th>Weight</th>
							<th>Blood Group</th>
							<th>Address</th>
							<th>Contact</th>
                            <th>Organ Type</th>
                            <th>Message</th>
							<th><i  style='color:#e74e63' class='fa fa-pencil'></i></th>
						</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
						  <td>".$row['name']."</td>
						  <td>".$row['gender']."</td>
						  <td>".$row['dob']."</td>
						  <td>".$row['weight']."</td>
						  <td>".$row['bloodgroup']."</td>
                          <td>".$row['address']."</td>
						  <td>".$row['contact']."</td>
						  <td>".$row['organtype']."</td>
						  <td>".$row['message']."</td>
						  <td><a href='admindelete.php?id=".$row['id']."'><i style='color:#e74e63' class='fa fa-trash' ></i></a></td>

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