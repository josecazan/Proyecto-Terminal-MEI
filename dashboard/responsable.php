<?php
include_once '../includes/conexion.php';
// Consulta tickets abiertos
$activos="SELECT COUNT(*) as total FROM tickets WHERE id_estatus_ticket = 1;";
$resultado_activos=mysqli_query($conexion,$activos);
$datos_activos=mysqli_fetch_assoc($resultado_activos);
// echo $datos_activos['total'];

// Copnsulta tickets cerrados
$cerrados="SELECT COUNT(*) as cerrados FROM tickets WHERE id_estatus_ticket = 2;";
$resultado_cerrados=mysqli_query($conexion,$cerrados);
$datos_cerrados=mysqli_fetch_assoc($resultado_cerrados);
// echo $datos_cerrados['cerrados'];

// Consulta tickets totales
$total="SELECT COUNT(*) as totales FROM tickets;";
$totales=mysqli_query($conexion,$total);
$totales_cuenta=mysqli_fetch_assoc($totales);
// echo $;


//
$consulta = "SELECT * FROM tickets;";
$tickets=$conexion->query($consulta);

?>
<!DOCTYPE html>
<html lang="en">
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Administrador | Tickets</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
		<!--end::Web font -->
		<!--begin::Page Vendors Styles -->
		<link href="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles -->
		<!--begin:: Global Mandatory Vendors -->
		<link href="../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
		<!--end:: Global Mandatory Vendors -->
		<!--begin:: Global Optional Vendors -->
		<link href="../assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />
		<!--end:: Global Optional Vendors -->
		<!--begin::Global Theme Styles -->
		<link href="../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles -->
		<!--begin::Layout Skins -->
		<link href="../assets/demo/default/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="../assets/demo/default/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="../assets/demo/default/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="../assets/demo/default/skins/aside/navy.css" rel="stylesheet" type="text/css" />
		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="../assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="k-header--fixed k-header-mobile--fixed k-aside--enabled k-aside--fixed">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="k_header_mobile" class="k-header-mobile  k-header-mobile--fixed ">
			<div class="k-header-mobile__logo">
				<a href="index.php">
					<img alt="Logo" src="../assets/media/logos/image.png" />
				</a>
			</div>
			<div class="k-header-mobile__toolbar">
				<button class="k-header-mobile__toolbar-toggler k-header-mobile__toolbar-toggler--left" id="k_aside_mobile_toggler"><span></span></button>
				<button class="k-header-mobile__toolbar-toggler" id="k_header_mobile_toggler"><span></span></button>
				<button class="k-header-mobile__toolbar-topbar-toggler" id="k_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="k-grid k-grid--hor k-grid--root">
			<div class="k-grid__item k-grid__item--fluid k-grid k-grid--ver k-page">

				<!-- begin:: Aside -->
				<button class="k-aside-close " id="k_aside_close_btn"><i class="la la-close"></i></button>
				<div class="k-aside  k-aside--fixed 	k-grid__item k-grid k-grid--desktop k-grid--hor-desktop" id="k_aside">

					<!-- begin:: Aside -->
					<div class="k-aside__brand	k-grid__item " id="k_aside_brand">
						<div class="k-aside__brand-logo">
							<a href="index.php">
								<img alt="Logo" src="../assets/media/logos/image.png" />
							</a>
						</div>
						<div class="k-aside__brand-tools">
							<button class="k-aside__brand-aside-toggler k-aside__brand-aside-toggler--left" id="k_aside_toggler"><span></span></button>
						</div>
					</div>

					<!-- end:: Aside -->

					<!-- begin:: Aside Menu -->
					<div class="k-aside-menu-wrapper	k-grid__item k-grid__item--fluid" id="k_aside_menu_wrapper">
						<div id="k_aside_menu" class="k-aside-menu " data-kmenu-vertical="1" data-kmenu-scroll="1" data-kmenu-dropdown-timeout="500">
							<ul class="k-menu__nav ">
								<li class="k-menu__item  k-menu__item--submenu k-menu__item--open k-menu__item--here" aria-haspopup="true" data-kmenu-submenu-toggle="hover"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-icon flaticon2-notepad"></i><span class="k-menu__link-text">Tickets</span><i class="k-menu__ver-arrow la la-angle-right"></i></a>
									<div class="k-menu__submenu "><span class="k-menu__arrow"></span>
										<ul class="k-menu__subnav">
											<li class="k-menu__item  k-menu__item--parent" aria-haspopup="true"><span class="k-menu__link"><span class="k-menu__link-text">Tickets</span></span></li>
											<li class="k-menu__item  k-menu__item--active" aria-haspopup="true"><a href="admin_tickets.php" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Nuevos</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="admin_tickets_estadisticas.php" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Estadisticas</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="dashboards_navy-header.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Reportes</span></a></li>
										</ul>
									</div>
								</li>
								<li class="k-menu__item  k-menu__item--submenu k-menu__item--open k-menu__item--here" aria-haspopup="true" data-kmenu-submenu-toggle="hover"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-icon flaticon-time-2"></i><span class="k-menu__link-text">Mantenimiento</span><i class="k-menu__ver-arrow la la-angle-right"></i></a>
									<div class="k-menu__submenu "><span class="k-menu__arrow"></span>
										<ul class="k-menu__subnav">
											<li class="k-menu__item  k-menu__item--parent" aria-haspopup="true"><span class="k-menu__link"><span class="k-menu__link-text">Mantenimiento</span></span></li>
											<li class="k-menu__item  k-menu__item--active" aria-haspopup="true"><a href="calendario" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Nuevos</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="dashboards_brand-aside.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Estadisticas</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="dashboards_navy-header.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Reportes</span></a></li>
										</ul>
									</div>
								</li>







						</div>
					</div>

					<!-- end:: Aside Menu -->

				</div>

				<!-- end:: Aside -->
				<div class="k-grid__item k-grid__item--fluid k-grid k-grid--hor k-wrapper" id="k_wrapper">

					<!-- begin:: Header -->
					<div id="k_header" class="k-header k-grid__item  k-header--fixed ">

						<!-- begin: Header Menu -->
						<button class="k-header-menu-wrapper-close" id="k_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						<div class="k-header-menu-wrapper" id="k_header_menu_wrapper">
							<div id="k_header_menu" class="k-header-menu k-header-menu-mobile ">
								<ul class="k-menu__nav ">

								</ul>
							</div>
						</div>

						<!-- end: Header Menu -->

						<!-- begin:: Header Topbar -->
						<div class="k-header__topbar">

							<!--begin: User bar -->
							<div class="k-header__topbar-item k-header__topbar-item--user">
								<div class="k-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px -2px">
									<div class="k-header__topbar-user">
										<span class="k-header__topbar-welcome k-hidden-mobile">Bienvenido</span>
										<span class="k-header__topbar-username k-hidden-mobile"></span>


										<!--use below badge element instead the user avatar to display username's first letter(remove k-hidden class to display it) -->
										<span class="k-badge k-badge--username k-badge--lg k-badge--brand k-hidden">A</span>
									</div>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-md">
									<div class="k-user-card k-margin-b-50 k-margin-b-30-tablet-and-mobile" style="background-image: url(../assets/media/misc/head_bg_sm.jpg)">
										<div class="k-user-card__wrapper">
											<div class="k-user-card__pic">
												<img alt="Pic" src="../assets/media/users/default.jpg" />
											</div>
											<div class="k-user-card__details">
												<div class="k-user-card__name">Administrador</div>
												<div class="k-user-card__position"></div>
											</div>
										</div>
									</div>
									<ul class="k-nav k-margin-b-10">
										<li class="k-nav__item">
											<a href="custom_user_profile-v1.html" class="k-nav__link">
												<span class="k-nav__link-icon"><i class="flaticon2-calendar-3"></i></span>
												<span class="k-nav__link-text">Mi Perfil</span>
											</a>
										</li>
										<li class="k-nav__item">
											<a href="custom_user_profile-v1.html" class="k-nav__link">
												<span class="k-nav__link-icon"><i class="flaticon2-browser-2"></i></span>
												<span class="k-nav__link-text">Mis Tareas</span>
											</a>
										</li>

										<li class="k-nav__item">
											<a href="custom_user_profile-v1.html" class="k-nav__link">
												<span class="k-nav__link-icon"><i class="flaticon2-gear"></i></span>
												<span class="k-nav__link-text">Configuraci??n</span>
											</a>
										</li>
										<li class="k-nav__item k-nav__item--custom k-margin-t-15">
											<a href="../index.php" class="btn btn-outline-metal btn-hover-brand btn-upper btn-font-dark btn-sm btn-bold">Cerrar Sesi??n</a>
										</li>
									</ul>
								</div>
							</div>

							<!--end: User bar -->

							<!--begin: Quick panel toggler -->


							<!--end: Quick panel toggler -->
						</div>

						<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->

					<!-- begin:: Content -->
					<div class="k-content	k-grid__item k-grid__item--fluid k-grid k-grid--hor" id="k_content">

						<!-- begin:: Content Body -->
						<div class="k-content__body	k-grid__item k-grid__item--fluid" id="k_content_body">

							<!--begin::Dashboard 1-->

							<!--begin::Row-->
							<div class="row">
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1" style="border:#dddada 0.5px solid;">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid k-portlet--tabs">
										<div class="k-portlet__head">
											<div class="k-portlet__head-label">
												<h3 class="k-portlet__head-title">
													Solicitudes
												</h3>
											</div>
											<div class="k-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold" role="tablist">
													<li class="nav-item">
														<a class="nav-link active show" data-toggle="tab" href="#k_portlet_tabs_1_1_content" role="tab" aria-selected="false">
															Hoy
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="k-portlet__body">
											<div class="tab-content">
												<div class="tab-pane fade active show" id="k_portlet_tabs_1_1_content" role="tabpanel">
													<div class="k-widget-5">
														<div class="k-widget-5__item k-widget-5__item--info">
															<div class="k-widget-5__item-info">
																<table>
																	<thead>
																		<tr>
																			<th></th>
																		</tr>
																	</thead>


																	<tbody>
																		<?php

																		$conteo = 0;
																		foreach ($tickets as $ticket) {
																			$conteo = $conteo + 1;
																			?>
																		<tr>
																			<td>
																				<a href="#" class="k-widget-5__item-title">
																					<?php echo $ticket['asunto']; ?>
																				</a>
																				<div class="k-widget-5__item-datetime">
																					<?php echo $ticket['fecha_creacion']; ?>
																				</div>
																				<br>
																			</td>
																		</tr>
																		<?php
																	}
																	?>

																	</tbody>
																</table>
																<!--  -->

																	<!--  -->
															</div>
														</div>
													</div>
													<!-- Final de Solicitudes -->
												</div>
												<div class="tab-pane fade " id="k_portlet_tabs_1_3_content" role="tabpanel">
													<div class="k-widget-5 ">
														<div class="k-widget-5__item k-widget-5__item--success">
															<div class="k-widget-5__item-info ">
																<a href="#" class="k-widget-5__item-title">
																	NYCS internal discussion
																</a>
																<div class="k-widget-5__item-datetime">
																	03: 00 PM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--danger">
															<div class="k-widget-5__item-info ">
																<a href="#" class="k-widget-5__item-title">
																	Replace datatables rows color
																</a>
																<div class="k-widget-5__item-datetime">
																	12:00 AM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--danger">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	Replace datatables rows color
																</a>
																<div class="k-widget-5__item-datetime">
																	12:00 AM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--brand">
															<div class="k-widget-5__item-info">
																<a href="#" class="k-widget-5__item-title">
																	Export Navitare booking table
																</a>
																<div class="k-widget-5__item-datetime">
																	01:20 PM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--brand">
															<div class="k-widget-5__item-info ">
																<a href="#" class="k-widget-5__item-title">
																	Export Navitare booking table
																</a>
																<div class="k-widget-5__item-datetime ">
																	01:20 PM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="k-widget-5__item k-widget-5__item--info">
															<div class="k-widget-5__item-info ">
																<a href="#" class="k-widget-5__item-title">
																	Management meeting
																</a>
																<div class="k-widget-5__item-datetime">
																	09:30 AM
																</div>
															</div>
															<div class="k-widget-5__item-check">
																<label class="k-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1" style="border:#dddada 0.5px solid">
									<!-- Inicio Estatus Tickets -->
									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid">
										<div class="k-portlet__head  k-portlet__head--noborder">
											<div class="k-portlet__head-label">
												<h3 class="k-portlet__head-title">Estatus Tickets</h3>
											</div>
											<div class="k-portlet__head-toolbar">
												<div class="k-portlet__head-toolbar-wrapper">
														<div class="k-portlet__head-actions">
															<a href="admin_tickets.php" class="btn btn-default btn-sm btn-bold btn-upper">Ver Todos</a>
														</div>
												</div>
											</div>
										</div>
										<div class="k-portlet__body k-portlet__body--fluid">
											<div class="k-widget-21">
												<div class="k-widget-21__title">
													<div class="k-widget-21__label">Total: <?php echo $totales_cuenta['totales']; ?></div>


													<img src="../assets/media/misc/iconbox_bg.png" class="k-widget-21__bg" alt="bg" />
												</div>
												<div class="k-widget-21__data">

													<!--Doc: For the chart legend bullet colors can be changed with state helper classes: k-bg-success, k-bg-info, k-bg-danger. Refer: components/custom/colors.html -->
													<div class="k-widget-21__legends">
														<div class="k-widget-21__legend">
															<i class="k-bg-brand"></i>
															<span>ABIERTOS</span>
														</div>
														<div class="k-widget-21__legend">
															<i class="k-shape-bg-color-4"></i>
															<span>CERRADOS</span>
														</div>
														<div class="k-widget-21__legend">
															<i class="k-shape-bg-color-3"></i>
															<span>SIN ESTATUS</span>
														</div>
													</div>
													<div class="k-widget-21__chart">
														<div class="k-widget-21__stat">100%</div>

														<!--Doc: For the chart initialization refer to "widgetTechnologiesChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
														<canvas id="k_widget_technologies_chart" style="height: 110px; width: 110px;"></canvas>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>

							</div>

							<!--end::Row-->
							<!-- Inicio tabla Mantenimiento -->
							<!--begin::Row-->
							<div class="row">
								<div class="col-lg-12 col-xl-12 order-lg-2 order-xl-1" style="border:#dddada 0.5px solid">

								</div>

								<div class="col-lg-12 col-xl-4 order-lg-2 order-xl-1">

								</div>
								<div class="col-lg-12 col-xl-12 order-lg-3 order-xl-1" style="border:#dddada 0.5px solid">

									<!--begin::Portlet-->
									<div class="k-portlet k-portlet--height-fluid">
										<div class="k-portlet__head k-portlet__head--lg k-portlet__head--noborder k-portlet__head--break-sm">
											<div class="k-portlet__head-label">
												<h3 class="k-portlet__head-title">Mantenimientos</h3>
											</div>
											<div class="k-portlet__head-toolbar">
												<div class="k-portlet__head-wrapper k-form">
													<div class="k-form__group k-form__group--inline k-margin-r-10">
														<div class="k-form__label">Ordenar Por:</div>
														<div class="k-form__control" style="width: 160px;">
															<select class="form-control bootstrap-select" id="k_form_status" title="Estatus">
																<option value="1">Pendientes</option>
																<option value="2">Realizados</option>
																<option value="3">Pr??ximos</option>
															</select>
														</div>
													</div>
													<a href="calendario" class="btn btn-brand btn-upper btn-bold">Nuevo Mantenimiento</a>
												</div>
											</div>
										</div>
										<div class="k-portlet__body k-portlet__body--fit">

											<!--Doc: For the datatable initialization refer to "recentOrdersInit" function in "src\theme\app\scripts\custom\dashboard.js" -->
											<div class="k-datatable" id="k_recent_orders"></div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
							</div>
							<!-- Final Mantenimiento -->
							<!--end::Row-->

							<!--end::Dashboard 1-->
						</div>

						<!-- end:: Content Body -->
					</div>

					<!-- end:: Content -->

				</div>
			</div>
		</div>

		<!-- end:: Page -->


		<!-- begin::Scrolltop -->
		<div id="k_scrolltop" class="k-scrolltop">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- begin::Global Config -->
		<script>
			var KAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"metal": "#c4c5d6",
						"light": "#ffffff",
						"accent": "#00c5dc",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995",
						"focus": "#9816f4"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="../assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/theme/framework/vendors/bootstrap-datepicker/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/theme/framework/vendors/bootstrap-timepicker/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/theme/framework/vendors/bootstrap-markdown/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/theme/framework/vendors/jquery-validation/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/theme/framework/vendors/sweetalert2/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="../assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="../assets/app/scripts/custom/dashboard.js" type="text/javascript"></script>

		<!--end::Page Scripts -->

		<!--begin::Global App Bundle -->
		<script src="../assets/app/scripts/bundle/app.bundle.js" type="text/javascript"></script>

		<!--end::Global App Bundle -->
	</body>

	<!-- end::Body -->
</html>
