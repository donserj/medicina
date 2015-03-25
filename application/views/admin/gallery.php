<!doctype html>
<html>
<head>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<!-- CSS for Growl like notifications -->
	<link rel="stylesheet" href="css/jquery.gritter.css">
	<!-- Theme CSS -->
	<!--[if !IE]> -->
	<link rel="stylesheet" href="css/style.css">
	<!-- <![endif]-->
	<!--[if IE]>
	<link rel="stylesheet" href="css/style_ie.css">
	<![endif]-->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- smoother animations -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Scrollable navigation -->
	<script src="js/jquery.nicescroll.min.js"></script>
	<!-- Growl Like notifications -->
	<script src="js/jquery.gritter.min.js"></script>
	<script src="js/jquery.imagesloaded.min.js"></script>
	<script src="js/jquery.masonry.min.js"></script>

	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>
	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" />

</head>

<body data-layout="fixed">
	<div id="top"> 
		<div class="container-fluid">
			<div class="pull-left">
				<a href="#" id="brand"><span></span>ease</a>
				<div class="collapse-me">
					<a href="messages.html" class="button">
						<i class="icon-comment icon-white"></i>
						Messages
						<span class="badge badge-important">21</span>
					</a>
					<a href="#" class="button">
						<i class="icon-question-sign icon-white"></i>
						Support tickets
						<span class="badge badge-info">3</span>
					</a>
					<a href="#" class="button">
						<i class="icon-truck icon-white"></i>
						Orders
						<span class="badge badge-default">5</span>
					</a>
				</div>
			</div>
			<div class="pull-right">
				<div class="btn-group">
					<a href="#" class="button dropdown-toggle" data-toggle="dropdown"><i class="icon-white icon-user"></i>John Doe<span class="caret"></span></a>
					<div class="dropdown-menu pull-right">
						<div class="right-details">
							<h6>Logged in as</h6>
							<span class="name">John Doe</span>
							<span class="email">john.doe@example.com</span>
							<a href="#" class="highlighted-link">Need help?</a>
							<ul>
								<li>
									<a href="#">Getting started</a>
								</li>
								<li>
									<a href="#">Account settings</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<a href="index.html" class="button">
					<i class="icon-signout"></i>
					Logout
				</a>
			</div>
		</div>
	</div>

	<div id="main">
		<div id="navigation">
			<div class="search">
				<i class="icon-search icon-white"></i>
				<form action="search-page.html" method="get">
					<input type="text" placeholder="Search here" />
				</form>
				<div class="dropdown">
					<a href="#" class='search-settings dropdown-toggle' data-toggle="dropdown"><i class="icon-cog icon-white"></i></a>
					<ul class="dropdown-menu">
						<li class='sort-by'>
							Sort by <span class='filter'>Categories</span> <span class="order">A-Z</span>
						</li>
						<li class="heading">
							Filter categories
						</li>
						<li class='filter active'>
							Categories
						</li>
						<li class="filter">
							Countries
						</li>
						<li class="filter">
							Likes
						</li>
						<li class="heading">
							Sorting order
						</li>
						<li class='order active'>
							Ascending
						</li>
						<li class="order">
							Descending
						</li>
					</ul>
				</div>
			</div>

			<ul class="mainNav" data-open-subnavs="multi">
				<li>
					<a href="dashboard.html"><i class="icon-home icon-white"></i><span>Dashboard</span></a>
				</li>
				<li>
					<a href="#"><i class="icon-edit icon-white"></i><span>Forms</span><span class="label">4</span></a>
					<ul class="subnav">
						<li>
							<a href="basic-forms.html">Basic forms</a>
						</li>
						<li>
							<a href="extended-forms.html">Extended form elements</a>
						</li>
						<li>
							<a href="form-validation.html">Form validation</a>
						</li>
						<li>
							<a href="form-wizard.html">Form wizard</a>
						</li>
					</ul>
				</li>
				<li class='active open'>
					<a href="#"><i class="icon-th-large icon-white"></i><span>Components</span><span class="label">7</span></a>
					<ul class="subnav">
						<li>
							<a href="messages.html">Messages &amp; Chat</a>
						</li>
						<li class='active'>
							<a href="gallery.html">Gallery &amp; thumbs</a>
						</li>
						<li>
							<a href="icons-buttons.html">Icons &amp; buttons</a>
						</li>
						<li>
							<a href="ui-elements.html">UI Elements</a>
						</li>
						<li>
							<a href="typography.html">Typography</a>
						</li>
						<li>
							<a href="bootstrap-elements.html">Bootstrap elements</a>
						</li>
						<li>
							<a href="grid.html">Grid</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="charts.html"><i class="icon-signal icon-white"></i><span>Charts</span></a>
				</li>
				<li>
					<a href="tables.php"><i class="icon-th-list icon-white"></i><span>Tables</span></a>
				</li>
				<li>
					<a href="error-pages.html"><i class="icon-warning-sign icon-white"></i><span>Error Pages</span></a>
				</li>
				<li>
					<a href="calendar.html"><i class="icon-calendar icon-white"></i><span>Calendar</span></a>
				</li>
				<li>
					<a href="file-management.html"><i class="icon-hdd icon-white"></i><span>File management</span></a>
				</li>
			<li>
					<a href="#"><i class="icon-th icon-white"></i><span>More pages</span><span class="label">4</span></a>
					<ul class="subnav">
						<li>
							<a href="invoice.html">Invoice</a>
						</li>
						<li>
							<a href="search-page.html">Search page</a>
						</li>
						<li>
							<a href="user-profile.html">User profile</a>
						</li>
						<li>
							<a href="blank-page.html">Blank page</a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="status button">
				<div class="status-top">
					<div class="left">
						Saving changes...
					</div>
				</div>
				<div class="status-bottom">
					<div class="progress">
						<div class="bar" style="width:60%">60%</div>
					</div>
				</div>
			</div>
			
		</div>
		<div id="content">
			<div class="page-header">
				<div class="pull-left">
					<h4><i class="icon-picture"></i> Gallery &amp; thumbs</h4>
				</div>
				<div class="pull-right">
					<ul class="bread">
						<li><a href="dashboard.html">Home</a><span class="divider">/</span></li>
						<li><a href="messages.html">Components<span class="divider">/</span></a></li>
						<li class='active'>Gallery &amp; thumbs</li>
					</ul>
				</div>
			</div>
			
			<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-gallery"></i>
								<span>Static gallery</span>
							</div>
							<div class="box-body box-body-nopadding">
								<div class="alert alert-info">
									Some images are done with <strong><a href="http://placeit.breezi.com/">PlaceIt by breezi</a></strong>.
								</div>
								<div class="highlight-toolbar">
									<div class="btn-toolbar">
										<div class="btn-toolbar">
											<div class="pull-left"><div class="btn-group">
												<div class="input-append">
													<input type="text" name="search" placeholder="Search images here..">
													<button rel="tooltip" title="Search" class="button button-basic button-icon"><i class="icon-search"></i></button>
												</div>
											</div>
											<div class="btn-group">
												<a href="#" rel="tooltip" title="Archive" class="button button-basic button-icon button-icon-large"><i class="icon-inbox"></i></a>
												<a href="#" rel="tooltip" title="Move" class="button button-basic button-icon button-icon-large"><i class="icon-folder-open"></i></a>
												<a href="#" rel="tooltip" title="Delete" class="button button-basic button-icon button-icon-large"><i class="icon-trash"></i></a>
											</div></div>
											<div class="pull-right"><div class="btn-toolbar">
												<div class="btn-group">
													<span><strong>1-25</strong> of <strong>348</strong></span>
												</div>
												<div class="btn-group">
													<a href="#" class="button button-basic button-icon button-icon-large" data-toggle="dropdown"><i class="icon-angle-left"></i></a>
													<a href="#" class="button button-basic button-icon button-icon-large" data-toggle="dropdown"><i class="icon-angle-right"></i></a>
												</div>
												<div class="btn-group">
													<div class="dropdown">
														<a href="#" class="button button-basic button-icon button-icon-large" data-toggle="dropdown"><i class="icon-cog"></i><span class="caret"></span></a>
														<ul class="dropdown-menu pull-right">
															<li><a href="#">Settings</a></li>
															<li><a href="#">Themes</a></li>
															<li><a href="#">Help &amp; FAQ</a></li>
														</ul>
													</div>
												</div>
											</div></div>
										</div>
									</div>
								</div>
								<div class="gallery nomargin">
									<div class="gallery-image">
										<a href="img/demo/cyan_sydneyharbourbridge.jpg">
											<img src="img/demo/cyan_sydneyharbourbridge.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Sydney harbour bridge
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/cyan_wallaby.jpg">
											<img src="img/demo/cyan_wallaby.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Wallaby
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/imac.png">
											<img src="img/demo/imac.png" alt="">
										</a>
										<div class="details">
											<span class="title">
												ease on iMac
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/macbook.png">
											<img src="img/demo/macbook.png" alt="">
										</a>
										<div class="details">
											<span class="title">
												ease on MacBook
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/scottwills_butterfly.jpg">
											<img src="img/demo/scottwills_butterfly.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Butterfly
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-gallery"></i>
								<span>Dynamic gallery (try resizing)</span>
							</div>
							<div class="box-body box-body-nopadding">
								<div class="gallery gallery-dynamic nomargin">
									<div class="gallery-image">
										<a href="img/demo/cyan_sydneyharbourbridge.jpg">
											<img src="img/demo/cyan_sydneyharbourbridge.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Sydney harbour bridge
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/cyan_wallaby.jpg">
											<img src="img/demo/cyan_wallaby.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Wallaby
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/imac.png">
											<img src="img/demo/imac.png" alt="">
										</a>
										<div class="details">
											<span class="title">
												ease on iMac
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/macbook.png">
											<img src="img/demo/macbook.png" alt="">
										</a>
										<div class="details">
											<span class="title">
												ease on MacBook
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/madness_arch2.jpg">
											<img src="img/demo/madness_arch2.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Arch
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/madness_beach.jpg">
											<img src="img/demo/madness_beach.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Beach
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/madness_boat.jpg">
											<img src="img/demo/madness_boat.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Boat
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/scottwills_autumn3.jpg">
											<img src="img/demo/scottwills_autumn3.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Autumn
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/scottwills_buffalo.jpg">
											<img src="img/demo/scottwills_buffalo.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Buffalo
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/scottwills_butterfly.jpg">
											<img src="img/demo/scottwills_butterfly.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Butterfly
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/scottwills_cat.jpg">
											<img src="img/demo/scottwills_cat.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Cat
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/scottwills_fish.jpg">
											<img src="img/demo/scottwills_fish.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Fish
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/scottwills_gardens.jpg">
											<img src="img/demo/scottwills_gardens.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Gardens
											</span>
										</div>
									</div>
									<div class="gallery-image">
										<a href="img/demo/scottwills_horse.jpg">
											<img src="img/demo/scottwills_horse.jpg" alt="">
										</a>
										<div class="details">
											<span class="title">
												Horse
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="navi-functions">
		<div class="btn-group btn-group-custom">
			<a href="#" class="button button-square layout-not-fixed notify" rel="tooltip" title="Toggle fixed-nav" data-notify-message="Fixed nav is now {{state}}" data-notify-title="Toggled fixed nav">
				<i class="icon-unlock"></i>
			</a>
			<a href="#" class="button button-square layout-not-fluid notify button-active" rel="tooltip" title="Toggle fixed-layout" data-notify-message="Fixed layout is now {{state}}" data-notify-title="Toggled fixed layout">
				<i class="icon-exchange"></i>
			</a>
			<a href="#" class="button button-square notify notify-inverse layout-no-nav" rel="tooltip" title="Toggle navigation" data-notify-message="Navigation is now {{state}}" data-notify-title="Toggled navigation">
				<i class="icon-arrow-left"></i>
			</a>
			<a href="#" class="button button-square button-active force-last notify-toggle toggle-active notify" rel="tooltip" title="Toggle notification"  data-notify-message="Notifications turned {{state}}" data-notify-title="Toggled notifications">
				<i class="icon-bullhorn"></i>
			</a>
		</div>
	</div>

</body>
</html>