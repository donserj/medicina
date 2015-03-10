
<div class="container" style="margin-top: 10px;">
    <div class="banners">
        <img src="/assets/images/banners/left.png">
        <img src="/assets/images/banners/12275824249031666837.jpg">
        <img src="/assets/images/banners/7825830639411986475.png">
    </div>
</div>

<!-- Footer - parteners -->
<div class="container">
    <div class="dn-parteners-bk">

        <div class="dn-partners">

            <div id="dn-partners-carusel" class="owl-carousel">
                <div class="item">
                    <a href=""><img width="150" height="50" src="http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-content/uploads/2013/10/partner-logo-11.png" class="attachment-partner-image" alt="partner-logo-1" /></a>
                </div>
                <div class="item">
                    <a href="google.com"><img width="150" height="63" src="http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-content/uploads/2013/10/partner-logo-4.png" class="attachment-partner-image" alt="partner-logo-4" /></a>
                </div>
                <div class="item">
                    <a href="google.com"><img width="150" height="63" src="http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-content/uploads/2013/10/partner-logo-3.png" class="attachment-partner-image" alt="partner-logo-3" /></a>
                </div>
                <div class="item">
                    <a href="http://www.google.com"><img width="150" height="63" src="http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-content/uploads/2013/10/partner-logo-21.png" class="attachment-partner-image" alt="partner-logo-2" /></a>
                </div>
                <div class="item">
                    <a href="http://www.google.com"><img width="150" height="63" src="http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-content/uploads/2013/10/partner-logo-12.png" class="attachment-partner-image" alt="partner-logo-1" /></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="container">
    <div class="dn-footer-container">
        <div class="dn-footer-about">
            <div class="row-fluid">
                <div class="span5">
                    <h2>About Diet and Nutrition</h2>
                    <div class="about-box">
                        <p>As you may know, the 21’st Century is the metabolic diseases century, that has at its source major nutritional imbalances, like obesity.</p>
                        <p>All these have a crucial impact on human health, and it reduces life expectancy and quality of life.</p>
                        <img src="http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-content/themes/diet-nutrition/modules/setup_backup/assets/demo_assets/aa-logo-about.png" alt="AA-Team">
                    </div>
                </div>

                <div class="span6">
                    <h2>Recent Recipes</h2>
                    <div class="latest-recipes">

                        <?php foreach($recentRecipes3 as $recipes){ ?>
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
                <div class="span5">
                    <h2>Advertisment (280x 160)</h2>
                    <a href=""><img src="http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-content/themes/diet-nutrition/modules/setup_backup/assets/demo_assets/html-ads.png" alt="html ads"></a>					</div>
            </div>
        </div>

        <div class="dn-footer-menu">
            <div class="row-fluid">
                <div class="span5">
                    <a href="http://tf.aa-team.com/wordpress/diet_and_nutrition">
                        <img width="211" height="64" src="http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-content/uploads/2014/10/logo.png" class="attachment-full" alt="logo" />
                    </a>
                </div>
                <div class="span11">
                    <div class="footer-social">
                        <a href="http://twitter.com/YourOfficialPage" class="twitter-icon"> </a>							<a href="http://facebook.com/pages/YourOfficialPage" class="facebook-icon"> </a>							<a href="http://www.pinterest.com/YourOfficialPage" class="pinterest-icon"> </a>						</div>
                    <div class="footer-menu">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer copyright -->
<div class="dn-sub-footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span16">
                <div class="copy-text">
                    © Copyright 2013 <a href="#">AA-Team</a>. All rights reserved.					</div>
                <div class="contact-text">
                    Phone: +555 0005 448 | E-mail : info@dietnutrition.com					</div>
            </div>
        </div>
    </div>
</div>

<!-- Go top button -->
<a class="gotop" href="#gotop">Go Top</a>

<div id="fb-root"></div>
<script>
    ( function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">
    (function() {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
</script>
<script>
    ! function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + '://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, 'script', 'twitter-wjs');
</script>

<script>console.log( '{"sidebar":{"position":"right","sidebars":["default-sidebar"]}}' )</script>
<div class="revsliderstyles"><style type="text/css">.tp-caption.medium_text{position:absolute;color:#fff;text-shadow:0px 2px 5px rgba(0,0,0,0.5);font-weight:700;font-size:20px;line-height:20px;font-family:Arial;margin:0px;border-width:0px;border-style:none;white-space:nowrap}.tp-caption.large_text{position:absolute;color:#fff;text-shadow:0px 2px 5px rgba(0,0,0,0.5);font-weight:700;font-size:40px;line-height:40px;font-family:Arial;margin:0px;border-width:0px;border-style:none;white-space:nowrap}.medium_text{position:absolute;color:#fff;text-shadow:0px 2px 5px rgba(0,0,0,0.5);font-weight:700;font-size:20px;line-height:20px;font-family:Arial;margin:0px;border-width:0px;border-style:none;white-space:nowrap}.large_text{position:absolute;color:#fff;text-shadow:0px 2px 5px rgba(0,0,0,0.5);font-weight:700;font-size:40px;line-height:40px;font-family:Arial;margin:0px;border-width:0px;border-style:none;white-space:nowrap}</style>
</div><script type='text/javascript' src='http://tf.aa-team.com/wordpress/diet_and_nutrition/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {"loaderUrl":"http:\/\/tf.aa-team.com\/wordpress\/diet_and_nutrition\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
    /* ]]> */
</script>



<script language="JavaScript" type="text/javascript" src="/assets/js/scripts.js"></script>
<script language="JavaScript" type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script language="JavaScript" type="text/javascript" src="/assets/js/responsive-nav.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/assets/js/custom.js"></script>
<script language="JavaScript" type="text/javascript" src="/assets/js/bootstrap-select.js"></script>
</body>
</html>