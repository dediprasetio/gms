<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url() ?>public/images/favicon.ico" type="image/ico" />

    <title>Gerai Monitoring System</title>

    <!-- Bootstrap -->
    <link href="<?= base_url() ?>public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Jquery -->
	<!-- <link rel="stylesheet" href="<?= base_url() ?>public/vendors/jquery-validation-1.19.3/demo/css/screen.css"> -->
    <!-- Custom Validation -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/vendors/additional/css/validation.css">
    <!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/build/additional/notification/notification.css">
    <!-- Font Awesome -->
    <link href="<?= base_url() ?>public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url() ?>public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url() ?>public/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url() ?>public/build/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>public/build/css/login.css">
</head>

<body>
    <!-- Start Preloader -->
    <div id="preload-block">
        <div class="square-block"></div>
    </div>
    <!-- Preloader End -->
    
    <div class="container-fluid">
        <div class="row">
            <div class="authfy-container col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                <div class="col-sm-5 authfy-panel-left">
                    <div class="brand-col">
                        <div class="headline">
                            <!-- brand-logo start -->
                            <div class="brand-log">
                                <img src="<?= base_url() ?>public/images/g-white.png" width="230" alt="brand-logo">
                            </div><!-- ./brand-logo -->
                            <hr>
                            <span class="h2 mt-3 welcome fw-b">Monitor & Control Your Booth</span>
                            <p class="mt-3 mb-3 text-secondary fw-b">To get a good experience, please login using your existing username and password</p>
                            <div class="border-bottom mb-3 border-secondary" style="height: 40px;"></div>
                            <div class="row">
                            <div class="col-4 text-center text-secondary fw-b"> <img src="<?= base_url('public/images/icon/login/dashboard.png') ?>" width="60" alt="" srcset=""> <br>Monitoring  </div>
                                <div class="col-4 text-center text-secondary fw-b"> <img src="<?= base_url('public/images/icon/login/live.png') ?>" width="60" alt="" srcset=""> <br> Live Data </div>
                                <div class="col-4 text-center text-secondary fw-b"> <img src="<?= base_url('public/images/icon/login/controlling.png') ?>" width="50" alt="" srcset=""> <br>Controlling </div>

                            </div>
                            <!-- <p class="mt-3 text-secondary">Copyright &copy; 2021 | G-MONS | <a href="https://k-team.com" class="green">K-Team</a></p> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 authfy-panel-right">
                    <!-- authfy-login start -->
                    <div class="authfy-login">
                        <!-- panel-login start -->
                        <div class="authfy-panel panel-login active">
                            <div class="authfy-heading text-center">
                                <h3 class="auth-title">Login to your account</h3>
                                <p>Please enter your <span class="text-success fw-b">E-mail</span> and <span class="text-success fw-b">Password</span></p>
                                <!-- <p>Don’t have an account? <a class="lnk-toggler" data-panel=".panel-signup" href="#">Sign Up Free!</a></p> -->
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <form class="loginForm" id="commentForm">
                                        <div class="form-group">
                                            <input type="email" class="form-control email" name="username" id="username" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="pwdMask">
                                                <input type="password" class="form-control password" name="password" id="password" placeholder="Password" required>
                                                <span class="fa fa-eye-slash pwd-toggle"></span>
                                            </div>
                                        </div>
                                        <!-- start remember-row -->
                                        <div class="row remember-row">
                                            <div class="col-xs-6 col-sm-6">
                                                <label class="checkbox text-left">
                                                    <input type="checkbox" value="remember-me">
                                                    <span class="label-text">Remember me</span>
                                                </label>
                                            </div>
                                            <!-- <div class="col-xs-6 col-sm-6">
                                                <p class="forgotPwd">
                                                    <a class="lnk-toggler" data-panel=".panel-forgot" href="#">Forgot password?</a>
                                                </p>
                                            </div> -->
                                        </div> <!-- ./remember-row -->
                                        <div class="form-group">
                                            <button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- ./panel-login -->
                        <!-- panel-signup start -->
                        <div class="authfy-panel panel-signup text-center">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="authfy-heading">
                                        <h3 class="auth-title">Sign up for free!</h3>
                                    </div>
                                    <form name="signupForm" class="signupForm" action="#" method="POST">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="username" placeholder="Email address">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fullname" placeholder="Full name">
                                        </div>
                                        <div class="form-group">
                                            <div class="pwdMask">
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                                <span class="fa fa-eye-slash pwd-toggle"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <p class="term-policy text-muted small">I agree to the <a href="#">privacy policy</a> and <a href="#">terms of service</a>.</p>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up with email</button>
                                        </div>
                                    </form>
                                    <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                                </div>
                            </div>
                        </div> <!-- ./panel-signup -->
                        <!-- panel-forget start -->
                        <div class="authfy-panel panel-forgot">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="authfy-heading">
                                        <h3 class="auth-title">Recover your password</h3>
                                        <p>Fill in your e-mail address below and we will send you an email with further instructions.</p>
                                    </div>
                                    <form name="forgetForm" class="forgetForm" action="#" method="POST">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="username" placeholder="Email address">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-lg btn-primary btn-block" type="submit">Recover your password</button>
                                        </div>
                                        <div class="form-group">
                                            <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                                        </div>
                                        <div class="form-group">
                                            <a class="lnk-toggler" data-panel=".panel-signup" href="#">Don’t have an account?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- ./panel-forgot -->
                    </div> <!-- ./authfy-login -->
                </div>
            </div>
        </div> <!-- ./row -->
    </div> <!-- ./container -->

    <!-- Javascript Files -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>public/vendors/jquery/dist/jquery.min.js"></script>
	<!-- <script src="<?= base_url() ?>public/vendors/jquery-validation-1.19.3/dist/jquery.validate.js"></script> -->
    <!-- Validation js -->
    <script type="text/javascript" src="<?= base_url(); ?>public/vendors/validation/js/underscore-min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>public/vendors/validation/js/moment.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>public/vendors/validation/js/jquery.validate.min.js"></script>
    <!-- notification js -->
    <script type="text/javascript" src="<?= base_url(); ?>public/vendors/additional/js/bootstrap-growl.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>public/vendors/additional/js/notification.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>public/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Axios -->
    <script src="<?= base_url() ?>public/node_modules/axios/dist/axios.min.js"></script>

    <!-- Login js -->
    <script src="<?= base_url() ?>public/build/js/variable.js"></script>
    <script src="<?= base_url() ?>public/build/page/login.js"></script>


</body>


</html>