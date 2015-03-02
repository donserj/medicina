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
                        <img src="assets/images/vegetable.jpg"  alt="vegetable"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
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

    <div class="span4 my-search" style="z-index: 999;">
        <form method="post" action="#">
            <input type="search" placeholder="Cauta in site">
            <input type="submit" value="">
        </form>
    </div>
    <!-- Slider Widget -->
    <div class="span4" style="z-index: 999;">
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

                <div class="span5" style="width: 26%;">
                    <div class="row-fluid">
                        <?php $this->load->view('parts/menu_left'); ?>
                    </div>
                </div>

                <!-- Healthy Recipes - Blog Box -->
                <div class="span10" style="width: 66.8%;">
                    <div class="row-fluid">
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                    </div>

                    <div class="healthy-recipes">
                        <div class="image-container-healthy-recipes">
                            <a href="http://tf.aa-team.com/wordpress/diet_and_nutrition/are-fruits-healthy-or-not/">
                                <img width="483" height="272" src="http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-content/uploads/2013/09/wallpaper-1564865.jpg" class="attachment-blog-featured-image wp-post-image" alt="wallpaper-1564865" />									</a>
                            <div class="arrow-down-img">
                                <span class="green-line"></span>
                                <span class="the-arrow"></span>
                                <span class="green-line"></span>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="content-container">
                                <div class="span5">
                                    <div class="content-title">
                                        <h2>Healthy Recipes</h2>
                                    </div>
                                </div>
                                <div class="span11">
                                    <div class="content-text">
                                        <p>
                                            Not only is it important to ensure that our children get the right vitamin and mineral supplements ...</p>
                                        <a class="link" href="http://tf.aa-team.com/wordpress/diet_and_nutrition/are-fruits-healthy-or-not/"> <i class="link-icon"></i> Are fruits healthy or not? </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dieticians -->
                <div class="span11">
                    <div class="dieticians">
                        <span class="arrow-right green"></span>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="image-container-dietician">
                                    <img src="http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-content/themes/diet-nutrition/modules/setup_backup/assets/demo_assets//dietician.png" alt="dietician"/>
                                </div>
                            </div>
                            <div class="span10">
                                <div class="text-container">
                                    <h2>Dieticians</h2>
                                    <p>All nutrition services are provided by Registered Dietitians (RDs), who are accredited experts in nutrition .</p>
                                    <a class="link" href="http://tf.aa-team.com/wordpress/diet_and_nutrition/our-team/"> <i class="link-icon"></i>Our Team</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="span3" id="news-box">
            <div id="news">
                <div id="news-header">
                    <span>Stiri medicale</span>
                </div>
                <div id="news-items">
                    <?php foreach($medArticles as $medArticle){?>
                        <a href="#">
                        <div class="news-item">
                            <div class="news-img left"> <img src="<?php echo $medArticle['Logo'];?>"> </div>
                            <div class="left" style="width: 135px;">
                                <div class="news-text"> <?php echo $medArticle['Title'];?> </div>
                                <div class="news-date"> <?php echo $medArticle['AddTime'];?> &nbsp;&nbsp;</div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        </a>
                    <?php } ?>
                </div>
                <div class="news-open"><i class="menu-open"></i></div>
            </div>
        </div>

    </div>

    <div class="row-fluid" style="margin-top: 10px;">
        <?php foreach($homeBottomArticles as $homeBottomArticle){ ?>
        <div class="content-bottom-article">
            <a href="#">
                <h2><?php echo $homeBottomArticle['Title'];?></h2>
            </a>
            <img src="/assets/images/doctor.jpg">
            <p>
                <?php echo $homeBottomArticle['Text'];?>
            </p>
            <div class="content-bottom-article-footer">
                <a href="#"> + Read more</a>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="row-fluid charge-more">
        <input type="button" name="charge-more" value="Incarca mai multe" class="charge-more-btn">
    </div>

    <div class="dn-footer-container">
        <div class="dn-footer-about">
            <div class="row-fluid">
                <div class="span6">
                    <h2>Recent Recipes</h2>
                    <div class="latest-recipes">
                        <?php foreach($recentRecipes1 as $recipes){ ?>
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="recipe-image-container">
                                    <a href="#">
                                        <img width="220" height="140" src="<?=$recipes['Logo'];?>" class="attachment-recipes-thumb wp-post-image" alt="" style="height: 70px;" />
                                        <span class="mask"> <i class="link-icon-hover"></i>	</span>
                                    </a>
                                </div>
                            </div>
                            <div class="span11">
                                <h3><a href="#"><?=$recipes['Title'];?></a></h3>
                                <p><? echo mb_substr($recipes['Text'], 0, 70, 'UTF-8'); ?>...</p>
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
                                        <a href="#">
                                            <img width="220" height="140" src="<?=$recipes['Logo'];?>" class="attachment-recipes-thumb wp-post-image" alt="" style="height: 70px;" />
                                            <span class="mask"> <i class="link-icon-hover"></i>	</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="span11">
                                    <h3><a href="#"><?=$recipes['Title'];?></a></h3>
                                    <p><? echo mb_substr($recipes['Text'], 0, 70, 'UTF-8'); ?>...</p>
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
                        <p class="top-article-element"><a href="#"><img src="<?=$article['Logo'];?>" class="left"> <?php echo $article['Title'];?> </a></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php $this->load->view("parts/footer"); ?>