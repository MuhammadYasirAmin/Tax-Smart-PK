<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login To DataBase</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets_auth/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets_auth/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets_auth/fonts/flaticon/font/flaticon.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets_auth/img/favicon.ico') }}" type="image/x-icon">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets_auth/css/style.css') }}">

</head>

<body id="top">
    <div class="page_loader"></div>

    <!-- Login 14 start -->
    <div class="login-14">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-section">
                        <div class="form-inner">
                            <div class="details">
                                <h3>Sign Into Your Account</h3>
                                <p id="error_message"></p>
                                <form action="{{ route('Backend.LoginForm.Submit') }}" method="POST">
                                    @csrf
                                    <div class="form-group clearfix">
                                        <input name="ADM_Email" type="email" class="form-control"
                                            placeholder="Email Address" aria-label="Email Address">
                                    </div>
                                    <div class="form-group clearfix">
                                        <input name="ADM_Password" type="password" class="form-control"
                                            autocomplete="off" placeholder="Password" aria-label="Password">
                                    </div>
                                    <div class="form-group clearfix fg">
                                        <button type="submit"
                                            class="btn btn-lg btn-primary btn-theme"><span>Login</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login 14 end -->

    <!-- External JS libraries -->
    <script src="{{ asset('assets_auth/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets_auth/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_auth/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets_auth/js/app.js') }}"></script>
    <!-- Custom JS Script -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::has('Success!'))
        <script>
            toastr.success("{!! Session::get('Success!') !!}");
        </script>
    @endif
    @if (Session::has('Error!'))
        <script>
            toastr.error("{!! Session::get('Error!') !!}");
        </script>
    @endif

</body>

</html>
