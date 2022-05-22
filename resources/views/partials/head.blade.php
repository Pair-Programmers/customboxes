<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title-meta')
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R750JWN117"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-R750JWN117');
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/website') }}/images/favicon.png">

    <!-- All CSS is here ============================================ -->

    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/vendor/signericafat.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/vendor/cerebrisans.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/vendor/elegant.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/vendor/linear-icon.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/plugins/nice-select.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/plugins/slick.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/plugins/animate.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/style.css">

    @yield('custom-css')
</head>
