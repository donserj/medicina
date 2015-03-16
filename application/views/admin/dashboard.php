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
					<a href="#" class="button dropdown-toggle" data-toggle="dropdown">
						<i class="icon-white icon-user"></i> <?=$online['Login'];?> <span class="caret"></span></a>
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
				<a href="/admin/auth?out=exit" class="button">
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
				<li class='active'>
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
					<a href="tables.html"><i class="icon-th-list icon-white"></i><span>Tables</span></a>
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
					<h4><i class="icon-home"></i> Dashboard</h4>
				</div>
				<div class="pull-right">
					<ul class="bread">
						<li><a href="dashboard.html">Home</a><span class="divider">/</span></li>
						<li class='active'>Dashboard</li>
					</ul>
				</div>
			</div>
			<div class="content-highlighted">
				<ul class="quick" data-collapse="collapse">
					<li>
						<a href="#"><img src="img/icons/statistics.png" alt="" /><span>Check statistics</span></a>
					</li>
					<li>
						<a href="#"><img src="img/icons/order-149.png" alt="" /><span>Task list</span></a>
					</li>
					<li>
						<a href="#"><img src="img/icons/shipping.png" alt="" /><span>Recent orders</span></a>
					</li>
					<li>
						<a href="#"><img src="img/icons/my-account.png" alt="" /><span>Account settings</span></a>
					</li>
					<li>
						<a href="#"><img src="img/icons/full-time.png" alt="" /><span>Cronjobs</span></a>
					</li>
					<li>
						<a href="#"><img src="img/icons/date.png" alt="" /><span>Events</span></a>
					</li>
					<li>
						<a href="#"><img src="img/icons/lock.png" alt="" /><span>Security settings</span></a>
					</li>
					<li>
						<a href="#"><img src="img/icons/refresh.png" alt="" /><span>Renew cache</span></a>
					</li>
				</ul>
			</div>

			<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span6">
						<div class="box">
							<div class="box-head">
								<i class="icon-bar-chart"></i>
								<span>Statistics</span>
								<div class="actions">
									<a href="#" rel='tooltip' title="Print statistics"><i class="icon-print"></i></a>
									<a href="#" rel='tooltip' title="Save for later"><i class="icon-save"></i></a>
								</div>
							</div>
							<div class="box-body">
								<ul class="charts">
									<li>
										<div class="chart" data-percent="76">76%</div>
										<span>HDD space</span>
									</li>
									<li>
										<div class="chart" data-percent="15">15%</div>
										<span>Memory used</span>
									</li>
									<li>
										<div class="chart" data-percent="41">41%</div>
										<span>Traffic</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="box">
							<div class="box-head">
								<i class="icon-tasks"></i>
								<span>Pending tasks</span>
								<div class="actions">
									<a href="#" rel='tooltip' title="Share"><i class="icon-share"></i></a>
									<a href="#" rel='tooltip' title="Mark all as done" data-placement="left"><i class="icon-check"></i></a>
								</div>
							</div>
							<div class="box-body box-body-nopadding">
								<ul class="tasklist">
									<li class='bookmarked'>
										<label class='checkbox'><input type="checkbox"></label>
										<span class="task"><i class="icon-gift"></i><span>Buy christmas presents</span></span>
										<span class="task-actions">
											<a href="#" class='task-bookmark' rel="tooltip" title="Important"><i class="icon-bookmark-empty"></i></a>
										</span>
									</li>
									<li>
										<label class='checkbox'><input type="checkbox"></label>
										<span class="task"><i class="icon-glass"></i><span>Get a drink with your friend</span></span>
										<span class="task-actions">
											<a href="#" class='task-bookmark' rel="tooltip" title="Important"><i class="icon-bookmark-empty"></i></a>
										</span>
									</li>
									<li class='done'>
										<label class='checkbox'><input type="checkbox" checked="checked"></label>
										<span class="task"><i class="icon-briefcase"></i><span>Check for new mails</span></span>
										<span class="task-actions">
											<a href="#" class='task-bookmark' rel="tooltip" title="Important"><i class="icon-bookmark-empty"></i></a>
										</span>
									</li>
									<li>
										<label class='checkbox'><input type="checkbox"></label>
										<span class="task"><i class="icon-retweet"></i><span>Go and tweet some stuff</span></span>
										<span class="task-actions">
											<a href="#" class='task-bookmark' rel="tooltip" title="Important"><i class="icon-bookmark-empty"></i></a>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-comments"></i>
								<span>Messages</span>
								<div class="actions">
									<a href="#" rel='tooltip' title="Save conversation"><i class="icon-save"></i></a>
									<a href="#" rel='tooltip' title="Show history" data-placement="left"><i class="icon-time"></i></a>
								</div>
							</div>
							<div class="box-body box-body-nopadding">
								<ul class="messages">
									<li class="left">
										<div class="image">
											<img src="img/user-1.jpg" alt="">
										</div>
										<div class="message">
											<span class="name">Johny Doesy</span>
											<p>Lorem ipsum aute ut ullamco et nisi ad. Lorem ipsum adipisicing nisi Excepteur eiusmod ex culpa laboris. Lorem ipsum est ut irure ad esse minim ullamco. Lorem ipsum Duis est eu occaecat commodo non dolore cupidatat ut id laborum nisi culpa eu occaecat sit. Lorem ipsum aute laborum nostrud incididunt proident amet. </p>
											<span class="time">
												12 minutes ago
											</span>
										</div>
									</li>
									<li class="right">
										<div class="image">
											<img src="img/user-2.jpg" alt="">
										</div>
										<div class="message">
											<span class="name">John Doe</span>
											<p>Lorem ipsum aute ut ullamco et nisi ad. Lorem ipsum adipisicing nisi Excepteur eiusmod ex culpa laboris. Lorem ipsum est ut irure ad esse minim ullamco. Lorem ipsum Duis est eu occaecat commodo non dolore cupidatat ut id laborum nisi culpa eu occaecat sit. Lorem ipsum aute laborum nostrud incididunt proident amet. </p>
											<span class="time">
												12 minutes ago
											</span>
										</div>
									</li>
									<li class="left">
										<div class="image">
											<img src="img/user-1.jpg" alt="">
										</div>
										<div class="message">
											<span class="name">Johny Doesy</span>
											<p>Lorem ipsum aute ut ullamco et nisi ad. Lorem ipsum adipisicing nisi Excepteur eiusmod ex culpa laboris. Lorem ipsum est ut irure ad esse minim ullamco. Lorem ipsum Duis est eu occaecat commodo non dolore cupidatat ut id laborum nisi culpa eu occaecat sit. Lorem ipsum aute laborum nostrud incididunt proident amet. </p>
											<span class="time">
												12 minutes ago
											</span>
										</div>
									</li>
									<li class="typing">
										<span class="name">John Doe</span> is typing <img src="img/loading.gif" alt="">
									</li>
									<li class="insert">
										<div class="test">
											<a href="#" class="button button-highlighted"><i class="icon-camera"></i></a>
										</div>
										<div class="text">
											<div class="dropup">
												<a href="#" data-toggle="dropdown" class="dropdown-toggle">
													<i class="icon-caret-up"></i>
												</a>
												<div class='dropdown-menu pull-right'>
													<ul class="smilies">
														<li>
															<a href="#">
																<img src="img/icons/smiley.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-zipper.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-yell.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-wink.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-twist.png" alt="">
															</a>
														</li>
													</ul>
													<ul class="smilies">
														<li>
															<a href="#">
																<img src="img/icons/smiley-sweat.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-surprise.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-slim.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-sleep.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-sad.png" alt="">
															</a>
														</li>
													</ul>
													<ul class="smilies">
														<li>
															<a href="#">
																<img src="img/icons/smiley-roll.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-red.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-razz.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-neutral.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-nerd.png" alt="">
															</a>
														</li>
													</ul>
													<ul class="smilies">
														<li>
															<a href="#">
																<img src="img/icons/smiley-neutral.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-mad.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-lol.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-kitty.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-kiss.png" alt="">
															</a>
														</li>
													</ul>
													<ul class="smilies">
														<li>
															<a href="#">
																<img src="img/icons/smiley-grin.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-fat.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-eek.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-draw.png" alt="">
															</a>
														</li>
														<li>
															<a href="#">
																<img src="img/icons/smiley-cry.png" alt="">
															</a>
														</li>
													</ul>
												</div>
											</div>
											<input type="text" name="text" placeholder="Write here..." class="input-block-level">
										</div>
										<div class="submit">
											<input type="submit" value="Send" class='button button-highlighted'>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head box-tabs">
								<ul class="tabs">
									<li class="active">
										<a href="#lineChart" data-toggle="tab">
											<i class="icon-bar-chart"></i>
											Line-Chart
										</a>
									</li>
									<li>
										<a href="#pieChart" data-toggle="tab">Pie-Chart</a>
									</li>
									<li>
										<a href="#barChart" data-toggle="tab">Bar-Chart</a>
									</li>
								</ul>
								<div class="actions">
									<a href="#" rel='tooltip' title="Open in Popup"><i class="icon-external-link"></i></a>
									<a href="#" rel='tooltip' title="Update data" data-placement="left"><i class="icon-refresh"></i></a>
								</div>
							</div>
							<div class="box-body box-body-bigpadding">
								<div class="tab-content">
									<div class="tab-pane active" id="lineChart">
										<div class="flot-line"></div>
									</div>
									<div class="tab-pane" id="pieChart">
										<div class="flot-pie"></div>
									</div>
									<div class="tab-pane" id="barChart">
										<div class="flot-bar"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<div class="box">
							<div class="box-head">
								<i class="icon-calendar"></i>
								<span>Calendar</span>
							</div>
							<div class="box-body box-body-nopadding">
								<div class="calendar"></div>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="box">
							<div class="box-head">
								<i class="icon-list"></i>
								<span>Basic horizontal form</span>
							</div>
							<div class="box-body box-body-nopadding">
								<form action="#" method="POST" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">Text input</label>
										<div class="controls">
											<input type="text" name="textfield" id="textfield" placeholder="Text input" class="input-block-level">
										</div>
									</div>
									<div class="control-group">
										<label for="password" class="control-label">Password</label>
										<div class="controls">
											<input type="password" name="password" id="password" placeholder="Password input" class="input-block-level">
										</div>
									</div>
									<div class="control-group">
										<label for="select" class="control-label">Select</label>
										<div class="controls">
											<select name="select" id="select" class='chosen-select input-block-level'>
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
										<label class="control-label">Radio inline</label>
										<div class="controls">
											<label class='radio inline'>
												<input type="radio" name="radio"> Lorem
											</label>
											<label class='radio inline'>
												<input type="radio" name="radio"> Ipsum
											</label>
											<label class='radio inline'>
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