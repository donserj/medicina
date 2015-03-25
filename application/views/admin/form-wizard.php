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
	<!-- Uniform plugin -->
	<link rel="stylesheet" href="css/uniform.default.min.css">
	<!-- Theme CSS -->
	<!--[if !IE]> -->
	<link rel="stylesheet" href="css/style.css">
	<!-- <![endif]-->
	<!--[if IE]>
	<link rel="stylesheet" href="css/style_ie.css">
	<![endif]-->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Old jquery functions -->
	<script src="js/jquery.migrate.min.js"></script>
	<!-- jQuery UI Core -->
	<script src="js/jquery.ui.core.min.js"></script>
	<!-- jQuery UI Widget -->
	<script src="js/jquery.ui.widget.min.js"></script>

	<!-- smoother animations -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Scrollable navigation -->
	<script src="js/jquery.nicescroll.min.js"></script>
	<!-- Growl Like notifications -->
	<script src="js/jquery.gritter.min.js"></script>
	<!-- Form plugin -->
	<script src="js/jquery.form.min.js"></script>
	<!-- Validation plugin -->
	<script src="js/jquery.validate.min.js"></script>
	<!-- Additional methods for validation plugin -->
	<script src="js/additional-methods.min.js"></script>
	<!-- Form wizard plugin -->
	<script src="js/jquery.form.wizard.min.js"></script>
	<!-- Uniform plugin -->
	<script src="js/jquery.uniform.min.js"></script>

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
				<li class='active open'>
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
						<li class='active'>
							<a href="form-wizard.html">Form wizard</a>
						</li>
					</ul>
				</li>
				<li>
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
					<h4><i class="icon-file-alt"></i> Forms - Form wizard</h4>
				</div>
				<div class="pull-right">
					<ul class="bread">
						<li><a href="dashboard.html">Home</a><span class="divider">/</span></li>
						<li><a href="basic-forms.html">Forms</a><span class="divider">/</span></li>
						<li class='active'>Form wizard</li>
					</ul>
				</div>
			</div>
			
			<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-list-ul"></i>
								<span>Basic wizard</span>
							</div>
							<div class="box-body box-body-nopadding">
								<form action="#" method="POST" class='form-horizontal form-bordered form-wizard' id="bb">
									<div class="step" id="firstStep">
										<div class="control-group">
											<label for="firstname" class="control-label">First name</label>
											<div class="controls">
												<input type="text" name="firstname" id="firstname" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label for="anotherelem" class="control-label">Last name</label>
											<div class="controls">
												<input type="text" name="anotherelem" id="anotherelem" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label for="additionalfield" class="control-label">Additional information</label>
											<div class="controls">
												<input type="text" name="additionalfield" id="additionalfield" class="input-xlarge">
											</div>
										</div>
									</div>
									<div class="step" id="secondStep">
										<div class="control-group">
											<label for="text" class="control-label">Gender</label>
											<div class="controls">
												<select name="gend" id="gend" class="uniform-me">
													<option value="">-- Chose one --</option>
													<option value="1">Male</option>
													<option value="2">Female</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label for="text" class="control-label">Accept policy</label>
											<div class="controls">
												<label class="checkbox"><input type="checkbox" name="policy" value="agree"> I agree the policy.</label>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<input type="reset" class="button button-basic" value="Back" id="back">
										<input type="submit" class="button button-basic-blue" value="Submit" id="next">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-list-ul"></i>
								<span>Wizard horizontal steps</span>
							</div>
							<div class="box-body box-body-nopadding">
								<form action="#" method="POST" class='form-horizontal form-bordered form-wizard' id="ss">
									<div class="step" id="firstStep">
										<ul class="wizard-steps wizard-style-2 steps-3">
											<li class='active'>
												<div class="single-step">
													<span class="title">
														Step 1
													</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														Step 2
													</span>
													<span class="circle">
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														Step 3
													</span>
													<span class="circle">
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="firstname" class="control-label">First name</label>
											<div class="controls">
												<input type="text" name="firstname" id="firstname" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label for="anotherelem" class="control-label">Last name</label>
											<div class="controls">
												<input type="text" name="anotherelem" id="anotherelem" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label for="additionalfield" class="control-label">Additional information</label>
											<div class="controls">
												<input type="text" name="additionalfield" id="additionalfield" class="input-xlarge">
											</div>
										</div>
									</div>
									<div class="step" id="secondStep">
										<ul class="wizard-steps wizard-style-2 steps-3">
											<li>
												<div class="single-step">
													<span class="title">
														Step 1
													</span>
													<span class="circle">
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														Step 2
													</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														Step 3
													</span>
													<span class="circle">
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="text" class="control-label">Gender</label>
											<div class="controls">
												<select name="gend" id="gend" class="uniform-me">
													<option value="">-- Chose one --</option>
													<option value="1">Male</option>
													<option value="2">Female</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label for="text" class="control-label">Accept policy</label>
											<div class="controls">
												<label class="checkbox"><input type="checkbox" name="policy" value="agree"> I agree the policy.</label>
											</div>
										</div>
									</div>
									<div class="step" id="thirdStep">
										<ul class="wizard-steps wizard-style-2 steps-3">
											<li>
												<div class="single-step">
													<span class="title">
														Step 1
													</span>
													<span class="circle">
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														Step 2
													</span>
													<span class="circle">
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														Step 3
													</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="text" class="control-label">Additional information</label>
											<div class="controls">
												<textarea name="textare" id="tt333" class="span12" rows="7" placeholder="You can provide additional information in here..."></textarea>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<input type="reset" class="button button-basic" value="Back" id="back">
										<input type="submit" class="button button-basic-blue" value="Submit" id="next">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-list-ul"></i>
								<span>Wizard horizontal steps #2</span>
							</div>
							<div class="box-body box-body-nopadding">
								<form action="#" method="POST" class='form-horizontal form-bordered form-wizard' id="ss">
									<div class="step" id="firstStep">
										<ul class="wizard-steps steps-3">
											<li class='active'>
												<div class="single-step">
													<span class="title">
														Step 1
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														Step 2
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														Step 3
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="firstname" class="control-label">First name</label>
											<div class="controls">
												<input type="text" name="firstname" id="firstname" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label for="anotherelem" class="control-label">Last name</label>
											<div class="controls">
												<input type="text" name="anotherelem" id="anotherelem" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label for="additionalfield" class="control-label">Additional information</label>
											<div class="controls">
												<input type="text" name="additionalfield" id="additionalfield" class="input-xlarge">
											</div>
										</div>
									</div>
									<div class="step" id="secondStep">
										<ul class="wizard-steps steps-3">
											<li>
												<div class="single-step">
													<span class="title">
														Step 1
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														Step 2
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														Step 3
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="text" class="control-label">Gender</label>
											<div class="controls">
												<select name="gend" id="gend" class="uniform-me">
													<option value="">-- Chose one --</option>
													<option value="1">Male</option>
													<option value="2">Female</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label for="text" class="control-label">Accept policy</label>
											<div class="controls">
												<label class="checkbox"><input type="checkbox" name="policy" value="agree"> I agree the policy.</label>
											</div>
										</div>
									</div>
									<div class="step" id="thirdStep">
										<ul class="wizard-steps steps-3">
											<li>
												<div class="single-step">
													<span class="title">
														Step 1
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														Step 2
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														Step 3
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="text" class="control-label">Additional information</label>
											<div class="controls">
												<textarea name="textare" id="tt333" class="span12" rows="7" placeholder="You can provide additional information in here..."></textarea>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<input type="reset" class="button button-basic" value="Back" id="back">
										<input type="submit" class="button button-basic-blue" value="Submit" id="next">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-list-ul"></i>
								<span>Wizard with validation</span>
							</div>
							<div class="box-body box-body-nopadding">
								<form action="#" method="POST" class='form-horizontal form-bordered form-wizard' id="ss">
									<div class="step" id="firstStep">
										<ul class="wizard-steps wizard-style-2 steps-3">
											<li class='active'>
												<div class="single-step">
													<span class="title">
														Step 1
													</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														Step 2
													</span>
													<span class="circle">
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														Step 3
													</span>
													<span class="circle">
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
										</ul>
										<div class="step-forms">
											<div class="control-group">
												<label for="firstname" class="control-label">First name</label>
												<div class="controls">
													<input type="text" name="firstname" id="firstname" class="input-xlarge" data-rule-required="true">
												</div>
											</div>
											<div class="control-group">
												<label for="anotherelem" class="control-label">Last name</label>
												<div class="controls">
													<input type="text" name="anotherelem" id="anotherelem" class="input-xlarge" data-rule-required="true">
												</div>
											</div>
											<div class="control-group">
												<label for="additionalfield" class="control-label">Additional information</label>
												<div class="controls">
													<input type="text" name="additionalfield" id="additionalfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="10">
												</div>
											</div>
										</div>
									</div>
									<div class="step" id="secondStep">
										<ul class="wizard-steps wizard-style-2 steps-3">
											<li>
												<div class="single-step">
													<span class="title">
														Step 1
													</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														Step 2
													</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														Step 3
													</span>
													<span class="circle">
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="text" class="control-label">Gender</label>
											<div class="controls">
												<select name="gend" id="gend" class="uniform-me" data-rule-required="true">
													<option value="">-- Chose one --</option>
													<option value="1">Male</option>
													<option value="2">Female</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label for="text" class="control-label">Accept policy</label>
											<div class="controls">
												<label class="checkbox"><input type="checkbox" name="policy" value="agree" data-rule-required="true"> I agree the policy.</label>
											</div>
										</div>
									</div>
									<div class="step" id="thirdStep">
										<ul class="wizard-steps wizard-style-2 steps-3">
											<li>
												<div class="single-step">
													<span class="title">
														Step 1
													</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														Step 2
													</span>
													<span class="circle">
														
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														Step 3
													</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
										</ul>
										<div class="control-group">
											<label for="text" class="control-label">Additional information</label>
											<div class="controls">
												<textarea name="textare" id="tt333" class="span12" rows="7" placeholder="You can provide additional information in here..."></textarea>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<input type="reset" class="button button-basic" value="Back" id="back">
										<input type="submit" class="button button-basic-blue" value="Submit" id="next">
									</div>
								</form>
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