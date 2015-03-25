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

			<!---------------------------Menu Left-->
			<?php $this->load->view("admin/parts/menu_left"); ?>

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

			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-table"></i>
								<span> Articles table </span>
							</div>
							<form method="post">
							<div class="box-body box-body-nopadding">
								<div class="highlight-toolbar">
									<div class="pull-left">
										<div class="btn-toolbar">
											<div class="btn-group">
												<a href="/admin/articles/newArticle" class="button button-basic button-icon" rel="tooltip" title=""
												   data-original-title="Creaza articol">
													<i class="icon-file"></i>
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
										<th>Nr/o</th>
										<th>Title RO</th>
										<th>Title RU</th>
										<th style="width: 70px;">Data</th>
										<th>Article type</th>
										<th style="width: 105px;"> </th>
									</tr>
									</thead>
									<tbody>
									<?php
									$nro = 1;
									foreach($data['articles'] as $article){ ?>
									<tr>
										<td><?=$nro++;?></td>
										<td><?=$article['Title_ro'];?></td>
										<td><?=$article['Title_ru'];?></td>
										<td><?=$article['AddTime'];?></td>
										<td><?=$article['ArticleType'];?></td>
										<td>
											<a href="/admin/articles/update/<?=$article['ArticleID'];?>" class="button button-basic button-icon" rel="tooltip" title="" data-original-title="Editare">
												<i class="icon-edit"></i>
											</a>
											<a href="/admin/articles/delete/<?=$article['ArticleID'];?>" class="button button-basic button-icon" rel="tooltip" title="" data-original-title="Delete">
												<i class="icon-trash"></i>
											</a>
										</td>
									</tr>
									<? } ?>
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
												<li class="active">
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
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view("admin/parts/footer"); ?>