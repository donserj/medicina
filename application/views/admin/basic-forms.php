<?php $this->load->view("admin/parts/header"); ?>
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
						<li class='active'>
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
					<h4><i class="icon-file-alt"></i> Forms - Basic forms</h4>
				</div>
				<div class="pull-right">
					<ul class="bread">
						<li><a href="dashboard.html">Home</a><span class="divider">/</span></li>
						<li><a href="basic-forms.html">Forms</a><span class="divider">/</span></li>
						<li class='active'>Basic forms</li>
					</ul>
				</div>
			</div>
			
			<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-list-ul"></i>
								<span>Basic elements</span>
							</div>
							<div class="box-body box-body-nopadding">
								<form action="#" method="POST" class='form-horizontal'>
									<div class="control-group">
										<label for="textfield" class="control-label">Text input</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-xlarge">
											<span class="help-block">This is just a supporting text</span>
										</div>
									</div>
									<div class="control-group">
										<label for="password" class="control-label">Password</label>
										<div class="controls">
											<input type="password" name="password" id="password" placeholder="Password input" class="input-xlarge">
											<span class="help-block">Minimum length: 9, only numeric</span>
										</div>
									</div>
									<div class="control-group">
										<label for="file" class="control-label">File-input</label>
										<div class="controls">
											<input type="file" name="file" id="file" class="input-block-level">
											<span class="help-block">Only .jpg (Max Size: 100MB)</span>
										</div>
									</div>
									<div class="control-group">
										<label for="select" class="control-label">Select</label>
										<div class="controls">
											<select name="select" id="select" class='input-large'>
												<option value="1">Option-1</option>
												<option value="2">Option-2</option>
												<option value="3">Option-3</option>
												<option value="4">Option-4</option>
												<option value="5">Option-5</option>
												<option value="6">Option-6</option>
												<option value="7">Option-7</option>
												<option value="8">Option-8</option>
												<option value="9">Option-9</option>
											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Checkboxes</label>
										<div class="controls">
											<label class='checkbox'>
												<input type="checkbox" name="checkbox"> Lorem ipsum eiusmod
											</label>
											<label class='checkbox'>
												<input type="checkbox" name="checkbox"> ipsum eiusmod
											</label>
											<label class='checkbox'>
												<input type="checkbox" name="checkbox"> Eiusmod lorem ipsum
											</label>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Radios</label>
										<div class="controls">
											<label class='radio'>
												<input type="radio" name="radio"> Lorem
											</label>
											<label class='radio'>
												<input type="radio" name="radio"> Ipsum
											</label>
											<label class='radio'>
												<input type="radio" name="radio"> Eiusmod
											</label>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">Textarea</label>
										<div class="controls">
											<textarea name="textarea" id="textarea" class="input-block-level">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore. </textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="button button-basic-blue">Save changes</button>
										<button type="button" class="button button-basic">Cancel</button>
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
								<span>Bordered form</span>
							</div>
							<div class="box-body box-body-nopadding">
								<form action="#" method="POST" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">Text input</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="password" class="control-label">Password</label>
										<div class="controls">
											<input type="password" name="password" id="password" placeholder="Password input" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Checkboxes<small>More information here</small></label>
										<div class="controls">
											<label class='checkbox'>
												<input type="checkbox" name="checkbox"> Lorem ipsum eiusmod
											</label>
											<label class='checkbox'>
												<input type="checkbox" name="checkbox"> ipsum eiusmod
											</label>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">Textarea</label>
										<div class="controls">
											<textarea name="textarea" id="textarea" rows="5" class="input-block-level">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore. </textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="button button-basic-blue">Save changes</button>
										<button type="button" class="button button-basic">Cancel</button>
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
								<span>More columns</span>
							</div>
							<div class="box-body box-body-nopadding">
								<form action="#" method="POST" class='form-horizontal form-bordered form-column'>
									<div class="span6">
										<div class="control-group">
											<label for="textfield" class="control-label">Text input</label>
											<div class="controls">
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">Password</label>
											<div class="controls">
												<input type="password" name="password" id="password" placeholder="Password input" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Checkboxes<small>More information here</small></label>
											<div class="controls">
												<label class='checkbox'>
													<input type="checkbox" name="checkbox"> Lorem ipsum eiusmod
												</label>
												<label class='checkbox'>
													<input type="checkbox" name="checkbox"> ipsum eiusmod
												</label>
											</div>
										</div>
										<div class="control-group">
											<label for="textarea" class="control-label">Textarea</label>
											<div class="controls">
												<textarea name="textarea" id="textarea" rows="5" class="input-block-level">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore. </textarea>
											</div>
										</div>
									</div>
									<div class="span6">
										<div class="control-group">
											<label for="textfield" class="control-label">Text input</label>
											<div class="controls">
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label for="password" class="control-label">Password</label>
											<div class="controls">
												<input type="password" name="password" id="password" placeholder="Password input" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Checkboxes<small>More information here</small></label>
											<div class="controls">
												<label class='checkbox'>
													<input type="checkbox" name="checkbox"> Lorem ipsum eiusmod
												</label>
												<label class='checkbox'>
													<input type="checkbox" name="checkbox"> ipsum eiusmod
												</label>
											</div>
										</div>
										<div class="control-group">
											<label for="textarea" class="control-label">Textarea</label>
											<div class="controls">
												<textarea name="textarea" id="textarea" rows="5" class="input-block-level">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore. </textarea>
											</div>
										</div>
									</div>
									<div class="span12">
										<div class="form-actions">
											<button type="submit" class="button button-basic-blue">Save changes</button>
											<button type="button" class="button button-basic">Cancel</button>
										</div>
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
								<span>Element settings (bordered form)</span>
							</div>
							<div class="box-body box-body-nopadding">
								<form action="#" method="POST" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">Uneditable-only</label>
										<div class="controls">
											<span class="uneditable-input">Just some input</span>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Disabled input</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="Small input" class="input-xlarge" disabled>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Small input</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="Small input" class="input-small">
											<span class="help-block">
												<code>.input-small</code>
											</span>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Medium input</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="Medium input" class="input-medium">
											<span class="help-block">
												<code>.input-medium</code>
											</span>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Large input</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="Large input" class="input-large">
											<span class="help-block">
												<code>.input-large</code>
											</span>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">X-Large input</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="X-Large input" class="input-xlarge">
											<span class="help-block">
												<code>.input-xlarge</code>
											</span>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">XX-Large input</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="X-Large input" class="input-xxlarge">
											<span class="help-block">
												<code>.input-xxlarge</code>
											</span>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Block-level input</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="Block-level input" class="input-block-level">
											<span class="help-block">
												<code>.input-block-level</code>
											</span>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Multiple select</label>
										<div class="controls">
											<select name="a" id="a" multiple="multiple">
												<option value="1">Option-1</option>
												<option value="2">Option-2</option>
												<option value="3">Option-3</option>
												<option value="4">Option-4</option>
												<option value="5">Option-5</option>
												<option value="6">Option-6</option>
												<option value="7">Option-7</option>
											</select>
										</div>
									</div>
									<div class="control-group success">
										<label for="textfield" class="control-label">Success state</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="Success" class="span4">
											<span class="help-inline">
												Good job.
											</span>
										</div>
									</div>
									<div class="control-group warning">
										<label for="textfield" class="control-label">Warning state</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="Warning" class="span4">
											<span class="help-inline">
												Oh wait! Check your settings again.
											</span>
										</div>
									</div>
									<div class="control-group error">
										<label for="textfield" class="control-label">Error state</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="Error" class="span4">
											<span class="help-inline">
												There seems to be an error
											</span>
										</div>
									</div>
									<div class="control-group info">
										<label for="textfield" class="control-label">Info state</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="Info" class="span4">
											<span class="help-inline">
												Just a little information!
											</span>
										</div>
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
								<span>Grid-sizing forms</span>
							</div>
							<div class="box-body box-body-nopadding">
								<form action="#" method="get" class='form-horizontal'>
									<div class="control-group">
										<label for="textfield" class="control-label">Span1</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder=".span1" class="span1">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Span2</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder=".span2" class="span2">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Span3</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder=".span3" class="span3">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Span4</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder=".span4" class="span4">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Span5</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder=".span5" class="span5">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Span6</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder=".span6" class="span6">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Span7</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder=".span7" class="span7">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Span8</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder=".span8" class="span8">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Span9</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder=".span9" class="span9">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Span10</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder=".span10" class="span10">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Span11</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder=".span11" class="span11">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Span12</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder=".span12" class="span12">
										</div>
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
								<span>Row-sizing forms</span>
							</div>
							<div class="box-body box-body-nopadding">
								<form action="#" method="get" class='form-horizontal'>
									<div class="control-group">
										<label for="textfield" class="control-label">Row 1-11</label>
										<div class="controls controls-row">
											<input type="text" name="textfield" id="textfield" placeholder=".span1" class="span1">
											<input type="text" name="textfield" id="textfield" placeholder=".span11" class="span11">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Row 2-10</label>
										<div class="controls controls-row">
											<input type="text" name="textfield" id="textfield" placeholder=".span2" class="span2">
											<input type="text" name="textfield" id="textfield" placeholder=".span10" class="span10">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Row 3-9</label>
										<div class="controls controls-row">
											<input type="text" name="textfield" id="textfield" placeholder=".span3" class="span3">
											<input type="text" name="textfield" id="textfield" placeholder=".span9" class="span9">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Row 4-8</label>
										<div class="controls controls-row">
											<input type="text" name="textfield" id="textfield" placeholder=".span4" class="span4">
											<input type="text" name="textfield" id="textfield" placeholder=".span8" class="span8">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Row 5-7</label>
										<div class="controls controls-row">
											<input type="text" name="textfield" id="textfield" placeholder=".span5" class="span5">
											<input type="text" name="textfield" id="textfield" placeholder=".span7" class="span7">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Row 6-6</label>
										<div class="controls controls-row">
											<input type="text" name="textfield" id="textfield" placeholder=".span6" class="span6">
											<input type="text" name="textfield" id="textfield" placeholder=".span6" class="span6">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Row 7-5</label>
										<div class="controls controls-row">
											<input type="text" name="textfield" id="textfield" placeholder=".span7" class="span7">
											<input type="text" name="textfield" id="textfield" placeholder=".span5" class="span5">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Row 8-4</label>
										<div class="controls controls-row">
											<input type="text" name="textfield" id="textfield" placeholder=".span8" class="span8">
											<input type="text" name="textfield" id="textfield" placeholder=".span4" class="span4">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Row 9-3</label>
										<div class="controls controls-row">
											<input type="text" name="textfield" id="textfield" placeholder=".span9" class="span9">
											<input type="text" name="textfield" id="textfield" placeholder=".span3" class="span3">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Row 10-2</label>
										<div class="controls controls-row">
											<input type="text" name="textfield" id="textfield" placeholder=".span10" class="span10">
											<input type="text" name="textfield" id="textfield" placeholder=".span2" class="span2">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Row 11-1</label>
										<div class="controls controls-row">
											<input type="text" name="textfield" id="textfield" placeholder=".span11" class="span11">
											<input type="text" name="textfield" id="textfield" placeholder=".span1" class="span1">
										</div>
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
								<span>Row-sizing forms (label above input)</span>
							</div>
							<div class="box-body">
								<form action="#" method="get" class='form-vertical'>
									<div class="row-fluid">
										<div class="span3">
											<div class="control-group">
												<label for="textfield" class="control-label">Label 3</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group">
												<label for="textfield" class="control-label">label 3</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group">
												<label for="textfield" class="control-label">Label 3</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group">
												<label for="textfield" class="control-label">label 3</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span4">
											<div class="control-group">
												<label for="textfield" class="control-label">label 4</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
										<div class="span4">
											<div class="control-group">
												<label for="textfield" class="control-label">Label 4</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
										<div class="span4">
											<div class="control-group">
												<label for="textfield" class="control-label">label 4</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span1">
											<div class="control-group">
												<label for="textfield" class="control-label">Label 1</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
										<div class="span11">
											<div class="control-group">
												<label for="textfield" class="control-label">label 11</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span2">
											<div class="control-group">
												<label for="textfield" class="control-label">Label 2</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
										<div class="span10">
											<div class="control-group">
												<label for="textfield" class="control-label">label 10</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span3">
											<div class="control-group">
												<label for="textfield" class="control-label">Label 3</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
										<div class="span9">
											<div class="control-group">
												<label for="textfield" class="control-label">label 9</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span4">
											<div class="control-group">
												<label for="textfield" class="control-label">Label 4</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
										<div class="span8">
											<div class="control-group">
												<label for="textfield" class="control-label">label 8</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span5">
											<div class="control-group">
												<label for="textfield" class="control-label">Label 5</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
										<div class="span7">
											<div class="control-group">
												<label for="textfield" class="control-label">label 7</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span6">
											<div class="control-group">
												<label for="textfield" class="control-label">Label 6</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
										<div class="span6">
											<div class="control-group">
												<label for="textfield" class="control-label">label 6</label>
												<div class="controls controls-row">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
												</div>
											</div>
										</div>
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