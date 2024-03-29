<?php

if(isset($_POST['updatehotel']))
{
    $connect = mysqli_connect("localhost", "root", "7762", "sealtravels");

    $id = trim($_POST['id']);
    $hotelname = trim($_POST['hotelname']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $travelers = trim($_POST['travelers']);
    $rooms = trim($_POST['rooms']);
    $roomtype = trim($_POST['roomtype']);
    $checkin = trim($_POST['checkin']);
    $checkout = trim($_POST['checkout']);
    $amount = trim($_POST['amount']);

    $updatehotel = "UPDATE hotelbooking set HotelName = '$hotelname', Name = '$name', Email = '$email', Travelers = '$travelers', Rooms = '$rooms', RoomType = '$roomtype', CheckIn = '$checkin', CheckOut = '$checkout', Amount = '$amount' where Id = $id";

    $execute = mysqli_query($connect, $updatehotel);

    if(isset($execute))
    {
        echo "<script type='text/javascript'>alert('Hotel booking has been update');</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Hotel booking has not been updated');</script>";
    }
}

?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, shrink-to-fit=no" />

    <title>Edit Hotel Booking</title>

    <link href="https://fonts.googleapis.com/css2?family=Heebo" rel="stylesheet" />
    <link href="../../Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="../../Assets/css/sb-admin-2.min.css" rel="stylesheet" />
    <link href="../../Assets/img/globe.png" rel="icon" />

</head>

<body style="font-family:Heebo">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-0">
            <img src="../../Assets/img/globe2.png" width="30" height="30" />
        </div>
        <div class="sidebar-brand-text mx-3">Seal Travels</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="../Administrator/AdministratorPage.php">
            <i class="fa fa-user-alt"></i>
            <span>Administrator Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

        <!-- Nav Item - Add User -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="../Administrator/AddUser.php" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-user-plus"></i>
            <span>Add a user</span>
        </a>

    </li>

    <!-- Nav Item - Remove User -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="../Administrator/UserRecords.php" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-user-minus"></i>
            <span>Remove a user</span>
        </a>
    </li>

    <!-- Nav Item - User Records-->
    <li class="nav-item">
        <a class="nav-link collapsed" href="../Administrator/UserRecords.php" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-user-alt"></i>
            <span>User Records</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!--Nav Item - FlightBooking Collapse Menu-->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-plane"></i>
        <span>Flight Booking</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Select</h6>
            <a class="collapse-item" href="../Flights/RoundtripBookingA.php">Book Roundtrip flight</a>
            <a class="collapse-item" href="../Flights/OnewayBookingA.php">Book Oneway flight</a>
            <a class="collapse-item" href="../Flights/RoundtripRecordsA.php">Roundtrip flight records</a>
            <a class="collapse-item" href="../Flights/OnewayRecordsA.php">Oneway flight records</a>
            <a class="collapse-item" href="#">Flight Tickets records</a>
            <a class="collapse-item" href="../Flights/FlightPaymentRecordsA.php">Flight Payment records</a>
        </div>
    </div>
</li>

    <!--Nav Item - HotelBooking Collapse Menu-->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fa fa-hotel"></i>
        <span>Hotel Booking</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Select</h6>
            <a class="collapse-item" href="../Hotels/HotelBookingA.php">Book a hotel</a>
            <a class="collapse-item" href="../Hotels/HotelRecordsA.php">Update a hotel booking</a>
            <a class="collapse-item" href="../Hotels/HotelRecordsA.php">Hotel Booking records</a>
        </div>
    </div>
</li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- SIDEBAR Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn-primary" type="button" style="border:none">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-search"></i>
                            </a>


                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                                <img class="img-profile rounded-circle" src="../../Assets/img/globe.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-5 d-none d-lg-block bg-gradient-primary">
                                        <h1 style="font-weight:700; margin-left:100px; margin-top:180px; color:white">Seal Travels <i class="fa fa-globe-americas"></i></h1>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="">
                                                <h4 class="" style="color:#4e73df; font-family:Heebo"><strong>Edit a Hotel Booking</strong> <i class="fa fa-edit"></i></h4><br />
                                            </div>

                                                        <!--Hotel Booking Form-->
                                                        <form method="post" class="user">
                                                            
                                                            <div class="form-group row">
                                                            <!--Hotel Name-->
                                                             <div class="col-sm-6 mb-3 mb-sm-0">    
                                                                <label style = "width: 150px;color: #4e73df;font-weight: bold;font-size: 13px">Hotel Name</label>
                                                                <input name="hotelname" class="form-control" placeholder="Hotel Name" style = "font-size: 13px;" />
                                                            </div>
                                                            
                                                            <!--Name-->
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                <label style = "width: 150px;color: #4e73df;font-weight: bold;font-size: 13px">Name</label>
                                                                <input name="name" class="form-control" placeholder="Name" style = "font-size: 13px;" />
                                                            </div>
                                                            </div>

                                                           <div class="form-group row">
                                                            <!--Email-->
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                <label style = "width: 150px;color: #4e73df;font-weight: bold;font-size: 13px">Email</label>
                                                                <input name="email" class="form-control" placeholder="Email" style = "font-size: 13px;" />
                                                            </div>

                                                            <!--Travelers-->
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                <label style = "width: 150px;color: #4e73df;font-weight: bold;font-size: 13px">Travelers</label>
                                                                <div class="dropdown">
                                                                <select name="travelers" class="form-control dropdown-toggle text-left" data-toggle="dropdown" style="font-size:13px">
                                                                    
                                                                    <option>Select</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>

                                                                </select>
                                                                    </div>
                                                            </div>
                                                            </div>

                                                            <div class="form-group row">
                                                            <!--Rooms-->
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                <label style = "width: 150px;color: #4e73df;font-weight: bold;font-size: 13px">Rooms</label>
                                                                <div class="dropdown">
                                                                <select name="rooms" class="form-control dropdown-toggle text-left" data-toggle="dropdown" style="font-size:13px">
                                                                    
                                                                    <option>Select</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>

                                                                </select>
                                                                    </div>
                                                            </div>

                                                            <!--Room Type-->
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                <label style = "width: 150px;color: #4e73df;font-weight: bold;font-size: 13px">Room Type</label>
                                                                <div class="dropdown">
                                                                <select name="roomtype" class="form-control dropdown-toggle text-left" data-toggle="dropdown" style="font-size:13px">
                                                                
                                                                    <option>Select</option>
                                                                    <option>Single</option>
                                                                    <option>Double</option>
                                                                    <option>Suite</option>
                                                               
                                                                </select>
                                                                    </div>
                                                            </div>
                                                            </div>

                                                            <div class="form-group row">
                                                            <!--Check In-->
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                <label style = "width: 150px;color: #4e73df;font-weight: bold;font-size: 13px">Check In</label>
                                                                <input name="checkin" class="form-control" placeholder="Select" type="datetime-local" style = "font-size: 13px;" />
                                                            </div>

                                                            <!--Check Out-->
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                <label style = "width: 150px;color: #4e73df;font-weight: bold;font-size: 13px">Check Out</label>
                                                                <input name="checkout" class="form-control" placeholder="Select" type="datetime-local" style = "font-size: 13px;" />
                                                            </div>
                                                            </div>
                                                        
                                                            <!--Book-->
                                                            <div>
                                                                <input name="updatehotel" type="submit" value="SAVE CHANGES" class="btn btn-primary btn-block" style="font-size:13px; font-weight:bold" />
                                                            </div>

                                                        </form>
                                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <!-- <a href="#">yvonnevanita.com</a> --> <script>document.write(new Date().getFullYear());</script></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            <!-- End of Content Wrapper -->
        </div>

        <!-- End of Page Wrapper -->
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../Users/UserLogin.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="../../Assets/js/jquery.min.js"></script>
    <script src="../../Assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../Assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../Assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../Assets/js/sb-admin-2.min.js"></script>

</body>
</html>
