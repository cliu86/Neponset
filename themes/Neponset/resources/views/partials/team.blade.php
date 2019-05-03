<?php if(is_page( 'Team' )): ?>
    <?php if( have_rows('text_column') ): ?>
        <section class="row">
            <div class="team col-md-8 offset-md-2 col-12">
                <div class="row">
                    <?php while( have_rows('text_column') ): the_row(); 
                        $text_column_title = get_sub_field('title');
                        $text_column_content = get_sub_field('content');
                    ?>
                    <div class="team-item col-md-4 col-12">
                        <h4><?php echo $text_column_title; ?> </h1>
                        <p><?php echo $text_column_content; ?> </p>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>