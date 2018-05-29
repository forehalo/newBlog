<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>Jief_read</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .con{font-size:6vw}
    </style>
</head>
<body>
<div class="container-fluid">
    <h1 style='text-align:center;'>{{$h1}}</h1>
    <div class="row" >
        <div class="col-xs-10 col-xs-offset-1 con">{!! $text !!}</div>
    </div>
</div>
</body>
</html>
