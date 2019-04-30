<header class="banner">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg" id="main-nav">
      <a class="navbar-brand col-md-3" href="{{ home_url('/') }}"><img src="@asset('images/Neponset_Logo_Long.png')"/></a>
      <div class="navbar-items col-md-9">
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </div>
    </nav>
  </div>
</header>

