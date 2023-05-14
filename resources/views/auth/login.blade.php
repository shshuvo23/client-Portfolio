<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pepdev.com/template/apez/admin/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 May 2023 06:24:44 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apez Admin Template | Login</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/')}}admin/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('/')}}admin/dist/css/style.css" />
</head>
<body>

    <!-- Page Wrapper -->
    <div class="lgn-background" style="background-image: url({{asset('/')}}admin/uploads/slider-law-1.jpg);">
        <div class="lgn-wrapper">
            <div class="lgn-logo text-center">
                <a><img src="{{asset('/')}}admin/images/logo-white.png" alt=""></a>
            </div>
            <div id="login-form" class="lgn-form ">
                <form class="form-vertical" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="lgn-input form-group">
                        <label class="control-label col-sm-12">Username</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="text" name="email" id="lgn-mail" placeholder="Enter your Username" autocomplete="off">
                        </div>
                    </div>
                    <div class="lgn-input form-group">
                        <label class="control-label col-sm-12">Password</label>
                        <div class="col-sm-12">
                            <input type="password" name="password" id="lgn-pass" class="form-control" placeholder="Enter your Password" autocomplete="off">
                        </div>
                    </div>
                    <div class="lgn-forgot">
                        <a href="#">Forgotten Password?</a>
                    </div>
                    <div class="lgn-submit">
                        <button type="submit" id="lgn-submit" class="btn btn-primary btn-pill btn-lg" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include js files -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{asset('/')}}admin/assets/plugin/jquery/jquery-3.3.1.min.js"></script>
    <!-- Popper Plugin -->
    <script type="text/javascript" src="{{asset('/')}}admin/assets/plugin/popper/popper.min.js"></script>
    <!-- Bootstrap Framework -->
    <script type="text/javascript" src="{{asset('/')}}admin/assets/plugin/bootstrap/bootstrap.min.js"></script>
</body>
</html>


