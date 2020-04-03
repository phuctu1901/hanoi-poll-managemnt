<!DOCTYPE html>
<html lang="en" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Trang quản trị hệ thống - Du lịch và truyền thông Linh Ứng - Linh Ung Travel</title>
    <link rel="apple-touch-icon" sizes="60x60" href="/admin-assets/img/ico/apple-icon-60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="/admin-assets/img/ico/apple-icon-76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="/admin-assets/img/ico/apple-icon-120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="/admin-assets/img/ico/apple-icon-152.html">
    <link rel="shortcut icon" type="image/x-icon" href="/admin-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="/admin-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link
        href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900"
        rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/vendors/css/chartist.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css"
          type="text/css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>

<body data-col="2-columns" class=" 2-columns ">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">


    <!-- main menu-->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <div data-active-color="white" data-background-color="black" data-image="/admin-assets/img/sidebar-bg/01.jpg"
         class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
            <div class="logo clearfix"><a href="/admin" class="logo-text float-left">
                    <div class="logo-img"><img src="/admin-assets/img/logo.png"/></div>
                    <span class="text align-middle">LUT</span>
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
                    <li class="has-sub nav-item open"><a href="#"><i class="ft-shopping-cart"></i><span data-i18n=""
                                                                                                   class="menu-title">Quản lý nội dung</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/poll/add" class="menu-item">Thêm mới</a>
                            </li>
                            <li><a href="/admin/poll" class="menu-item">Danh sách tour</a>
                            </li>
                            <li><a href="/admin/pollcategories" class="menu-item">Danh mục</a>
                            </li>

                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-layers"></i><span data-i18n=""
                                                                                            class="menu-title">Dịch vụ</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/service/add" class="menu-item">Thêm dịch vụ</a>
                            </li>
                            <li><a href="/admin/service" class="menu-item">Tất cả dịch vụ</a>
                            </li>
                            <li><a href="/admin/servicetype" class="menu-item">Danh mục dịch vụ</a>
                            </li>
                        </ul>
                    </li>



                    <li class="has-sub nav-item"><a href="#"><i class="fas fa-car"></i><span data-i18n=""
                                                                                             class="menu-title">Xe</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/car/add" class="menu-item">Thêm xe</a>
                            </li>
                            <li><a href="/admin/car" class="menu-item">Tất cả xe</a>
                            </li>
                            <li><a href="/admin/cartype" class="menu-item">Danh mục xe</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-folder"></i><span data-i18n=""
                                                                                            class="menu-title">Bài viết</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/postcategory" class="menu-item">Chuyên mục</a>
                            </li>
                            <li><a href="/admin/post" class="menu-item">Bài viết</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="/admin/review"><i class="ft-activity"></i><span data-i18n="" class="menu-title">Bình luận</span></a>
                    </li>

                    <li class="nav-item"><a href="/admin/homeconfig"><i class="ft-google"></i><span data-i18n="" class="menu-title">Cấu hình trang chủ</span></a>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-edit"></i><span data-i18n=""
                                                                                          class="menu-title">Quản lý giao diện</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/slider" class="menu-item">Danh sách sliders</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-folder"></i><span data-i18n=""
                                                                                            class="menu-title">Quản
                  lý nội dung</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/page" class="menu-item">Trang tĩnh</a>
                            </li>
                            {{--                            <li><a href="/admin/postcategory" class="menu-item">Chuyên mục</a>--}}
                            {{--                            </li>--}}
                            {{--                            <li><a href="/admin/post" class="menu-item">Bài viết</a>--}}
                            {{--                            </li>--}}
                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-info"></i><span data-i18n=""
                                                                                          class="menu-title">Cấu
                  hình website</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/config" class="menu-item">Thông tin website</a>
                            </li>
                            <li><a href="/admin/seocode" class="menu-item">SEO CODE</a>
                            </li>
                        </ul>
                    </li>




                    <li class="has-sub nav-item"><a href="#"><i class="ft-image"></i><span data-i18n=""
                                                                                           class="menu-title">Quản
                  lý tập tin</span></a>
                        <ul class="menu-content">
                            <li><a href="/laravel-filemanager?type=image" class="menu-item">Hình ảnh</a>
                            </li>
                            <li><a href="/laravel-filemanager?type=file" class="menu-item">Files</a>
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
                            <li><a href="/admin/info" class="menu-item">Thông tin công ty</a>
                            </li>
                            <li><a href="/admin/footer" class="menu-item">Liên hệ</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-mail"></i><span data-i18n=""
                                                                                          class="menu-title">Yêu cầu</span></a>
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
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
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
                        <h3>Trang quản trị Linh Ứng Travel</h3>
                        {{--                        <div class="position-relative has-icon-right">--}}
                        {{--                            <input type="text" placeholder="Search" class="form-control round"/>--}}
                        {{--                            <div class="form-control-position"><i class="ft-search"></i></div>--}}
                        {{--                        </div>--}}
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
{{--                                <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3"--}}
{{--                                     class="dropdown-menu dropdown-menu-right"><a--}}
{{--                                        href="javascript:" class="dropdown-item py-1"><i--}}
{{--                                            class="ft-info mr-2"></i><span style="color: #f2205c;">{{ Auth::user()->name }}</span></a><a--}}
{{--                                        href="/admin/changePassword" class="dropdown-item py-1"><i--}}
{{--                                            class="ft-edit mr-2"></i><span>Đổi mật khẩu</span></a>--}}
{{--                                    <div class="dropdown-divider"></div>--}}
{{--                                    <a href="/admin/logout" class="dropdown-item"><i class="ft-power mr-2"></i><span>Đăng xuất</span></a>--}}
{{--                                </div>--}}
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
                    href="#"
                    id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">  WEB3XU </a>, BẢN QUYỀN ĐƯỢC BẢO HỘ </span></p>
        </footer>

    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->


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
<!-- BEGIN VENDOR JS-->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#multi-select-demo').multiselect();
    });
</script>
<!-- BEGIN PAGE VENDOR JS-->
{{--<script src="/admin-assets/vendors/js/chartist.min.js" type="text/javascript"></script>--}}
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src="/admin-assets/js/app-sidebar.js" type="text/javascript"></script>
{{--<script src="/admin-assets/js/notification-sidebar.js" type="text/javascript"></script>--}}
{{--<script src="/admin-assets/js/customizer.js" type="text/javascript"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
<!-- END APEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
{{--<script src="/admin-assets/js/dashboard1.js" type="text/javascript"></script>--}}
<!-- END PAGE LEVEL JS-->
</body>


</html>
