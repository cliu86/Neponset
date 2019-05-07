<?php if(is_page( 'Location' )): ?>
    <?php if( have_rows('gallery-images') ): ?>
        <section class="image-gallery row">
            <div class="location col-md-10 offset-md-1 col-12">
                <div class="row">
                    <div class="col-md-9 col-12">
                        <div class="row">
                            <?php while( have_rows('gallery-images') ): the_row(); 
                                $gallery_img = get_sub_field('img');
                                $gallery_img_text = get_sub_field('text');
                            ?>
                            <div class="col-md-4 col-12 gallery-img img-small text-small" 
                                style="background-image:url('<?php echo $gallery_img['url']; ?>')"
                                data-content="<?php echo $gallery_img_text; ?>">
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php if( get_field('vertical-image') && get_field('vertical-image-text') ): ?>
                        <div class="col-md-3 col-12 vertical-image gallery-img img-small text-small"
                            style="background-image:url('<?php echo get_field('vertical-image')['url'] ?>')"
                            data-content="<?php echo get_field('vertical-image-text'); ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>   
        </section>

        {{-- <div class="row" id="location-map">
            <div class="col-md-3 col-12 location-map__filter">
                <a href="">Restaurant</a>
                <a href="">Retail</a>
                <a href="">Entertainment</a>
                <a href="">Fitness</a>
                <a href="">Recreation</a>
                <a href="">Services</a>
                <a href="">Transportation</a>
            </div>
            <div class="col-md-9 col-12 acf-map"></div>
        </div> --}}

        <style type="text/css">
            .acf-map {
                width: 100%;
                min-height: 500px;
            }
            /* fixes potential theme css conflict */
            .acf-map img {
                max-width: inherit !important;
            }           
        </style>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyBcIVk5YKA6Jeov-nrVEPJNI2ESYBfzg"></script>
        <script type="text/javascript">
            (function($) {
            function new_map( $el ) { 
                // var
                var $markers = $el.find('.marker');
                // vars
                var args = {
                    zoom		: 10,
                    center		: new google.maps.LatLng('42.2529', '-71.0023'),
                    mapTypeId	: google.maps.MapTypeId.ROADMAP
                };
                // create map	        	
                var map = new google.maps.Map( $el[0], args);
                // add a markers reference
                map.markers = ['42.2529, -71.0023'];
                // add markers
                $markers.each(function(){
                    add_marker( $(this), map );           
                });
                // center map
                center_map( map );
                // return
                return map;    
            }

            /*
            *  add_marker
            *
            *  This function will add a marker to the selected Google Map
            *
            *  @type	function
            *  @date	8/11/2013
            *  @since	4.3.0
            *
            *  @param	$marker (jQuery element)
            *  @param	map (Google Map object)
            *  @return	n/a
            */

            function add_marker( $marker, map ) {

                // var
                var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

                // create marker
                var marker = new google.maps.Marker({
                    position	: latlng,
                    map			: map
                });

                // add to array
                map.markers.push( marker );

                // if marker contains HTML, add it to an infoWindow
                if( $marker.html() )
                {
                    // create info window
                    var infowindow = new google.maps.InfoWindow({
                        content		: $marker.html()
                    });

                    // show info window when marker is clicked
                    google.maps.event.addListener(marker, 'click', function() {

                        infowindow.open( map, marker );

                    });
                }

            }

            /*
            *  center_map
            *
            *  This function will center the map, showing all markers attached to this map
            *
            *  @type	function
            *  @date	8/11/2013
            *  @since	4.3.0
            *
            *  @param	map (Google Map object)
            *  @return	n/a
            */

            function center_map( map ) {

                // vars
                var bounds = new google.maps.LatLngBounds();

                // loop through all markers and create bounds
                $.each( map.markers, function( i, marker ){

                    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

                    bounds.extend( latlng );

                });

                // only 1 marker?
                if( map.markers.length == 1 )
                {
                    // set center of map
                    map.setCenter( bounds.getCenter() );
                    map.setZoom( 16 );
                }
                else
                {
                    // fit to bounds
                    map.fitBounds( bounds );
                }

            }

            /*
            *  document ready
            *
            *  This function will render each map when the document is ready (page has loaded)
            *
            *  @type	function
            *  @date	8/11/2013
            *  @since	5.0.0
            *
            *  @param	n/a
            *  @return	n/a
            */
            // global var
            var map = null;

            $(document).ready(function(){

                $('.acf-map').each(function(){

                    // create map
                    map = new_map( $(this) );

                });

            });

            })(jQuery);
        </script>
    <?php endif; ?>
<?php endif; ?>