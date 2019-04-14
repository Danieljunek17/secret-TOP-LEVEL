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
        <meta name="_token" content="{{ csrf_token() }}">

        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/favicons/manifest.json">
        <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#bc6e3c">
        <link rel="shortcut icon" href="/favicons/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <meta name="msapplication-config" content="/favicons/browserconfig.xml">
        <meta name="theme-color" content="#2bac60">
	
        @include('layouts.scripts')

        @section('scripts')
            {!! Theme::css('vendor/bootstrap/bootstrap.min.css?t={cache-version}') !!}
            {!! Theme::css('vendor/adminlte/admin.min.css?t={cache-version}') !!}
            {!! Theme::css('vendor/adminlte/colors/skin-blue.min.css?t={cache-version}') !!}
            {!! Theme::css('vendor/sweetalert/sweetalert.min.css?t={cache-version}') !!}
            {!! Theme::css('vendor/animate/animate.min.css?t={cache-version}') !!}
            {!! Theme::css('css/pterodactyl.css?t={cache-version}') !!}
			            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
            <link rel="stylesheet" href="/custom.php">
	
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        @show
    </head>
    <body class="hold-transition skin-blue fixed sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
<a href="{{ route('index') }}" class="logo">
                    <img src="/logo.png" style="height: 100%; width: 100%; object-fit: contain"> 
                </a>
               <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="user-menu">
                                <a href="{{ route('account') }}">
                                    <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(Auth::user()->email)) }}?s=160" class="user-image" alt="User Image">
                                    <span class="hidden-xs">{{ Auth::user()->name_first }} {{ Auth::user()->name_last }}</span>
                                </a>
                            </li>
                            @if(isset($sidebarServerList))
                                <li>
                                    <a href="#" data-toggle="control-sidebar">
                                        <i class="fa fa-server"></i>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->root_admin)
                                <li>
                                    <li><a href="{{ route('admin.index') }}" data-toggle="tooltip" data-placement="bottom" title="@lang('strings.admin_cp')"><i class="fa fa-gears"></i></a></li>
                                </li>
                            @endif
                            <li>
                                <li><a href="{{ route('auth.logout') }}" id="logoutButton" data-toggle="tooltip" data-placement="bottom" title="@lang('strings.logout')"><i class="fa fa-sign-out-alt"></i></a></li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
			
            <aside class="main-sidebar">
                <section class="sidebar">
                    <ul class="sidebar-menu tree" data-widget="tree">
                        <li class="header">@lang('navigation.account.header')</li>
                        <li class="{{ Route::currentRouteName() !== 'account' ?: 'active' }}">
                            <a href="{{ route('account') }}">
                                <i class="fa fa-user"></i> <span>@lang('navigation.account.my_account')</span>
                            </a>
                        </li>
                        <li class="{{ Route::currentRouteName() !== 'account.security' ?: 'active' }}">
                            <a href="{{ route('account.security')}}">
                                <i class="fa fa-lock"></i> <span>@lang('navigation.account.security_controls')</span>
                            </a>
                        </li>
                        <li class="{{ (Route::currentRouteName() !== 'account.api' && Route::currentRouteName() !== 'account.api.new') ?: 'active' }}">
                            <a href="{{ route('account.api')}}">
                                <i class="fa fa-code"></i> <span>@lang('navigation.account.api_access')</span>
                            </a>
                        </li>
                        <li class="{{ Route::currentRouteName() !== 'index' ?: 'active' }}">
                            <a href="{{ route('index')}}">
                                <i class="fa fa-server"></i> <span>@lang('navigation.account.my_servers')</span>
                            </a>
                        </li>
                        @if (isset($server->name) && isset($node->name))
                            <li class="header">@lang('navigation.server.header')</li>
                            <li class="{{ Route::currentRouteName() !== 'server.index' ?: 'active' }}">
                                <a href="{{ route('server.index', $server->uuidShort) }}">
                                    <i class="fa fa-terminal"></i> <span>@lang('navigation.server.console')</span>
                                    <span class="pull-right-container muted muted-hover" href="{{ route('server.console', $server->uuidShort) }}" id="console-popout">
                                        <span class="label label-default pull-right" style="padding: 3px 5px 2px 5px;">
                                            <i class="fa fa-external-link-square-alt"></i>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            @can('list-files', $server)
                                <li
                                    @if(starts_with(Route::currentRouteName(), 'server.files'))
                                        class="active"
                                    @endif
                                >
                                    <a href="{{ route('server.files.index', $server->uuidShort) }}">
                                        <i class="fa fa-folder-open"></i> <span>@lang('navigation.server.file_management')</span>
                                    </a>
                                </li>
                            @endcan
                            @can('list-subusers', $server)
                                <li
                                    @if(starts_with(Route::currentRouteName(), 'server.subusers'))
                                        class="active"
                                    @endif
                                >
                                    <a href="{{ route('server.subusers', $server->uuidShort)}}">
                                        <i class="fa fa-users"></i> <span>@lang('navigation.server.subusers')</span>
                                    </a>
                                </li>
                            @endcan
                            @can('list-schedules', $server)
                                <li
                                    @if(starts_with(Route::currentRouteName(), 'server.schedules'))
                                        class="active"
                                    @endif
                                >
                                    <a href="{{ route('server.schedules', $server->uuidShort)}}">
                                        <i class="fa fa-clock"></i> <span>@lang('navigation.server.schedules')</span>
                                        <span class="pull-right-container">
                                            <span class="label label-primary pull-right">{{ \Pterodactyl\Models\Schedule::select('id')->where('server_id', $server->id)->where('is_active', 1)->count() }}</span>
                                        </span>
                                    </a>
                                </li>
                            @endcan
                            @can('view-databases', $server)
                                <li
                                    @if(starts_with(Route::currentRouteName(), 'server.databases'))
                                    class="active"
                                    @endif
                                >
                                    <a href="{{ route('server.databases.index', $server->uuidShort)}}">
                                        <i class="fa fa-database"></i> <span>@lang('navigation.server.databases')</span>
                                    </a>
                                </li>
                            @endcan
                            @if(Gate::allows('view-startup', $server) || Gate::allows('access-sftp', $server) ||  Gate::allows('view-allocations', $server))
                                <li class="treeview
                                    @if(starts_with(Route::currentRouteName(), 'server.settings'))
                                        active
                                    @endif
                                ">
                                    <a href="#">
                                        <i class="fa fa-sliders-h"></i>
                                        <span>@lang('navigation.server.configuration')</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        @can('view-name', $server)
                                            <li class="{{ Route::currentRouteName() !== 'server.settings.name' ?: 'active' }}"><a href="{{ route('server.settings.name', $server->uuidShort) }}"><i class="fa fa-angle-right"></i> @lang('navigation.server.server_name')</a></li>
                                        @endcan
                                        @can('view-allocations', $server)
                                            <li class="{{ Route::currentRouteName() !== 'server.settings.allocation' ?: 'active' }}"><a href="{{ route('server.settings.allocation', $server->uuidShort) }}"><i class="fa fa-angle-right"></i> @lang('navigation.server.port_allocations')</a></li>
                                        @endcan
                                        @can('access-sftp', $server)
                                            <li class="{{ Route::currentRouteName() !== 'server.settings.sftp' ?: 'active' }}"><a href="{{ route('server.settings.sftp', $server->uuidShort) }}"><i class="fa fa-angle-right"></i> @lang('navigation.server.sftp_settings')</a></li>
                                        @endcan
                                        @can('view-startup', $server)
                                            <li class="{{ Route::currentRouteName() !== 'server.settings.startup' ?: 'active' }}"><a href="{{ route('server.settings.startup', $server->uuidShort) }}"><i class="fa fa-angle-right"></i> @lang('navigation.server.startup_parameters')</a></li>
                                        @endcan
                                    </ul>
                                </li>
                            @endif
                            @if(Auth::user()->root_admin)
                                <li class="header">@lang('navigation.server.admin_header')</li>
                                <li>
                                    <a href="{{ route('admin.servers.view', $server->id) }}" target="_blank">
                                        <i class="fa fa-cog"></i> <span>@lang('navigation.server.admin')</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    </ul>
                </section>
            </aside>
            <div class="content-wrapper">
                <section class="content-header">
                    @yield('content-header')
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    @lang('base.validation_error')<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @foreach (Alert::getMessages() as $type => $messages)
                                @foreach ($messages as $message)
                                    <div class="alert alert-{{ $type }} alert-dismissable" role="alert">
                                        {!! $message !!}
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    @yield('content')
                </section>
            </div>
            <footer class="main-footer">
                Copyright &copy; 2018 - <a href="https://www.mc-market.org/resources/8394/">5.1a</a>.
            </footer>
            @if(isset($sidebarServerList))
                <aside class="control-sidebar control-sidebar-dark">
                    <div class="tab-content">
                        <ul class="control-sidebar-menu">
                            @foreach($sidebarServerList as $sidebarServer)
                                <li>
                                    <a href="{{ route('server.index', $sidebarServer->uuidShort) }}" @if(isset($server) && $sidebarServer->id === $server->id)class="active"@endif>
                                        @if($sidebarServer->owner_id === Auth::user()->id)
                                            <i class="menu-icon fa fa-user bg-blue"></i>
                                        @else
                                            <i class="menu-icon fa fa-user bg-gray"></i>
                                        @endif
                                        <div class="menu-info">
                                            <h4 class="control-sidebar-subheading">{{ str_limit($sidebarServer->name, 20) }}</h4>
                                            <p>{{ str_limit($sidebarServer->description, 20) }}</p>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            @endif
            <div class="control-sidebar-bg"></div>
        </div>
        @section('footer-scripts')
            {!! Theme::js('js/keyboard.polyfill.js?t={cache-version}') !!}
            <script>keyboardeventKeyPolyfill.polyfill();</script>

            {!! Theme::js('js/laroute.js?t={cache-version}') !!}
            {!! Theme::js('vendor/jquery/jquery.min.js?t={cache-version}') !!}
            {!! Theme::js('vendor/sweetalert/sweetalert.min.js?t={cache-version}') !!}
            {!! Theme::js('vendor/bootstrap/bootstrap.min.js?t={cache-version}') !!}
            {!! Theme::js('vendor/slimscroll/jquery.slimscroll.min.js?t={cache-version}') !!}
            {!! Theme::js('vendor/adminlte/app.min.js?t={cache-version}') !!}
            {!! Theme::js('vendor/socketio/socket.io.v203.min.js?t={cache-version}') !!}
            {!! Theme::js('vendor/bootstrap-notify/bootstrap-notify.min.js?t={cache-version}') !!}
            {!! Theme::js('js/autocomplete.js?t={cache-version}') !!}
            @if(config('pterodactyl.lang.in_context'))
                {!! Theme::js('vendor/phraseapp/phraseapp.js?t={cache-version}') !!}
            @endif

            @if(Auth::user()->root_admin)
                <script>
                    $('#logoutButton').on('click', function (event) {
                        event.preventDefault();

                        var that = this;
                        swal({
                            title: 'Do you want to log out?',
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d9534f',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Log out'
                        }, function () {
                            window.location = $(that).attr('href');
                        });
                    });
                </script>
            @endif
        @show
    </body>
</html>
