<footer class="content-info">
  <div class="container-fluid">
    @php dynamic_sidebar('sidebar-footer') @endphp
    <div class="row">
      <div class="col-md-5 col-sm-12 col-12 footer-left footer-content">
        <img class="footer-left__logo mb-3" src="@asset('images/footer-logo.png')"/>
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
          <h4><a href="tel:6174362000" class="click-to-call"><b>P: 617.436.2000</b></a></h4>
          <p class="font-weight-bold">57 QUINCY SHORE DRIVE<br>QUINCY, MA 02171</p>
          <span class="equal-housing-opportunity"><img src="@asset('images/equal-housing-opportunity-logo.png')"/></span>
        </div>
      </div>
      <div class="col-md-7 col-sm-12 col-12 footer-right footer-content">
        <h3 class="text-center"><b>New Condominum Residence</b><br><b class="d-block mt-2">Starting at $650,000</b></h3>
        <p>BOOK AN APPOINTMENT FOR MORE INFORMATION</p>
        <div class="footer-right__links">
          <a class="st-btn-primary link-open-buyer" href="{{ home_url('/contact/#buyer')}}">I AM A BUYER</a>
          <a class="st-btn-primary link-open-broker" href="{{ home_url('/contact/#broker')}}">I AM A BROKER</a>
        </div>
      </div>
    </div>
  </div>
</footer>
