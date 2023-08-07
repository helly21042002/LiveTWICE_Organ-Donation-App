<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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


</head>

<body>

    <div id="wrapper">

        <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Requester's Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: rgb(255, 179, 197)">
                            Total Records of available Requesters
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                <?php
									include 'dbconnect.php';
									$id=$_GET['id'];
									$qry= "select * from organ_requests where id='$id'";
									$result=mysqli_query($conn,$qry);
									while($row=mysqli_fetch_array($result)){
								?> 

                                    <form role="form" action="finaladdedrequest.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name" type="text" value='<?php echo $row['name']; ?>' required>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <input class="form-control" type="text" name="gender" value='<?php echo $row['gender']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                            <label>D.O.B</label>
                                            <input class="form-control" type="date" name="dob" value='<?php echo $row['dob']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                            <label>Weight</label>
                                            <input class="form-control" type="number" name="weight" value='<?php echo $row['weight']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                            <label>Blood Group</label>
											 <input class="form-control" rows="4" name="bloodgroup" type="text" value='<?php echo $row['bloodgroup']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
											 <input class="form-control" rows="4" name="address" type="text" value='<?php echo $row['address']; ?>' required>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact</label>
											 <input class="form-control" rows="4" name="contact" type="number" value='<?php echo $row['contact']; ?>' required>
                                        </div>
                                        <div class="form-group">
                                            <label>Organ Type</label>
											 <input class="form-control" rows="4" name="organtype" type="text" value='<?php echo $row['organtype']; ?>' required>
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
											 <textarea class="form-control" rows="4" name="message" type="text" required><?php echo $row['message']; ?></textarea>
                                        </div>


                                       
             <!-- id hidden grna input type ma "hidden" -->
             <input type="hidden" name="id" value="<?php echo $row['id'];?>">      

                             <button type="submit"  class="btn btn-success">Make Changes</button>
                
                                   </form> 

                                </div>

<?php
}
?>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
                             
