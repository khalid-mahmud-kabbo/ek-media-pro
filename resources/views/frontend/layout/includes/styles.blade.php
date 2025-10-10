<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') {{ __('| ' . $allsettings['app_title']) }}</title>
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="{{ $allsettings['meta_author'] }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="NQayC6Uy1-5sW4Mh8-LnUY48P0u9LUYzL3yXWSBhny4" />

    <link rel="shortcut icon" href="{{ asset(IMG_FAVICON_PATH . $allsettings['favicon']) }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
