<?php $this->load->view("parts/header"); ?>

    <!-- Slider -->
    <div class="dn-slider">
    <div class="container" id="homepage-slider-container">
    <div class="row-fluid">
    <div style="height: 322px;" class="slider-slideshow span12">
        <!-- START REVOLUTION SLIDER 4.6.0 fullwidth mode -->

        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:350px;">
            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:350px;height:350px;">
                <ul>	<!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                        <!-- MAIN IMAGE -->
                        <img src="/assets/images/vegetable.jpg"  alt="vegetable"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption large_text lfr tp-resizeme"
                             data-x="50"
                             data-y="58"
                             data-speed="300"
                             data-start="1000"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Dieticians Versus
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption medium_text lfr tp-resizeme"
                             data-x="54"
                             data-y="109"
                             data-speed="300"
                             data-start="1500"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Why dietitians are the perfect nutrition coaches?
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                        <!-- MAIN IMAGE -->
                        <img src="/assets/images/wallpaper-19045658.jpg"  alt="wallpaper-19045658"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption large_text lft tp-resizeme"
                             data-x="20"
                             data-y="72"
                             data-speed="300"
                             data-start="1000"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Tomatoes & Garlic Pork Stew
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption medium_text lfb tp-resizeme"
                             data-x="27"
                             data-y="125"
                             data-speed="300"
                             data-start="1500"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Hard cheese macaroni cheese cheeseburger. Feta airedale edam port-salut babybel say cheese rubber cheese dolcelatte.
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>	</div>

            <script type="text/javascript">

                /******************************************
                 -	PREPARE PLACEHOLDER FOR SLIDER	-
                 ******************************************/

                var setREVStartSize = function() {
                    var	tpopt = new Object();
                    tpopt.startwidth = 960;
                    tpopt.startheight = 350;
                    tpopt.container = jQuery('#rev_slider_1_1');
                    tpopt.fullScreen = "off";
                    tpopt.forceFullWidth="off";

                    tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
                };

                /* CALL PLACEHOLDER */
                setREVStartSize();


                var tpj=jQuery;
                tpj.noConflict();
                var revapi1;

                tpj(document).ready(function() {

                    if(tpj('#rev_slider_1_1').revolution == undefined)
                        revslider_showDoubleJqueryError('#rev_slider_1_1');
                    else
                        revapi1 = tpj('#rev_slider_1_1').show().revolution(
                            {
                                dottedOverlay:"none",
                                delay:5000,
                                startwidth:960,
                                startheight:350,
                                hideThumbs:200,

                                thumbWidth:100,
                                thumbHeight:50,
                                thumbAmount:2,

                                minHeight:290,

                                simplifyAll:"off",

                                navigationType:"bullet",
                                navigationArrows:"solo",
                                navigationStyle:"navbar",

                                touchenabled:"on",
                                onHoverStop:"on",
                                nextSlideOnWindowFocus:"off",

                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                drag_block_vertical: false,



                                keyboardNavigation:"off",

                                navigationHAlign:"center",
                                navigationVAlign:"bottom",
                                navigationHOffset:0,
                                navigationVOffset:20,

                                soloArrowLeftHalign:"left",
                                soloArrowLeftValign:"center",
                                soloArrowLeftHOffset:20,
                                soloArrowLeftVOffset:0,

                                soloArrowRightHalign:"right",
                                soloArrowRightValign:"center",
                                soloArrowRightHOffset:20,
                                soloArrowRightVOffset:0,

                                shadow:3,
                                fullWidth:"on",
                                fullScreen:"off",

                                spinner:"spinner0",

                                stopLoop:"off",
                                stopAfterLoops:-1,
                                stopAtSlide:-1,

                                shuffle:"off",

                                autoHeight:"off",
                                forceFullWidth:"off",



                                hideThumbsOnMobile:"off",
                                hideNavDelayOnMobile:1500,
                                hideBulletsOnMobile:"off",
                                hideArrowsOnMobile:"off",
                                hideThumbsUnderResolution:0,

                                hideSliderAtLimit:0,
                                hideCaptionAtLimit:0,
                                hideAllCaptionAtLilmit:0,
                                startWithSlide:0					});




                });	/*ready*/

            </script>


        </div><!-- END REVOLUTION SLIDER -->
    </div>

    <div class="span4 my-search">
        <form method="post" action="#">
            <input type="search" placeholder="Cauta in site">
            <input type="submit" value="">
        </form>
    </div>
    <!-- Slider Widget -->
    <div class="span4">
        <!-- Slider Widget -->
        <?php $this->load->view('parts/success_stories'); ?>

    </div>

    </div>
    </div>
    </div>

    <!-- Content Boxes -->
    <div class="container" style="margin-top: -50px;">
        <div class="row-fluid">
            <div class="span13">
                <div class="row-fluid">

                    <!--div class="span5" style="width: 26%;">
                        <div class="row-fluid">
                            <?php $this->load->view('parts/menu_left'); ?>
                        </div>
                    </div-->


                    <div class="span15" id="article_detail">
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