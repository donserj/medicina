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

        <!------------Begin form-------------------->
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <div class="box-head">
                            <i class="icon-list-ul"></i>
                            <span> New Article </span>
                        </div>
                        <div class="box-body box-body-nopadding">
                            <form action="#" method="POST" class="form-horizontal">

                                <div class="control-group">
                                    <label for="addtime" class="control-label">Data</label>
                                    <div class="controls">
                                        <input type="text" name="addtime" id="addtime" class="input-medium datepick">
                                        <span class="help-block"> </span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="title_ro" class="control-label">Title RO</label>
                                    <div class="controls">
                                        <input type="text" name="title_ro" id="title_ro" placeholder="Titel RO" class="input-xlarge">
                                        <span class="help-block"> <!--This is just a supporting text--></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="title_ru" class="control-label">Title RU</label>
                                    <div class="controls">
                                        <input type="text" name="title_ru" id="title_ru" placeholder="Title RU" class="input-xlarge">
                                        <span class="help-block"> <!--This is just a supporting text--></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="select_categ" class="control-label">Select category</label>
                                    <div class="controls">
                                        <div class="input-xlarge"><select name="select_categ" id="select_categ" class='chosen-select'>
                                                <option value="1">Option-1</option>
                                                <option value="2">Option-2</option>
                                                <option value="3">Option-3</option>
                                                <option value="4">Option-4</option>
                                            </select></div>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="select_type" class="control-label">Select article type</label>
                                    <div class="controls">
                                        <div class="input-xlarge"><select name="article_type" id="select_type" class='chosen-select'>
                                                <option value="1">Option-1</option>
                                                <option value="2">Option-2</option>
                                                <option value="3">Option-3</option>
                                                <option value="4">Option-4</option>
                                            </select></div>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="textfield" class="control-label">Image</label>
                                    <div class="controls">
                                        <div class="uploader"><input type="file" name="article_img" class="uniform-me">
                                            <span class="filename" style="-webkit-user-select: none;">No file selected</span>
                                            <span class="action" style="-webkit-user-select: none;">Choose File</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="textfield" class="control-label">Visible</label>
                                    <div class="controls">
                                        <label class='checkbox-uniformed'>
                                            <input type="checkbox" name="visible" class='uniform-me'> <!--Lorem ipsum eiusmod-->
                                        </label>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="textarea" class="control-label">Text RO</label>
                                    <div class="controls">
                                        <textarea name="text_ro" class="ckeditor span12" rows="5" style="visibility: hidden; display: none;"></textarea>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="textarea" class="control-label">Text RU</label>
                                    <div class="controls">
                                        <textarea name="text_ru" class="ckeditor span12" rows="5" style="visibility: hidden; display: none;"></textarea>
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
<?php $this->load->view("admin/parts/footer"); ?>