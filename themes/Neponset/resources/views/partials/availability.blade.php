<?php if(is_page( 'Availability' )): ?>
    <section class="row">
        <div class="col-md-8 offset-md-2 col-12 mb-5">
            <div class="availability row">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#content-2bedrooms">
                            2 BEDROOM
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#content-2bedrooms-study">
                            2 BEDROOM+STUDY
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#content-penthouse">
                           PENTHOUSE
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <?php if( have_rows('2_bedrooms') ): ?>
                        <div id="content-2bedrooms" class="tab-pane active">
                            <div class="row mt-5 plan">
                                <?php while( have_rows('2_bedrooms') ): the_row();  
                                    $_2bedrooms_img = get_sub_field('img');
                                    $_2bedrooms_title = get_sub_field('title');
                                    $_2bedrooms_link = get_sub_field('link');
                                ?> 
                                    <div class="col-md-4 col-12 plan-img-wrapper">
                                        <img src="<?php echo $_2bedrooms_img['url'];?>" class="img-fluid" 
                                            data-title="<?php echo $_2bedrooms_title;?>"
                                            data-download-link ="<?php echo $_2bedrooms_link;?>"
                                        />
                                    </div>

                                     <!-- <div class="col-12 plan-detail">
                                        <h2><?php //echo $_2bedrooms_title;?></h2>
                                        <a href="#" class="st-btn-primary">SCHEDULE APPOINTMENT</a>
                                        <a href="<?php //echo $_2bedrooms_link;?>" class="download-floorplan">DOWNLOAD FLOORPLAN</a>
                                        <img src="<?php //echo $_2bedrooms_img['url'];?>" class="img-fluid"/>
                                    </div> -->
                                <?php endwhile; ?>
                            </div>

                            
                        </div>
                    <?php endif; ?>

                     <?php if( have_rows('2_bedrooms_study') ): ?>
                        <div id="content-2bedrooms-study" class="tab-pane">
                            <div class="row mt-5 plan">
                                <?php while( have_rows('2_bedrooms_study') ): the_row();  
                                    $_2bedrooms_study_img = get_sub_field('img');
                                    $_2bedrooms_study_title = get_sub_field('title');
                                    $_2bedrooms_study_link = get_sub_field('link');
                                ?> 
                                    <div class="col-md-4 col-12 plan-img-wrapper">
                                        <img src="<?php echo $_2bedrooms_study_img['url'];?>" class="img-fluid"
                                            data-title="<?php echo $_2bedrooms_study_title;?>"
                                            data-download-link ="<?php echo $_2bedrooms_study_link;?>"
                                        />
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if( have_rows('penthouse') ): ?>
                        <div id="content-penthouse" class="tab-pane">
                            <div class="row mt-5 plan">
                                <?php while( have_rows('penthouse') ): the_row();  
                                    $penthouse_img = get_sub_field('img');
                                    $penthouse_title = get_sub_field('title');
                                    $penthouse_link = get_sub_field('link');
                                ?> 
                                    <div class="col-md-4 col-12 plan-img-wrapper">
                                        <img src="<?php echo $penthouse_img['url'];?>" class="img-fluid"
                                            data-title="<?php echo $penthouse_title;?>"
                                            data-download-link ="<?php echo $penthouse_link;?>"
                                        />
                                    </div>
                                <?php endwhile; ?>
                            </div>

                           

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>