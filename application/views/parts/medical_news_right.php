<div id="news">
    <div id="news-header">
        <span>Stiri medicale</span>
    </div>
    <div id="news-items">
        <?php foreach($medArticles as $medArticle){?>
            <a href="/page/articledetail/<?=$medArticle['ArticleID'];?>">
                <div class="news-item">
                    <div class="news-img left"> <img src="<?php echo $medArticle['Logo'];?>"> </div>
                    <div class="left" style="width: 135px;">
                        <div class="news-text"> <?php echo $medArticle['Title_'.$lang];?> </div>
                        <div class="news-date"> <?php echo date("d-m-Y", strtotime($medArticle['AddTime']));?> &nbsp;&nbsp;</div>
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        <?php } ?>
    </div>
    <div class="news-open"><i class="menu-open"></i></div>
</div>