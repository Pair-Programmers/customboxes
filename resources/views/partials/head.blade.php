<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title-meta')
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/website') }}/images/favicon.png">
    

    <!-- All CSS is here ============================================ -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/vendor/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/vendor/signericafat.css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/vendor/cerebrisans.css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/vendor/simple-line-icons.css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/vendor/elegant.css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/vendor/linear-icon.css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/plugins/nice-select.css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/plugins/easyzoom.css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/plugins/slick.css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/plugins/animate.css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/plugins/magnific-popup.css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/plugins/jquery-ui.css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/style.css" media="screen">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="https://kit.fontawesome.com/763be145fb.js" crossorigin="anonymous"></script>
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-R750JWN117"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-R750JWN117');
    </script> --}}

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TQRWPZB');
    </script>
    <!-- End Google Tag Manager -->

    @yield('custom-css')

    {{-- whatsapp button style --}}
    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 20px;
            right: 90px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            /* box-shadow: 2px 2px 3px #999; */
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>
</head>
