<?
  include 'bd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Name</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                About Text First
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="about_text_second.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                About Text Second
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="about_text_three.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                About Text Three
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Contact
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="faq_product.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                FAQs Product
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="faq_text.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                FAQs Text
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="footer_img.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Footer Img
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="footer_part_one.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Footer Part One
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="footer_part_three.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Footer Part Three
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="footer_part_two.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Footer Part Two
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="header.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Header
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="header_second.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Header Second
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index_product.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Index Product
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index_slider.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Index Slider
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index_slider_img.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Index Slider Img
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="product_page.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Product Page
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="shop_cart.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Shop Cart
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="shop_header.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Shop Header
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="shop_market.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Shop Market
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Index Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Dashboard 3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid" >
        <!-- Main row -->
        <div class="row" >
          <!-- Left col -->
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card" >
              <div class="card-body center" style="width: 1400px;"> 
                <table>
                  <tr style="border: 3px #00aaff solid;">
                    <td class="td" style="border: 3px #00aaff solid; width:50px; text-align:center;">ID</td>
                    <td class="td" style="border: 3px #00aaff solid; width:250px; text-align:center;">Href</td>
                    <td class="td" style="border: 3px #00aaff solid; width:450px; text-align:center;" >Img</td>
                    <td class="td" style="border: 3px #00aaff solid; width:450px; text-align:center;">Href Second</td>
                    <td class="td" style="border: 3px #00aaff solid; width:450px; text-align:center;" >Title</td>
                    <td class="td" style="border: 3px #00aaff solid; width:100px; text-align:center;" >Price</td>
                    <td class="td" style="border: 3px #00aaff solid; width:100px; text-align:center;" >Add</td>
                    <td class="td" style="border: 3px #00aaff solid; width:100px; text-align:center;" >Delete</td>
                    <td class="td" style="border: 3px #00aaff solid; width:100px; text-align:center;" >Update</td>
                  </tr>
                  <?
                  $select=mysqli_query($bd, "SELECT * FROM `indexproduct`");
                  $lang=mysqli_fetch_assoc($select);
                  do{
                  ?>
                  <tr style="border: 3px #00aaff solid;">
                    <td class="td" style="border: 3px #00aaff solid; text-align:center;"><?=$lang['id']?></td>
                    <td class="td" style="border: 3px #00aaff solid; text-align:center;"><?=$lang['href']?></td>
                    <td style="border: 3px #00aaff solid; text-align:center;">
                      <img src="./BD/images/<?=$lang['img']?>" alt="" style="width: 40px; height: 40px; border-radius:50%;">
                    </td>                    
                    <td class="td" style="border: 3px #00aaff solid; text-align:center;"><?=$lang['hrefsecond']?></td>
                    <td class="td" style="border: 3px #00aaff solid; text-align:center;"><?=$lang['title']?></td>
                    <td class="td" style="border: 3px #00aaff solid; text-align:center;"><?=$lang['price']?></td>
                    <td class="td" style="border: 3px #00aaff solid; width:250px; color:black; text-align:center; text-decoration:none;">
                      <a href="./BD/indexp_add.php">ADD</a>
                    </td>
                    <td class="td" style="border: 3px #00aaff solid; width:250px; color:black; text-align:center; text-decoration:none;">
                      <a href="./BD/indexp_delete.php?id=<?=$lang['id']?>">Delete</a>
                    </td>
                    <td class="td" style="border: 3px #00aaff solid; width:250px; color:black; text-align:center; text-decoration:none;">
                      <a href="./BD/indexp_update.php?id=<?=$lang['id']?>">Update</a>
                    </td>
                  </tr>
                  <?}while($lang=mysqli_fetch_assoc($select));?>
                </table>
              </div>
            </div>     
        </div>
      </div>
    </section>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
