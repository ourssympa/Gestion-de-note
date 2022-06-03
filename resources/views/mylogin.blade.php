<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from theme-vessel-templates.theme-vessel.ey.r.appspot.com/logy/main/login-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 22:06:39 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NN9PKKF');</script>
    <!-- End Google Tag Manager -->
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('login/assets/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('login/assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('login/assets/fonts/flaticon/font/flaticon.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('login/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('login/assets/css/skins/default.css')}}">

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NN9PKKF"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Login 7 start -->
<div class="login-7">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-5 col-md-12 bg-img none-992 align-self-center">
                <div class="info">
                    <div class="logo clearfix">
                        <a href="login-7.html">
                            <img src="{{asset('login/assets/img/logos/logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="btn-section clearfix">
                        <a href="{{route('loger')}}" class="link-btn active btn-1 default-bg">Login</a>
                        <div class="clearfix"></div>
                        <a href="{{route('register')}}" class="link-btn btn-1">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 bg-color-16 align-self-center">
                <div class="form-section">
                    <div class="logo-2 clearfix">
                        <a href="login-7.html">
                            <img src="{{asset('login/assets/img/logos/logo-2.png')}}" alt="logo">
                        </a>
                    </div>
                    <h3>Connexion</h3>
                    <div class="login-inner-form">
                        <form action="{{route('logincreate')}}" method="Post">
                            @csrf
                            <div class="form-group form-box">
                                <input type="email" name="email" class="input-text" placeholder="Email Address">
                                <i class="flaticon-mail-2"></i>
                            </div>
                            <div class="form-group form-box">
                                <input type="password" name="password" class="input-text" placeholder="Password">
                                <i class="flaticon-password"></i>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn-md btn-theme btn-block">Connexion</button>
                            </div>
                            <p class="text">Enregistrer vous<a href="register-7.html"> Enregistrement</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 7 end -->

<!-- External JS libraries -->
<script src="{{asset('login/assets/js/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('login/assets/js/popper.min.js')}}"></script>
<script src="{{asset('login/assets/js/bootstrap.min.js')}}"></script>
<!-- Custom JS Script -->

</body>

<!-- Mirrored from theme-vessel-templates.theme-vessel.ey.r.appspot.com/logy/main/login-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 22:06:43 GMT -->
</html>
