<header class="banner">
  {{-- <div class="container-fluid">
    <nav class="navbar navbar-expand-lg" id="main-nav">
      <a class="navbar-brand col-md-3" href="{{ home_url('/') }}"><img src="@asset('images/Neponset_Logo_Long.png')"></a>
      <div class="navbar-items col-md-9 col-12">
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </div>
    </nav>
  </div> --}}
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid main-nav-wrapper">
      <a class="navbar-brand" href="{{ home_url('/') }}"><img src="@asset('images/Neponset_Logo_Long.png')"></a>
      <a class="navbar-phone-call" href="tel:6174362000"><img src="@asset('images/call.svg')"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="background-image: url(@asset('images/menu-icon.svg'))" ></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ home_url('/') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ home_url('/residences') }}">Residences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link--two-words" href="{{ home_url('/availability') }}">Floor plans</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ home_url('/amenities') }}">Amenities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ home_url('/team') }}">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ home_url('/location') }}">Location</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ home_url('/updates') }}">Updates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ home_url('/gallery') }}">Gallery</a>
          </li>
          <li class="nav-item dropdown d-none d-lg-block ">
            <a class="nav-link dropbtn" href="{{ home_url('/contact') }}">Contact</a>
            <div class="dropdown-content dropdown-content-contact">
              <a class="nav-link link-open-buyer" href="{{ home_url('/contact/#buyer') }}">BUYER</a>
              <a class="nav-link link-open-broker" href="{{ home_url('/contact/#broker') }}">BROKER</a>
            </div>
          </li>

          <!-- Dropdown for mobile -->
          <li class="nav-item dropdown d-sm-block d-md-none" id="navbardrop-contact-mobile">
            <a class="nav-link dropdown-toggle" href="{{ home_url('/contact') }}"  data-toggle="dropdown">
              Contact
            </a>
            <div class="dropdown-menu">
              <a class="nav-link link-open-buyer"  href="{{ home_url('/contact/#buyer') }}">BUYER</a>
              <a class="nav-link link-open-broker" href="{{ home_url('/contact/#broker') }}">BROKER</a>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>

