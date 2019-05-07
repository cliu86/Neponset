<?php if(is_page( 'Gallery' )): ?>
    <?php if( have_rows('gallery-images') ): ?>
        <section class="image-gallery row mb-5 mt-1">
            <div class="gallery-page col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-12">
                <div class="row">                  
                    <?php while( have_rows('gallery-images') ): the_row(); 
                        $gallery_img = get_sub_field('img');
                    ?>
                    <div class="col-md-4 col-6 gallery-img img-small" 
                        style="background-image:url('<?php echo $gallery_img['url']; ?>')">
                    </div>
                    <?php endwhile; ?>                      
                </div>
            </div>   
        </section>
    <?php endif; ?>
<?php endif; ?>