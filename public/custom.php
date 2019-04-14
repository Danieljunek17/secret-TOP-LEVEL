<?php
    header("Content-type: text/css; charset: UTF-8");
   $color1 = "#2bac60";
   $color2 = "#2bac60";
   $background = "https://i.imgur.com/jAzxKtg.jpg";
?>
.col-lg-6 {
    width: 25%!important;
}
:root {
    --main-bg-color3: #242628!important; 
}
* {
    border-radius: 0px!Important;
}
.skin-blue .main-header .navbar {
    background-color: <?php echo $color1; ?>!important;
}
.skin-blue .main-header .logo {
    background-color: <?php echo $color1; ?>!important;
    color: #fff;
    border-bottom: 0 solid transparent;
}
.skin-blue .main-header .logo:hover {
    background-color: <?php echo $color1; ?>!important;
    color: #fff;
    border-bottom: 0 solid transparent;
}
.skin-blue .main-header .navbar .sidebar-toggle:hover {
    background-color: <?php echo $color2; ?>!important;
}
.skin-blue .sidebar-menu>li.active>a {
    border-left-color: <?php echo $color1; ?>;
}
.skin-blue .main-header .navbar .nav>li>a:hover, .skin-blue .main-header .navbar .nav>li>a:active, .skin-blue .main-header .navbar .nav>li>a:focus, .skin-blue .main-header .navbar .nav .open>a, .skin-blue .main-header .navbar .nav .open>a:hover, .skin-blue .main-header .navbar .nav .open>a:focus, .skin-blue .main-header .navbar .nav>.active>a {
    background: var(--main-bg-color3);
    color: #f6f6f6;
}
.content-wrapper {
    min-height: 100%;
    background: url(<?php echo $background; ?>);
    z-index: 800;
	background-repeat: no-repeat;
    background-size: cover;
}
.h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, .h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
    font-weight: 400;
    line-height: 1;
    color: <?php echo $color2; ?>;
}
.content-header>h1 {
    margin: 0;
    font-size: 24px;
    color: <?php echo $color1; ?>!important;
    font-weight: 700;
}
.box {
    position: relative;
    border-radius: 3px;
    background: var(--main-bg-color3);
    border-top: 3px solid <?php echo $color1; ?>;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 20px 3px rgb(19, 19, 19)!important;
}
#terminal {
    font-family: 'Source Code Pro', monospace;
    color: rgb(223, 223, 223);
    background: var(--main-bg-color3);
    font-size: 12px;
    line-height: 14px;
    padding: 10px 10px 0;
    box-sizing: border-box;
    height: 500px;
    max-height: 500px;
    overflow-y: auto;
    overflow-x: hidden;
    border-radius: 5px 5px 0 0;
}
.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 0px solid #fff0;
    padding: 10px;
    background-color: var(--main-bg-color3);
}
.box.box-primary {
    border-top-color: <?php echo $color1; ?>;
}
.box-header.with-border {
    border-width: 0px;
}
.box-header {
    color: <?php echo $color1; ?>;
    display: block;
    padding: 10px;
    position: relative;
}
.main-footer {
    background: #191b22!important;
    padding: 15px!important;
    color: #e4e4e4!important;
    border-top: 4px solid <?php echo $color1; ?>!important;
}
a {
    color: <?php echo $color1; ?>;
}
a:hover {
    color: <?php echo $color2; ?>;
}
.bg-light-blue, .label-primary, .modal-primary .modal-body {
    background-color: <?php echo $color1; ?> !important;
}
.label-default {
    background-color: <?php echo $color1; ?> !important;
    color: #fff;
}
.breadcrumb>li+li:before {
    padding: 0 5px;
    color: <?php echo $color1; ?>;
    content: "/\00a0";
    font-weight: 700;
}
.content-header>.breadcrumb>li>a {
    color: #e2e2e2;
    text-decoration: none;
    display: inline-block;
}
.breadcrumb>.active {
    color: <?php echo $color1; ?>;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    color: <?php echo $color1; ?>;
}
.btn-primary {
    background-color: <?php echo $color1; ?>;
    border: 1.6px solid <?php echo $color1; ?>;
	transition: 1s!important;
}
.btn-primary:hover {
    background-color: <?php echo $color2; ?>;
    border-color: <?php echo $color2; ?>;
	transition: 1s;
}
p {
    line-height: 1.6 !important;
    color: #d2d2d2!important;
}
.form-control:focus {
    border-color: <?php echo $color1; ?>;
    box-shadow: none;
}
.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
    border-top: 0px solid #242628;
}
.table {
    font-size: 14px !important;
    color: <?php echo $color2; ?>;
}
.table-hover>tbody>tr:hover {
    background-color: #212223;
}
code {
    background-color: #1f2123;
    color: #596981;
    border-radius: 2px;
    padding-left: 4px;
    padding-right: 4px;
    line-height: 1.4;
    font-size: 85%;
    border: 1px solid rgba(0, 0, 0, .1);
    display: inline-block;
}
.table>tbody>tr.warning>td, .table>tbody>tr.warning>th, .table>tbody>tr>td.warning, .table>tbody>tr>th.warning, .table>tfoot>tr.warning>td, .table>tfoot>tr.warning>th, .table>tfoot>tr>td.warning, .table>tfoot>tr>th.warning, .table>thead>tr.warning>td, .table>thead>tr.warning>th, .table>thead>tr>td.warning, .table>thead>tr>th.warning {
    background-color: #2d2e2f;
    color: <?php echo $color1; ?>;
}
.table>tbody>tr.warning>td, .table>tbody>tr.warning>th, .table>tbody>tr>td.warning, .table>tbody>tr>th.warning, .table>tfoot>tr.warning>td, .table>tfoot>tr.warning>th, .table>tfoot>tr>td.warning, .table>tfoot>tr>th.warning, .table>thead>tr.warning>td, .table>thead>tr.warning>th, .table>thead>tr>td.warning:hover, .table>thead>tr>th.warning {
    background-color: #2d2e2f;
    color: <?php echo $color1; ?>;
}
.table-hover>tbody>tr.warning:hover>td, .table-hover>tbody>tr.warning:hover>th, .table-hover>tbody>tr:hover>.warning, .table-hover>tbody>tr>td.warning:hover, .table-hover>tbody>tr>th.warning:hover {
    background-color: #212223;
}
.dropdown-menu {
    box-shadow: none;
    border-color: <?php echo $color1; ?>;
    border-width: 3px;
    background-color: var(--main-bg-color3);
}
.dropdown-menu>li>a:hover {
    background-color: <?php echo $color1; ?>;
    color: #fff;
    transition: 0.3s;
}
.dropdown-menu>li>a {
    color: #efeded;
}
.bg-danger {
    background-color: #e628288f;
}
.table>tbody>tr.active>td, .table>tbody>tr.active>th, .table>tbody>tr>td.active, .table>tbody>tr>th.active, .table>tfoot>tr.active>td, .table>tfoot>tr.active>th, .table>tfoot>tr>td.active, .table>tfoot>tr>th.active, .table>thead>tr.active>td, .table>thead>tr.active>th, .table>thead>tr>td.active, .table>thead>tr>th.active {
    background-color: #212223;
}
.table-hover>tbody>tr.active:hover>td, .table-hover>tbody>tr.active:hover>th, .table-hover>tbody>tr:hover>.active, .table-hover>tbody>tr>td.active:hover, .table-hover>tbody>tr>th.active:hover {
    background-color: #212223;
}
.input-group .input-group-addon {
    border-radius: 0;
    border-color: #242628;
    background-color: #242628;
}
.form-control {
    display: block;
    width: 100%;
    /* height: 34px; */
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #fff;
    background-color: #242628;
    background-image: none;
    border: 1px solid #242628;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.input-group .form-control:not(:first-child):not(:last-child), .input-group-addon:not(:first-child):not(:last-child), .input-group-btn:not(:first-child):not(:last-child) {
    border-radius: 0;
    border-color: #1d1d1d;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: <?php echo $color1; ?>;
    color: white;
}
.select2-container--default.select2-container--focus .select2-selection--multiple, .select2-container--default .select2-search--dropdown .select2-search__field {
    border-color: <?php echo $color1; ?>;
}
.ace-chrome .ace_gutter {
    background: #242628!important;
    color: #fff!important;
    overflow: hidden;
}
.ace-chrome .ace_gutter-active-line {
    background-color: #242628!important;
}
.btn-default {
    background-color: #242628;
    color: #fff;
    border: 2px solid <?php echo $color1; ?>;
}
.btn-default:hover {
    background-color: <?php echo $color1; ?>;
    color: #fff;
    border: 2px solid <?php echo $color1; ?>;
}
.btn-default.disabled.focus, .btn-default.disabled:focus, .btn-default.disabled:hover, .btn-default[disabled].focus, .btn-default[disabled]:focus, .btn-default[disabled]:hover, fieldset[disabled] .btn-default.focus, fieldset[disabled] .btn-default:focus, fieldset[disabled] .btn-default:hover {
    background-color: <?php echo $color1; ?>;
    border-color: <?php echo $color1; ?>;
}
.btn-default:hover, .btn-default:active, .btn-default.hover {
    background-color: <?php echo $color1; ?>;
    color: #fff!important;
}
.btn-default.active, .btn-default:active, .open>.dropdown-toggle.btn-default {
    color: #fff;
    background-color: <?php echo $color1; ?>;
    border-color: <?php echo $color1; ?>;
}
.btn-default.active.focus, .btn-default.active:focus, .btn-default.active:hover, .btn-default:active.focus, .btn-default:active:focus, .btn-default:active:hover, .open>.dropdown-toggle.btn-default.focus, .open>.dropdown-toggle.btn-default:focus, .open>.dropdown-toggle.btn-default:hover {
    color: #333;
    background-color: <?php echo $color1; ?>;
    border-color: <?php echo $color1; ?>;
}
.breadcrumb>li {
    display: inline-block;
    color: #fff;
}
.box-header>.box-tools .dropdown-menu>li>a {
    color: #fff!important;
}
.sweet-alert {
    background-color: #242628;
    font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
    width: 478px;
    padding: 17px;
    border-radius: 5px;
    text-align: center;
    position: fixed;
    left: 50%;
    top: 50%;
    margin-left: -256px;
    margin-top: -200px;
    overflow: hidden;
    display: none;
    z-index: 99999;
    border-top: 4px solid <?php echo $color1; ?>;
}
.sweet-alert button {
    background-color: <?php echo $color1; ?>!important;
    color: white;
    border: 0;
    box-shadow: none;
    font-size: 17px;
    font-weight: 500;
    -webkit-border-radius: 4px;
    border-radius: 5px;
    padding: 10px 32px;
    margin: 26px 5px 0 5px;
    cursor: pointer;
    box-shadow: rgba(43, 172, 96, 0) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset!important;
}
.btn-primary:hover, .btn-primary:active, .btn-primary.hover {
    background-color: #24262800!important;
}
.btn-start {
    background-color: <?php echo $color1; ?>!important;
    border-color: <?php echo $color1; ?>!important;
    color: #fff;
    width: 125px;
    margin-top: 10px;
    transition: 0.3s;
}
.btn-start:hover {
    background-color: <?php echo $color1; ?>!important;
    border-color: <?php echo $color1; ?>!important;
    color: #fff;
    width: 125px;
    margin-top: 0px;
	margin-bottom: 10px!important;
}
.btn-restart {
    background-color: <?php echo $color1; ?>;
    border-color: <?php echo $color1; ?>;
    color: #fff;
    width: 125px;
    margin-top: 10px;
    transition: 0.3s;
}
.btn-restart:hover {
    background-color: <?php echo $color1; ?>;
    border-color: <?php echo $color1; ?>;
    color: #fff;
    width: 125px;
    margin-top: 0px;
	margin-bottom: 10px!important;
}
.btn-stop {
    background-color: #dd4b39;
    border-color: #dd4b39;
    color: #fff;
    width: 125px;
    margin-top: 10px;
    transition: 0.3s;
}
.btn-stop:hover{
    background-color: #dd4b39;
    border-color: #dd4b39;
    color: #fff;
    width: 125px;
    margin-top: 0px;
	margin-bottom: 10px!important;
}
.btn-kill {
    background-color: #dd4b39;
    border-color: #dd4b39;
    color: #fff;
    width: 125px;
    margin-top: 10px;
    transition: 0.3s;
}
.btn-kill:hover {
    background-color: #dd4b39;
    border-color: #dd4b39;
    color: #fff;
    width: 125px;
    margin-top: 0px;
	margin-bottom: 10px!important;
}
.btn.focus, .btn:focus, .btn:hover {
    color: #fff;
    text-decoration: none;
}
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #d8d8d8;
    background-color: #fff;
}
.form-control:not(select) {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: rgb(27, 26, 26) !important;
    color: #fff;
}
.select2-container--default .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto;
    color: #242628;
}
.sweet-alert .sa-icon.sa-success::before, .sweet-alert .sa-icon.sa-success::after {
    content: '';
    -webkit-border-radius: 40px;
    border-radius: 40px;
    border-radius: 50%;
    position: absolute;
    width: 60px;
    height: 120px;
    background: transparent;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
@media only screen and (max-width: 767px) {
	.col-lg-6 {
		width: 100%!important;
	}
}
.sweet-alert .sa-icon.sa-success .sa-fix {
    width: 5px;
    height: 90px;
    background-color: transparent!important;
    position: absolute;
    left: 28px;
    top: 8px;
    z-index: 1;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}
tr:hover + tr.server-description{
	background-color: #212223!important;
}
.ace-chrome {
    background-color: #1e2123!important;
    color: black!important;
}
.btn-default {
    background-color: #242628!important;
    color: #fff!important;
    border: 2px solid <?php echo $color1; ?>!important;
}
.btn-default {
    background-color: #242628!important;
    color: #fff!important;
    border: 2px solid <?php echo $color1; ?>!important;
    transition: 1s!important;
}
.btn-default:hover {
    background-color: <?php echo $color1; ?>!important;
    color: #fff!important;
    border: 2px solid <?php echo $color1; ?>!important;
    transition: 1s!important;
}
.nav-tabs-custom>.nav-tabs>li.active>a {
    border-top-color: transparent!important;
    border-left-color: #1e2123!important;
    border-right-color: #171b1e!important;
}
.nav-tabs-custom>.nav-tabs>li.active {
    border-top-color: <?php echo $color1; ?>!Important;
}
.nav-tabs-custom>.nav-tabs>li.active>a, .nav-tabs-custom>.nav-tabs>li.active:hover>a {
    background-color: #1e2123!Important;
    color: #fff!Important;
}
.nav-tabs-custom {
    margin-bottom: 20px!Important;
    background: #1e2123!Important;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1)!Important;
    border-radius: 3px!Important;
}
.nav-tabs-custom>.nav-tabs>li>a {
    color: #e2e2e2!important;
    border-radius: 0;
}
.nav-tabs-custom > .nav-tabs > li:hover {
    border-top-color: <?php echo $color1; ?>;
}
.bg-gray {
    color: <?php echo $color1; ?>;
    background-color: #1e2123 !important;
    transition: 0.5s;
}
.select2-container--default.select2-container--focus .select2-selection--multiple, .select2-container--default .select2-search--dropdown .select2-search__field {
    border-color: <?php echo $color1; ?> !important;
}
.select2-container--default .select2-selection--multiple {
    background-color: #1e2123!important;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: text;
}
.select2-container--default .select2-selection--multiple {
    border: 1px solid #171b1e!important;
    border-radius: 0;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #fff;
    line-height: 28px;
}
.select2-container--default .select2-selection--single, .select2-selection .select2-selection--single {
    border: 1px solid #0f1418!important;
    border-radius: 0;
    padding: 6px 12px;
    height: 34px;
}

.select2-container--default .select2-selection--single {
    background-color: #171b1e!Important;
    border: 1px solid #aaa;
    border-radius: 4px;
}
input {
    background-color: #171b1e00!Important;
    -webkit-rtl-ordering: logical;
    cursor: text;
    padding: 1px;
    border-width: 2px;
    border-style: inset;
    border-color: initial;
    border-image: initial;
}
.checkbox label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 17px;
    height: 17px;
    left: 0;
    top: 2.5px;
    margin-left: -20px;
    border: 1px solid #151719!important;
    border-radius: 3px;
    background-color: #151719!important;
    -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
    -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
    transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
}
.checkbox-primary input[type="checkbox"]:checked + label::before {
    background-color: <?php echo $color1; ?>!important;
    border-color: <?php echo $color1; ?>!important;
    border-radius: 0px;
}
.login-page {
    background: url(<?php echo $background; ?>);
    background-repeat: no-repeat;
    background-size: cover;
}
.skin-blue .sidebar-menu>li.header {
    color: #ffffff;
    background: <?php echo $color1; ?>;
}
.sidebar {
    padding-bottom: 10px;
    border-right: 3px solid <?php echo $color1; ?>;
}
.btn-danger:hover {
    color: #fff;
    background-color: #c9302c!important;
    border-color: #ac2925;
}
display: inline-block;
    position: absolute;
    width: 16px;
    height: 16px;
    left: 0;
    top: 0;
    margin-left: -20px;
    padding-left: 3px;
    padding-top: 1px;
    font-size: 11px;
    color: #555555;
}
}

