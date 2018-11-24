<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/logo-hitam.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="/app-assets/fonts/line-awesome/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/app.min.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/login-register.min.css">
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/extensions/toastr.min.css">
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu-modern bg-info 1-column menu-expanded blank-page blank-page" data-open="click"
    data-menu="vertical-menu-modern" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                        <div class="card-title text-center">
                                            <div class="p-1">
                                                <img src="/app-assets/images/ico/logo-hitam.png" alt="branding logo" height="128px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2">
                                            <span>Aplikasi Sekolah Pintar</span>
                                        </p>
                                        <div class="card-body pt-1">
                                            <form action="/signin" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="la la-user"></i></span>
                                                        </div>
                                                        <input type="text" name="username" class="form-control" placeholder="Username">                                             
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="la la-key"></i></span>
                                                        </div>
                                                        <input type="text" name="password" class="form-control" placeholder="Password">                                             
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-info btn-block">Sign In</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- BEGIN VENDOR JS-->
    <script src="/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/core/app.min.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="/app-assets/js/scripts/forms/form-login-register.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/scripts/extensions/toastr.min.js" type="text/javascript"></script>
    <script>
        $("#buttonPelanggan").on("click", function(){
            $("#modalPelanggan").modal();
        });
        $("#buttonPetugas").on("click", function(){
            $("#modalPetugas").modal();
        });
    </script>
    @if(session('OK'))
        <script>
            toastr.success('{{ session("OK") }}', 'Success!');
        </script>
    @endif
    @if(session('ERR'))
        <script>
            toastr.error('{{ session("ERR") }}', 'Error!');
        </script>
    @endif
</body>

</html>