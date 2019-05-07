<?php if(is_page( 'Availability' )): ?>
    <section class="row overflow-hidden">
        <div class="col-md-8 offset-md-2 col-12 mb-5">
            <div class="availability row">
                <ul class="nav nav-pills mt-0" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active plan-category" data-toggle="pill" href="#content-2bedrooms">
                            2 BEDROOM
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link plan-category" data-toggle="pill" href="#content-2bedrooms-study">
                            2 BEDROOM+STUDY
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link plan-category" data-toggle="pill" href="#content-penthouse">
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
                                        <img src="<?php echo $_2bedrooms_img['url'];?>" class="img-fluid floorplan-img" 
                                            data-title="<?php echo $_2bedrooms_title;?>"
                                            data-download-link ="<?php echo $_2bedrooms_link;?>"
                                        />
                                    </div>                            
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
                                        <img src="<?php echo $_2bedrooms_study_img['url'];?>" class="img-fluid floorplan-img"
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
                                        <img src="<?php echo $penthouse_img['url'];?>" class="img-fluid floorplan-img"
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
            <hr class="availability__divider">
            <div class="row">
                <div class="mt-5 plan-detail col-md-12 col-12">
                    <h2></h2>
                    <a href="http://localhost:3000/contact/" class="st-btn-primary mb-4 mt-5">SCHEDULE APPOINTMENT</a>
                    <a href="" class="download-floorplan" download>DOWNLOAD FLOORPLAN</a>
                    <img src="" class="img-fluid plan-detail_img"/>                           
                </div>                           
            </div>          
        </div>
    </section>
<?php endif; ?>