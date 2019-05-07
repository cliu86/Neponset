@extends('layouts.app')

@section('content') 
  <section class="home-hero row">
     <img src="@asset('images/Neponset_Logo_color_White.png')">
     <div class="home-hero__text">
        <span class="home-hero__text__city">CITY</span>
        <span class="home-hero__text__life">LIFE</span>
     </div>
  </section>
  <section class="home-content-below-hero row my-5">
    <h2><b>THE NEPONSET</b></h2>
    <h2>City Life, Beach Life, Good Life.</h2>
    <h5 class="mb-5">Condominium Residences | Summer 2019 </h5>
    <p>Discover a new boutique Condominium residence that offers the ideal mix of location, lifestyle, convenience and value.</p>
    <p>With views of the Boston skyline, the Atlantic Ocean, the Neponset River and the Blue Hills, the 28 two-bedroom, two-bath light-filled Residences feature
       well-appointed finishes and throughtfully designed floorplans. For the ultimate convenience, each home includes two deeded garage parking spaces.  
    </p>
    <p>A rooftop lounge with an outdoor terrace provides the ideal space to relax and socialize with friends, family and neighbors. </p>
    <p>Walk to the beach, nearby parks or neighborhood restaurants. </p>
    <p>The Red Line is minutes away and provides direct access to all the Boston and Cambridge have to offer. </p>
  </section>

  <section class="home-features">
    <div class="home-feature home-feature__residences mt-4">
        <div class="feature-image">
            <img src="@asset('images/Bath_2.jpg')" class="img-fluid">
        </div>
        <div class="feature-content">
            <h1>Residences</h1>
            <p>Get comfortable and living your best life in our throughtfully designed homes</p>
            <a href="{{ home_url('/residences') }}" class="st-btn-primary">VIEW RESIDENCES</a>
        </div>
    </div>

     <div class="home-feature home-feature__floorplans mt-4">
        <div class="feature-content">
            <h1>Floor Plans</h1>
            <p>Select the plan that best fits your lifestyle</p>
            <a href="{{ home_url('/availability') }}" class="st-btn-primary">VIEW FLOOR PLANS</a>
        </div>
        <div class="feature-image">
            <img src="@asset('images/LivingC.jpg')" class="img-fluid">
        </div>
    </div>

     <div class="home-feature home-feature__amenities mt-4">
        <div class="feature-image">
            <img src="@asset('images/cheers.jpg')" class="img-fluid">
        </div>
        <div class="feature-content">
            <h1>Amenities</h1>
            <p>Entertain family and friends in the rooftop lounge and terrace while enjoying the breathtaking views of the Boston skyline.</p>
            <a href="{{ home_url('/amenities') }}" class="st-btn-primary">VIEW AMENITIES</a>
        </div>
    </div>
  </section>

  <section class="home-location row mt-5">
    <div class="home-location__heading">
      <h1>LOCATION</h1>
      <p class="mb-5 mt-4">At The Neponset, you will enjoy a walkable lifestyle with nearby restaurants and parks, be on the Red Line for a quick ride into Cambridge 
      and Boston, or Stroll on the beautiful beach. 
      </p>
      <a href="{{ home_url('/location') }}" class="st-btn-secondary">Explore neighborhood</a>
    </div>    
  </section>

  <section class="image-gallery row">
    <div class="col-md-6 col-12 gallery-img img-big" 
      data-content="10 Minute Commute into Downtown"
       style="background-image:url('@asset('images/city-view.jpg')')"
      >
    </div>
    <div class="col-md-3 col-6 gallery-img img-small"
      style="background-image:url('@asset('images/walking-on-road.jpg')')"
      data-content="Break Out Your Beach Chair">
    </div>
    <div class="col-md-3 col-6 gallery-img img-small" 
      style="background-image:url('@asset('images/DSC8460.jpg')')"
      data-content="Break Out Your Beach Chair">
    </div>
    <div class="col-md-3 col-6 gallery-img img-small" 
      style="background-image:url('@asset('images/eating.jpg')')"
      data-content="Break Out Your Beach Chair">
    </div>
    <div class="col-md-3 col-6 gallery-img img-small" 
      style="background-image:url('@asset('images/store-front.jpg')')"
      data-content="Break Out Your Beach Chair">
    </div>
    <div class="col-md-6 col-12 gallery-img img-big"
      style="background-image:url('@asset('images/habor.jpg')')"
      data-content="Break Out Your Beach Chair">
    </div>
  </section>

@endsection
