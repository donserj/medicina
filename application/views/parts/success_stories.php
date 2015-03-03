<div class="row-fluid">
    <div class="span16">
        <div class="slider-widget sidebar-widget">
            <div id="dn-top-widget-slider" class="owl-carousel">
                <?php foreach($clinics as $clinic){ ?>
                <div class="item">
                    <h2> <?php echo $clinic['Name'];?></h2>
                    <!--h3>Bill</h3-->
                    <div class="before-picture">
                        <img width="94" height="93" src="<?php echo $clinic['Photo'];?>" class="attachment-large" alt="" />											</div>
                    <!--div class="after-picture">
                        <img width="119" height="334" src="assets/images/man1-after.png" class="attachment-large" alt="man1-after" />
                    </div-->
                    <div class="widget-navigation">
                        <a class="prev-arrow"></a>
                        <a class="next-arrow"></a>
                    </div>
                    <span class="libs"> <?php echo $clinic['Text'];?> </span>
                    <!--span class="sizes">& 7 sizes *</span-->
                    <a href="#" class="btn-free-consult">
                        Detalii<!--i class="icon"></i--></a>
                    <!--span class="results">*Individual results may vary</span-->
                </div>
                <?php } ?>
            </div>
            <span class="arrow-bottom blue"></span>
        </div>
    </div>
</div>