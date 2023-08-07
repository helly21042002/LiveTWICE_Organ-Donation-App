<!-- Navigation -->
<nav  class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div  class="navbar-header">
                <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span  class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="color:#e74e63" class="navbar-brand" href="index.php"><i style="color:#e74e63" class="icofont-heart-beat-alt"></i> LiveTwice</a>
            </div>
            <!-- /.navbar-header -->

            <ul  class="nav navbar-top-links navbar-right">
               
             
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i style="color:#e74e63" class="fa fa-user fa-fw"></i> <i style="color:#e74e63" class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li class="divider"></li> -->
                        <li><a  href="../logout.php"><i style="color:#e74e63" class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
               
                <!-- /.dropdown -->
            </ul>
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li  class="sidebar-search">
                            <div   class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i style="color:#e74e63" class="fa fa-search"></i>
                                </button>

                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i style="color:#e74e63" class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=""><i style="color:#e74e63" class="fa fa-heartbeat"></i> Organ Collection Details <span class="fa arrow"></span></a>
                            <ul style="color:#e74e63" class="nav nav-second-level">
                                <li>
                                    <a style="color:#e74e63"  href="addblood.php">Add Organ</a>
                                </li>
                                <li>
                                    <a style="color:#e74e63"  href="viewblood.php">View Organ</a>
                                </li>
                                <li>
                                    <a style="color:#e74e63"  href="editblood.php">Edit Organ</a>
                                </li>
                                <li>
                                    <a style="color:#e74e63"  href="deleteblood.php">Remove Organ</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="adddonor.php"><i style="color:#e74e63" class="fa fa-table fa-user-plus"></i> Add Donor</a>
                        </li>
                        <li>
                            <a href="viewdonor.php"><i style="color:#e74e63" class="fa fa-edit fa-eye"></i> View Donor Details</a>
                        </li>
                        <li>
                            <a href="editview.php"><i style="color:#e74e63" class="fa fa-edit fa-fw"></i> Edit Donor Details</a>
                        </li>
                        <li>
                            <a href="deleteview.php"><i style="color:#e74e63" class="fa fa-user-times"></i> Delete Donor Details</a>
                        </li>

                        <li>
                            <a href="approveview.php"> <i style="color:#e74e63" class="fa fa-edit fa-eye"></i>  Approve requests</a>
                        </li>

                        <li>
                            <a href="declineview.php"> <i style="color:#e74e63" class="fa fa-user-times"></i>  Declined requests</a>
                        </li>
                        <li>
                            <a href=""><i style="color:#e74e63" class="fa fa-bullhorn"></i> Announcements <span class="fa arrow"></span></a>
                            <ul style="color:#e74e63" class="nav nav-second-level">
                                <li>
                                    <a style="color:#e74e63"  href="makeannouncement.php">Make Announcement</a>
                                </li>
                                <li>
                                    <a style="color:#e74e63"  href="viewannouncement.php">View Announcement</a>
                                </li>
                                <li>
                                    <a style="color:#e74e63"  href="editannounceform.php">Edit Announcement</a>
                                </li>
                                <li>
                                    <a style="color:#e74e63"  href="deleteannouncement.php">Remove Announcement</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href=""><i style="color:#e74e63" class="fa fa-flag"></i> Campaigns <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a style="color:#e74e63"  href="newcampaign.php">New Campaign</a>
                                </li>
                                <li>
                                        <a style="color:#e74e63"  href="viewcampaign.php">View Campaign</a>
                                    </li>
                                    <li>
                                        <a style="color:#e74e63"  href="updatecampaign.php">Update Campaign</a>
                                    </li>
                                    <li>
                                        <a style="color:#e74e63"  href="deletedcampaign.php">Delete Campaign</a>
                                    </li>
                            </ul>
                        </li>
            
                        <li>
                            <a href="viewrequests.php"><i style="color:#e74e63" class="fa fa-flag"></i> Requests Made </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="adminnewrequests.php">New Requests</a>
                                </li>
                                <li>
                                        <a href="viewrequests.php">View Requests</a>
                                    </li>
                                    <li>
                                        <a href="adminupdaterequest.php">Update Requests</a>
                                    </li>
                                    <li>
                                        <a href="admindeleterequest.php">Delete Requests</a>
                                    </li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>