<?php if(is_page( 'Amenities' )): ?>
    <?php if( have_rows('gallery-images') ): ?>
        <section class="image-gallery row">
            <div class="amenities col-md-10 offset-md-1 col-12">
                <div class="row">
                    <?php while( have_rows('gallery-images') ): the_row(); 
                        $gallery_img = get_sub_field('img');
                        $gallery_img_text = get_sub_field('text');
                    ?>
                    <div class="col-md-4 col-12 gallery-img img-small" 
                        style="background-image:url('<?php echo $gallery_img['url']; ?>')"   
                        data-content="<?php echo $gallery_img_text; ?>">
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>