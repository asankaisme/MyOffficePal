<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>My Office Pal</title>

    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- Bootstrap -->
    <link href={{asset('template/vendors/bootstrap/dist/css/bootstrap.min.css')}} rel="stylesheet">
    <!-- Font Awesome -->
    <link href={{asset('template/vendors/font-awesome/css/font-awesome.min.css')}} rel="stylesheet">
    <!-- NProgress -->
    <link href={{asset('template/vendors/nprogress/nprogress.css')}} rel="stylesheet">
    <!-- iCheck -->
    <link href={{asset('template/vendors/iCheck/skins/flat/green.css')}} rel="stylesheet">

    <link href={{ asset('template/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('template/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('template/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('template/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('template/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }} rel="stylesheet">

	
    <!-- bootstrap-progressbar -->
    <link href={{asset('template/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}} rel="stylesheet">
    <!-- JQVMap -->
    <link href={{asset('template/vendors/jqvmap/dist/jqvmap.min.css')}} rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href={{asset('template/vendors/bootstrap-daterangepicker/daterangepicker.css')}} rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href={{asset('template/build/css/custom.min.css')}} rel="stylesheet">

    <link rel="stylesheet" href={{ asset('datatables/css/dataTables.bootstrap.css') }} />
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>My Office Pal</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src={{ asset('template/images/img.jpg') }} alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="{{ route('home') }}">Dashboard</a></li>
                  <li><a><i class="fa fa-edit"></i>Lending Register<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">IT Assets</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Manage Letters<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Letters & Memos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Manage Master Data<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Main Category</a></li>
                      <li><a href="#">Sub Category</a></li>
                      <li><a href="#">Asset</a></li>
                      <li><a href="{{ route('departments.index') }}">Departments</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Manage Users & Roles<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Users</a></li>
                      <li><a href="#">Roles</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src={{ asset('template/images/img.jpg') }} alt="">Hi, {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                    <a class="dropdown-item"  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     <i class="fa fa-sign-out pull-right"></i> Log Out</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('mainSection')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Information Technology Department | Central Bank of Sri Lanka
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src={{ asset('template/vendors/jquery/dist/jquery.min.js') }}></script>
    <!-- Bootstrap -->
    <script src={{ asset('template/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}></script>
    <!-- FastClick -->
    <script src={{ asset('template/vendors/fastclick/lib/fastclick.js') }}></script>
    <!-- NProgress -->
    <script src={{ asset('template/vendors/nprogress/nprogress.js') }}></script>
    
    <script src={{ asset('template/vendors/moment/min/moment.min.js') }}></script>
    <script src={{ asset('template/vendors/bootstrap-daterangepicker/daterangepicker.js') }}></script>

    <!-- Custom Theme Scripts -->
    <script src={{ asset('template/build/js/custom.min.js') }}></script>

    <script src="{{ asset('datatables/js/dataTables.bootstrap.js') }}"></script>

    <script src={{ asset('template/vendors/datatables.net/js/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('template/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}></script>
    <script src={{ asset('template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}></script>
    <script src={{ asset('template/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}></script>
    <script src={{ asset('template/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}></script>
    <script src={{ asset('template/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}></script>
    <script src={{ asset('template/vendors/datatables.net-buttons/js/buttons.print.min.js') }}></script>
    <script src={{ asset('template/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}></script>
    <script src={{ asset('template/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}></script>
    <script src={{ asset('template/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}></script>
    <script src={{ asset('template/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}></script>
    <script src={{ asset('template/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}></script>
	
  </body>
</html>
