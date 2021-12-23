<!DOCTYPE html>

<html lang="utf-8">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Administrador | Mantenimientos</title>
		<meta name="description" content="Basic calendar examples">
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
				<a href="index.html">
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
							<a href="index.html">
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
											<li class="k-menu__item " aria-haspopup="true"><a href="dashboards_brand-aside.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Estadisticas</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="dashboards_navy-header.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Reportes</span></a></li>
										</ul>
									</div>
								</li>
								<li class="k-menu__item  k-menu__item--submenu k-menu__item--open k-menu__item--here" aria-haspopup="true" data-kmenu-submenu-toggle="hover"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-icon flaticon-time-2"></i><span class="k-menu__link-text">Mantenimiento</span><i class="k-menu__ver-arrow la la-angle-right"></i></a>
									<div class="k-menu__submenu "><span class="k-menu__arrow"></span>
										<ul class="k-menu__subnav">
											<li class="k-menu__item  k-menu__item--parent" aria-haspopup="true"><span class="k-menu__link"><span class="k-menu__link-text">Mantenimiento</span></span></li>
											<li class="k-menu__item  k-menu__item--active" aria-haspopup="true"><a href="admin_mantenimientos.php" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Nuevos</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="dashboards_brand-aside.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Estadisticas</span></a></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="dashboards_navy-header.html" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Reportes</span></a></li>
										</ul>
									</div>
								</li>







								<li class="k-menu__section ">
									<h4 class="k-menu__section-text">Panel de Control</h4>
									<i class="k-menu__section-icon flaticon-more-v2"></i>
								</li>
								<li class="k-menu__item  k-menu__item--submenu" aria-haspopup="true" data-kmenu-submenu-toggle="hover"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-icon flaticon2-calendar-3"></i><span class="k-menu__link-text">Usuarios</span><i class="k-menu__ver-arrow la la-angle-right"></i></a>
									<div class="k-menu__submenu "><span class="k-menu__arrow"></span>
										<ul class="k-menu__subnav">
											<li class="k-menu__item  k-menu__item--parent" aria-haspopup="true"><span class="k-menu__link"><span class="k-menu__link-text">Usuarios</span></span></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="admin_usuarios.php" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Registro de usuarios</span></a></li>
										</ul>
									</div>
								</li>
								<li class="k-menu__item  k-menu__item--submenu" aria-haspopup="true" data-kmenu-submenu-toggle="hover"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-icon flaticon2-open-text-book"></i><span class="k-menu__link-text">Materiales</span><i class="k-menu__ver-arrow la la-angle-right"></i></a>
									<div class="k-menu__submenu "><span class="k-menu__arrow"></span>
										<ul class="k-menu__subnav">
											<li class="k-menu__item  k-menu__item--parent" aria-haspopup="true"><span class="k-menu__link"><span class="k-menu__link-text">Materiales</span></span></li>
											<li class="k-menu__item " aria-haspopup="true"><a href="admin_materiales-laboratorios.php" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Materiales</span></a></li>
										</ul>
									</div>
								</li>
								<li class="k-menu__item  k-menu__item--submenu" aria-haspopup="true" data-kmenu-submenu-toggle="hover"><a href="javascript:;" class="k-menu__link k-menu__toggle"><i class="k-menu__link-icon flaticon2-browser-1"></i><span class="k-menu__link-text">Laboratorios</span><i class="k-menu__ver-arrow la la-angle-right"></i></a>
									<div class="k-menu__submenu "><span class="k-menu__arrow"></span>
										<ul class="k-menu__subnav">
											<li class="k-menu__item " aria-haspopup="true"><a href="admin_laboratorios.php" class="k-menu__link "><i class="k-menu__link-bullet k-menu__link-bullet--dot"><span></span></i><span class="k-menu__link-text">Registro de laboratorios</span></a></li>
										</ul>
									</div>
								</li>

							</ul>
						</div>
					</div>

					<!-- end:: Aside Menu -->

					<!-- begin:: Aside -->

					<!-- end:: Aside -->
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
										<span class="k-header__topbar-username k-hidden-mobile">@Administrador</span>


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
												<span class="k-nav__link-text">Configuración</span>
											</a>
										</li>
										<li class="k-nav__item k-nav__item--custom k-margin-t-15">
											<a href="../index.php" class="btn btn-outline-metal btn-hover-brand btn-upper btn-font-dark btn-sm btn-bold">Cerrar Sesión</a>
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

						<!-- begin:: Content Head -->
						<div class="k-content__head	k-grid__item">
							<div class="k-content__head-toolbar">
								<div class="k-content__head-wrapper">
									<div class="dropdown dropdown-inline k-hide" data-toggle="k-tooltip" title="Quick actions" data-placement="left">
										<button type="button" class="btn btn-sm btn-elevate btn-danger btn-bold btn-upper dropdown-toggle-" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											New
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#"><i class="la la-plus"></i> New Report</a>
											<a class="dropdown-item" href="#"><i class="la la-user"></i> Add Customer</a>
											<a class="dropdown-item" href="#"><i class="la la-cloud-download"></i> New Download</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content Body -->
						<div class="k-content__body	k-grid__item k-grid__item--fluid" id="k_content_body">
							<div class="row">
								<div class="col-lg-12">

									<!--begin::Portlet-->
									<div class="k-portlet" id="k_portlet">
										<div class="k-portlet__head k-portlet__head--lg">
											<div class="k-portlet__head-label">
												<span class="k-portlet__head-icon">
													<i class="flaticon-map-location"></i>
												</span>
												<h3 class="k-portlet__head-title">
													Calendario de Mantenimientos | LHC
												</h3>
											</div>
											<div class="k-portlet__head-toolbar">
												<div class="k-portlet__head-group">
													<div class="btn-group">
														<button type="button" class="btn btn-pill btn-elevate btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="la la-plus"></i> Nuevo Mantenimiento
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
															<div class="dropdown-divider"></div>
															<a class="dropdown-item" href="#">Separated link</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="k-portlet__body">
											<div id="k_calendar"></div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
							</div>
						</div>

						<!-- end:: Content Body -->
					</div>

					<!-- end:: Content -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin:: Topbar Offcanvas Panels -->

		<!-- begin::Offcanvas Toolbar Search -->
		<div id="k_offcanvas_toolbar_search" class="k-offcanvas-panel">
			<div class="k-offcanvas-panel__head">
				<h3 class="k-offcanvas-panel__title">
					Search
				</h3>
				<a href="#" class="k-offcanvas-panel__close" id="k_offcanvas_toolbar_search_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="k-offcanvas-panel__body">
				<div class="k-search">
					<div class="k-search__form">
						<form action="#" method="get">
							<input type="text" name="query" class="form-control" placeholder="Type here...">
						</form>
					</div>
					<div class="k-search__result">
						<div class="k-search__section">
							Documents
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img k-search__item-img--file">
								<img src="../assets/media/files/doc.svg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									AirPlus Requirements
								</a>
								<div class="k-search__item-desc">
									by Grog John
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img k-search__item-img--file">
								<img src="../assets/media/files/pdf.svg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									TechNav Documentation
								</a>
								<div class="k-search__item-desc">
									by Mary Broun
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img k-search__item-img--file">
								<img src="../assets/media/files/zip.svg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									All Framework Docs
								</a>
								<div class="k-search__item-desc">
									by Grog John
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img k-search__item-img--file">
								<img src="../assets/media/files/xml.svg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									AirPlus Requirements
								</a>
								<div class="k-search__item-desc">
									by Grog John
								</div>
							</div>
						</div>
						<div class="k-search__section">
							Members
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img">
								<img src="../assets/media/users/300_14.jpg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									Jimmy Curry
								</a>
								<div class="k-search__item-desc">
									Software Developer
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img">
								<img src="../assets/media/users/300_20.jpg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									Milena Gibson
								</a>
								<div class="k-search__item-desc">
									UI Designer
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img">
								<img src="../assets/media/users/300_21.jpg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									Stefan JohnStefan
								</a>
								<div class="k-search__item-desc">
									Marketing Manager
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-img">
								<img src="../assets/media/users/300_2.jpg" alt="" />
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									Anna Strong
								</a>
								<div class="k-search__item-desc">
									Software Developer
								</div>
							</div>
						</div>
						<div class="k-search__section">
							Files
						</div>
						<div class="k-search__item">
							<div class="k-search__item-icon">
								<i class="flaticon2-box k-font-danger"></i>
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									2 New items submitted
								</a>
								<div class="k-search__item-desc">
									Marketing Manager
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-icon">
								<i class="flaticon-psd k-font-brand"></i>
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									79 PSD files generated
								</a>
								<div class="k-search__item-desc">
									by Grog John
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-icon">
								<i class="flaticon2-supermarket k-font-warning"></i>
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									$2900 worth products sold
								</a>
								<div class="k-search__item-desc">
									Total 234 items
								</div>
							</div>
						</div>
						<div class="k-search__item">
							<div class="k-search__item-icon">
								<i class="flaticon-safe-shield-protection k-font-info"></i>
							</div>
							<div class="k-search__item-wrapper">
								<a href="#" class="k-search__item-title">
									4 New items submitted
								</a>
								<div class="k-search__item-desc">
									Marketing Manager
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end::Offcanvas Toolbar Search -->

		<!-- begin::Offcanvas Toolbar Quick Actions -->
		<div id="k_offcanvas_toolbar_quick_actions" class="k-offcanvas-panel">
			<div class="k-offcanvas-panel__head">
				<h3 class="k-offcanvas-panel__title">
					Quick Actions
				</h3>
				<a href="#" class="k-offcanvas-panel__close" id="k_offcanvas_toolbar_quick_actions_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="k-offcanvas-panel__body">
				<div class="k-grid-nav-v2">
					<a href="#" class="k-grid-nav-v2__item">
						<div class="k-grid-nav-v2__item-icon"><i class="flaticon2-box"></i></div>
						<div class="k-grid-nav-v2__item-title">Orders</div>
					</a>
					<a href="#" class="k-grid-nav-v2__item">
						<div class="k-grid-nav-v2__item-icon"><i class="flaticon-download-1"></i></div>
						<div class="k-grid-nav-v2__item-title">Uploades</div>
					</a>
					<a href="#" class="k-grid-nav-v2__item">
						<div class="k-grid-nav-v2__item-icon"><i class="flaticon2-supermarket"></i></div>
						<div class="k-grid-nav-v2__item-title">Products</div>
					</a>
					<a href="#" class="k-grid-nav-v2__item">
						<div class="k-grid-nav-v2__item-icon"><i class="flaticon2-avatar"></i></div>
						<div class="k-grid-nav-v2__item-title">Customers</div>
					</a>
					<a href="#" class="k-grid-nav-v2__item">
						<div class="k-grid-nav-v2__item-icon"><i class="flaticon2-list"></i></div>
						<div class="k-grid-nav-v2__item-title">Blog Posts</div>
					</a>
					<a href="#" class="k-grid-nav-v2__item">
						<div class="k-grid-nav-v2__item-icon"><i class="flaticon2-settings"></i></div>
						<div class="k-grid-nav-v2__item-title">Settings</div>
					</a>
				</div>
			</div>
		</div>

		<!-- end::Offcanvas Toolbar Quick Actions -->

		<!-- end:: Topbar Offcanvas Panels -->

		<!-- begin::Quick Panel -->
		<div id="k_quick_panel" class="k-quick-panel">
			<div class="k-quick-panel__nav">
				<ul class="nav nav-pills" role="tablist">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#k_quick_panel_tab_notifications" role="tab">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#k_quick_panel_tab_actions" role="tab">Actions</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#k_quick_panel_tab_settings" role="tab">Settings</a>
					</li>
				</ul>
				<button class="k-quick-panel__close" id="k_quick_panel_close_btn"><i class="la la-close"></i></button>
			</div>
			<div class="k-quick-panel__content">
				<div class="tab-content">
					<div class="tab-pane fade show k-scroll active" id="k_quick_panel_tab_notifications" role="tabpanel">

						<!--Begin::Timeline -->
						<div class="k-timeline">

							<!--Begin::Item -->
							<div class="k-timeline__item k-timeline__item--success">
								<div class="k-timeline__item-section">
									<div class="k-timeline__item-section-border">
										<div class="k-timeline__item-section-icon">
											<i class="flaticon-feed k-font-success"></i>
										</div>
									</div>
									<span class="k-timeline__item-datetime">02:30 PM</span>
								</div>
								<a href="" class="k-timeline__item-text">
									KeenThemes created new layout whith tens of new options for Keen Admin panel
								</a>
								<div class="k-timeline__item-info">
									HTML,CSS,VueJS
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="k-timeline__item k-timeline__item--danger">
								<div class="k-timeline__item-section">
									<div class="k-timeline__item-section-border">
										<div class="k-timeline__item-section-icon">
											<i class="flaticon-safe-shield-protection k-font-danger"></i>
										</div>
									</div>
									<span class="k-timeline__item-datetime">01:20 AM</span>
								</div>
								<a href="" class="k-timeline__item-text">
									New secyrity alert by Firewall & order to take aktion on User Preferences
								</a>
								<div class="k-timeline__item-info">
									Security, Fieewall
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="k-timeline__item k-timeline__item--brand">
								<div class="k-timeline__item-section">
									<div class="k-timeline__item-section-border">
										<div class="k-timeline__item-section-icon">
											<i class="flaticon2-box k-font-brand"></i>
										</div>
									</div>
									<span class="k-timeline__item-datetime">Yestardey</span>
								</div>
								<a href="" class="k-timeline__item-text">
									FlyMore design mock-ups been uploadet by designers Bob, Naomi, Richard
								</a>
								<div class="k-timeline__item-info">
									PSD, Sketch, AJ
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="k-timeline__item k-timeline__item--warning">
								<div class="k-timeline__item-section">
									<div class="k-timeline__item-section-border">
										<div class="k-timeline__item-section-icon">
											<i class="flaticon-pie-chart-1 k-font-warning"></i>
										</div>
									</div>
									<span class="k-timeline__item-datetime">Aug 13,2018</span>
								</div>
								<a href="" class="k-timeline__item-text">
									Meeting with Ken Digital Corp ot Unit14, 3 Edigor Buildings, George Street, Loondon<br> England, BA12FJ
								</a>
								<div class="k-timeline__item-info">
									Meeting, Customer
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="k-timeline__item k-timeline__item--info">
								<div class="k-timeline__item-section">
									<div class="k-timeline__item-section-border">
										<div class="k-timeline__item-section-icon">
											<i class="flaticon-notepad k-font-info"></i>
										</div>
									</div>
									<span class="k-timeline__item-datetime">May 09, 2018</span>
								</div>
								<a href="" class="k-timeline__item-text">
									KeenThemes created new layout whith tens of new options for Keen Admin panel
								</a>
								<div class="k-timeline__item-info">
									HTML,CSS,VueJS
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="k-timeline__item k-timeline__item--accent">
								<div class="k-timeline__item-section">
									<div class="k-timeline__item-section-border">
										<div class="k-timeline__item-section-icon">
											<i class="flaticon-bell k-font-accent"></i>
										</div>
									</div>
									<span class="k-timeline__item-datetime">01:20 AM</span>
								</div>
								<a href="" class="k-timeline__item-text">
									New secyrity alert by Firewall & order to take aktion on User Preferences
								</a>
								<div class="k-timeline__item-info">
									Security, Fieewall
								</div>
							</div>

							<!--End::Item -->
						</div>

						<!--End::Timeline -->
					</div>
					<div class="tab-pane fade k-scroll" id="k_quick_panel_tab_actions" role="tabpanel">

						<!--begin::Portlet-->
						<div class="k-portlet k-portlet--solid-success">
							<div class="k-portlet__head">
								<div class="k-portlet__head-label">
									<span class="k-portlet__head-icon k-hide"><i class="flaticon-stopwatch"></i></span>
									<h3 class="k-portlet__head-title">Recent Bills</h3>
								</div>
								<div class="k-portlet__head-toolbar">
									<div class="k-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="k-portlet__body">
								<div class="k-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="k-portlet__foot k-portlet__foot--sm k-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="k-portlet k-portlet--solid-focus">
							<div class="k-portlet__head">
								<div class="k-portlet__head-label">
									<span class="k-portlet__head-icon k-hide"><i class="flaticon-stopwatch"></i></span>
									<h3 class="k-portlet__head-title">Latest Orders</h3>
								</div>
								<div class="k-portlet__head-toolbar">
									<div class="k-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="k-portlet__body">
								<div class="k-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="k-portlet__foot k-portlet__foot--sm k-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="k-portlet k-portlet--solid-info">
							<div class="k-portlet__head">
								<div class="k-portlet__head-label">
									<h3 class="k-portlet__head-title">Latest Invoices</h3>
								</div>
								<div class="k-portlet__head-toolbar">
									<div class="k-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="k-portlet__body">
								<div class="k-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="k-portlet__foot k-portlet__foot--sm k-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="k-portlet k-portlet--solid-warning">
							<div class="k-portlet__head">
								<div class="k-portlet__head-label">
									<h3 class="k-portlet__head-title">New Comments</h3>
								</div>
								<div class="k-portlet__head-toolbar">
									<div class="k-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="k-portlet__body">
								<div class="k-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="k-portlet__foot k-portlet__foot--sm k-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="k-portlet k-portlet--solid-brand">
							<div class="k-portlet__head">
								<div class="k-portlet__head-label">
									<h3 class="k-portlet__head-title">Recent Posts</h3>
								</div>
								<div class="k-portlet__head-toolbar">
									<div class="k-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="k-portlet__body">
								<div class="k-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="k-portlet__foot k-portlet__foot--sm k-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->
					</div>
					<div class="tab-pane fade k-scroll" id="k_quick_panel_tab_settings" role="tabpanel">
						<form class="k-form">
							<div class="k-heading k-heading--space-sm">Notifications</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable notifications:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable audit log:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm">
										<label>
											<input type="checkbox" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Notify on new orders:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="k-separator k-separator--space-md k-separator--border-dashed"></div>
							<div class="k-heading k-heading--space-sm">Orders</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable order tracking:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm k-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable orders reports:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm k-switch--danger">
										<label>
											<input type="checkbox" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Allow order status auto update:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm k-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="k-separator k-separator--space-md k-separator--border-dashed"></div>
							<div class="k-heading k-heading--space-sm">Customers</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable customer singup:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm k-switch--success">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable customers reporting:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm k-switch--success">
										<label>
											<input type="checkbox" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Notifiy on new customer registration:</label>
								<div class="col-4 k-align-right">
									<span class="k-switch k-switch--sm k-switch--success">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
											<span></span>
										</label>
									</span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		<div id="k_scrolltop" class="k-scrolltop">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->

		<!-- end::Sticky Toolbar -->

		<!-- begin::Demo Panel -->
		<div id="k_demo_panel" class="k-demo-panel">
			<div class="k-demo-panel__head">
				<h3 class="k-demo-panel__title">
					Select A Demo

					<!--<small>5</small>-->
				</h3>
				<a href="#" class="k-demo-panel__close" id="k_demo_panel_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="k-demo-panel__body">
				<div class="k-demo-panel__item k-demo-panel__item--active">
					<div class="k-demo-panel__item-title">
						Default
					</div>
					<div class="k-demo-panel__item-preview">
						<img src="../assets/media/demos-mini/default.png" alt="" />
						<div class="k-demo-panel__item-preview-overlay">
							<a href="../default/index.html" class="btn btn-brand btn-elevate" target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="k-demo-panel__item ">
					<div class="k-demo-panel__item-title">
						Demo 2
					</div>
					<div class="k-demo-panel__item-preview">
						<img src="../assets/media/demos-mini/demo2.png" alt="" />
						<div class="k-demo-panel__item-preview-overlay">
							<a href="../demo2/index.html" class="btn btn-brand btn-elevate" target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="k-demo-panel__item ">
					<div class="k-demo-panel__item-title">
						Demo 3
					</div>
					<div class="k-demo-panel__item-preview">
						<img src="../assets/media/demos-mini/demo3.png" alt="" />
						<div class="k-demo-panel__item-preview-overlay">
							<a href="../demo3/index.html" class="btn btn-brand btn-elevate" target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="k-demo-panel__item ">
					<div class="k-demo-panel__item-title">
						Demo 4
					</div>
					<div class="k-demo-panel__item-preview">
						<img src="../assets/media/demos-mini/demo4.png" alt="" />
						<div class="k-demo-panel__item-preview-overlay">
							<a href="../demo4/index.html" class="btn btn-brand btn-elevate" target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="k-demo-panel__item ">
					<div class="k-demo-panel__item-title">
						Demo 5
					</div>
					<div class="k-demo-panel__item-preview">
						<img src="../assets/media/demos-mini/demo5.png" alt="" />
						<div class="k-demo-panel__item-preview-overlay">
							<a href="../demo5/index.html" class="btn btn-brand btn-elevate" target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" target="_blank" class="k-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
					Buy Keen Now!
				</a>
			</div>
		</div>

		<!-- end::Demo Panel -->

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
		<script src="../assets/demo/default/custom/components/calendar/basic.js" type="text/javascript"></script>

		<!--end::Page Scripts -->

		<!--begin::Global App Bundle -->
		<script src="../assets/app/scripts/bundle/app.bundle.js" type="text/javascript"></script>

		<!--end::Global App Bundle -->
	</body>

	<!-- end::Body -->
</html>
