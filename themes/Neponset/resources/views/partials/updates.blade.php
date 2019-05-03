<?php if(is_page( 'Updates' )): ?>
    <?php if( have_rows('card') ): ?>
        <section class="row">
            <div class="updates col-md-6 offset-md-3 col-12 mb-5">
                <div class="row">
                    <?php while( have_rows('card') ): the_row(); 
                        $card_title = get_sub_field('title');
                        $card_content = get_sub_field('content');
                        $card_img = get_sub_field('img');
                    ?>
                    <div class="updates-item card col-md-6 col-12">
                        <img src="<?php echo $card_img['url']; ?>" class="card-img-top" alt="updates">
                        <div class="card-body p-0">
                            <h3 class="card-title mt-4"><?php echo $card_title; ?></h3>
                            <p class="card-text"><?php echo $card_content; ?></p>
                        </div>
                    </div>   
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>