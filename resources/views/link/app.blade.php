<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel AJAX CRUD</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body style="margin-top: 60px" class="container">

@yield('content')

<script src="js/jquery.js"></script>
<script src="js/1.3.7.tether.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/laracrud.js"></script>
</body>
</html>
