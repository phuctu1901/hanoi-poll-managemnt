<!DOCTYPE html>
<html lang="en" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Trang quản trị nội dung của Hệ thống trưng cầu dân ý thành phố Hà Nội">
    <meta name="keywords"
          content="trưng cầu dân ý, quản trị nội dung, Hà Nội, dân chủ, Phúc Tú">
    <meta name="author" content="tungong.tech">
    <title>Hệ thống trưng cầu dân ý - Trang quản trị - Hà Nội</title>
    <link rel="apple-touch-icon" sizes="60x60" href="/admin-assets/img/ico/apple-icon-60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="/admin-assets/img/ico/apple-icon-76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="/admin-assets/img/ico/apple-icon-120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="/admin-assets/img/ico/apple-icon-152.html">
    <link rel="shortcut icon" type="image/x-icon" href="/admin-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="/admin-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/vendors/font-awesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/vendors/css/chartist.min.css">
    <link rel="stylesheet" href="/admin-assets/vendors/css/bootstrap-multiselect.css" type="text/css">


{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>--}}
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/vendors/css/toastr.css">

    <link href="/jquery.json-viewer/json-viewer/jquery.json-viewer.css" type="text/css" rel="stylesheet">
</head>

<body data-col="2-columns" class=" 2-columns ">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">


    <!-- main menu-->
    <div data-active-color="white" data-background-color="black" data-image="/admin-assets/img/sidebar-bg/01.jpg"
         class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
            <div class="logo clearfix"><a href="/admin" class="logo-text float-left">
                    <div class="logo-img"><img src="/admin-assets/img/logo.png"/></div>
                    <span class="text align-middle">TNT</span>
                </a><a id="sidebarToggle" href="javascript:"
                       class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i
                        data-toggle="expanded" class="ft-toggle-right toggle-icon"></i></a><a id="sidebarClose"
                                                                                              href="javascript:"
                                                                                              class="nav-close d-block d-md-block d-lg-none d-xl-none"><i
                        class="ft-x"></i></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
            <div class="nav-container">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                    <li class="nav-item"><a href="/admin"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
                    </li>
                    <li class="has-sub nav-item open"><a href="#"><i class="ft-check-circle"></i><span data-i18n=""
                                                                                                        class="menu-title">Quản lý nội dung</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/poll/add" class="menu-item">Thêm mới</a>
                            </li>
                            <li><a href="/admin/poll" class="menu-item">Danh sách</a>
                            </li>
                            <li><a href="/admin/pollcategories" class="menu-item">Danh mục</a>
                            </li>

                        </ul>
                    </li>

                    <li class="has-sub nav-item open"><a href="#"><i class="ft-activity"></i><span data-i18n=""
                                                                                                       class="menu-title">Quản lý kết quả</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/poll/processing" class="menu-item">Đang diễn ra</a>
                            </li>
                            <li><a href="/admin/completed" class="menu-item">Đã hoàn thành</a>
                            </li>


                        </ul>
                    </li>


                    <li class="has-sub nav-item"><a href="#"><i class="ft-user-plus"></i><span data-i18n=""
                                                                                               class="menu-title">Quản
                  lý người dùng</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/user/add" class="menu-item">Thêm tài khoản</a>
                            </li>
                            <li><a href="/admin/user" class="menu-item">Danh sách người dùng</a>
                            </li>

                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-info"></i><span data-i18n=""
                                                                                          class="menu-title">Thông tin</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/info" class="menu-item">Thông tin</a>
                            </li>
                            <li><a href="/admin/footer" class="menu-item">Liên hệ</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-mail"></i><span data-i18n=""
                                                                                          class="menu-title">Phản hồi góp ý</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/request/do" class="menu-item">Chưa xử lý</a>
                            </li>
                            <li><a href="/admin/request/done" class="menu-item">Đã xử lý</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-background"></div>

    </div>
    <!-- / main menu-->
    <div class="main-panel">
        <!-- Navbar (Header) Starts-->
        <nav class="navbar navbar-expand-lg navbar-light bg-faded">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span
                            class="sr-only">Toggle
                navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span
                            class="icon-bar"></span></button>
                    <form role="search" class="navbar-form navbar-right mt-1">
                        <h3>Hệ thống trưng cầu dân ý - Hà Nội</h3>

                    </form>
                </div>
                <div class="navbar-container">
                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item mr-2"><a id="navbar-fullscreen" href="javascript:"
                                                         class="nav-link apptogglefullscreen"><i
                                        class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                                    <p class="d-none">fullscreen</p>
                                </a></li>

                            <li class="dropdown nav-item">
                                <a id="dropdownBasic3" href="#" data-toggle="dropdown"
                                   class="nav-link position-relative dropdown-toggle"><i
                                        class="ft-user font-medium-3 blue-grey darken-4"></i>
                                    <p class="d-none">User Settings</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar (Header) Ends-->
        @section('main-content')
        @show
        <footer class="footer footer-static footer-light">
            <p class="clearfix text-muted text-sm-center px-2"><span>Copyright &copy; 2020</span><a
                    href="tungong.tech"
                    id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2"> Nhóm nghiên cứu khoa
                    học </a>,<span> BẢN QUYỀN ĐƯỢC BẢO HỘ </span></p>
        </footer>

    </div>
</div>


<!-- END Notification Sidebar-->

<!-- BEGIN VENDOR JS-->
<script src="/admin-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="/admin-assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
<script src="/admin-assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="/admin-assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="/admin-assets/vendors/js/prism.min.js" type="text/javascript"></script>
<script src="/admin-assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="/admin-assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
<script src="/admin-assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
<script src="/admin-assets/vendors/js/chart.min.js" type="text/javascript"></script>

<!-- BEGIN VENDOR JS-->
<script type="text/javascript"
        src="/admin-assets/vendors/js/bootstrap-multiselect.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#multi-select-demo').multiselect();
    });
</script>
<script src="/admin-assets/js/app-sidebar.js" type="text/javascript"></script>
<script src="/admin-assets/vendors/js/toastr.min.js" type="text/javascript"></script>
@section('js-content')
@show
</body>


</html>
