<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        Layout @yield('My video site')
    </title>
    <style>
        .header {

            width:1000px;

            height:150px;

            margin:0 auto;

            background: #f5f5f5;

            border:1px solid #ddd;

        }
    </style>
</head>
<body>
<div class="header">
    @section('header')
        头部
    @show
</div>
</body>
</html>