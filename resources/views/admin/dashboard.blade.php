<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home | American Books</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/admin/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/admin/dist/css/skins/_all-skins.min.css">

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
    <a href="assets/index2.html" class="logo">
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
              <img src="assets/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Ayaz Ahmed Mast</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Ayaz Ahmed Mast - Web Developer
                  <small>Member since Nov. 2019</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Ayaz Ahmed Mast</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>User</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Create Category </a></li>
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Category </a></li>
                </ul>
            </li>
            <li class=" treeview">
                <a href="#">
                    <i class="fa fa-tasks"></i> <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Category </a></li>
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Category </a></li>
                </ul>
            </li>
            <li class=" treeview">
                <a href="#">
                    <i class="fa fa-pencil"></i> <span>Author</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Author </a></li>
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Author </a></li>
                </ul>
            </li>
            <li class=" treeview">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Book</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Book </a></li>
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Book </a></li>
                </ul>
            </li>
            <li class=" treeview">
                <a href="#">
                    <i class="fa fa-film"></i> <span>Media</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Media </a></li>
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Media </a></li>
                </ul>
            </li>
            <li class=" treeview">
                <a href="#">
                    <i class="fa fa-user-plus"></i> <span>Webmaster</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Create Webmaster </a></li>
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> View Webmaster </a></li>
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
      <h1>Manage Book</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- /.row -->
     <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"> 
                    <a class="btn btn-danger btn-xm"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-danger btn-xm"><i class="fa fa-eye-slash"></i></a>
                    <a class="btn btn-danger btn-xm"><i class="fa fa-trash"></i></a>
                    <a class="btn btn-default btn-xm"><i class="fa fa-plus"></i></a>
              </h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 250px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <thead style="background-color: #F8F8F8;">
                  <tr>
                    <th width="4%"><input type="checkbox" name="" id="checkAll"></th>
                    <th width="25%">Title</th>
                    <th width="15%">Author</th>
                    <th width="15%">Category</th>
                    <th width="20%">Book Image</th>
                    <th width="10%">Status</th>
                    <th width="10%">Manage</th>
                  </tr>
                </thead>
                <tr>
                  <td><input type="checkbox" name="" id="" class="checkSingle"></td>
                  <td>Title</td>
                  <td>Designation</td>
                  <td>Image</td>
                  <td>Image</td>
                  <td>
                    <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i></button>
                    <button class="btn btn-info btn-sm"><i class="fa fa-thumbs-up"></i></button>
                  </td>
                  <td>
                      <a href="#" class="btn btn-info btn-flat btn-sm"> <i class="fa fa-edit"></i></a>
                      <button class="btn btn-danger btn-flat btn-sm"> <i class="fa fa-trash-o"></i></button>
                  </td>
                </tr>
            </table>
            </div>
            <!-- /.box-body -->
              <div class="box-footer clearfix">
                        <div class="row">
                            <div class="col-sm-6">
                                <span style="display:block;font-size:15px;line-height:34px;margin:20px 0;">
                                    Showing 100 to 500 of 1000 entries</span>
                            </div>
                          <div class="col-sm-6 text-right">
                              <ul class="pagination">
                  <li class="paginate_button previous"><a href="#" >Previous</a></li>
                  <li class="paginate_button active"><a href="#" >1</a></li>
                  <li class="paginate_button "><a href="#">2</a></li>
                  <li class="paginate_button "><a href="#" >3</a></li>
                  <li class="paginate_button "><a href="#">4</a></li>
                  <li class="paginate_button "><a href="#">5</a></li>
                  <li class="paginate_button "><a href="#">6</a></li>
                  <li class="paginate_button next"><a href="#" >Next</a></li>
                </ul>
                          </div>
                        </div>
                    </div>
          </div>
            <!-- /.box-body -->
          </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019-2020 <a href="https://www.alfateemacademy.com/" target="_blank">Al-Fateem Academy</a>.</strong> All rights reserved.
  </footer>
 
 
<!-- ./wrapper -->

<script src="assets/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="assets/admin/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="assets/admin/dist/js/app.min.js"></script>
<script src="assets/admin/dist/js/demo.js"></script>

</body>
</html>
