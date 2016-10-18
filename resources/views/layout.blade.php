<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>拂菻坊 英语学习 @yield('title'){{ session('login_status') }}</title>
        <link rel="icon" href="img/favicon.png" type="image/x-icon" />


    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ URL::asset('css/freelancer.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/shop-item.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/shop-homepage.css') }}" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="index">
 @section('header')
    <!-- Navigation -->
    <?php $username = \App\Utils\UtilsCustomerAuth::getUserName()?>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">拂菻坊</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="/">主页</a>
                    </li>
                    <li class="page-scroll">
                        <a href="videoList">课程列表</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">联系我们</a>
                    </li>
                    @if ($username === false)
                    <li class="page-scroll" id="login">
                        <a href="#" data-toggle="modal" data-target="#login-modal">登录</a>
                    </li> 
                    <li class="page-scroll" id="register">
                        <a href="http://www.fulinfang.com/index.php?act=login&op=register">注册</a>
                    </li>
                    @else
               <!--      <li class="page-scroll" id="userIcon">
                        <i class="fa fa-user fa-3x" style="color: white"></i>
                    </li> -->
                    <li class="page-scroll" id="user">
                        <a href="#">{{$username}}</a>
                    </li>
                    <li id="logOut">
                        <a href="logout">登出</a>
                    </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    @show

    @yield('content')

    @section('footer')
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; fulinfang 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

       <!--Login Modal-->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>登录</h1><br>
                <form method="post" id="formLogin" action="/login">
                    <input type="text" name="user" id="user" placeholder="用户名">
                    <input type="password" name="pass" id="pass" placeholder="密码">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <input type="button" name="login" class="login loginmodal-submit" id="loginBtn" value="登录">
                </form>
                <div class="login-help">
                    <a href="http://www.fulinfang.com/index.php?act=login&op=register">注册</a> - <a href="http://www.fulinfang.com/index.php?act=login&op=forget_password">忘记密码</a>
                </div>
            </div>
        </div>
    </div>


    <!--Subscribe Modal-->
    <div class="modal fade" id="subscribe-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>请订阅后观看</h1><br>
                <!-- <form> -->
                    <input type="submit" name="login" class="login loginmodal-submit" id="subscribeBtn" value="立即订阅-￥100/月">
                <!-- </form> -->
      
            </div>
        </div>
    </div>

    <!--Loading Modal-->
    <div class="modal1"></div>
    @show
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.js"></script>
</body>
</html>