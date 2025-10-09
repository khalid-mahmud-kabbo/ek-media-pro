<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') {{ '| ' . $allsettings['app_title'] }}</title>
    <link rel="shortcut icon" href="{{ asset(IMG_FAVICON_PATH . $allsettings['favicon']) }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset(IMG_FAVICON_PATH . $allsettings['favicon']) }}">

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="{{ asset('frontend/assets/css/material-dashboard.css') }}" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/assets/js/core/moment.min.js') }}"></script>

    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css"
          rel="stylesheet"/>

        <style>
        .jssocials-share {
            margin: 20px;
        }

        .fb_dialog.fb_dialog_advanced {
            bottom: 18pt;
            margin-bottom: 50px;
        }

        iframe.fb_customer_chat_bounce_in_v2 {
            bottom: 9pt;
            margin-bottom: 50px;
        }

        iframe.fb_customer_chat_bounce_out_v2 {
            bottom: 9pt;
            margin-bottom: 50px;
        }

        .clickable {
            cursor: pointer;
        }

        @media (min-width: 1000px) {
            .user-dropdown {
                display: none;
            }
        }
    </style>

    @stack('post_styles')
</head>
