<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        Layout @yield('title')
    </title>
    <style>
        .main {

            width: 1000px;

            height: 300px;

            margin: 0 auto;

            margin-top: 15px;

            clear: both;

        }

        .main .content {

            float:right;

            width:75%;

            height:inherit;

            background: #f5f5f5;

            border:1px solid #ddd;

        }.main .sidebar {

             float:left;

             width:20%;

             height:inherit;

             background: #f5f5f5;

             border:1px solid #ddd;

         }
    </style>
</head>
<body>
<div class="main">
    <div class="sidebar">
        @section('sidebar')
            侧边栏
        @show
    </div>
    <div class="content">
        @yield('content','主要内容区域')
        内容区域
    </div>
</div>
</body>
</html>