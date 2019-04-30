<header class="banner">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg" id="main-nav">
      <a class="navbar-brand col-md-3" href="<?php echo e(home_url('/')); ?>"><img src="<?= App\asset_path('images/Neponset_Logo_Long.png'); ?>"/></a>
      <div class="navbar-items col-md-9">
        <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

        <?php endif; ?>
      </div>
    </nav>
  </div>
</header>