@media (max-width: 991px)
.content-header>.breadcrumb {
    position: relative;
    margin-top: 5px;
    top: 0;
    right: 0;
    float: none;
    background: #242628!important;
    padding-left: 10px;
}
}

tr:hover + tr.server-description {
    background-color: #212122 !important;
}
#letter1:hover > div#top-div2 {
    /* code */
}
.content-header>h1 {
    margin: 0;
    font-size: 24px;
    color: <?php echo $color1; ?>!important;
    font-weight: 700;
    background: #232528!important;
    padding: 10px;
    box-shadow: 0px 0px 100px 0px rgba(36,38,40,1);
    border-top: 3px solid <?php echo $color1; ?>;
}
.content-header>.breadcrumb {
    float: right;
    background: transparent;
    margin-top: 0;
    margin-bottom: 0;
    font-size: 12px;
    padding: 7px 5px;
    position: absolute;
    top: 15px;
    right: 10px;
    border-radius: 2px;
    margin: 12px;
}
tr:hover + tr.server-description {
    background-color: #232528!important;
}
tr.dynamic-update {
    background-color: #232528!important;
}
.table-hover>tbody>tr:hover {
    background-color: #232528!important;
}
.table>thead>tr>th {
    border-bottom: 2px solid <?php echo $color1; ?>;
}
.btn-success {
	color: #fff!important;
    background-color: <?php echo $color1; ?>;
    border: 1.6px solid <?php echo $color1; ?>;
}
.btn-success:hover {
    background-color: <?php echo $color1; ?>;
    border-color: <?php echo $color1; ?>;
}
.btn-success:hover, .btn-success:active, .btn-success.hover {
    background-color: <?php echo $color1; ?>;
}
.btn-success.active, .btn-success:active, .open>.dropdown-toggle.btn-success {
    color: #fff;
    background-color: <?php echo $color1; ?>;
    border-color: <?php echo $color1; ?>;
}
.btn-success.focus, .btn-success:focus {
    color: #fff;
    background-color: <?php echo $color1; ?>;
    border-color: <?php echo $color1; ?>;
}
.sweet-alert h2 {
    color: <?php echo $color1; ?>;
    font-size: 30px;
    text-align: center;
    font-weight: 600;
    text-transform: none;
    position: relative;
    margin: 25px 0;
    padding: 0;
    line-height: 40px;
    display: block;
}
.sweet-alert input:focus {
    outline: 0;
    box-shadow: 0 0 3px <?php echo $color1; ?>!important;
    border: 1px solid <?php echo $color1; ?>!important;
}
.sweet-alert .sa-icon.sa-success {
    border-color: <?php echo $color1; ?>!important;
}
.sweet-alert .sa-icon.sa-success .sa-line {
    height: 5px;
    background-color: <?php echo $color1; ?>!important;
    display: block;
    border-radius: 2px;
    position: absolute;
    z-index: 2;
}
.sweet-alert .sa-icon.sa-success .sa-placeholder {
    width: 80px;
    height: 80px;
    border: 4px solid rgba(0, 0, 0, 0)!important;
    -webkit-border-radius: 40px;
    border-radius: 40px;
    border-radius: 50%;
    box-sizing: content-box;
    position: absolute;
    left: -4px;
    top: -4px;
    z-index: 2;
}
.skin-blue .main-header .navbar .nav>li>a {
    color: #fff;
    transition: 1s!important;
}
.sidebar-menu>li>a>.fa, .sidebar-menu>li>a>.glyphicon, .sidebar-menu>li>a>.ion {
    width: 20px;
    font-weight: 600;
    color: <?php echo $color1; ?>;
}
.box.box-success {
    border-top-color: <?php echo $color1; ?>;
}
.info-slider-holder,
.website-logo {
    position: absolute;
    text-align: center;
    left: 0
}
.website-logo {
    z-index: 1000;
    top: 60px;
    width: 100%;
    max-width: 550px
}
.website-logo img {
    height: 96px
}
.info-slider-holder {
    display: inline-block;
    top: 0;
    width: 550px;
    min-height: 700px;
    height: 100%;
    overflow: hidden;
    background-color: <?php echo $color1; ?>;
    padding: 140px 60px 60px;
    z-index: 999;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transform-style: preserve-3d
}
.info-slider-holder .info-holder {
    position: relative;
    top: 70%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%)
}
.info-slider-holder .bg-animation {
    position: absolute;
    opacity: 100;
    left: 0;
    top: -20%;
    width: 100%;
    height: 70%;
    background: #232528;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    -webkit-transform: skewY(-10deg);
    -moz-transform: skewY(-10deg);
    -ms-transform: skewY(-10deg);
    transform: skewY(-10deg);
    z-index: -1;
}
.info-slider-holder h6 {
    font-size: 16px;
    font-family: Rubik, sans-serif;
    color: #fff;
    font-weight: 500;
    margin-bottom: 20px
}
.info-slider-holder .bold-title {
    font-size: 31px;
    color: #fff;
    font-weight: 700;
    line-height: 38px;
    margin-bottom: 70px
}
.info-slider-holder .bold-title span {
    font-size: 31px;
    color: #232528;
    font-weight: 700
}
@media (min-height: 700px) {
    .info-slider-holder,
    .website-logo {
        position: fixed
    }
}
.form-holder {
    margin-left: 550px
}
.form-holder .menu-holder {
    text-align: right;
    padding: 22px 30px
}
.form-holder .menu-holder ul.main-links li a.sign-button {
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 8px 20px;
    border-radius: 10px;
    background-color: #3d3d3d;
    text-decoration: none;
    margin-left: 10px;
    -webkit-box-shadow: 0 8px 18px rgba(0, 0, 0, .08);
    box-shadow: 0 8px 18px rgba(0, 0, 0, .08);
    -webkit-transition: all .3s ease 0s;
    transition: all .3s ease 0s
}
.form-holder .signin-signup-form {
    text-align: center;
    padding: 100px 40px 40px
}
.signin-signup-form .form-items {
    display: inline-block;
    width: 100%;
    max-width: 410px
}
.signin-signup-form .row div[class^=col-]:first-child {
    padding-right: 5px
}
.signin-signup-form .row div[class^=col-]:last-child {
    padding-left: 5px
}
.signin-signup-form .row {
    margin-right: -300px;
    margin-left: -300px;
}
.pterodactyl-login-button--main {
    background: rgb(27, 26, 26);
    border: 1px solid #1b1a1a;
    border-radius: 2px;
    color: #fff;
    width: 100px;
    margin-left: -50px;
	transition: 0.3s!important;
}
.pterodactyl-login-button--main:hover {
    background: #000;
    border: 1px solid #000;
    border-radius: 2px;
    color: #fff;
    width: 100px;
    margin-left: -50px;
}
.pterodactyl-login-button--left {
    background: rgb(27, 26, 26);
    border: 1px solid rgb(27, 26, 26);
    border-radius: 2px;
    color: #fff;
    width: 39px;
    margin-right: -300px;
    margin-top: 0px;
	transition: 0.3s!important;
}
.pterodactyl-login-button--left:hover {
    background: #000;
    border: 1px solid #000;
    border-radius: 2px;
    color: #fff;
    width: 39px;
    margin-right: -300px;
    margin-top: 0px;
}
.pterodactyl-login-box {
    background: #fff0;
    border-radius: 3px;
    padding: 20px;
    -webkit-box-shadow: 0px 0px 100px 0px rgba(36,38,40,1);
    -moz-box-shadow: 0px 0px 100px 0px rgba(36,38,40,1);
    box-shadow: 0px 0px 100px 0px rgba(36, 38, 40, 0);
}
::placeholder {
    color: #fff!important;
}
.signin-signup-form .form-title {
    color: #ffffff;
    font-weight: 300;
    font-size: 19px;
    margin-bottom: -0px;
    text-align: center;
    background: #232528!important;
    margin-left: -43px;
    margin-right: -43px;
    padding-left: 10px;
    padding-bottom: 10px;
    box-shadow: 0px 0px 100px 0px rgba(36,38,40,1);
    border-top: 3px solid <?php echo $color1; ?>;
}
.btn-danger {
    background-color: #dd4b39!Important;
    border-color: #dd4b39;
	transition: 0.3s;
}
.alert-info {
    color: #ffffff !important;
    background: #408fec5c !important;
    border: 0px solid #1055a5;
    border-top: 2px solid #408fec;
}
.alert-danger {
    color: #ffffff !important;
    background: #d64242e0 !important;
    border-top: 2px solid #d64242!important;
    border: 0px;
}
.alert-warning {
    color: #ffffff !important;
    background: #fa96365c !important;
    border: 1px solid #fa963600;
    border-top: 2px solid #fa9636;
}
.alert-success {
    color: #ffffff !important;
    background: #2bac60 !important;
    border: 0px solid #2b5f33;
    border-top: 2px solid #51b060;
}
.btn.active, .btn.active.focus {
    background-color: #242628;
    border: 1.6px solid <?php echo $color1; ?>!important;
}
.modal-content {
    position: relative;
    background-color: #242628;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #999;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
    box-shadow: 0 3px 9px rgba(0,0,0,.5);
}
.modal-header {
    border-bottom-color: #242628;
}
.ace-chrome {
    background-color: #fff!important;
}
.modal-footer {
    border-top-color: #242628;
}
.bg-blue {
    background-color: #242628 !important;
    border: 4px solid <?php echo $color1; ?>;
}
.info-box-icon {
    border-top-left-radius: 2px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 2px;
    display: block;
    float: left;
    height: 86px;
    width: 90px;
    text-align: center;
    font-size: 45px;
    line-height: 90px;
    background: <?php echo $color1; ?>;
}
.box.box-info {
    border-top-color: <?php echo $color1; ?>!important;
}
.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #242628!Important;
    padding: 10px;
    background-color: #242628!important;
}
.text-success {
    color: #2bac60;
}
.box {
    position: relative;
    border-radius: 3px;
    background: #242628!important;
    border-top: 3px solid #242628;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}
.progress-bar-aqua, .progress-bar-info {
    background-color: <?php echo $color1; ?>!important;
}
.btn-info {
    background-color: <?php echo $color1; ?>!important;
    border: 1.6px solid <?php echo $color1; ?>!important;
}
.bg-black {
    background-color: #242628 !important;
    border-top: 3px solid <?php echo $color1; ?>;
}

@media only screen and (max-width: 1200px) {
  .info-slider-holder .bg-animation {
    display:none;
  }
  .info-slider-holder {
    display:none;
  }
.form-holder {
    margin-left: 0%;
}
.signin-signup-form .row {
    margin-right: 0%;
    margin-left: 0%;
}
.col-xs-offset-4 {
    margin-left: 0%;
}
.website-logo img {
    display: none;
}
}
@media (min-width: 992px)
.col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
    float: left;
}
.dark-edition .card {
    background: #202940;
}
.card {
	position: relative;
	display: flex;
	flex-direction: column;
	min-width: 0;
	word-wrap: break-word;
	background-color: #fff;
	background-clip: border-box;
	border: 1px solid #eee;
	border-radius: .25rem
}
.card>hr {
	margin-right: 0;
	margin-left: 0
}
.card>.list-group:first-child .list-group-item:first-child {
	border-top-left-radius: .25rem;
	border-top-right-radius: .25rem
}
.card>.list-group:last-child .list-group-item:last-child {
	border-bottom-right-radius: .25rem;
	border-bottom-left-radius: .25rem
}
.card-body {
	flex: 1 1 auto;
	padding: 1.25rem
}
.card-title {
	margin-bottom: .75rem
}
.card-subtitle {
	margin-top: -.375rem
}
.card-subtitle, .card-text:last-child {
	margin-bottom: 0
}
.card-link:hover {
	text-decoration: none
}
.card-link+.card-link {
	margin-left: 1.25rem
}
.card-header {
	padding: .75rem 1.25rem;
	margin-bottom: 0;
	background-color: #fff;
	border-bottom: 1px solid #eee
}
.card-header:first-child {
	border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
}
.card-header+.list-group .list-group-item:first-child {
	border-top: 0
}
.card-footer {
	padding: .75rem 1.25rem;
	background-color: #fff;
	border-top: 1px solid #eee
}
.card-footer:last-child {
	border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
}
.card-header-tabs {
	margin-bottom: -.75rem;
	border-bottom: 0
}
.card-header-pills, .card-header-tabs {
	margin-right: -.625rem;
	margin-left: -.625rem
}
.card-img-overlay {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	padding: 1.25rem
}
.card-img {
	width: 100%;
	border-radius: calc(.25rem - 1px)
}
.card-title, .card-title a, .footer-big h4, .footer-big h4 a, .footer-big h5, .footer-big h5 a, .footer-brand, .footer-brand a, .info-title, .info-title a, .media .media-heading, .media .media-heading a, .title, .title a {
	color: #3c4858;
	text-decoration: none
}
.card-blog .card-title {
	font-weight: 700
}
h2.title {
	margin-bottom: 2.142rem
}
.card-stats .card-header+.card-footer {
    border-top: 4px solid <?php echo $color1; ?>!important;
    margin-top: 20px;
}
.card-description, .description, .footer-big p {
	color: #999
}
.card {
    border: 0;
    margin-bottom: 30px;
    margin-top: 30px;
    border-radius: 6px;
    color: #333;
    background: #191b22;
    width: 100%;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);
}
.card .card-category:not([class*=text-]) {
	color: #999
}
.card .card-category {
	margin-top: 10px
}
.card .card-category .material-icons {
	position: relative;
	top: 8px;
	line-height: 0
}
.card .form-check {
	margin-top: 5px
}
.card .card-title {
	margin-top: .625rem
}
.card .card-title:last-child {
	margin-bottom: 0
}
.card.no-shadow .card-header-image, .card.no-shadow .card-header-image img {
	box-shadow: none!important
}
.card .card-body, .card .card-footer {
	padding: .9375rem 1.875rem
}
.card .card-body+.card-footer {
	padding-top: 0;
	border: 0;
	border-radius: 6px
}
.card .card-footer {
	display: flex;
	align-items: center;
	background-color: transparent;
	border: 0
}
.card .card-footer .author, .card .card-footer .stats {
	display: inline-flex
}
.card .card-footer .stats {
	color: #999
}
.card .card-footer .stats .material-icons {
	position: relative;
	top: -10px;
	margin-right: 3px;
	margin-left: 3px;
	font-size: 18px
}
.card.bmd-card-raised {
	box-shadow: 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12), 0 5px 5px -3px rgba(0, 0, 0, .2)
}
@media (min-width:992px) {
	.card.bmd-card-flat {
		box-shadow: none
	}
}
.card .card-header {
	border-bottom: none;
	background: transparent
}
.card .card-header .title {
	color: #fff
}
.card .card-header .nav-tabs {
	padding: 0
}
.card .card-header.card-header-image {
	position: relative;
	padding: 0;
	z-index: 1;
	margin-left: 15px;
	margin-right: 15px;
	margin-top: -30px;
	border-radius: 6px
}
.card .card-header.card-header-image img {
	width: 100%;
	border-radius: 6px;
	pointer-events: none;
	box-shadow: 0 5px 15px -8px rgba(0, 0, 0, .24), 0 8px 10px -5px rgba(0, 0, 0, .2)
}
.card .card-header.card-header-image .card-title {
	position: absolute;
	bottom: 15px;
	left: 15px;
	color: #fff;
	font-size: 1.125rem;
	text-shadow: 0 2px 5px rgba(33, 33, 33, .5)
}
.card .card-header.card-header-image .colored-shadow {
	transform: scale(.94);
	top: 12px;
	filter: blur(12px);
	position: absolute;
	width: 100%;
	height: 100%;
	background-size: cover;
	z-index: -1;
	transition: opacity .45s;
	opacity: 0
}
.card .card-header.card-header-image.no-shadow {
	box-shadow: none
}
.card .card-header.card-header-image.no-shadow.shadow-normal {
	box-shadow: 0 16px 38px -12px rgba(0, 0, 0, .56), 0 4px 25px 0 rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2)
}
.card .card-header.card-header-image.no-shadow .colored-shadow {
	display: none!important
}
.card.bg-primary, .card .card-header-primary .card-icon, .card .card-header-primary .card-text, .card .card-header-primary:not(.card-header-icon):not(.card-header-text), .card.card-rotate.bg-primary .back, .card.card-rotate.bg-primary .front {
	background: linear-gradient(60deg, #ab47bc, #8e24aa)
}
.card.bg-info, .card .card-header-info .card-icon, .card .card-header-info .card-text, .card .card-header-info:not(.card-header-icon):not(.card-header-text), .card.card-rotate.bg-info .back, .card.card-rotate.bg-info .front {
	background: linear-gradient(60deg, #26c6da, #00acc1)
}
.card.bg-success, .card .card-header-success .card-icon, .card .card-header-success .card-text, .card .card-header-success:not(.card-header-icon):not(.card-header-text), .card.card-rotate.bg-success .back, .card.card-rotate.bg-success .front {
	background: linear-gradient(60deg, #66bb6a, #43a047)
}
.card.bg-danger, .card .card-header-danger .card-icon, .card .card-header-danger .card-text, .card .card-header-danger:not(.card-header-icon):not(.card-header-text), .card.card-rotate.bg-danger .back, .card.card-rotate.bg-danger .front {
	background: linear-gradient(60deg, #ef5350, #e53935)
}
.card.bg-rose, .card .card-header-rose .card-icon, .card .card-header-rose .card-text, .card .card-header-rose:not(.card-header-icon):not(.card-header-text), .card.card-rotate.bg-rose .back, .card.card-rotate.bg-rose .front {
	background: linear-gradient(60deg, #ec407a, #d81b60)
}
.card .card-header-primary .card-icon, .card .card-header-primary .card-text, .card .card-header-primary:not(.card-header-icon):not(.card-header-text) {
	box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(156, 39, 176, .4)
}
.card .card-header-danger .card-icon, .card .card-header-danger .card-text, .card .card-header-danger:not(.card-header-icon):not(.card-header-text) {
	box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(244, 67, 54, .4)
}
.card .card-header-rose .card-icon, .card .card-header-rose .card-text, .card .card-header-rose:not(.card-header-icon):not(.card-header-text) {
	box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(233, 30, 99, .4)
}
.card .card-header-warning .card-icon, .card .card-header-warning .card-text, .card .card-header-warning:not(.card-header-icon):not(.card-header-text) {
	box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgb(31, 39, 61)
}
.card .card-header-info .card-icon, .card .card-header-info .card-text, .card .card-header-info:not(.card-header-icon):not(.card-header-text) {
	box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(0, 188, 212, .4)
}
.card .card-header-success .card-icon, .card .card-header-success .card-text, .card .card-header-success:not(.card-header-icon):not(.card-header-text) {
	box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(76, 175, 80, .4)
}
.card[class*=bg-], .card[class*=bg-] .card-title, .card[class*=bg-] .card-title a, .card[class*=bg-] .icon i, .card [class*=card-header-], .card [class*=card-header-] .card-title, .card [class*=card-header-] .card-title a, .card [class*=card-header-] .icon i {
	color: #fff
}
.card[class*=bg-] .icon i, .card [class*=card-header-] .icon i {
	border-color: hsla(0, 0%, 100%, .25)
}
.card[class*=bg-] .author a, .card[class*=bg-] .card-category, .card[class*=bg-] .card-description, .card[class*=bg-] .stats, .card [class*=card-header-] .author a, .card [class*=card-header-] .card-category, .card [class*=card-header-] .card-description, .card [class*=card-header-] .stats {
	color: hsla(0, 0%, 100%, .8)
}
.card[class*=bg-] .author a:active, .card[class*=bg-] .author a:focus, .card[class*=bg-] .author a:hover, .card [class*=card-header-] .author a:active, .card [class*=card-header-] .author a:focus, .card [class*=card-header-] .author a:hover {
	color: #fff
}
.card .author .avatar {
	width: 30px;
	height: 30px;
	overflow: hidden;
	border-radius: 50%;
	margin-right: 5px
}
.card .author a {
	color: #3c4858;
	text-decoration: none
}
.card .author a .ripple-container {
	display: none
}
.card .card-category-social .fa {
	font-size: 24px;
	position: relative;
	margin-top: -4px;
	top: 2px;
	margin-right: 5px
}
.card .card-category-social .material-icons {
	position: relative;
	top: 5px
}
.card[class*=bg-], .card[class*=bg-] .card-body {
	border-radius: 6px
}
.card[class*=bg-] .card-body h1 small, .card[class*=bg-] .card-body h2 small, .card[class*=bg-] .card-body h3 small, .card[class*=bg-] h1 small, .card[class*=bg-] h2 small, .card[class*=bg-] h3 small {
	color: hsla(0, 0%, 100%, .8)
}
.card .card-stats {
	background: transparent;
	display: flex
}
.card .card-stats .author, .card .card-stats .stats {
	display: inline-flex
}
.card {
	box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .14)
}
.card .table tr:first-child td {
	border-top: none
}
.card .card-title {
	margin-top: 0;
	margin-bottom: 3px
}
.card .card-body {
	padding: .9375rem 20px;
	position: relative
}
.card .card-body .form-group {
	margin: 8px 0 0
}
.card .card-header {
	z-index: 3!important
}
.card .card-header .card-title {
	margin-bottom: 3px
}
.card .card-header .card-category {
	margin: 0
}
.card .card-header.card-header-text {
	display: inline-block
}
.card .card-header.card-header-text:after {
	content: "";
	display: table
}
.card .card-header.card-header-icon i, .card .card-header.card-header-text i {
	width: 33px;
	height: 33px;
	text-align: center;
	line-height: 33px
}
.card .card-header.card-header-icon .card-title, .card .card-header.card-header-text .card-title {
    margin-top: 15px;
    color: #b7b7b7;
}
.card .card-header.card-header-icon h4, .card .card-header.card-header-text h4 {
	font-weight: 300
}
.card .card-header.card-header-tabs .nav-tabs {
	background: transparent;
	padding: 0
}
.card .card-header.card-header-tabs .nav-tabs-title {
	float: left;
	padding: 10px 10px 10px 0;
	line-height: 24px
}
.card.card-plain .card-header.card-header-icon+.card-body .card-category, .card.card-plain .card-header.card-header-icon+.card-body .card-title {
	margin-top: -20px
}
.card .card-actions {
	position: absolute;
	z-index: 1;
	top: -50px;
	width: calc(100% - 30px);
	left: 17px;
	right: 17px;
	text-align: center
}
.card .card-actions .card-header {
	padding: 0;
	min-height: 160px
}
.card .card-actions .btn {
	padding-left: 12px;
	padding-right: 12px
}
.card .card-actions .fix-broken-card {
	position: absolute;
	top: -65px
}
.card.card-chart .card-footer i:nth-child(1n+2) {
	width: 18px;
	text-align: center
}
.card.card-chart .card-category {
	margin: 0
}
.card .card-body+.card-footer, .card .card-footer {
	padding: 0;
	padding-top: 10px;
	margin: 0 15px 10px;
	border-radius: 0;
	justify-content: space-between;
	align-items: center
}
.card .card-body+.card-footer h6, .card .card-footer h6 {
	width: 100%
}
.card .card-body+.card-footer .stats, .card .card-footer .stats {
	color: #999;
	font-size: 12px;
	line-height: 22px
}
.card .card-body+.card-footer .stats .card-category, .card .card-footer .stats .card-category {
	padding-top: 7px;
	padding-bottom: 7px;
	margin: 0
}
.card .card-body+.card-footer .stats .material-icons, .card .card-footer .stats .material-icons {
	position: relative;
	top: 3px;
	font-size: 16px
}
.card [class*=card-header-] {
	margin: 0 15px;
	padding: 0;
	position: relative
}
.card [class*=card-header-] .card-title+.card-category {
	color: hsla(0, 0%, 100%, .8)
}
.card [class*=card-header-] .card-title+.card-category a {
	color: #fff
}
.card [class*=card-header-]:not(.card-header-icon):not(.card-header-text):not(.card-header-image) {
	border-radius: 3px;
	margin-top: -20px;
	padding: 15px
}
.card [class*=card-header-] .card-icon, .card [class*=card-header-] .card-text {
	border-radius: 3px;
	background-color: <?php echo $color1; ?>;
	padding: 15px;
	margin-top: -20px;
	margin-right: 15px;
	float: left
}
.card [class*=card-header-] .card-text {
	float: none;
	display: inline-block;
	margin-right: 0
}
.card [class*=card-header-] .card-text .card-title {
	color: #fff;
	margin-top: 0
}
.card [class*=card-header-] .ct-chart .card-title {
	color: #fff
}
.card [class*=card-header-] .ct-chart .card-category {
	margin-bottom: 0;
	color: hsla(0, 0%, 100%, .62)
}
.card [class*=card-header-] .ct-chart .ct-label {
	color: hsla(0, 0%, 100%, .7)
}
.card [class*=card-header-] .ct-chart .ct-grid {
	stroke: hsla(0, 0%, 100%, .2)
}
.card [class*=card-header-] .ct-chart .ct-series-a .ct-bar, .card [class*=card-header-] .ct-chart .ct-series-a .ct-line, .card [class*=card-header-] .ct-chart .ct-series-a .ct-point, .card [class*=card-header-] .ct-chart .ct-series-a .ct-slice-donut {
	stroke: hsla(0, 0%, 100%, .8)
}
.card [class*=card-header-] .ct-chart .ct-series-a .ct-area, .card [class*=card-header-] .ct-chart .ct-series-a .ct-slice-pie {
	fill: hsla(0, 0%, 100%, .4)
}
.card [class*=card-header-] .ct-chart .ct-series-a .ct-bar {
	stroke-width: 10px
}
.card [class*=card-header-] .ct-chart .ct-point {
	stroke-width: 10px;
	stroke-linecap: round
}
.card [class*=card-header-] .ct-chart .ct-line {
	fill: none;
	stroke-width: 4px
}
.card [data-header-animation=true] {
	transform: translateZ(0);
	transition: all .3s cubic-bezier(.34, 1.61, .7, 1)
}
.card:hover [data-header-animation=true] {
	transform: translate3d(0, -50px, 0)
}
.card .map {
	height: 280px;
	border-radius: 6px;
	margin-top: 15px
}
.card .map.map-big {
	height: 420px
}
.card .card-body.table-full-width {
	padding: 0
}
.card .card-plain .card-header-icon {
	margin-right: 15px!important
}
.table-sales {
	margin-top: 40px
}
.iframe-container {
	width: 100%
}
.iframe-container iframe {
	width: 100%;
	height: 600px;
	border: 0;
	box-shadow: 0 16px 38px -12px rgba(0, 0, 0, .56), 0 4px 25px 0 rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2)
}
.card-wizard .nav.nav-pills .nav-item {
	margin: 0
}
.card-wizard .nav.nav-pills .nav-item .nav-link {
	padding: 6px 15px!important
}
.card-wizard .nav-pills:not(.flex-column) .nav-item+.nav-item:not(:first-child) {
	margin-left: 0
}
.card-wizard .nav-item .nav-link.active, .card-wizard .nav-item .nav-link:focus, .card-wizard .nav-item .nav-link:hover {
	background-color: inherit!important;
	box-shadow: none!important
}
.card-wizard .input-group-text {
	padding: 6px 15px 0!important
}
.card-wizard .card-footer {
	border-top: none!important
}
.card-chart .card-body+.card-footer, .card-product .card-body+.card-footer {
	border-top: 1px solid #eee
}
.card-product .price {
	color: inherit
}
.card-collapse {
	margin-bottom: 15px
}
.card-collapse .card .card-header a[aria-expanded=true] {
	color: #e91e63
}
.card-stats .card-header.card-header-icon, .card-stats .card-header.card-header-text {
	text-align: right
}
.card-stats .card-header .card-icon+.card-category, .card-stats .card-header .card-icon+.card-title {
	padding-top: 10px
}
.card-stats .card-header.card-header-icon .card-category, .card-stats .card-header.card-header-icon .card-title, .card-stats .card-header.card-header-text .card-category, .card-stats .card-header.card-header-text .card-title {
	margin: 0
}
.card-stats .card-header .card-category {
	margin-bottom: 0;
	margin-top: 0
}
.card-stats .card-header .card-category:not([class*=text-]) {
	color: #999;
	font-size: 14px
}
.card-stats .card-header+.card-footer {
	border-top: 1px solid #eee;
	margin-top: 20px
}
.card-stats .card-header.card-header-icon i {
	font-size: 36px;
	line-height: 56px;
	width: 56px;
	height: 56px;
	text-align: center
}
.card-stats .card-body {
	text-align: right
}
.card-profile {
	margin-top: 30px;
	text-align: center
}
.card-profile .card-avatar {
	margin: -50px auto 0;
	border-radius: 50%;
	overflow: hidden;
	padding: 0;
	box-shadow: 0 16px 38px -12px rgba(0, 0, 0, .56), 0 4px 25px 0 rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2)
}
.card-profile .card-avatar+.card-body {
	margin-top: 15px
}
.card-profile .card-avatar img {
	width: 100%;
	height: auto
}
.card-profile .card-body+.card-footer {
	margin-top: -15px
}
.card-profile .card-footer .btn.btn-just-icon {
	font-size: 20px;
	padding: 12px;
	line-height: 1em
}
.card-profile.card-plain .card-avatar {
	margin-top: 0
}
.card-profile .card-header:not([class*=card-header-]) {
	background: transparent
}
.card-profile .card-avatar {
	max-width: 130px;
	max-height: 130px
}
.card-plain {
	background: transparent;
	box-shadow: none
}
.card-plain .card-header:not(.card-avatar) {
	margin-left: 0;
	margin-right: 0
}
.card-plain .card-body {
	padding-left: 5px;
	padding-right: 5px
}
.dark-edition .card {
	background: #202940
}
.dark-edition .card .card-header.card-header-icon .card-title, .dark-edition .card .card-header.card-header-text .card-title {
	color: #606477
}
.dark-edition .card .card-header.card-header-tabs .nav-tabs-title {
	color: hsla(0, 0%, 100%, .8)
}
.dark-edition .card .card-body {
	color: #8b92a9
}
.dark-edition .card .card-body .card-category+.card-title {
	color: #fff
}
.dark-edition .card .card-body .card-category, .dark-edition .card .card-body .card-title {
	color: #8b92a9
}
.dark-edition .card .card-body .card-description {
	color: #606477
}
.dark-edition .card .card-body+.card-footer .stats, .dark-edition .card .card-footer .stats {
	color: #a9afbbd1
}
.dark-edition .card .card-footer .stats a {
	-webkit-background-clip: text;
	background-clip: text;
	background-image: linear-gradient(60deg, #7b1fa2, #913f9e);
	color: transparent
}
.dark-edition .card.bg-warning, .dark-edition .card .card-header-warning .card-icon, .dark-edition .card .card-header-warning .card-text, .dark-edition .card .card-header-warning:not(.card-header-icon):not(.card-header-text), .dark-edition .card.card-rotate.bg-warning .back, .dark-edition .card.card-rotate.bg-warning .front {
	background: #863897;
}
.dark-edition .card.bg-success, .dark-edition .card .card-header-success .card-icon, .dark-edition .card .card-header-success .card-text, .dark-edition .card .card-header-success:not(.card-header-icon):not(.card-header-text), .dark-edition .card.card-rotate.bg-success .back, .dark-edition .card.card-rotate.bg-success .front {
	background: linear-gradient(60deg, #288c6c, #4ea752)
}
.dark-edition .card.bg-danger, .dark-edition .card .card-header-danger .card-icon, .dark-edition .card .card-header-danger .card-text, .dark-edition .card .card-header-danger:not(.card-header-icon):not(.card-header-text), .dark-edition .card.card-rotate.bg-danger .back, .dark-edition .card.card-rotate.bg-danger .front {
	background: linear-gradient(60deg, #d22824, #da3a36)
}
.dark-edition .card.bg-info, .dark-edition .card .card-header-info .card-icon, .dark-edition .card .card-header-info .card-text, .dark-edition .card .card-header-info:not(.card-header-icon):not(.card-header-text), .dark-edition .card.card-rotate.bg-info .back, .dark-edition .card.card-rotate.bg-info .front {
	background: linear-gradient(60deg, #029eb1, #25b1c3)
}
.dark-edition .card.bg-primary, .dark-edition .card .card-header-primary .card-icon, .dark-edition .card .card-header-primary .card-text, .dark-edition .card .card-header-primary:not(.card-header-icon):not(.card-header-text), .dark-edition .card.card-rotate.bg-primary .back, .dark-edition .card.card-rotate.bg-primary .front {
	background: linear-gradient(60deg, #7b1fa2, #913f9e)
}
.dark-edition .primary-link {
	background-image: linear-gradient(60deg, #7b1fa2, #913f9e)!important
}
.dark-edition .info-link {
	background-image: linear-gradient(60deg, #029eb1, #25b1c3)!important
}
.dark-edition .warning-link {
	background-image: linear-gradient(60deg, #f5700c, #ff9800)!important
}
.dark-edition .success-link {
	background-image: linear-gradient(60deg, #288c6c, #4ea752)!important
}
.card {
	font-size: .875rem
	font-size: .875rem
}
.card form {
	margin: 0
}

.dark-edition .danger-link {
	background-image: linear-gradient(60deg, #d22824, #da3a36)!important
}
.dark-edition .places-buttons .card-title, .dark-edition .tim-typo .tim-note {
	color: #8b92a9
}
.dark-edition .places-buttons .card-title .category {
	color: #606477
}
.dark-edition .card-stats .card-header .card-category:not([class*=text-]) {
	color: #8b92a9
}
.dark-edition .card-stats .card-header+.card-footer {
	border-top: 1px solid hsla(0, 0%, 71%, .1)
}
.dark-edition .card-plain {
	background: transparent
}
.dark-edition .card-chart .card-body .card-category {
	color: #606477
}
.dark-edition .card-chart .card-body .card-category span {
	-webkit-background-clip: text;
	background-clip: text;
	background-image: linear-gradient(60deg, #288c6c, #4ea752);
	color: transparent
}
.dark-edition .card-chart .card-footer {
	border-top: 1px solid hsla(0, 0%, 71%, .1)
}
.card-plain .card-header-image {
	margin: 0!important;
	border-radius: 6px
}
.card-plain .card-header-image img {
	border-radius: 6px
}
.card-plain .card-footer {
	padding-left: 5px;
	padding-right: 5px;
	background-color: transparent
}
	.carousel .card .card-body {
		max-width: 340px;
		margin: 0 auto;
		min-height: 400px
	}

.card-img-top {
	width: 100%;
	border-top-left-radius: calc(.25rem - 1px);
	border-top-right-radius: calc(.25rem - 1px)
}
.card-img-bottom {
	width: 100%;
	border-bottom-right-radius: calc(.25rem - 1px);
	border-bottom-left-radius: calc(.25rem - 1px)
}
.card-deck {
	display: flex;
	flex-direction: column
}
.card-deck .card {
	margin-bottom: 15px
}
@media (min-width:576px) {
	.card-deck {
		flex-flow: row wrap;
		margin-right: -15px;
		margin-left: -15px
	}
	.card-deck .card {
		display: flex;
		flex: 1 0 0%;
		flex-direction: column;
		margin-right: 15px;
		margin-bottom: 0;
		margin-left: 15px
	}
}
.card-group {
	display: flex;
	flex-direction: column
}
.card-group>.card {
	margin-bottom: 15px
}
@media (min-width:576px) {
	.card-group {
		flex-flow: row wrap
	}
	.card-group>.card {
		flex: 1 0 0%;
		margin-bottom: 0
	}
	.card-group>.card+.card {
		margin-left: 0;
		border-left: 0
	}
	.card-group>.card:first-child {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}
	.card-group>.card:first-child .card-header, .card-group>.card:first-child .card-img-top {
		border-top-right-radius: 0
	}
	.card-group>.card:first-child .card-footer, .card-group>.card:first-child .card-img-bottom {
		border-bottom-right-radius: 0
	}
	.card-group>.card:last-child {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}
	.card-group>.card:last-child .card-header, .card-group>.card:last-child .card-img-top {
		border-top-left-radius: 0
	}
	.card-group>.card:last-child .card-footer, .card-group>.card:last-child .card-img-bottom {
		border-bottom-left-radius: 0
	}
	.card-group>.card:only-child {
		border-radius: .25rem
	}
	.card-group>.card:only-child .card-header, .card-group>.card:only-child .card-img-top {
		border-top-left-radius: .25rem;
		border-top-right-radius: .25rem
	}
	.card-group>.card:only-child .card-footer, .card-group>.card:only-child .card-img-bottom {
		border-bottom-right-radius: .25rem;
		border-bottom-left-radius: .25rem
	}
	.card-group>.card:not(:first-child):not(:last-child):not(:only-child), .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer, .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header, .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom, .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top {
		border-radius: 0
	}
}
.card-columns .card {
	margin-bottom: .75rem
}
@media (min-width:576px) {
	.card-columns {
		column-count: 3;
		column-gap: 1.25rem
	}
	.card-columns .card {
		display: inline-block;
		width: 100%
	}
}
