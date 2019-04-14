{{-- Pterodactyl - Panel --}}
{{-- Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com> --}}

{{-- This software is licensed under the terms of the MIT license. --}}
{{-- https://opensource.org/licenses/MIT --}}
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name', 'Pterodactyl') }} - @yield('title')</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/favicons/manifest.json">
        <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#bc6e3c">
        <link rel="shortcut icon" href="/favicons/favicon.ico">
        <meta name="msapplication-config" content="/favicons/browserconfig.xml">
        <meta name="theme-color" content="#0e4688">

        @section('scripts')
            {!! Theme::css('vendor/bootstrap/bootstrap.min.css?t={cache-version}') !!}
            {!! Theme::css('vendor/adminlte/admin.min.css?t={cache-version}') !!}
            {!! Theme::css('css/pterodactyl.css?t={cache-version}') !!}
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
            <link rel='stylesheet' type='text/css' href='/custom.php' />

            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        @show
    </head>
    <body id="particles-js" class="hold-transition login-page">
        <div class="container">
            <div id="form-section" class="container-fluid signin">
    <div class="website-logo">
        <a href="/index.php">
                            <a href="/index.php" class="logo"><img src="/logo.png" alt="Logo"></a>
                    </a>
    </div>
    <div class="row">
        <div class="info-slider-holder">
            <div class="bg-animation"></div>
            <div class="info-holder">
                <h6>The leader control panel</h6>
                <div class="bold-title">This is the panel <span>for you</span>.</div>
            </div>
        </div>
        <div class="form-holder">
            <div class="menu-holder">
            </div>
            <div class="signin-signup-form">
                <div class="form-items">
                    <div class="form-title"><div class="header-lined">
    <h1>Login <small>to continue to the panel...</small></h1>
    </div>
</div>
@yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
        <div class="login-corner-info small">
            <strong><i class="fa fa-fw {{ $appIsGit ? 'fa-git-square' : 'fa-code-fork' }}"></i></strong> {{ $appVersion }}<br />
            <strong><i class="fa fa-fw fa-clock"></i></strong> {{ round(microtime(true) - LARAVEL_START, 3) }}s
        </div>

        {!! Theme::js('vendor/jquery/jquery.min.js?t={cache-version}') !!}
        {!! Theme::js('vendor/bootstrap/bootstrap.min.js?t={cache-version}') !!}
        {!! Theme::js('js/autocomplete.js?t={cache-version}') !!}
        <script type="text/javascript">
            /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
            $(function () {
                particlesJS.load('particles-js', '{!! Theme::url('vendor/particlesjs/particles.json?t={cache-version}') !!}', function() {});
            })
        </script>

        @if(config('pterodactyl.lang.in_context')) {!! Theme::js('vendor/phraseapp/phraseapp.js?t={cache-version}') !!} @endif
    </body>
</html>
