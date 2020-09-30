<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập hệ thống quản lý điều hành - Linh Ứng Travel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/asset-admin/login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  src="/asset-admin/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/asset-admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/asset-admin/login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  src="/asset-admin/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  src="/asset-admin/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  src="/asset-admin/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  src="/asset-admin/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  src="/asset-admin/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/asset-admin/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="/asset-admin/login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">

    <div class="container-login100" style="background-image: url('/asset-admin/login/images/bg-01.jpg');">

        <div class="wrap-login100">
            <?php //Hiển thị thông báo thành công?>
            @if ( Session::has('success') )
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
            <?php //Hiển thị thông báo lỗi?>
            @if ( Session::has('error') )
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <strong>{{ Session::get('error') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
            <form role="form" class="login100-form validate-form"  action="{{ url('admin/login') }}" method="POST">
                {!! csrf_field() !!}

                <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						LOGIN IF YOU CAN
					</span>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="login" placeholder="Tên đăng nhập hoặc email" value="{{ old('username') ?: old('email') }}" required autofocus>
                    @if ($errors->has('username') || $errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script   src="/asset-admin/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script   src="/asset-admin/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script   src="/asset-admin/login/vendor/bootstrap/js/popper.js"></script>
<script   src="/asset-admin/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script   src="/asset-admin/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script   src="/asset-admin/login/vendor/daterangepicker/moment.min.js"></script>
<script   src="/asset-admin/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script   src="/asset-admin/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/asset-admin/login/js/main.js"></script>

</body>
</html>
