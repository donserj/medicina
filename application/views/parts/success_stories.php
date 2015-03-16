<div class="row-fluid">
    <div class="span16">
        <div class="slider-widget sidebar-widget">
            <div id="dn-top-widget-slider" class="owl-carousel">
                <?php foreach($clinics as $clinic){ ?>
                <div class="item">
                    <h2><a href="#"> <?php echo $clinic['Name_'.$lang];?> </a> </h2>
                    <!--h3>Bill</h3-->
                    <div class="before-picture">
                        <a href="#"> <img width="94" height="93" src="<?php echo $clinic['Photo'];?>" class="attachment-large" alt="" /></a>
                    </div>
                    <!--div class="after-picture">
                        <img width="119" height="334" src="assets/images/man1-after.png" class="attachment-large" alt="man1-after" />
                    </div-->
                    <div class="widget-navigation">
                        <a class="prev-arrow"></a>
                        <a class="next-arrow"></a>
                    </div>
                    <span class="libs"> <?php echo $clinic['Text_'.$lang];?> </span>
                    <!--span class="sizes">& 7 sizes *</span-->

                    <!--span class="results">*Individual results may vary</span-->
                </div>
                <?php } ?>
            </div>
            <a href="#" class="btn-free-consult" style="position: absolute;left: 0px;top: 266px;">
                Detalii
            </a>
            <span class="arrow-bottom blue"></span>
        </div>
    </div>
</div>