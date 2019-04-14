{{-- Pterodactyl - Panel --}}
{{-- Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com> --}}

{{-- This software is licensed under the terms of the MIT license. --}}
{{-- https://opensource.org/licenses/MIT --}}
@extends('layouts.master')

@section('title')
    {{ trans('server.index.title', [ 'name' => $server->name]) }}
@endsection

@section('scripts')
    @parent
    {!! Theme::css('css/terminal.css') !!}
@endsection


@section('content')
<div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <a id="server_status_icon" style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;</a>
                  </div>
                  <p class="card-category">Server Name</p>
                  <h3 class="card-title">{{ $server->name }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-memory"></i>
                  </div>
                  <p class="card-category">Ram Usage</p>
                  <h3 class="card-title dynamic-update" data-server="{{ $server->uuidShort }}"><span data-action="memory">--</span> / {{ $server->memory === 0 ? '&infin;' : $server->memory }} <small>MB</small></h3>
				</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-microchip"></i>
                  </div>
                  <p class="card-category">CPU Usage Percentage</p>
                  <h3 class="card-title dynamic-update" data-server="{{ $server->uuidShort }}"><span data-action="cpu" data-cpumax="{{ $server->cpu }}">--</span> <small>%</small></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-hdd"></i>
                  </div>
                  <p class="card-category">Allocated Disk Space</p>
                  <h3 class="card-title dynamic-update" data-server="{{ $server->uuidShort }}"><span data-action="disk" data-cpumax="{{ $server->disk }}">{{ $server->disk }} <small>MB</small></span></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
            </div>
          </div>


<div class="row">
	<div class="col-xs-12">
        <div class="box">
            <div class="box-body position-relative">
			<a id="server_status_icon" style="color:white;"></a>
                <div id="terminal" style="width:100%;"></div>
                <div id="terminal_input" class="form-group no-margin">
                    <div class="input-group">
                        <div class="input-group-addon terminal_input--prompt">{{ $server->name }}:</div>
                        <input type="text" class="form-control terminal_input--input">
                    </div>
                </div>
                <div id="terminalNotify" class="terminal-notify hidden">
                    <i class="fa fa-arrow-down"></i>
                </div>
            </div>
<div class="box-footer text-center">
                <button class="btn btn-start" data-attr="power" data-action="start"><i class="fa fa-power-off"> Start</i></button>                
                <button class="btn btn-restart hidden" data-attr="power" data-action="restart"><i class="fa fa-sync-alt"> Restart</i></button>
                <button class="btn btn-stop hidden" data-attr="power" data-action="stop"><i class="fa fa-stop-circle"> Stop</i></button>                
                <button class="btn btn-kill hidden" data-attr="power" data-action="kill"><i class="fa fa-plug"> Kill</i></button>         
            </div>
</div>


<div class="row">
    <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">CPU Usage</h3>
            </div>
            <div class="box-body">
                <canvas id="chart_cpu" style="max-height:300px;"></canvas>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">RAM Usage</h3>
            </div>
            <div class="box-body">
                <canvas id="chart_memory" style="max-height:300px;"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer-scripts')
    @parent
    {!! Theme::js('vendor/ansi/ansi_up.js') !!}
    {!! Theme::js('js/frontend/server.socket.js') !!}
    {!! Theme::js('vendor/mousewheel/jquery.mousewheel-min.js') !!}
    {!! Theme::js('js/frontend/console.js') !!}
    {!! Theme::js('vendor/chartjs/chart.min.js') !!}
    {!! Theme::js('vendor/jquery/date-format.min.js') !!}
	{!! Theme::js('js/frontend/serverlist.js') !!}
    @if($server->nest->name === 'Minecraft' && $server->nest->author === 'support@pterodactyl.io')
        {!! Theme::js('js/plugins/minecraft/eula.js') !!}
    @endif

@endsection