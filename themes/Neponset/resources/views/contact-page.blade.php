{{--
  Template Name: Contact Page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="row contact">
      <div class="col-md-5 col-sm-12 footer-left footer-content">
        <img class="footer-left__logo mb-3" src="@asset('images/footer-logo.jpg')"/>
        <div class="footer-left__sub-content">
          <div>
            <b>Sales Gallery at The Galvin Group</b> 
            <br>
            <span>375 Neponset Ave</span>
            <br>
            <span>Dorchester, MA 02122</span>
          </div>
          <div class="footer-left__icons mt-1 mb-4">
            <a href="#" class="mr-2"><img src="@asset('images/facebook.svg')"/></a>
            <a href="#" class="mr-2"><img src="@asset('images/twitter.svg')"/></a>
            <a href="#" class="mr-2"><img src="@asset('images/instagram.svg')"/></a>
          </div>
          <h4><b>P: 617.436.2000</b></h4>
          <p class="font-weight-bold">57 QUINCY SHORE DRIVE<br>QUINCY, MA 02171</p>
        </div>
      </div>
      <div class="col-md-7 col-sm-12 footer-right footer-content footer-right-no-form">
        <h1>CONTACT</h1>
        <h3 class="text-center"><b>New Condominum Residence</b><br><b class="d-block mt-2">Starting at $650,000</b></h3>
        <p>BOOK AN APPOINTMENT FOR MORE INFORMATION</p>
        <div class="footer-right__links">
          <a href="#" id="btn-open-buyer-form" class="st-btn-primary">I AM A BUYER</a>
          <a href="#" id="btn-open-broker-form" class="st-btn-primary">I AM A BROKER</a>
        </div>
        <div class="contact-forms__buyer">
            <?php echo do_shortcode('[gravityform id=1 title=false description=false]'); ?>
        </div>
        <div class="contact-forms__broker">
            <?php echo do_shortcode('[gravityform id=2 title=false description=false]'); ?>
        </div>
      
      
       
      </div>
    </div>

    @include('partials.content-page')
  @endwhile
@endsection
