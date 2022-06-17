<?php 

    if(isset($_SESSION['admin_id'])){

        if($_SESSION['admin_type'] == 'Marketer' ){
            header("Location:.?action=marketer_home_page");
        }else{
            header("Location:.?action=home");
        }
        
    }

?>
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/symox-php/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 May 2022 16:21:57 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>R2Cubid</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="horizontal" data-topbar="dark" style="background-color:#030f16;">

    <div class="authentication-bg min-vh-100">
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">

                       <div class="text-center mb-4">
                            <a href="index.html">
                                <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">R2Cubid</span>
                            </a>
                       </div>

                        <div class="card">
                            <div class="card-body p-4"> 
                                <div class="text-center mt-2">
                                    <?php if($login_message != ""): ?>
                                        
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <i class="mdi mdi-alert-outline me-2"></i>
                                            Invalid email or password
                                        </div>
                                    <?php else: ?>
                                        <h5 class="text-primary">Welcome</h5>
                                        <p class="text-muted">Sign in to continue to R2Cubid.</p>
                                    <?php endif; ?>
                                    
                                </div>
                                <div class="p-2 mt-4">
                                    <form action=".?action=login" id="loginForm" method="post" class="needs-validation" novalidate>
        
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                                        </div>
                
                                        <div class="mb-3">
                                            <!-- <div class="float-end">
                                                <a href="auth-recoverpw.html" class="text-muted">Forgot password?</a>
                                            </div> -->
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" required>
                                        </div>
                
                                        <!-- <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div> -->
                                        
                                        <div class="mt-3 text-end">
                                            <button id="loginBtn" class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
                                        </div>

                                        <!-- <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="font-size-14 mb-3 title">Sign in with</h5>
                                            </div>
            
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> -->

                                        <!-- <div class="mt-4 text-center">
                                            <p class="mb-0">Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Signup now </a> </p>
                                        </div> -->
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-muted p-4">
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> R2Cubid</p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->

        <!-- JAVASCRIPT -->
        <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/pages/form-validation.init.js"></script>

    </body>

</html>
