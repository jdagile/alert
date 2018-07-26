<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>


	</style>

<link href="{{ asset('css/app.css')}}" rel="stylesheet">
</head>
	<body>
		<!DOCTYPE html>
		<!--
		Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
		Author: KeenThemes
		Website: http://www.keenthemes.com/
		Contact: support@keenthemes.com
		Follow: www.twitter.com/keenthemes
		Dribbble: www.dribbble.com/keenthemes
		Like: www.facebook.com/keenthemes
		Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
		Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
		License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
		-->
		<html lang="en" >
			<!-- begin::Head -->
			<head>
				<meta charset="utf-8" />
				<title>
					Metronic | Dashboard
				</title>
				<meta name="description" content="Latest updates and statistic charts">
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
				<!--begin::Web font -->
				<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
				<script>
		          WebFont.load({
		            google: {"families":["Montserrat:300,400,500,600,700","Roboto:300,400,500,600,700"]},
		            active: function() {
		                sessionStorage.fonts = true;
		            }
		          });
				</script>
				<!--end::Web font -->
		        <!--begin::Base Styles -->
		        <!--begin::Page Vendors -->
				<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
				<!--end::Page Vendors -->
				<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
				<link href="assets/demo/demo3/base/style.bundle.css" rel="stylesheet" type="text/css" />
				<!--end::Base Styles -->
				<link rel="shortcut icon" href="assets/demo/demo3/media/img/logo/favicon.ico" />
			</head>
			<!-- end::Head -->
		    <!-- end::Body -->
			<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
				<!-- begin:: Page -->
				<div class="m-grid m-grid--hor m-grid--root m-page">
					<!-- BEGIN: Header -->
					<header id="m_header" class="m-grid__item m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
						<div class="m-container m-container--fluid m-container--full-height">
							<div class="m-stack m-stack--ver m-stack--desktop">
								<!-- BEGIN: Brand -->
								<div class="m-stack__item m-brand  m-brand--skin-dark ">
									<div class="m-stack m-stack--ver m-stack--general">
										<div class="m-stack__item m-stack__item--middle m-stack__item--center m-brand__logo">
											<a href="index.html" class="m-brand__logo-wrapper">
												<img alt="" src="assets/demo/demo3/media/img/logo/logo.png"/>
											</a>
										</div>
										<div class="m-stack__item m-stack__item--middle m-brand__tools">
											<!-- BEGIN: Responsive Aside Left Menu Toggler -->
											<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
												<span></span>
											</a>
											<!-- END -->
									<!-- BEGIN: Responsive Header Menu Toggler -->
											<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
												<span></span>
											</a>
											<!-- END -->
					<!-- BEGIN: Topbar Toggler -->
											<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
												<i class="flaticon-more"></i>
											</a>
											<!-- BEGIN: Topbar Toggler -->
										</div>
									</div>
								</div>
								<!-- END: Brand -->
								<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

									<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
										<div class="m-stack__item m-topbar__nav-wrapper">
											<ul class="m-topbar__nav m-nav m-nav--inline">

												<li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
													<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
														<span class="m-nav__link-badge m-badge m-badge--accent">
															3
														</span>
														<span class="m-nav__link-icon">
															<i class="flaticon-alert-2"></i>
														</span>
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
																<span class="m-dropdown__header-title">
																	3 Notificaciones
																</span>
																<span class="m-dropdown__header-subtitle">
																	Notificaciones de Usuario
																</span>
															</div>
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
																		<li class="nav-item m-tabs__item">
																			<a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
																				Alertas
																			</a>
																		</li>
																		<li class="nav-item m-tabs__item">
																			<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">
																				Eventos
																			</a>
																		</li>
																		<li class="nav-item m-tabs__item">
																			<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">
																				Historial
																			</a>
																		</li>
																	</ul>
																	<div class="tab-content">
																		<div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
																			<div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
																				<div class="m-list-timeline m-list-timeline--skin-light">
																					<div class="m-list-timeline__items">
																						<div class="m-list-timeline__item">
																							<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
																							<span class="m-list-timeline__text">
																								Un usuario dmejia Nuevo se ha registrado
																							</span>
																							<span class="m-list-timeline__time">
																								Just now
																							</span>
																						</div>
																						<div class="m-list-timeline__item">
																							<span class="m-list-timeline__badge"></span>
																							<span class="m-list-timeline__text">
																								En sector de Lago de Yojoa estaion Luna del Puente
																								<span class="m-badge m-badge--danger m-badge--wide">
																									Alerta Roja
																								</span>
																							</span>
																							<span class="m-list-timeline__time">
																								14 mins
																							</span>
																						</div>
																						<div class="m-list-timeline__item">
																							<span class="m-list-timeline__badge"></span>
																							<span class="m-list-timeline__text">
																								Un usuario jrodriguez Nuevo se ha registrado
																							</span>
																							<span class="m-list-timeline__time">
																								20 mins
																							</span>
																						</div>
																						<div class="m-list-timeline__item">
																							<span class="m-list-timeline__badge"></span>
																							<span class="m-list-timeline__text">
																								En sector Capucas estaion Hoja de Caña
																								<span class="m-badge m-badge--danger m-badge--wide">
																									Alerta Roja
																								</span>
																							</span>
																							<span class="m-list-timeline__time">
																								1 hr
																							</span>
																						</div>
																						<div class="m-list-timeline__item">
																							<span class="m-list-timeline__badge"></span>
																							<span class="m-list-timeline__text">
																								System error -
																								<a href="#" class="m-link">
																									Check
																								</a>
																							</span>
																							<span class="m-list-timeline__time">
																								2 hrs
																							</span>
																						</div>
																						<div class="m-list-timeline__item m-list-timeline__item--read">
																							<span class="m-list-timeline__badge"></span>
																							<span href="" class="m-list-timeline__text">
																								En sector Jesus De Otoro estaion Cumes
																								<span class="m-badge m-badge--danger m-badge--wide">
																									Alerta Roja
																								</span>
																							</span>
																							<span class="m-list-timeline__time">
																								7 hrs
																							</span>
																						</div>
																						<div class="m-list-timeline__item m-list-timeline__item--read">
																							<span class="m-list-timeline__badge"></span>
																							<span class="m-list-timeline__text">
																								Production server down
																							</span>
																							<span class="m-list-timeline__time">
																								3 hrs
																							</span>
																						</div>
																						<div class="m-list-timeline__item">
																							<span class="m-list-timeline__badge"></span>
																							<span class="m-list-timeline__text">
																								Production server up
																							</span>
																							<span class="m-list-timeline__time">
																								5 hrs
																							</span>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
																			<div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
																				<div class="m-list-timeline m-list-timeline--skin-light">
																					<div class="m-list-timeline__items">
																						<div class="m-list-timeline__item">
																							<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																							<a href="" class="m-list-timeline__text">
																								New order received
																							</a>
																							<span class="m-list-timeline__time">
																								Just now
																							</span>
																						</div>
																						<div class="m-list-timeline__item">
																							<span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
																							<a href="" class="m-list-timeline__text">
																								New invoice received
																							</a>
																							<span class="m-list-timeline__time">
																								20 mins
																							</span>
																						</div>
																						<div class="m-list-timeline__item">
																							<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																							<a href="" class="m-list-timeline__text">
																								Production server up
																							</a>
																							<span class="m-list-timeline__time">
																								5 hrs
																							</span>
																						</div>
																						<div class="m-list-timeline__item">
																							<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																							<a href="" class="m-list-timeline__text">
																								New order received
																							</a>
																							<span class="m-list-timeline__time">
																								7 hrs
																							</span>
																						</div>
																						<div class="m-list-timeline__item">
																							<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																							<a href="" class="m-list-timeline__text">
																								System shutdown
																							</a>
																							<span class="m-list-timeline__time">
																								11 mins
																							</span>
																						</div>
																						<div class="m-list-timeline__item">
																							<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																							<a href="" class="m-list-timeline__text">
																								Production server down
																							</a>
																							<span class="m-list-timeline__time">
																								3 hrs
																							</span>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
																			<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
																				<div class="m-stack__item m-stack__item--center m-stack__item--middle">
																					<span class="">
																						All caught up!
																						<br>
																						No new logs.
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  m-dropdown-toggle="click">
													<a href="#" class="m-nav__link m-dropdown__toggle">
														<span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
														<span class="m-nav__link-icon">
															<i class="flaticon-clipboard"></i>
														</span>
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
																<span class="m-dropdown__header-title">
																	Quick Actions
																</span>
																<span class="m-dropdown__header-subtitle">
																	Shortcuts
																</span>
															</div>
															<div class="m-dropdown__body m-dropdown__body--paddingless">
																<div class="m-dropdown__content">
																	<div class="m-scrollable" data-scrollable="false" data-height="380" data-mobile-height="200">
																		<div class="m-nav-grid m-nav-grid--skin-light">
																			<div class="m-nav-grid__row">
																				<a href="#" class="m-nav-grid__item">
																					<i class="m-nav-grid__icon flaticon-file"></i>
																					<span class="m-nav-grid__text">
																						Generate Report
																					</span>
																				</a>
																				<a href="#" class="m-nav-grid__item">
																					<i class="m-nav-grid__icon flaticon-time"></i>
																					<span class="m-nav-grid__text">
																						Add New Event
																					</span>
																				</a>
																			</div>
																			<div class="m-nav-grid__row">
																				<a href="#" class="m-nav-grid__item">
																					<i class="m-nav-grid__icon flaticon-folder"></i>
																					<span class="m-nav-grid__text">
																						Create New Task
																					</span>
																				</a>
																				<a href="#" class="m-nav-grid__item">
																					<i class="m-nav-grid__icon flaticon-clipboard"></i>
																					<span class="m-nav-grid__text">
																						Completed Tasks
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
													<a href="#" class="m-nav__link m-dropdown__toggle">
														<span class="m-topbar__userpic">
															<img src="assets/app/media/img/users/user3.jpg" alt=""/>
														</span>
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
																<div class="m-card-user m-card-user--skin-dark">
																	<div class="m-card-user__pic">
																		<img src="assets/app/media/img/users/user3.jpg" alt=""/>
																	</div>
																	<div class="m-card-user__details">
																		<span class="m-card-user__name m--font-weight-500">
																			Lisa Strong
																		</span>
																		<a href="" class="m-card-user__email m--font-weight-300 m-link">
																			lisa.strong@gmail.com
																		</a>
																	</div>
																</div>
															</div>
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav m-nav--skin-light">
																		<li class="m-nav__section m--hide">
																			<span class="m-nav__section-text">
																				Section
																			</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="profile.html" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-profile-1"></i>
																				<span class="m-nav__link-title">
																					<span class="m-nav__link-wrap">
																						<span class="m-nav__link-text">
																							My Profile
																						</span>
																						<span class="m-nav__link-badge">
																							<span class="m-badge m-badge--success">
																								2
																							</span>
																						</span>
																					</span>
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="profile.html" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">
																					Activity
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="profile.html" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">
																					Messages
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__separator m-nav__separator--fit"></li>
																		<li class="m-nav__item">
																			<a href="profile.html" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">
																					FAQ
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="profile.html" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">
																					Support
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__separator m-nav__separator--fit"></li>
																		<li class="m-nav__item">
																			<a href="snippets/pages/user/login-1.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																				Logout
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>

											</ul>
										</div>
									</div>
									<!-- END: Topbar -->
								</div>
							</div>
						</div>
					</header>
					<!-- END: Header -->
				<!-- begin::Body -->
					<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
						<!-- BEGIN: Left Aside -->
						<button class="m-aside-left-close m-aside-left-close--skin-dark" id="m_aside_left_close_btn">
							<i class="la la-close"></i>
						</button>
						<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
							<!-- BEGIN: Aside Menu -->
			<div
				id="m_ver_menu"
				class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark m-aside-menu--dropdown "
				data-menu-vertical="true"
				 m-menu-dropdown="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500"
				>
								<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
									<li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >								<a  href="index.html" class="m-menu__link ">
											<span class="m-menu__item-here"></span>
											<i class="m-menu__link-icon flaticon-line-graph"></i>
											<span class="m-menu__link-text">
												Alertas
											</span>
										</a>
									</li>

									<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
										<a  href="javascript:;" class="m-menu__link m-menu__toggle">
											<span class="m-menu__item-here"></span>
											<i class="m-menu__link-icon flaticon-layers"></i>
											<span class="m-menu__link-title">
												<span class="m-menu__link-wrap">
													<span class="m-menu__link-text">
														Reportes
													</span>
													<span class="m-menu__link-badge">

													</span>
												</span>
											</span>
											<i class="m-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="m-menu__submenu ">
											<span class="m-menu__arrow"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
													<span class="m-menu__link">
														<span class="m-menu__item-here"></span>
														<span class="m-menu__link-title">
															<span class="m-menu__link-wrap">
																<span class="m-menu__link-text">
																	Reportes
																</span>

															</span>
														</span>
													</span>
												</li>
												<li class="m-menu__item " aria-haspopup="true" >
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-icon flaticon-pie-chart"></i>
														<span class="m-menu__link-text">
															Reporte del Día
														</span>
													</a>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-icon flaticon-line-graph"></i>
														<span class="m-menu__link-text">
															Reporte Mensual
														</span>
													</a>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-icon flaticon-statistics"></i>
														<span class="m-menu__link-text">
															Reporte de Promedios de la Región
														</span>
													</a>
												</li>

											</ul>
										</div>
									</li>
									<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
										<a  href="javascript:;" class="m-menu__link m-menu__toggle">
											<span class="m-menu__item-here"></span>
											<i class="m-menu__link-icon flaticon-lifebuoy"></i>
											<span class="m-menu__link-text">
												Gestión de usuarios
											</span>
												<span class="m-menu__link-badge">
											 <span class="m-badge m-badge--danger">
																		2
												</span>
																</span>
											<i class="m-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="m-menu__submenu ">
											<span class="m-menu__arrow"></span>
											<ul class="m-menu__subnav">

												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-bullet m-menu__link-bullet--dot">
															<span></span>
														</i>
														<span class="m-menu__link-text">
															Roles
														</span>
													</a>
												</li>
												<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
													<a  href="javascript:;" class="m-menu__link m-menu__toggle">
														<i class="m-menu__link-bullet m-menu__link-bullet--dot">
															<span></span>
														</i>
														<span class="m-menu__link-text">
															Usuarios
														</span>
														<i class="m-menu__ver-arrow la la-angle-right"></i>
													</a>
													<div class="m-menu__submenu ">
														<span class="m-menu__arrow"></span>
														<ul class="m-menu__subnav">
															<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																<a  href="inner.html" class="m-menu__link ">
																	<i class="m-menu__link-icon flaticon-computer"></i>
																	<span class="m-menu__link-title">
																		<span class="m-menu__link-wrap">
																			<span class="m-menu__link-text">
																				Pendiente de aprobación
																			</span>
																			<span class="m-menu__link-badge">
																				<span class="m-badge m-badge--warning m-badge--wide">
																					10
																				</span>
																			</span>
																		</span>
																	</span>
																</a>
															</li>
															<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																<a  href="inner.html" class="m-menu__link ">
																	<i class="m-menu__link-icon flaticon-signs-2"></i>
																	<span class="m-menu__link-title">
																		<span class="m-menu__link-wrap">
																			<span class="m-menu__link-text">
																				Desactivos
																			</span>
																			<span class="m-menu__link-badge">
																				<span class="m-badge m-badge--danger m-badge--wide">
																					6
																				</span>
																			</span>
																		</span>
																	</span>
																</a>
															</li>
															<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																<a  href="inner.html" class="m-menu__link ">
																	<i class="m-menu__link-icon flaticon-clipboard"></i>
																	<span class="m-menu__link-title">
																		<span class="m-menu__link-wrap">
																			<span class="m-menu__link-text">
																				Nuevos
																			</span>
																			<span class="m-menu__link-badge">
																				<span class="m-badge m-badge--success m-badge--wide">
																					2
																				</span>
																			</span>
																		</span>
																	</span>
																</a>
															</li>
															<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																<a  href="inner.html" class="m-menu__link ">
																	<i class="m-menu__link-icon flaticon-multimedia-2"></i>
																	<span class="m-menu__link-title">
																		<span class="m-menu__link-wrap">
																			<span class="m-menu__link-text">
																				Activos
																			</span>
																			<span class="m-menu__link-badge">
																				<span class="m-badge m-badge--info m-badge--wide">
																					245
																				</span>
																			</span>
																		</span>
																	</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-bullet m-menu__link-bullet--dot">
															<span></span>
														</i>
														<span class="m-menu__link-text">
															Clients
														</span>
													</a>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-bullet m-menu__link-bullet--dot">
															<span></span>
														</i>
														<span class="m-menu__link-text">
															Audit
														</span>
													</a>
												</li>
											</ul>
										</div>
									</li>




									<li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-2" aria-haspopup="true"  m-menu-submenu-toggle="hover">
										<a  href="javascript:;" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-icon flaticon-settings"></i>
											<span class="m-menu__link-text">
												Configuración
											</span>
											<i class="m-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="m-menu__submenu m-menu__submenu--up">
											<span class="m-menu__arrow"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-2" aria-haspopup="true" >
													<span class="m-menu__link">
														<span class="m-menu__link-text">
															Configuración
														</span>
													</span>
												</li>
												<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link m-menu__toggle">
														<i class="m-menu__link-bullet m-menu__link-bullet--line">
															<span></span>
														</i>
														<span class="m-menu__link-text">
															Fase Fenológica
														</span>
														<i class="m-menu__ver-arrow la la-angle-right"></i>
													</a>

												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-bullet m-menu__link-bullet--line">
															<span></span>
														</i>
														<span class="m-menu__link-text">
															Tipo de Alerta
														</span>
													</a>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-bullet m-menu__link-bullet--line">
															<span></span>
														</i>
														<span class="m-menu__link-text">
															Tipo de Producto
														</span>
													</a>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-bullet m-menu__link-bullet--line">
															<span></span>
														</i>
														<span class="m-menu__link-text">
															Producto fase elemento rango
														</span>
													</a>
												</li>

											</ul>
										</div>
									</li>
									<li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-1" aria-haspopup="true"  m-menu-submenu-toggle="hover">
										<a  href="javascript:;" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-icon flaticon-info"></i>
											<span class="m-menu__link-text">
												ayuda
											</span>
											<i class="m-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="m-menu__submenu m-menu__submenu--up">
											<span class="m-menu__arrow"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-1" aria-haspopup="true" >
													<span class="m-menu__link">
														<span class="m-menu__link-text">
															Ayuda
														</span>
													</span>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-bullet m-menu__link-bullet--dot">
															<span></span>
														</i>
														<span class="m-menu__link-text">
															Manual
														</span>
													</a>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-bullet m-menu__link-bullet--dot">
															<span></span>
														</i>
														<span class="m-menu__link-text">
															Tutorial
														</span>
													</a>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-bullet m-menu__link-bullet--dot">
															<span></span>
														</i>
														<span class="m-menu__link-text">
															Portal
														</span>
													</a>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-bullet m-menu__link-bullet--dot">
															<span></span>
														</i>
														<span class="m-menu__link-text">
															Pricing
														</span>
													</a>
												</li>
												<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
													<a  href="inner.html" class="m-menu__link ">
														<i class="m-menu__link-bullet m-menu__link-bullet--dot">
															<span></span>
														</i>
														<span class="m-menu__link-text">
															Terms
														</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
							<!-- END: Aside Menu -->
						</div>
						<!-- END: Left Aside -->
						<div class="m-grid__item m-grid__item--fluid m-wrapper">
							<!-- BEGIN: Subheader -->
							<div class="m-subheader ">
								<div class="d-flex align-items-center">
									<div class="mr-auto">
										<h3 class="m-subheader__title ">
											Alertas
										</h3>
									</div>
									<div>
										<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
											<span class="m-subheader__daterange-label">
												<span class="m-subheader__daterange-title"></span>
												<span class="m-subheader__daterange-date m--font-brand"></span>
											</span>
											<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
												<i class="la la-angle-down"></i>
											</a>
										</span>
									</div>
								</div>
							</div>
							<!-- END: Subheader -->


		<!--Begin::Section-->
								<div class="row">
									<div class="col-xl-8">
										<div class="m-portlet m-portlet--mobile ">
											<div class="m-portlet__head">
												<div class="m-portlet__head-caption">
													<div class="m-portlet__head-title">
														<h3 class="m-portlet__head-text">
															Reiente Alertas en tu región
														</h3>
													</div>
												</div>
												<div class="m-portlet__head-tools">
													<ul class="m-portlet__nav">
														<li class="m-portlet__nav-item">
															<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
																<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
																	<i class="la la-ellipsis-h m--font-brand"></i>
																</a>
																<div class="m-dropdown__wrapper">
																	<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
																	<div class="m-dropdown__inner">
																		<div class="m-dropdown__body">
																			<div class="m-dropdown__content">
																				<ul class="m-nav">
																					<li class="m-nav__section m-nav__section--first">
																						<span class="m-nav__section-text">
																							Quick Actions
																						</span>
																					</li>
																					<li class="m-nav__item">
																						<a href="" class="m-nav__link">
																							<i class="m-nav__link-icon flaticon-share"></i>
																							<span class="m-nav__link-text">
																								Create Post
																							</span>
																						</a>
																					</li>
																					<li class="m-nav__item">
																						<a href="" class="m-nav__link">
																							<i class="m-nav__link-icon flaticon-chat-1"></i>
																							<span class="m-nav__link-text">
																								Send Messages
																							</span>
																						</a>
																					</li>
																					<li class="m-nav__item">
																						<a href="" class="m-nav__link">
																							<i class="m-nav__link-icon flaticon-multimedia-2"></i>
																							<span class="m-nav__link-text">
																								Upload File
																							</span>
																						</a>
																					</li>
																					<li class="m-nav__section">
																						<span class="m-nav__section-text">
																							Useful Links
																						</span>
																					</li>
																					<li class="m-nav__item">
																						<a href="" class="m-nav__link">
																							<i class="m-nav__link-icon flaticon-info"></i>
																							<span class="m-nav__link-text">
																								FAQ
																							</span>
																						</a>
																					</li>
																					<li class="m-nav__item">
																						<a href="" class="m-nav__link">
																							<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																							<span class="m-nav__link-text">
																								Support
																							</span>
																						</a>
																					</li>
																					<li class="m-nav__separator m-nav__separator--fit m--hide"></li>
																					<li class="m-nav__item m--hide">
																						<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
																							Submit
																						</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="m-portlet__body">
												<!--begin: Datatable -->
												<div class="m_datatable" id="m_datatable_latest_orders"></div>
												<!--end: Datatable -->
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<!--begin:: Widgets/Audit Log-->
										<div class="m-portlet m-portlet--full-height ">
											<div class="m-portlet__head">
												<div class="m-portlet__head-caption">
													<div class="m-portlet__head-title">
														<h3 class="m-portlet__head-text">
															Audit Log
														</h3>
													</div>
												</div>
												<div class="m-portlet__head-tools">
													<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
														<li class="nav-item m-tabs__item">
															<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
																Today
															</a>
														</li>
														<li class="nav-item m-tabs__item">
															<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
																Week
															</a>
														</li>
														<li class="nav-item m-tabs__item">
															<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
																Month
															</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="m-portlet__body">
												<div class="tab-content">
													<div class="tab-pane active" id="m_widget4_tab1_content">
														<div class="m-scrollable" data-scrollable="true" data-height="400" style="height: 400px; overflow: hidden;">
															<div class="m-list-timeline m-list-timeline--skin-light">
																<div class="m-list-timeline__items">
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																		<span class="m-list-timeline__text">
																			12 new users registered
																		</span>
																		<span class="m-list-timeline__time">
																			Just now
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																		<span class="m-list-timeline__text">
																			System shutdown
																			<span class="m-badge m-badge--success m-badge--wide">
																				pending
																			</span>
																		</span>
																		<span class="m-list-timeline__time">
																			14 mins
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																		<span class="m-list-timeline__text">
																			New invoice received
																		</span>
																		<span class="m-list-timeline__time">
																			20 mins
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																		<span class="m-list-timeline__text">
																			DB overloaded 80%
																			<span class="m-badge m-badge--info m-badge--wide">
																				settled
																			</span>
																		</span>
																		<span class="m-list-timeline__time">
																			1 hr
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
																		<span class="m-list-timeline__text">
																			System error -
																			<a href="#" class="m-link">
																				Check
																			</a>
																		</span>
																		<span class="m-list-timeline__time">
																			2 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
																		<span class="m-list-timeline__text">
																			Production server down
																		</span>
																		<span class="m-list-timeline__time">
																			3 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																		<span class="m-list-timeline__text">
																			Production server up
																		</span>
																		<span class="m-list-timeline__time">
																			5 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																		<span href="" class="m-list-timeline__text">
																			New order received
																			<span class="m-badge m-badge--danger m-badge--wide">
																				urgent
																			</span>
																		</span>
																		<span class="m-list-timeline__time">
																			7 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																		<span class="m-list-timeline__text">
																			12 new users registered
																		</span>
																		<span class="m-list-timeline__time">
																			Just now
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																		<span class="m-list-timeline__text">
																			System shutdown
																			<span class="m-badge m-badge--success m-badge--wide">
																				pending
																			</span>
																		</span>
																		<span class="m-list-timeline__time">
																			14 mins
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																		<span class="m-list-timeline__text">
																			New invoice received
																		</span>
																		<span class="m-list-timeline__time">
																			20 mins
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																		<span class="m-list-timeline__text">
																			DB overloaded 80%
																			<span class="m-badge m-badge--info m-badge--wide">
																				settled
																			</span>
																		</span>
																		<span class="m-list-timeline__time">
																			1 hr
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																		<span class="m-list-timeline__text">
																			New invoice received
																		</span>
																		<span class="m-list-timeline__time">
																			20 mins
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																		<span class="m-list-timeline__text">
																			DB overloaded 80%
																			<span class="m-badge m-badge--info m-badge--wide">
																				settled
																			</span>
																		</span>
																		<span class="m-list-timeline__time">
																			1 hr
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
																		<span class="m-list-timeline__text">
																			System error -
																			<a href="#" class="m-link">
																				Check
																			</a>
																		</span>
																		<span class="m-list-timeline__time">
																			2 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
																		<span class="m-list-timeline__text">
																			Production server down
																		</span>
																		<span class="m-list-timeline__time">
																			3 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																		<span class="m-list-timeline__text">
																			Production server up
																		</span>
																		<span class="m-list-timeline__time">
																			5 hrs
																		</span>
																	</div>
																	<div class="m-list-timeline__item">
																		<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																		<span href="" class="m-list-timeline__text">
																			New order received
																			<span class="m-badge m-badge--danger m-badge--wide">
																				urgent
																			</span>
																		</span>
																		<span class="m-list-timeline__time">
																			7 hrs
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="m_widget4_tab2_content"></div>
													<div class="tab-pane" id="m_widget4_tab3_content"></div>
												</div>
											</div>
										</div>
										<!--end:: Widgets/Audit Log-->
									</div>
								</div>
								<!--End::Section-->
		<!--Begin::Section-->
								<div class="row">
									<div class="col-xl-12">
										<!--begin::Portlet-->
										<div class="m-portlet " id="m_portlet">
											<div class="m-portlet__head">
												<div class="m-portlet__head-caption">
													<div class="m-portlet__head-title">
														<span class="m-portlet__head-icon">
															<i class="flaticon-map-location"></i>
														</span>
														<h3 class="m-portlet__head-text">
															Calendar
														</h3>
													</div>
												</div>
												<div class="m-portlet__head-tools">
													<ul class="m-portlet__nav">
														<li class="m-portlet__nav-item">
															<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
																<span>
																	<i class="la la-plus"></i>
																	<span>
																		Add Event
																	</span>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="m-portlet__body">
												<div id="m_calendar"></div>
											</div>
										</div>
										<!--end::Portlet-->
									</div>
								</div>
								<!--End::Section-->

			    <!-- begin::Scroll Top -->
				<div id="m_scroll_top" class="m-scroll-top">
					<i class="la la-arrow-up"></i>
				</div>
				<!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->
				<ul class="m-nav-sticky" style="margin-top: 30px;">
					<!--
					<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
						<a href="">
							<i class="la la-eye"></i>
						</a>
					</li>
					<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
						<a href="" >
							<i class="la la-comments-o"></i>
						</a>
					</li>
					-->
					<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
						<a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">
							<i class="la la-cart-arrow-down"></i>
						</a>
					</li>
					<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
						<a href="https://keenthemes.com/metronic/documentation.html" target="_blank">
							<i class="la la-code-fork"></i>
						</a>
					</li>
					<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
						<a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
							<i class="la la-life-ring"></i>
						</a>
					</li>
				</ul>
				<!-- begin::Quick Nav -->
		    	<!--begin::Base Scripts -->
				<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
				<script src="assets/demo/demo3/base/scripts.bundle.js" type="text/javascript"></script>
				<!--end::Base Scripts -->
		        <!--begin::Page Vendors -->
				<script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
				<!--end::Page Vendors -->
		        <!--begin::Page Snippets -->
				<script src="assets/app/js/dashboard.js" type="text/javascript"></script>
				<!--end::Page Snippets -->
			</body>
			<!-- end::Body -->
		</html>

		<header>

		</header>
		@yield('contenido')
		<footer>Copyrig {{date('Y')}}</footer>

		<script src="{{ asset('js/app.js')}}"></script>

	</body>


</html>
