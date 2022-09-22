<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title','Pdf Panel')</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('head-css')
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menupos-fixed menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
						<a href="{{ route('dashboard') }}" class="nav-link ">
							<span class="pcoded-micon">
								<i class="feather icon-home"></i>
							</span>
							<span class="pcoded-mtext">Dashboard</span>
						</a>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon">
								<i class="fas fa-business-time"></i>
							</span>
							<span class="pcoded-mtext">Company</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href="{{ route('company.index') }}">All Companies</a></li>
							<li><a href="{{ route('company.create') }}">Create Company</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon">
								<i class="fas fa-file-import"></i>
							</span>
							<span class="pcoded-mtext">Import Shareholders</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href="{{ route('shareholder.index') }}">All Shareholders</a></li>
							<li><a href="{{ route('shareholder.csv.bulk.import.page') }}">Import Shareholders</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Page layouts</span></a>
						<ul class="pcoded-submenu">
							<li class="pcoded-hasmenu"><a href="#!">Vertical</a>
								<ul class="pcoded-submenu">
									<li><a href="layout-static.html" target="_blank">Static</a></li>
									<li><a href="layout-fixed.html" target="_blank">Fixed</a></li>
									<li><a href="layout-menu-fixed.html" target="_blank">Navbar fixed</a></li>
									<li><a href="layout-mini-menu.html" target="_blank">Collapse menu</a></li>
									<li><a href="layout-rtl.html" target="_blank">Vertical RTL</a></li>
								</ul>
							</li>
							<li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
							<li><a href="layout-horizontal-2.html" target="_blank">Horizontal v2</a></li>
							<li><a href="layout-horizontal-rtl.html" target="_blank">Horizontal RTL</a></li>
							<li><a href="layout-box.html" target="_blank">Box layout</a></li>
							<li><a href="layout-light.html" target="_blank">Light layout</a></li>
							<li><a href="layout-dark.html" target="_blank">Dark layout <span class="pcoded-badge badge badge-danger">Hot</span></a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Widget</span><span class="pcoded-badge badge badge-success">100+</span></a>
						<ul class="pcoded-submenu">
							<li><a href="widget-statistic.html">Statistic</a></li>
							<li><a href="widget-data.html">Data</a></li>
							<li><a href="widget-chart.html">Chart</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">User</span></a>
						<ul class="pcoded-submenu">
							<li><a href="user-profile.html">Profile</a></li>
							<li><a href="user-card.html">User Card</a></li>
							<li><a href="user-list.html">User List</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>UI Element</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Basic</span></a>
						<ul class="pcoded-submenu">
							<li><a href="bc_alert.html">Alert</a></li>
							<li><a href="bc_button.html">Button</a></li>
							<li><a href="bc_badges.html">Badges</a></li>
							<li><a href="bc_breadcrumb-pagination.html">Breadcrumb & paggination</a></li>
							<li><a href="bc_card.html">Cards</a></li>
							<li><a href="bc_collapse.html">Collapse</a></li>
							<li><a href="bc_carousel.html">Carousel</a></li>
							<li><a href="bc_grid.html">Grid system</a></li>
							<li><a href="bc_progress.html">Progress</a></li>
							<li><a href="bc_modal.html">Modal</a></li>
							<li><a href="bc_spinner.html">Spinner</a></li>
							<li><a href="bc_tabs.html">Tabs & pills</a></li>
							<li><a href="bc_typography.html">Typography</a></li>
							<li><a href="bc_tooltip-popover.html">Tooltip & popovers</a></li>
							<li><a href="bc_toasts.html">Toasts</a></li>
							<li><a href="bc_extra.html">Other</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-gitlab"></i></span><span class="pcoded-mtext">Advance</span></a>
						<ul class="pcoded-submenu">
							<li><a href="ac_alert.html">Sweet alert</a></li>
							<li><a href="ac-datepicker-componant.html">Datepicker</a></li>
							<li><a href="ac_lightbox.html">Lightbox</a></li>
							<li><a href="ac_notification.html">Notification</a></li>
							<li><a href="ac_pnotify.html">Pnotify</a></li>
							<li><a href="ac_rating.html">Rating</a></li>
							<li><a href="ac_rangeslider.html">Rangeslider</a></li>
							<li><a href="ac_syntax_highlighter.html">Syntax highlighter</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="animation.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-aperture"></i></span><span class="pcoded-mtext">Animations</span></a></li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-feather"></i></span><span class="pcoded-mtext">Icons</span></a>
						<ul class="pcoded-submenu">
							<li><a href="icon-feather.html">Feather</a></li>
							<li><a href="icon-fontawsome.html">Font Awesome 5</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Forms</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
						<ul class="pcoded-submenu">
							<li><a href="form_elements.html">Form elements</a></li>
							<li><a href="form-elements-advance.html">Form advance</a></li>
							<li><a href="form-validation.html">Form validation</a></li>
							<li><a href="form-masking.html">Form masking</a></li>
							<li><a href="form-wizard.html">Form wizard</a></li>
							<li><a href="form-picker.html">Form picker</a></li>
							<li><a href="form-select.html">Form select</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>table</label>
					 	</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap table</span></a>
						<ul class="pcoded-submenu">
							<li><a href="tbl_bootstrap.html">Basic table</a></li>
							<li><a href="tbl_sizing.html">Sizing table</a></li>
							<li><a href="tbl_border.html">Border table</a></li>
							<li><a href="tbl_styling.html">Styling table</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-package"></i></span><span class="pcoded-mtext">Data table</span></a>
						<ul class="pcoded-submenu">
							<li><a href="dt_basic.html">Basic initialization</a></li>
							<li><a href="dt_advance.html">Advance initialization</a></li>
							<li><a href="dt_styling.html">Styling</a></li>
							<li><a href="dt_api.html">API</a></li>
							<li><a href="dt_plugin.html">Plug-in</a></li>
							<li><a href="dt_sources.html">Data sources</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">DT extensions</span></a>
						<ul class="pcoded-submenu">
							<li><a href="dt_ext_autofill.html">Autofill</a></li>
							<li class="nav-item pcoded-hasmenu">
								<a href="#!" class="nav-link "><span class="pcoded-mtext">Button</span></a>
								<ul class="pcoded-submenu">
									<li><a href="dt_ext_basic_buttons.html">Basic button</a></li>
									<li><a href="dt_ext_export_buttons.html">Data export</a></li>
								</ul>
							</li>
							<li><a href="dt_ext_col_reorder.html">Col reorder</a></li>
							<li><a href="dt_ext_fixed_columns.html">Fixed columns</a></li>
							<li><a href="dt_ext_fixed_header.html">Fixed header</a></li>
							<li><a href="dt_ext_key_table.html">Key table</a></li>
							<li><a href="dt_ext_responsive.html">Responsive</a></li>
							<li><a href="dt_ext_row_reorder.html">Row reorder</a></li>
							<li><a href="dt_ext_scroller.html">Scroller</a></li>
							<li><a href="dt_ext_select.html">Select table</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Chart & Maps</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
						<ul class="pcoded-submenu">
							<li><a href="chart-apex.html">Apex Chart</a></li>
							<li><a href="chart-chartjs.html">Chart js</a></li>
							<li><a href="chart-highchart.html">Highchart</a></li>
							<li><a href="chart-knob.html">Knob</a></li>
							<li><a href="chart-peity.html">Peity</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
						<ul class="pcoded-submenu">
							<li><a href="map-google.html">Google</a></li>
							<li><a href="map-api.html">Gmap search API</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Pages</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
						<ul class="pcoded-submenu">
							<li><a href="auth-signup.html" target="_blank">Sign up</a></li>
							<li><a href="auth-signup-img-side.html" target="_blank">Sign up v2</a></li>
							<li><a href="auth-signin.html" target="_blank">Sign in</a></li>
							<li><a href="auth-signin-img-side.html" target="_blank">Sign in v2</a></li>
							<li><a href="auth-reset-password.html" target="_blank">Reset password</a></li>
							<li><a href="auth-reset-password-img-side.html" target="_blank">Reset password v2</a></li>
							<li><a href="auth-change-password.html" target="_blank">Change password</a></li>
							<li><a href="auth-change-password-img-side.html" target="_blank">Change password v2</a></li>
							<li><a href="auth-profile-settings.html" target="_blank">Profile settings</a></li>
							<li><a href="auth-tabs.html" target="_blank">Tabs Authentication</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sliders"></i></span><span class="pcoded-mtext">Maintenance</span></a>
						<ul class="pcoded-submenu">
							<li><a href="maint-error.html">Error</a></li>
							<li><a href="maint-offline-ui.html" target="_blank">Offline UI</a></li>
							<li><a href="maint-maintance.html" target="_blank">Maintenance</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>App</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-mail"></i></span><span class="pcoded-mtext">Email</span></a>
						<ul class="pcoded-submenu">
							<li><a href="email_inbox.html">Inbox</a></li>
							<li><a href="email_read.html">Read mail</a></li>
							<li><a href="email_compose.html">Compose mail</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-clipboard"></i></span><span class="pcoded-mtext">Task</span></a>
						<ul class="pcoded-submenu">
							<li><a href="task-list.html">List</a></li>
							<li><a href="task-board.html">Board</a></li>
							<li><a href="task-detail.html">Detail</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="todo.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-check-square"></i></span><span class="pcoded-mtext">To-Do</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-image"></i></span><span class="pcoded-mtext">Gallery</span></a>
						<ul class="pcoded-submenu">
							<li><a href="gallery-grid.html">Grid</a></li>
							<li><a href="gallery-masonry.html">Masonry</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-help-circle"></i></span><span class="pcoded-mtext">Helpdesk<span class="pcoded-badge badge badge-success">NEW</span></span></a>
						<ul class="pcoded-submenu">
							<li><a href="hd-help-desk.html">Helpdesk dashboard</a></li>
							<li><a href="hd-dashboard.html">Customer dashboard</a></li>
							<li><a href="hd-cust-list.html">Customer list</a></li>
							<li><a href="hd-detail.html">Customer detail</a></li>
							<li><a href="hd-new-ticket.html">Ticket</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Extension</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-plus"></i></span><span class="pcoded-mtext">Editor</span></a>
						<ul class="pcoded-submenu">
							<li><a href="editor-classic.html">CK editor</a></li>
							<li><a href="editor-trumbowyg.html">Trumbowyg editor</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-minus"></i></span><span class="pcoded-mtext">Invoice</span></a>
						<ul class="pcoded-submenu">
							<li><a href="invoice.html">Invoice</a></li>
							<li><a href="invoice-summary.html">Invoice summary</a></li>
							<li><a href="invoice-list.html">Invoice list</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="full-calendar.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Full calendar</span></a></li>
					<li class="nav-item"><a href="file-upload.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-upload-cloud"></i></span><span class="pcoded-mtext">File upload</span></a></li>
					<li class="nav-item"><a href="image_crop.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-scissors"></i></span><span class="pcoded-mtext">Image cropper</span></a></li>
					<li class="nav-item pcoded-menu-caption">
						<label>Other</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-menu"></i></span><span class="pcoded-mtext">Menu levels</span></a>
						<ul class="pcoded-submenu">
							<li><a href="#">Menu Level 2.1</a></li>
							<li class="pcoded-hasmenu">
								<a href="#">Menu level 2.2</a>
								<ul class="pcoded-submenu">
									<li><a href="#">Menu level 3.1</a></li>
									<li><a href="#">Menu level 3.2</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item disabled"><a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled menu</span></a></li>
					<li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>

				</ul>
				
				<div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Help?</h6>
						<p>Please contact us on our email for need any support</p>
						<a href="#!" target="_blank" class="btn btn-primary btn-sm text-white m-0">Support</a>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="{{ asset('assets/images/logo.png') }}" alt="" class="logo">
						<img src="{{ asset('assets/images/logo-icon.png') }}" alt="" class="logo-thumb">
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search here">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
						<li class="nav-item">
							<a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown">
									<i class="icon feather icon-bell"></i>
									@if($notifications->count())
										<span class="badge bg-danger">
											<span class="sr-only"></span>
										</span>
									@endif
								</a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										<div class="float-right">
											<a href="#!" class="m-r-10">mark as read</a>
											<a href="#!">clear all</a>
										</div>
									</div>
									<ul class="noti-body">
										@foreach($notifications as $notification)
											<li class="notification">
												<div class="media">
													<div class="media-body">
														<a href="{{$notification->notification_link}}">{{$notification->notification}}</a>
													</div>
												</div>
											</li>
										@endforeach
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown">
								<a href="#!" class="displayChatbox dropdown-toggle"><i class="icon feather icon-mail"></i><span class="badge bg-success"><span class="sr-only"></span></span></a>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#!" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" class="img-radius wid-40" alt="User-Profile-Image">
                                </a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="{{ asset('assets/images/user/avatar-1.jpg') }}" class="img-radius" alt="User-Profile-Image">
										<span>John Doe</span>
										<a href="#" class="dud-logout" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
									</ul>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				                        @csrf
				                    </form>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
	
	<!-- [ chat user list ] start -->
	<section class="header-user-list">
		<a href="#!" class="h-close-text"><i class="feather icon-x"></i></a>
		<ul class="nav nav-tabs" id="chatTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active text-uppercase border-0" id="chat-tab" data-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="true"><i class="feather icon-message-circle mr-2"></i>Chat</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-uppercase border-0" id="user-tab" data-toggle="tab" href="#user" role="tab" aria-controls="user" aria-selected="false"><i class="feather icon-users mr-2"></i>User</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-uppercase border-0" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false"><i class="feather icon-settings mr-2"></i>Setting</a>
			</li>
		</ul>
		<div class="tab-content" id="chatTabContent">
			<div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat-tab">
				<div class="h-list-header">
					<div class="input-group">
						<input type="text" id="search-friends" class="form-control" placeholder="Search Friend . . .">
					</div>
				</div>
				<div class="h-list-body">
					<div class="main-friend-cont scroll-div">
						<div class="main-friend-list">
							<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image ">
									<div class="live-status">3</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . . </small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="Generic placeholder image">
									<div class="live-status">1</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-3.jpg') }}" alt="Generic placeholder image"></a>
								<div class="media-body">
									<h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image">
									<div class="live-status">1</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-4.jpg') }}" alt="Generic placeholder image"></a>
								<div class="media-body">
									<h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image ">
									<div class="live-status">3</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . . </small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="Generic placeholder image">
									<div class="live-status">1</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-3.jpg') }}" alt="Generic placeholder image"></a>
								<div class="media-body">
									<h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image">
									<div class="live-status">1</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-4.jpg') }}" alt="Generic placeholder image"></a>
								<div class="media-body">
									<h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image ">
									<div class="live-status">3</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . . </small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="Generic placeholder image">
									<div class="live-status">1</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-3.jpg') }}" alt="Generic placeholder image"></a>
								<div class="media-body">
									<h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="user" role="tabpanel" aria-labelledby="user-tab">
				<div class="h-list-body">
					<div class="main-friend-cont scroll-div">
						<div class="main-friend-list">
							<div class="media px-3 d-flex align-items-center mt-3">
								<a class="media-left m-r-15" href="#!">
									<div class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center"><i class="icon feather icon-users"></i></div>
								</a>
								<div class="media-body">
									<p class="chat-header f-w-600 mb-0">New Group</p>
								</div>
							</div>
							<div class="media p-3 d-flex align-items-center">
								<a class="media-left m-r-15" href="#!">
									<div class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center"><i class="icon feather icon-user-plus"></i></div>
								</a>
								<div class="media-body">
									<p class="chat-header f-w-600 mb-0">New Contact</p>
								</div>
							</div>
							<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image "></a>
								<div class="media-body">
									<p class="chat-header">Josephin Doe<small class="d-block">i am not what happened . .</small></p>
								</div>
							</div>
							<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="Generic placeholder image"></a>
								<div class="media-body">
									<h6 class="chat-header">Lary Doe<small class="d-block">Avalable</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-3.jpg') }}" alt="Generic placeholder image"></a>
								<div class="media-body">
									<h6 class="chat-header">Alice<small class="d-block">hear using Elite able</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
								<a class="media-left" href="#!">
									<div class="hei-50 wid-50 img-radius bg-success d-flex text-white f-22 align-items-center justify-content-center">A</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Alia<small class="d-block text-muted">Avalable</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-4.jpg') }}" alt="Generic placeholder image"></a>
								<div class="media-body">
									<h6 class="chat-header">Suzen<small class="d-block text-muted">Avalable</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
								<a class="media-left" href="#!">
									<div class="hei-50 wid-50 bg-danger img-radius d-flex text-white f-22 align-items-center justify-content-center">JD</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Josephin Doe<small class="d-block text-muted">Don't send me image</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius" src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="Generic placeholder image"></a>
								<div class="media-body">
									<h6 class="chat-header">Lary Doe<small class="d-block text-muted">not send free msg</small></h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
				<div class="p-4 main-friend-cont scroll-div">
					<h6 class="mt-2"><i class="feather icon-monitor mr-2"></i>Desktop settings</h6>
					<hr>
					<div class="form-group mb-0">
						<div class="switch switch-primary d-inline m-r-10">
							<input type="checkbox" id="cn-p-1" checked>
							<label for="cn-p-1" class="cr"></label>
						</div>
						<label class="f-w-600">Allow desktop notification</label>
					</div>
					<p class="text-muted ml-5">you get lettest content at a time when data will updated</p>
					<div class="form-group mb-0">
						<div class="switch switch-primary d-inline m-r-10">
							<input type="checkbox" id="cn-p-5">
							<label for="cn-p-5" class="cr"></label>
						</div>
						<label class="f-w-600">Store Cookie</label>
					</div>
					<h6 class="mb-0 mt-5"><i class="feather icon-layout mr-2"></i>Application settings</h6>
					<hr>
					<div class="form-group mb-0">
						<div class="switch switch-primary d-inline m-r-10">
							<input type="checkbox" id="cn-p-3" checked>
							<label for="cn-p-3" class="cr"></label>
						</div>
						<label class="f-w-600">Backup Storage</label>
					</div>
					<p class="text-muted mb-0 ml-5">Automaticaly take backup as par schedule</p>
					<div class="form-group mb-4">
						<div class="switch switch-primary d-inline m-r-10">
							<input type="checkbox" id="cn-p-4" checked>
							<label for="cn-p-4" class="cr"></label>
						</div>
						<label class="f-w-600">Allow guest to print file</label>
					</div>
					<h6 class="mb-0 mt-5"><i class="feather icon-globe mr-2"></i>System settings</h6>
					<hr>
					<div class="form-group mb-0">
						<div class="switch switch-primary d-inline m-r-10">
							<input type="checkbox" id="cn-p-2">
							<label for="cn-p-2" class="cr"></label>
						</div>
						<label class="f-w-600">View other user chat</label>
					</div>
					<p class="text-muted ml-5">Allow to show public user message</p>
				</div>
			</div>
		</div>
	</section>
	<!-- [ chat user list ] end -->

	<!-- [ chat message ] start -->
	<section class="header-chat">
		<div class="h-list-header">
			<h6>Josephin Doe</h6>
			<a href="#!" class="h-back-user-list"><i class="feather icon-chevron-left"></i></a>
		</div>
		<div class="h-list-body">
			<div class="main-chat-cont scroll-div">
				<div class="main-friend-chat">
					<div class="media chat-messages">
						<a class="media-left photo-table" href="#!"><img class="media-object img-radius img-radius m-t-5" src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="Generic placeholder image"></a>
						<div class="media-body chat-menu-content">
							<div class="">
								<p class="chat-cont">hello tell me something</p>
								<p class="chat-cont">about yourself?</p>
							</div>
							<p class="chat-time">8:20 a.m.</p>
						</div>
					</div>
					<div class="media chat-messages">
						<div class="media-body chat-menu-reply">
							<div class="">
								<p class="chat-cont">Ohh! very nice</p>
							</div>
							<p class="chat-time">8:22 a.m.</p>
						</div>
						<a class="media-right photo-table" href="#!"><img class="media-object img-radius img-radius m-t-5" src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image"></a>
					</div>
					<div class="media chat-messages">
						<a class="media-left photo-table" href="#!"><img class="media-object img-radius img-radius m-t-5" src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="Generic placeholder image"></a>
						<div class="media-body chat-menu-content">
							<div class="">
								<p class="chat-cont">can you help me?</p>
							</div>
							<p class="chat-time">8:20 a.m.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="h-list-footer">
			<div class="input-group">
				<input type="file" class="chat-attach" style="display:none">
				<a href="#!" class="input-group-prepend btn btn-success btn-attach">
					<i class="feather icon-paperclip"></i>
				</a>
				<input type="text" name="h-chat-text" class="form-control h-auto h-send-chat" placeholder="Write hear . . ">
				<button type="submit" class="input-group-append btn-send btn btn-primary">
					<i class="feather icon-message-circle"></i>
				</button>
			</div>
		</div>
	</section>
	<!-- [ chat message ] end -->

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        @yield('content')
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
	<script src="{{ asset('assets/js/menu-setting.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>

<!-- custom-chart js -->
<script src="{{ asset('assets/js/pages/dashboard-main.js') }}"></script>

<!-- notification Js -->
<script src="{{ asset('assets/js/plugins/bootstrap-notify.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/pages/ac-notification.js') }}"></script> --}}

<!-- custom js -->
<script src="{{ asset('js/custom.js') }}"></script>

@yield('footer-js')
</body>
</html>
