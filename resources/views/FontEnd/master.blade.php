<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Chowdhury Rafique">
    <!--CSS Link-->
    <title>Medical Project</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/customizecss.css')}}">
</head>
<body class="position-relative">
    <!--   start arrow part-->
    <div class="arrow"><a href="{{asset('Index')}}"><i class="fas fa-angle-double-up"></i></a></div>
    <!-- Start main top header -->
    <div class="Main-top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 hello">
                        <div class="left_header">
                            <div class="iconHeader">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="text-header">
                                <p>Monday - Friday 08:00 - 20:00</p>
                                <p>Saturday and Sunday - CLOSED</p>
                            </div>
                        </div>


                        <div class="left_header_center">
                            <div class="iconHeader">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="text-header">
                                <p>+8801751-473951</p>
                                <p>chowdhuryrafiq511@gmail.com</p>
                            </div>
                        </div>

                        <div class="left_header_right">
                            <div class="iconHeader">
                                <i class="far fa-hand-point-right"></i>
                            </div>
                            <div class="text-header">
                                <p>Follow Us</p>
                                <p>
                                    <a href="{{asset('https://www.facebook.com/ChowdhuryRafiq51')}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{asset('https://twitter.com/login?lang=en')}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="{{asset('https://support.google.com/plus/?hl=en#topic=9259565')}}" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="{{asset('https://www.linkedin.com')}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Start main sub header -->
    <div class="Main-sub-header" id="full_nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{route('Index')}}"><img src="{{asset('image/medi-logo.png')}}" alt="medical-logo">&nbsp;&nbsp;</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('About')}}">ABOUT US<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('Contact')}}">CONTACT US</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <!-- Button trigger modal -->
                        <button type="button" class="loginbutton" data-toggle="modal" data-target="#exampleModalCenter">
                            LOGIN
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Hey, please login!</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div id="loginbox" class="mainbox col-md-12 col-md-offset-3 col-sm-12 col-sm-offset-2">
                                            <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <div class="panel-title">Sign In</div>
                                                    <div style="float:right; font-size: 80%; position: relative; top:-20px"><a href="{{asset('')}}">Forgot password?</a></div>
                                                </div>

                                                <div style="padding-top:30px" class="panel-body">

                                                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                                                    <form id="loginform" class="form-horizontal" role="form">

                                                        <div style="margin-bottom: 25px" class="input-group">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Username or Email">
                                                        </div>

                                                        <div style="margin-bottom: 25px" class="input-group">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                            <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
                                                        </div>



                                                        <div class="input-group">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Remember Me
                                                                </label>
                                                            </div>
                                                        </div>


                                                        <div style="margin-top:10px" class="form-group">
                                                            <!-- Button -->

                                                            <div class="col-sm-12 controls">
                                                                <button class="logbutton">Login</button>
                                                                <button class="logbutton">Login with Facebook</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                                            <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <div class="panel-title">Sign Up</div>
                                                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="{{asset('')}}" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                                                </div>
                                                <div class="panel-body">
                                                    <form id="signupform" class="form-horizontal" role="form">

                                                        <div id="signupalert" style="display:none" class="alert alert-danger">
                                                            <p>Error:</p>
                                                            <span></span>
                                                        </div>



                                                        <div class="form-group">
                                                            <label for="email" class="col-md-3 control-label">Email</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" name="email" placeholder="Email Address">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="firstname" class="col-md-3 control-label">First Name</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password" class="col-md-3 control-label">Password</label>
                                                            <div class="col-md-9">
                                                                <input type="password" class="form-control" name="passwd" placeholder="Password">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" name="icode" placeholder="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <!-- Button -->
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                                                <span style="margin-left:8px;">or</span>
                                                            </div>
                                                        </div>

                                                        <div style="border-top: 1px solid #999; padding-top:20px" class="form-group">

                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                                            </div>

                                                        </div>



                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="loginbutton" data-toggle="modal" data-target="#register">
                            REGISTER
                        </button>

                        <!-- Login modal -->
                        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Hey, please Register!</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-body">
                                            <div class="alert alert-success success_msg" style="display: none;"></div>
                                            <div class="alert alert-danger failure_msg" style="display: none;"></div>

                                            <form class="form-horizontal addPersonal form-group-sm form-control" role="form" id="user_reg">
                                                <input type="hidden" name="_token" value="yqtYFBrwr0R8cEPAOCsOU5Sdig0PaR8C044IPrNB">
                                                <div class="login-fields">
                                                    <label class="control-label" for="Address">Your Name</label>
                                                    <div class="">
                                                        <input class="form-control" type="text" placeholder="Enter your Name" name="user_name" id="user_name">
                                                    </div>
                                                    <p style="display: none;" id="user_name_error"></p>
                                                </div>
                                                <div class="login-fields">
                                                    <label class="control-label" for="Address">Email Id</label>
                                                    <div class="">
                                                        <input class="form-control" type="text" placeholder="yourname@email.com" name="email" id="email" onblur="CheckUsername(this.value);">
                                                    </div>
                                                    <p style="display: none;" id="user_mail_error"></p>
                                                </div>
                                                <div class="login-fields">
                                                    <label class="control-label" for="mobile">Mobile No:</label>
                                                    <div class="">
                                                        <input class="form-control" type="text" placeholder="+88" name="phone">
                                                    </div>
                                                </div>

                                                <div class="login-fields">
                                                    <label for="sel1">Select type:</label>
                                                    <select class="form-control" id="sel1" name="user_type">
                                                        <option value="0">Admin</option>
                                                        <option value="2">Salse Man</option>
                                                        <option value="3">Customer</option>
                                                    </select>
                                                    <p style="display: none;" id="user_type_error"></p>
                                                </div>


                                                <div class="login-fields">
                                                    <label class="control-label" for="password">Password</label>
                                                    <div class="">
                                                        <input class="form-control paswd" type="password" placeholder="*******" name="password">
                                                    </div>
                                                    <p style="display: none;" id="user_pass_error"></p>
                                                </div>

                                                <div class="login-fields">
                                                    <label class="control-label" for="address">Address</label>
                                                    <div class="">
                                                        <textarea class="form-control" name="address" id="reg_address" style="resize: none;"></textarea>
                                                    </div>
                                                    <p style="display: none;" id="user_address_error"></p>
                                                </div>
                                                <div class="login-fields">
                                                    <input type="checkbox" class="checkbox accept_terms" id="agree" checked="true"> <label>I am above 18 years of age and I accept all terms and conditions</label>
                                                </div>
                                                <p style="display: none;" id="user_agree_error"></p>
                                                <div class="clear"></div>
                                                <div class="signup-btn">
                                                    <button class="logbutton">Sign UP</button>
                                                </div>
                                                  
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('FontEnd.Index.shopingCard')
                    </form>
                </div>
            </nav>
        </div>
    </div>
   @yield('text')
    <!-- Start footer -->
    <div class="BottomFooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footerLeft">
                        <a href="{{asset('')}}">Help</a>
                        <a href="{{asset('')}}">Term</a>
                        <a href="{{asset('')}}">Privacy</a>
                    </div>
                
                    <div class="footerRight">
                        <p>2019 © Pampered by Chowdhury Rafique</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Optional JavaScript -->
    <!-- jquery-3.2.1.slim.min.js first, then Popper.js, then Bootstrap JS , main.js -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
