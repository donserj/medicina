<?php $this->load->view("admin/parts/header"); ?>

<body data-layout="fixed">
	<div id="top">
		<div class="container-fluid">
			<div class="pull-left">
				<a href="#" id="brand">
					<span></span>
					ease
				</a>
				<div class="collapse-me">
					<a href="messages.html" class="button"> <i class="icon-comment icon-white"></i>
						Messages
						<span class="badge badge-important">21</span>
					</a>
					<a href="#" class="button"> <i class="icon-question-sign icon-white"></i>
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
						<i class="icon-white icon-user"></i>
						John Doe
						<span class="caret"></span>
					</a>
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
					<a href="#" class='search-settings dropdown-toggle' data-toggle="dropdown">
						<i class="icon-cog icon-white"></i>
					</a>
					<ul class="dropdown-menu">
						<li class='sort-by'>
							Sort by
							<span class='filter'>Categories</span>
							<span class="order">A-Z</span>
						</li>
						<li class="heading">Filter categories</li>
						<li class='filter active'>Categories</li>
						<li class="filter">Countries</li>
						<li class="filter">Likes</li>
						<li class="heading">Sorting order</li>
						<li class='order active'>Ascending</li>
						<li class="order">Descending</li>
					</ul>
				</div>
			</div>

			<?php $this->load->view("admin/parts/menu_left"); ?>

			<div class="status button">
				<div class="status-top">
					<div class="left">Saving changes...</div>
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
					<h4>
						<i class="icon-table"></i>
						Tables
					</h4>
				</div>
				<div class="pull-right">
					<ul class="bread">
						<li>
							<a href="dashboard.html">Home</a>
							<span class="divider">/</span>
						</li>
						<li class='active'>Tables</li>
					</ul>
				</div>
			</div>

			<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-table"></i>
								<span>Basic table</span>
							</div>
							<div class="box-body box-body-nopadding">
								<table class="table table-nomargin">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th>Platform(s)</th>
											<th>Engine version</th>
											<th>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>4</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td>N800</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-table"></i>
								<span>Bordered table</span>
							</div>
							<div class="box-body box-body-nopadding">
								<table class="table table-nomargin table-bordered">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th>Platform(s)</th>
											<th>Engine version</th>
											<th>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet
													Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>4</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td>N800</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-table"></i>
								<span>Table with controls</span>
							</div>
							<div class="box-body box-body-nopadding">
								<div class="highlight-toolbar">
									<div class="pull-left">
										<div class="btn-toolbar">
											<div class="btn-group">
												<a href="#" class="button button-basic button-icon" rel="tooltip" title="Refresh results">
													<i class="icon-refresh"></i>
												</a>
											</div>
											<div class="btn-group">
												<div class="dropdown">
													<a href="#" class="button button-basic button-icon" data-toggle="dropdown" rel="tooltip" title="Mark elements">
														<i class="icon-check-empty"></i>
														<span class="caret"></span>
													</a>
													<ul class="dropdown-menu">
														<li>
															<a href="#" class='sel-all'>All</a>
														</li>
														<li>
															<a href="#" class='sel-unread'>Unread</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="btn-group">
												<a href="#" class='button button-basic button-icon' rel="tooltip" title="Archive">
													<i class="icon-inbox"></i>
												</a>
												<a href="#" class='button button-basic button-icon' rel="tooltip" title="Mark as spam">
													<i class="icon-exclamation-sign"></i>
												</a>
												<a href="#" class='button button-basic button-icon' rel="tooltip" title="Delete">
													<i class="icon-trash"></i>
												</a>
											</div>
											<div class="btn-group">
												<div class="dropdown">
													<a href="#" class="button button-basic button-icon" data-toggle="dropdown" rel="tooltip" title="Move to folder">
														<i class="icon-folder-close"></i>
														<span class="caret"></span>
													</a>
													<ul class="dropdown-menu">
														<li>
															<a href="#">Some folder</a>
														</li>
														<li>
															<a href="#">Another folder</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="pull-right">
										<div class="btn-toolbar">
											<div class="btn-group">
												<span> <strong>1-25</strong>
													of <strong>348</strong>
												</span>
											</div>
											<div class="btn-group">
												<a href="#" class="button button-basic button-icon" data-toggle="dropdown">
													<i class="icon-angle-left"></i>
												</a>
												<a href="#" class="button button-basic button-icon" data-toggle="dropdown">
													<i class="icon-angle-right"></i>
												</a>
											</div>
											<div class="btn-group">
												<div class="dropdown">
													<a href="#" class="button button-basic button-icon" data-toggle="dropdown">
														<i class="icon-cog"></i>
														<span class="caret"></span>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="#">Settings</a>
														</li>
														<li>
															<a href="#">Account settings</a>
														</li>
														<li>
															<a href="#">Email settings</a>
														</li>
														<li>
															<a href="#">Themes</a>
														</li>
														<li>
															<a href="#">Help &amp; FAQ</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<table class="table table-nomargin table-bordered">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th>Platform(s)</th>
											<th>Engine version</th>
											<th>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet
														Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>4</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td>N800</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-table"></i>
								<span>Table with controls &amp; pagination</span>
							</div>
							<div class="box-body box-body-nopadding">
								<div class="highlight-toolbar">
									<div class="pull-left">
										<div class="btn-toolbar">
											<div class="btn-group">
												<a href="#" class='button button-basic button-icon' rel="tooltip" title="Archive">
													<i class="icon-inbox"></i>
												</a>
												<a href="#" class='button button-basic button-icon' rel="tooltip" title="Mark as spam">
													<i class="icon-exclamation-sign"></i>
												</a>
												<a href="#" class='button button-basic button-icon' rel="tooltip" title="Delete">
													<i class="icon-trash"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="pull-right">
										<div class="btn-toolbar">
											<div class="btn-group">
												<span>
													<strong>1-25</strong>
													of
													<strong>348</strong>
												</span>
											</div>
											<div class="btn-group">
												<a href="#" class="button button-basic button-icon" data-toggle="dropdown">
													<i class="icon-angle-left"></i>
												</a>
												<a href="#" class="button button-basic button-icon" data-toggle="dropdown">
													<i class="icon-angle-right"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<table class="table table-nomargin table-bordered table-pagination">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th>Platform(s)</th>
											<th>Engine version</th>
											<th>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet
															Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>4</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td>N800</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
									</tbody>
								</table>
								<div class="bottom-table">
									<div class="pull-left">
										<a href="#" class="button button-basic">Another button</a>
									</div>
									<div class="pull-right">
										<div class="pagination pagination-custom">
											<ul>
												<li>
													<a href="#">
														<i class="icon-double-angle-left"></i>
													</a>
												</li>
												<li>
													<a href="#">1</a>
												</li>
												<li class='active'>
													<a href="#">2</a>
												</li>
												<li>
													<a href="#">3</a>
												</li>
												<li>
													<a href="#">4</a>
												</li>
												<li>
													<a href="#">5</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-double-angle-right"></i>
													</a>
												</li>
											</ul>
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
								<i class="icon-table"></i>
								<span>Striped table</span>
							</div>
							<div class="box-body box-body-nopadding">
								<table class="table table-nomargin table-striped table-bordered">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th>Platform(s)</th>
											<th>Engine version</th>
											<th>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet
																Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>4</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td>N800</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-table"></i>
								<span>Hoverable table</span>
							</div>
							<div class="box-body box-body-nopadding">
								<table class="table table-nomargin table-hover table-bordered">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th>Platform(s)</th>
											<th>Engine version</th>
											<th>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet
																	Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>4</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td>N800</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-table"></i>
								<span>Dynamic tables</span>
							</div>
							<div class="box-body box-body-nopadding">
								<table class="table table-nomargin table-bordered dataTable table-striped table-hover">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th>Platform(s)</th>
											<th>Engine version</th>
											<th>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet
																		Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>4</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td>N800</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-table"></i>
								<span>Sortable table</span>
							</div>
							<div class="box-body box-body-nopadding">
								<table class="table table-nomargin table-bordered dataTable table-striped table-hover dataTable-noheader dataTable-nofooter">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th>Platform(s)</th>
											<th>Engine version</th>
											<th>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-table"></i>
								<span>TableTools</span>
							</div>
							<div class="box-body box-body-nopadding">
								<table class="table table-nomargin table-bordered dataTable table-striped table-hover dataTable-tools">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th>Platform(s)</th>
											<th>Engine version</th>
											<th>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet
																			Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td>4</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td>N800</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td>Embedded devices</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td>-</td>
											<td>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td>-</td>
											<td>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td>-</td>
											<td>U</td>
										</tr>
									</tbody>
								</table>
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