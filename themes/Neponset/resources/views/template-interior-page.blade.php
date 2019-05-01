{{--
  Template Name: Interior Page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @php
        $hero_image_url = get_field('hero-image');
        $hero_title = get_field('hero-title');
    @endphp
    <div class="row custom-page__hero-section" style="background-image: url(@php echo $hero_image_url['url']; @endphp)">
        <span class="hero-title">@php echo  $hero_title; @endphp</span>
    </div> 

    <div class="row custom-page__sub-content">
      <span class="hero-title-mobile">@php echo  $hero_title; @endphp</span>

      <?php if( get_field('sub-desc') ): ?>
        <p>@php echo get_field('sub-desc'); @endphp</p>
      <?php endif; ?>

     @php if( get_field('sub-link') && get_field('sub-link-text') ): @endphp
        <a href="@php echo get_field('sub-link'); @endphp" class="st-btn-primary" >@php echo get_field('sub-link-text'); @endphp</a>
      @php endif; @endphp
    </div>

    @include('partials.residences')
    

    @include('partials.content-page')
  @endwhile
@endsection
