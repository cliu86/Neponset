<div class="row residences">
    <?php if( get_field('first_image') ): ?>
        <img class="residences__first-img" src="@php echo get_field('first_image')['url']; @endphp" /> 
    <?php endif; ?>
    <div class="residences__bg"></div>

    <div class="residences__interior-features" >
        <div class="residences__interior-features__inner">
            <div class="list-features-image">
                <?php if( get_field('second_image') ): ?>
                    <img src="@php echo get_field('second_image')['url']; @endphp" />
                <?php endif; ?>
            </div>
            <div class="list-features-wrapper">
                <div class="list-features-wrapper__title">
                    <h1>INTERIOR</h1>
                    <h3>FEATURES</h3>
                </div>
                <?php if( have_rows('interior_features') ): ?>
                    <ul class="list-features">
                <?php while ( have_rows('interior_features') ) : the_row(); ?>
                      <li><?php echo the_sub_field('feature'); ?></li>
                <?php endwhile; ?>
                    </ul>
                <?php endif;?>  
                <?php if( get_field('button_link') && get_field('button_text') ): ?>
                    <a class="list-features__btn-make-appointment" href="<?php echo get_field('button_link'); ?>"><?php echo get_field('button_text'); ?></a>
                <?php endif; ?>    
                <a class="list-features__btn-make-appointment st-btn-secondary" href="">Schedule appointment</a>
            </div>
        </div>
    </div>

    <div class="residences__kitchen__bath">
        <?php if( get_field('kitchen_image') ): ?>
            <img class="residences__kitchen-img" src="@php echo get_field('kitchen_image')['url']; @endphp" /> 
        <?php endif; ?>
        <?php if( get_field('kitchen_image_desc') ): ?>       
            <div class="residences__kitchen-img-desc"> @php echo get_field('kitchen_image_desc'); @endphp" </div>
        <?php endif; ?>

        <?php if( get_field('forth_image') && get_field('last_image') ): ?>       
            <div class="residences__bath"> 
              <img class="residences__bath-img-left" src="@php echo get_field('forth_image')['url']; @endphp" /> 
              <img class="residences__bath-img-right" src="@php echo get_field('last_image')['url']; @endphp" /> 
            </div>
        <?php endif; ?>    
    </div>
        
</div>