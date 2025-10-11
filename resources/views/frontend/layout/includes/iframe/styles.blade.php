<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') {{ '| ' . $allsettings['app_title'] }}</title>
    <link rel="shortcut icon" href="{{ asset(IMG_FAVICON_PATH . $allsettings['favicon']) }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset(IMG_FAVICON_PATH . $allsettings['favicon']) }}">
    <link rel="stylesheet" href="{{ asset('admin/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/iframe/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/iframe/wall.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/iframe/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/iframe/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/iframe/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/iframe/offerwall.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/toastr.min.css') }}">

    @stack('post_styles')
</head>
