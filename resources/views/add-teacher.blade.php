<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User Management</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">School Management System</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/user_management">
          <i class="fas fa-fw fa-tachometer-alt" style="color:orange"></i>
          <span><strong>User Management</strong></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/user_management/student">
          <i class="fas fa-fw fa-book" style="color:green"></i>
          <span>Student</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/user_management/teacher">
          <i class="fas fa-fw fa-newspaper" style="color:green"></i>
          <span>Teacher</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/user_management/admin">
          <i class="fas fa-fw fa-newspaper" style="color:green"></i>
          <span>Admins</span></a>
      </li>

    </ul>


    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/user_management">Users</a>
          </li>
          <li class="breadcrumb-item active">Add teacher</li>
        </ol>

        <!-- Add e-Book form -->
        <div class="container">
          <div class="card card-register mx-auto mt-5">
            <div class="card-header">Add New teacher</div>
            <div class="card-body">
              
              <form method="post" action="/user_management/add-teacher/save">
              <!--enctype="multipart/form-data"-->
              {{csrf_field()}}

              <div class="form-group">
                    <label for="name">First Name:</label>
                    <input type="text" id="fname" name="fname" class="form-control" required="required" autofocus="autofocus">
                </div>
                <div class="form-group">
                    <label for="name">Last Name:</label>
                    <input type="text" id="lname" name="lname" class="form-control" required="required" autofocus="autofocus">
                </div>
                <div class="form-group">
                    <label for="user_type">User Type</label>
                    <select class="form-control" id="user_type" name="user_type" required="required">                
                      <option>student</option>
                      <option>Teacher</option>
                      <option>Admin</option>                     
                      </select>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="DOP">Date Of Birth:</label>
                    <input type="date" id="DOP" name="DOP" min="1000-01-01" max="3000-12-31" class="form-control" required="required">
                </div>

                <div class="form-group">
                    <label for="address">Permenet Address:</label>
                    <input type="text" id="address" name="address" class="form-control" required="required" autofocus="autofocus">
                </div>
                <div class="form-group">
                    <label for="file">Select File:</label>
                    <input type="file" class="form-control-file" id="file" name="file" required="required">
                </div>
                <div class="form-group">
                    <label for="qualification">Highest Qualification:</label>
                    <select class="form-control" id="qualification" name="qualification" required="required">
                      <option>MBBS</option>
                      <option>#</option>
                      <option>#</option>
                      <option>#</option>
                      <option>#</option>
                      
                    </select>
                </div>
                <div class="form-group">
                    <label for="nic">NIC / Passport:</label>
                    <input type="text" id="nic" name="nic" class="form-control" required="required" autofocus="autofocus">
                </div>
                <div class="form-group">
                    <label for="Bank">Bank:</label>
                    <select class="form-control" id="Bank" name="Bank" required="required">
                      <option>Nation Trust</option>
                      <option>Bank Of Ceylon</option>
                      <option>Commercial</option>
                      <option>Peoples Bank</option>
                      <option>Sampath</option>
                      
                    </select>
                </div>
                <div class="form-group">
                    <label for="ac">Account Number:</label>
                    <input type="number" id="ac" name="ac" class="form-control" required="required" autofocus="autofocus">
                </div>




                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select class="form-control" id="gender" name="gender" required="required">
                      <option>Male</option>
                      <option>Female</option>
                      
                    </select>
                </div>

                <div class="form-group">
                    <label for="phone">Contact Number:</label>
                    <input type="number" id="phone" name="phone" class="form-control" required="required" autofocus="autofocus">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required="required" autofocus="autofocus">
                </div>

                <input type="submit" class="btn btn-primary btn-block" value="Upload">

              </form>
            </div>
            </div>
          </div>
            <br/><br/>
        </div>
        

      </div>
      <!-- /.container-fluid -->
      
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Sumana Balika College 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin.min.js') }}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
  <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>

</body>

</html>
