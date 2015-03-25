<?php $this->load->view("parts/header"); ?>

    <!-- Slider -->

    <!--div class="container" id="homepage-slider-container">
    <div class="row-fluid">

    <div class="span4 my-search right">
        <form method="post" action="#">
            <input type="search" placeholder="Cauta in site">
            <input type="submit" value="">
        </form>
    </div>

    <div class="span4 right">

        <?php //$this->load->view('parts/success_stories'); ?>

    </div>

    </div>
    </div-->


    <!-- Content Boxes -->
    <div class="container" style="margin-top: -50px;">
        <div class="row-fluid">
            <div class="span13" style="width: 78.85%;">

                <div class="row-fluid">
                    <div class="span15" id="article_detail" >

                        <div class="links">
                            <a href="#">Home</a> &nbsp; > &nbsp;
                            <a href="#">Link2</a> &nbsp; > &nbsp;
                            <a href="#"><?=$articleDetail['Title_'.$lang];?></a>
                        </div>

                        <h1><?=$articleDetail['Title_'.$lang];?></h1>
                        <img src="<?=$articleDetail['Image'];?>">
                        <div class="article_content">
                            <?=$articleDetail['Text_'.$lang];?>
                        </div>
                    </div>
                    <!------------------Articel comments-------------------------------->
                    <div class="span15" id="comments">

                        <h2 class="left">Discussions:</h2>
                        <a href="#" class="link-comment">2 comments</a>
                        <div class="clear"></div>
                        <ul class="media-list">
                            <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent" id="comment-10">
                                <div id="div-comment-10" class="comment-body">
                                    <div class="comment-author vcard">
                                        <img alt='' src='http://0.gravatar.com/avatar/0c619d58bc02dee1b7ed00e16b1f9428?s=80&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D80&amp;r=G' class='avatar avatar-80 photo' height='80' width='80' />			<cite class="fn"><a href='http://www.aa-team.com' rel='external nofollow' class='url'>Alexandra</a></cite> <span class="says">says:</span>		</div>

                                    <div class="comment-meta commentmetadata"><a href="http://tf.aa-team.com/wordpress/diet_and_nutrition/are-fruits-healthy-or-not/#comment-10">
                                            September 18, 2013 at 12:01 pm</a>		</div>

                                    <p>some comment</p>

                                    <div class="reply"><a rel="nofollow" class="comment-reply-login" href="http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-login.php?redirect_to=http%3A%2F%2Ftf.aa-team.com%2Fwordpress%2Fdiet_and_nutrition%2Fare-fruits-healthy-or-not%2F">Log in to Reply</a></div>
                                </div>
                                <ul class="children">
                                    <li class="comment byuser comment-author-admin bypostauthor odd alt depth-2" id="comment-11">
                                        <div id="div-comment-11" class="comment-body">
                                            <div class="comment-author vcard">
                                                <img alt='' src='http://0.gravatar.com/avatar/0c619d58bc02dee1b7ed00e16b1f9428?s=80&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D80&amp;r=G' class='avatar avatar-80 photo' height='80' width='80' />			<cite class="fn"><a href='http://www.aa-team.com' rel='external nofollow' class='url'>Alexandra</a></cite> <span class="says">says:</span>		</div>

                                            <div class="comment-meta commentmetadata"><a href="http://tf.aa-team.com/wordpress/diet_and_nutrition/are-fruits-healthy-or-not/#comment-11">
                                                    September 18, 2013 at 12:22 pm</a>		</div>

                                            <p>Testing comments</p>

                                            <div class="reply"><a rel="nofollow" class="comment-reply-login" href="http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-login.php?redirect_to=http%3A%2F%2Ftf.aa-team.com%2Fwordpress%2Fdiet_and_nutrition%2Fare-fruits-healthy-or-not%2F">Log in to Reply</a></div>
                                        </div>
                                    </li><!-- #comment-## -->
                                </ul><!-- .children -->
                            </li><!-- #comment-## -->
                        </ul>

                        <h2>Write a Reply or Comment:</h2>
                        <div class="general-form">
                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow" id="cancel-comment-reply-link" href="/wordpress/diet_and_nutrition/are-fruits-healthy-or-not/#respond" style="display:none;">Cancel Reply</a></small></h3>
                                <p class="must-log-in">You must be <a href="http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-login.php?redirect_to=http%3A%2F%2Ftf.aa-team.com%2Fwordpress%2Fdiet_and_nutrition%2Fare-fruits-healthy-or-not%2F">logged in</a> to post a comment.</p>												</div><!-- #respond -->
                        </div>

                        <div class="clearfix"></div>

                        <!--div class="comments_header">
                            <span class="left">Discussions:</span>
                            <span class="right"><a href="#"> 2 comments </a> </span>
                        </div>
                        <ul class="comments_list">
                            <li>
                                <div class="comment"></div>
                                <ul class="comment_children">
                                    <li>
                                        <div></div>
                                    </li>
                                </ul>
                            </li>
                        </ul-->

                    </div>

                </div>
            </div>


            <div class="span3 my-search" style="margin-left: -29px;">
                <form method="post" action="#">
                    <input type="search" placeholder="Cauta in site">
                    <input type="submit" value="">
                </form>
            </div>
            <!-- Slider Widget -->
            <div class="span4" style="margin-left: -29px;width: 22.4%;">
                <!-- Slider Widget -->
                <?php $this->load->view('parts/success_stories'); ?>

            </div>


            <div class="span3" id="news-box">
                <?php $this->load->view('parts/medical_news_right'); ?>
            </div>

            <div class="span3">
                <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fpentrutine.md%2F&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=80"
                        scrolling="no" frameborder="0"
                        style="border:none; overflow:hidden; height:80px;width: 200px;margin: 10px 0px 0px -42px;"
                        allowTransparency="true"></iframe>
            </div>

        </div>

        <!--div class="row-fluid" style="margin-top: 10px;">
            <?php foreach($homeBottomArticles as $homeBottomArticle){ ?>
                <div class="content-bottom-article">
                    <a href="/page/articledetail/<?=$homeBottomArticle['ArticleID'];?>">
                        <h2><?php echo $homeBottomArticle['Title_'.$lang];?></h2>
                    </a>
                    <img src="/assets/images/doctor.jpg">
                    <p>
                        <?php echo $homeBottomArticle['Text_'.$lang];?>
                    </p>
                    <div class="content-bottom-article-footer">
                        <a href="/page/articledetail/<?=$homeBottomArticle['ArticleID'];?>"> + Read more</a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row-fluid charge-more">
            <input type="button" name="charge-more" value="Incarca mai multe" class="charge-more-btn">
        </div-->

        <!--div class="dn-footer-container">
            <div class="dn-footer-about">
                <div class="row-fluid">
                    <div class="span6">
                        <h2>Recent Recipes</h2>
                        <div class="latest-recipes">
                            <?php foreach($recentRecipes1 as $recipes){ ?>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <div class="recipe-image-container">
                                            <a href="/page/articledetail/<?=$recipes['ArticleID'];?>">
                                                <img width="220" height="140" src="<?=$recipes['Logo'];?>" class="attachment-recipes-thumb wp-post-image" alt="" style="height: 70px;" />
                                                <span class="mask"> <i class="link-icon-hover"></i>	</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="span11">
                                        <h3><a href="/page/articledetail/<?=$recipes['ArticleID'];?>"><?=$recipes['Title_'.$lang];?></a></h3>
                                        <p><? echo mb_substr($recipes['Text_'.$lang], 0, 70, 'UTF-8'); ?>...</p>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>

                    </div>

                    <div class="span6">
                        <h2>Recent Recipes</h2>
                        <div class="latest-recipes">
                            <?php foreach($recentRecipes2 as $recipes){ ?>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <div class="recipe-image-container">
                                            <a href="/page/articledetail/<?=$recipes['ArticleID'];?>">
                                                <img width="220" height="140" src="<?=$recipes['Logo'];?>" class="attachment-recipes-thumb wp-post-image" alt="" style="height: 70px;" />
                                                <span class="mask"> <i class="link-icon-hover"></i>	</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="span11">
                                        <h3><a href="/page/articledetail/<?=$recipes['ArticleID'];?>"><?=$recipes['Title_'.$lang];?></a></h3>
                                        <p><? echo mb_substr($recipes['Text_'.$lang], 0, 70, 'UTF-8'); ?>...</p>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="span4">
                        <div id="recipes-top-article">
                            Top articole
                        </div>
                        <div id="separator-green">
                            <img src="/assets/images/arrow_down.png">
                        </div>
                        <div>
                            <?php foreach($topRightArticles as $article){?>
                                <p class="top-article-element"><a href="/page/articledetail/<?=$article['ArticleID'];?>"><img src="<?=$article['Logo'];?>" class="left"> <?php echo $article['Title_'.$lang];?> </a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div-->

    </div>

<?php $this->load->view("parts/footer"); ?>