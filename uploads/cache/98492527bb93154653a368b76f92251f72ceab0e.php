<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php
        $hero_image_url = get_field('hero-image');
        $hero_title = get_field('hero-title');
    ?>
    <div class="row custom-page__hero-section" style="background-image: url(<?php echo $hero_image_url['url']; ?>)">
        <span class="hero-title"><?php echo  $hero_title; ?></span>
    </div> 

    <div class="row custom-page__sub-content">
      <?php if( get_field('sub-desc') ): ?>
        <p><?php echo get_field('sub-desc'); ?></p>
      <?php endif; ?>

     <?php if( get_field('sub-link') && get_field('sub-link-text') ): ?>
        <a href="<?php echo get_field('sub-link'); ?>" class="st-btn-primary" ><?php echo get_field('sub-link-text'); ?></a>
      <?php endif; ?>
    </div>

    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>