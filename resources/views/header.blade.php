<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>拂菻坊 英语学习 @yield('title')</title>
    <link href="{{ URL::asset('img/favicon.png') }}" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ URL::asset('css/freelancer.css') }}" rel="stylesheet">
    

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
 @section('header')
<body id="page-top" class="index">

    <!-- Navigation -->
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
                        <a href="#page-top">主页</a>
                    </li>
                    <li class="page-scroll">
                        <a href="itemList.html">课程列表</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">联系我们</a>
                    </li> 
                    <li class="page-scroll" id="login">
                        <a href="#" data-toggle="modal" data-target="#login-modal">登录</a>
                    </li> 
                    <li class="page-scroll" id="register">
                        <a href="http://www.fulinfang.com/index.php?act=login&op=register">注册</a>
                    </li>
                    <li class="page-scroll" id="userIcon" style="display:none">
                        <i class="fa fa-user fa-3x" style="color: white"></i>
                    </li>
                    <li class="page-scroll" id="user" style="display:none">
                        <a href="#">游客12345</a>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    @show
    <!-- jQuery -->
    <script src="../../public/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../public/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../../public/js/jqBootstrapValidation.js"></script>
    <script src="../../public/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../../public/js/freelancer.js"></script>
</body>
</html>