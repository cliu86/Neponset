<?php if(is_page( 'Location' )): ?>
    <?php if( have_rows('gallery-images') ): ?>
        <section class="image-gallery row">
            <div class="location col-md-10 offset-md-1 col-12">
                <div class="row">
                    <div class="col-md-9 col-12">
                        <div class="row">
                            <?php while( have_rows('gallery-images') ): the_row(); 
                                $gallery_img = get_sub_field('img');
                                $gallery_img_text = get_sub_field('text');
                            ?>
                            <div class="col-md-4 col-12 gallery-img img-small text-small" 
                                style="background-image:url('<?php echo $gallery_img['url']; ?>')"
                                data-content="<?php echo $gallery_img_text; ?>">
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php if( get_field('vertical-image') && get_field('vertical-image-text') ): ?>
                        <div class="col-md-3 col-12 vertical-image gallery-img img-small text-small"
                            style="background-image:url('<?php echo get_field('vertical-image')['url'] ?>')"
                            data-content="<?php echo get_field('vertical-image-text'); ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>   
        </section>
    <?php endif; ?>
<?php endif; ?>