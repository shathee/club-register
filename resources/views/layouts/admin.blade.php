<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SUST Club Ltd</title>
  <!-- Bootstrap core CSS-->
  <link href="{{ url('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{ url('admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{ url('admin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ url('admin/css/sb-admin.css') }}" rel="stylesheet">



    
    

</head>

<body class="fixed-nav sticky-footer" id="page-top">
  @if (Auth::guest())

  @else


  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{url('/admin/dashboard')}}">Sust Club Ltd</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      @if (Auth::user()->status!='Active')

      @else
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{url('/admin/dashboard')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
          @if (Auth::user()->role=='Admin')
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{url('/admin/users')}}">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">User Management</span>
          </a>
         </li>
          @endif
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{url('/admin/membership-manage')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Member Management</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{url('admin/membership-renewal-management')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Renewal Information Management</span>
          </a>
        </li>
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Reports</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="{{url('/admin/reports/member-statistics')}}">Membership Submission Statistics</a>
            </li>
            <li>
              <a href="{{url('/admin/reports/all-member-statistics')}}">Membership Statistics</a>
            </li>
            <li>
              <a href="{{url('/admin/reports/finance-statistics')}}">Financial Statistics</a>
            </li>
            <li>
              <a href="{{url('/admin/reports/custom')}}">Custom</a>
            </li>
            <li>
              <a href="{{url('/admin/reports/member-address')}}">Custom</a>
            </li>
          </ul>
        </li>
         
      </ul>
      
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      @endif
      <ul class="navbar-nav ml-auto">
        
        
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a href="{{ url('logout') }}" class="nav-link" >
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>

    </div>
  </nav>
  @endif
  <div class="content-wrapper">
    <div class="container-fluid">
      @yield('content')
      
      <div class="row">
        
       
      </div>
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © SUS Club Ltd 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
  
    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ url('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ url('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('admin/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ url('admin/js/sb-admin.min.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ url('admin/js/sb-admin-datatables.min.js') }}"></script>
    <!--<script src="{{ url('admin/js/sb-admin-charts.js') }}"></script>-->
    <script type="text/javascript">
        function myFunction() {
            window.print();
        }
    </script>

  </div>
</body>

</html>
