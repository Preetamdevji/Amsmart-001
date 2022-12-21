<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('page-title') | AmSmart</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/assets/admin/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="/assets/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/assets/admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/assets/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>MS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CMS</b> Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/assets/admin/dist/img/myimage.JPG" class="user-image" alt="User Image">
              <span class="hidden-xs">Preetam Kumar Lohana</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/assets/admin/dist/img/myimage.JPG" class="img-circle" alt="User Image">

                <p>
                  Preetam Kumar Lohana - Web Developer
                  <small>Member since Dec. 2022</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>

                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </div>

              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/assets/admin/dist/img/myimage.JPG" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Preetam Kumar Lohana</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="/admin/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>

            <li class="{{ Request::is('admin/user/create') || Request::is('admin/user') ? 'active' : null }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>User</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/user/create') ? 'active' : null }}"><a href="/admin/user/create"><i class="fa fa-circle-o"></i> Create User </a></li>
                    <li class="{{ Request::is('admin/user') ? 'active' : null }}"><a href="/admin/user"><i class="fa fa-circle-o"></i> View User </a></li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/product/create') || Request::is('admin/product') ? 'active' : null }} treeview">
                <a href="#">
                    <i class="fa fa-tasks"></i> <span>Product</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/product/create') ? 'active' : null }}"><a href="/admin/product/create"><i class="fa fa-circle-o"></i> Add Product </a></li>
                    <li class="{{ Request::is('admin/product') ? 'active' : null }}"><a href="/admin/product"><i class="fa fa-circle-o"></i> View Product </a></li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/product_category/create') || Request::is('admin/product_category') ? 'active' : null }} treeview">
                <a href="#">
                    <i class="fa fa-pencil"></i> <span>Product Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/product_category/create') ? 'active' : null }}"><a href="/admin/product_category/create"><i class="fa fa-circle-o"></i> Add Product Category </a></li>
                    <li class="{{ Request::is('admin/product_category') ? 'active' : null }}"><a href="/admin/product_category"><i class="fa fa-circle-o"></i> View Product Category </a></li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/brand/create') || Request::is('admin/brand') ? 'active' : null }} treeview">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Brand</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/brand/create') ? 'active' : null }}"><a href="/admin/brand/create"><i class="fa fa-circle-o"></i> Add Brand </a></li>
                    <li class="{{ Request::is('admin/brand') ? 'active' : null }}"><a href="/admin/brand"><i class="fa fa-circle-o"></i> View Brand </a></li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/cms/create') || Request::is('admin/cms') ? 'active' : null }} treeview">
                <a href="#">
                    <i class="fa fa-film"></i> <span>CMS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/cms_pages/create') ? 'active' : null }}"><a href="/admin/cms_pages/create"><i class="fa fa-circle-o"></i> Add CMS Pages </a></li>
                    <li class="{{ Request::is('admin/cms_pages') ? 'active' : null }}"><a href="/admin/cms_pages"><i class="fa fa-circle-o"></i> View CMS Pages </a></li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/contact/create') || Request::is('admin/contact') ? 'active' : null }} treeview">
                <a href="#">
                    <i class="fa fa-phone"></i> <span>Contact</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/contact/create') ? 'active' : null }}"><a href="/admin/contact/create"><i class="fa fa-circle-o"></i> Add Contact </a></li>
                    <li class="{{ Request::is('admin/contact') ? 'active' : null }}"><a href="/admin/contact"><i class="fa fa-circle-o"></i> View Contacts </a></li>
                </ul>
            </li>

             <li class="treeview">
                <a href="#">
                    <i class="fa fa-bars"></i> <span>Settings</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/home_slider') ? 'active' : null }}"><a href="/admin/home_slider"><i class="fa fa-circle-o"></i> Home Slider </a></li>
                    <li class="{{ Request::is('admin/deal_banner') ? 'active' : null }}"><a href="/admin/deal_banner"><i class="fa fa-circle-o"></i> Deal Banner </a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>@yield('page-title')</h1>

    </section>

    <!-- Main content -->
    @yield('main-content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022-2023 <a href="https://www.alfateemacademy.com/" target="_blank">Am-Smart</a>.</strong> All rights reserved.
  </footer>
 
 
<!-- ./wrapper -->

<script src="/assets/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="/assets/admin/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="/assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/assets/admin/dist/js/app.min.js"></script>
<script src="/assets/admin/dist/js/demo.js"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@stack('scripts')

</body>
</html>
