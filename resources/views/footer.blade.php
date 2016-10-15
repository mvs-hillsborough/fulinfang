<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        Layout @yield('title')
    </title>
    <style>
        .footer {

            width:1000px;

            height:150px;

            margin:0 auto;

            margin-top: 15px;

            background: #f5f5f5;
            border:1px solid #ddd;

        }
    </style>
</head>
<body>
<div class="footer">
    @section('footer')
        底部
    @show
</div>
</body>
</html>