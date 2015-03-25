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
						<li>
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
						<li class='active'>
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
					<h4><i class="icon-edit"></i> Bootstrap elements</h4>
				</div>
				<div class="pull-right">
					<ul class="bread">
						<li><a href="dashboard.html">Home</a><span class="divider">/</span></li>
						<li><a href="messages.html">Components<span class="divider">/</span></a></li>
						<li class='active'>Bootstrap elements</li>
					</ul>
				</div>
			</div>
			
			<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-ok-sign"></i>
								<span>Bootstrap elements</span>
							</div>
							<div class="box-body">
								<div class="row-fluid">
									<h4>Buttons</h4>
								</div>
								<div class="row-fluid">
									<div class="span3">
										<h6>Basic buttons</h6>
										<p><button class="btn">Button</button>
										<button class="btn btn-primary">Primary</button></p>
										<p><button class="btn btn-info">Info</button>
										<button class="btn btn-warning">Warning</button>
										<button class="btn btn-danger">Danger</button></p>
										<p><button class="btn btn-inverse">Inverse</button>
										<button class="btn btn-success">Success</button></p>
									</div>
									<div class="span3">
										<h6>Button sizes</h6>
										<p>
											<button class="btn btn-large">Large</button>
											<button class="btn">Default</button>
										</p>
										<p><button class="btn btn-small">Small</button>
											<button class="btn btn-mini">Mini</button></p>
										<p><button class="btn-block btn btn-large">Block level</button></p>
									</div>
									<div class="span3">
										<h6>Button dropdowns</h6>
										<p><div class="btn-group">
											<a href="#" data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li>
													<a href="#">Action 1</a>
												</li>
												<li>
													<a href="#">Action 2</a>
												</li>
												<li>
													<a href="#">Action 3</a>
												</li>
											</ul>
										</div></p>
										<p><div class="btn-group">
											<a href="#" class="btn">Action</a>
											<a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li>
													<a href="#">Action 1</a>
												</li>
												<li>
													<a href="#">Action 2</a>
												</li>
												<li>
													<a href="#">Action 3</a>
												</li>
											</ul>
										</div></p>
										<div class="btn-group dropup">
											<a href="#" class="btn">Dropup</a>
											<a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li>
													<a href="#">Action 1</a>
												</li>
												<li>
													<a href="#">Action 2</a>
												</li>
												<li>
													<a href="#">Action 3</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="span3">
										<h6>Button toolbars</h6>
										<div class="btn-toolbar">
											<div class="btn-group">
												<button class="btn">1</button>
												<button class="btn">2</button>
												<button class="btn">3</button>
											</div>
											<div class="btn-group">
												<button class="btn">4</button>
												<button class="btn">5</button>
											</div>
											<div class="btn-group">
												<button class="btn">8</button>
											</div>
										</div>
										<div class="btn-toolbar">
											<div class="btn-group">
												<button class="btn">Prev</button>
												<button class="btn">Next</button>
											</div>
											<div class="btn-group">
												<button class="btn">Left</button>
												<button class="btn">Right</button>
											</div>
										</div>
									</div>
								</div>
								<div class="row-fluid">
									<h4>Navs</h4>
								</div>
								<div class="row-fluid">
									<div class="span3">
										<h6>Basic tabs</h6>
										<p>
											<ul class="nav nav-tabs">
												<li class="active">
													<a href="#">Home</a>
												</li>
												<li>
													<a href="#">Next</a>
												</li>
												<li>
													<a href="#">Profile</a>
												</li>
											</ul>
										</p>
										<p>
											<ul class="nav nav-tabs">
												<li class="active">
													<a href="#">Home</a>
												</li>
												<li>
													<a href="#">Next</a>
												</li>
												<li class='dropdown'>
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></a>
													<ul class="dropdown-menu">
														<li><a href="#">Action 1</a></li>
														<li><a href="#">Action 2</a></li>
														<li><a href="#">Action 3</a></li>
													</ul>
												</li>
											</ul>
										</p>
									</div>
									<div class="span3">
										<h6>Basic pills</h6>
										<p>
											<ul class="nav nav-pills">
												<li class="active">
													<a href="#">Home</a>
												</li>
												<li>
													<a href="#">Next</a>
												</li>
												<li>
													<a href="#">Profile</a>
												</li>
											</ul>
										</p>
										<p>
											<ul class="nav nav-pills">
												<li class="active">
													<a href="#">Home</a>
												</li>
												<li>
													<a href="#">Next</a>
												</li>
												<li class='dropdown'>
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></a>
													<ul class="dropdown-menu">
														<li><a href="#">Action 1</a></li>
														<li><a href="#">Action 2</a></li>
														<li><a href="#">Action 3</a></li>
													</ul>
												</li>
											</ul>
										</p>
									</div>
									<div class="span3">
										<h6>Stacked nav</h6>
										<p>
											<ul class="nav nav-tabs nav-stacked">
												<li class="active">
													<a href="#">Home</a>
												</li>
												<li>
													<a href="#">Next</a>
												</li>
												<li>
													<a href="#">Profile</a>
												</li>
											</ul>
										</p>
									</div>
									<div class="span3">
										<h6>Nav list</h6>
										<p>
											<ul class="nav nav-list">
												<li class="nav-header">List header</li>
												<li class="active"><a href="#">Home</a></li>
												<li><a href="#">Library</a></li>
												<li><a href="#">Applications</a></li>
												<li class="nav-header">Second header</li>
												<li class="active"><a href="#">Element</a></li>
												<li><a href="#">Profile</a></li>
												<li><a href="#">Theme settings</a></li>
											</ul>
										</p>
									</div>
								</div>
								<div class="row-fluid">
									<h4>Navbar, breadcrumbs &amp; pagination</h4> 
								</div>
								<div class="row-fluid">
									<div class="span4">
										<h6>Navbar</h6>
										<div class="navbar">
											<div class="navbar-inner">
												<a class="brand" href="#">Title</a>
												<ul class="nav">
													<li class="active"><a href="#">Home</a></li>
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
												</ul>
											</div>
										</div>
										<div class="navbar navbar-inverse">
											<div class="navbar-inner">
												<a class="brand" href="#">Title</a>
												<ul class="nav">
													<li class="active"><a href="#">Home</a></li>
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="span4">
										<h6>Breadcrumbs</h6>
										<ul class="breadcrumb">
											<li class="active">Home</li>
										</ul>
										<ul class="breadcrumb">
											<li><a href="#">Home</a> <span class="divider">/</span></li>
											<li class="active">Library</li>
										</ul>
										<ul class="breadcrumb">
											<li><a href="#">Home</a> <span class="divider">/</span></li>
											<li><a href="#">Library</a> <span class="divider">/</span></li>
											<li class="active">Data</li>
										</ul>
									</div>
									<div class="span4">
										<h6>Pagination</h6>
										<div class="pagination pagination-large">
											<ul>
												<li><a href="#">Prev</a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">Next</a></li>
											</ul>
										</div>
										<div class="pagination">
											<ul>
												<li><a href="#">Prev</a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">Next</a></li>
											</ul>
										</div>
										<div class="pagination pagination-small">
											<ul>
												<li><a href="#">Prev</a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">Next</a></li>
											</ul>
										</div>
										<div class="pagination pagination-mini">
											<ul>
												<li><a href="#">Prev</a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a href="#">Next</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row-fluid">
									<h4>Alerts, badges &amp; progress</h4>
								</div>
								<div class="row-fluid">
									<div class="span4">
										<h6>Alerts</h6>
										<div class="alert alert-success">
											<button type="button" class="close" data-dismiss="alert">&times;</button>
											<strong>Warning!</strong> Best check yo self, you're not looking too good.
										</div>
										<div class="alert alert-info">
											<button type="button" class="close" data-dismiss="alert">&times;</button>
											<strong>Warning!</strong> Best check yo self, you're not looking too good.
										</div>
										<div class="alert alert-error">
											<button type="button" class="close" data-dismiss="alert">&times;</button>
											<strong>Warning!</strong> Best check yo self, you're not looking too good.
										</div>
										<div class="alert">
											<button type="button" class="close" data-dismiss="alert">&times;</button>
											<strong>Warning!</strong> Best check yo self, you're not looking too good.
										</div>
									</div>
									<div class="span4">
										<h6>Badges</h6>
										<span class="badge">1</span>
										<span class="badge badge-info">12</span>
										<span class="badge badge-success">3</span>
										<span class="badge badge-warning">66</span>
										<span class="badge badge-important">32</span>
										<span class="badge badge-info">56</span>
										<span class="badge badge-inverse">99</span>
										<h6>Labels</h6>
										<span class="label">Default</span>
										<span class="label label-info">info</span>
										<span class="label label-success">success</span>
										<span class="label label-warning">warning</span>
										<span class="label label-important">important</span>
										<span class="label label-info">info</span>
										<span class="label label-inverse">inverse</span>
									</div>
									<div class="span4">
										<h6>Progress bars</h6>
										<div class="progress progress-info">
											<div class="bar" style="width: 20%"></div>
										</div>
										<div class="progress progress-success">
											<div class="bar" style="width: 40%"></div>
										</div>
										<div class="progress progress-warning">
											<div class="bar" style="width: 60%"></div>
										</div>
										<div class="progress progress-danger">
											<div class="bar" style="width: 80%"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar" style="width: 40%;"></div>
										</div>
										<div class="progress">
											<div class="bar bar-success" style="width: 35%;"></div>
											<div class="bar bar-warning" style="width: 20%;"></div>
											<div class="bar bar-danger" style="width: 10%;"></div>
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

