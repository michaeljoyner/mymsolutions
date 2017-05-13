<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('title')
        <title>Make Your Mark</title>
    @show
    @section('description')
        <meta name="description" content="Make Your Mark is a South African corporate branding and identity firm specialising in logo design, corporate branding and web development."/>
    @show

    <link href="{{ mix("css/app.css") }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta property="og:site_name" content="Make Your Mark"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://mymsolutions.co.za"/>
    <meta property="og:title" content="Make Your Mark"/>
    <meta property="og:image" content="{{ asset('images/fb_pic.png') }}"/>
    @section('fb_description')
    @show

    @section('head')
    @show
</head>
<body>
@yield('content')

<script src="{{ mix('js/app.js') }}"></script>
@section('bodyscripts')
@show
</body>
</html>