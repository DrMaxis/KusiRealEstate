
<!-- BEGIN PROPERTY SLIDER-->

<div class="widget js-widget">
        <div class="widget__content">
          <!-- BEGIN SLIDER-->
          <div id="slider-wide" class="slider slider--wide">
            <div class="slider__block js-slick-slider">

              @foreach($properties as $property)
              <div class="slider__item">
                <div class="slider__preview">
                  <div class="slider__img slider__img--lg"><img data-lazy="{{contentImage($property->image)}}" src="{{contentImage($property->image)}}" alt=""></div>
                  <div class="slider__img slider__img--sm"><img data-lazy="{{contentImage($property->image)}}" src="{{contentImage($property->image)}}" alt=""></div>
                </div>
                <div class="slider__caption">
                  <div class="slider__price"><strong>${{$property->rental_price}}</strong>per month
                  </div>
                  <!-- end of block .slider__price--><a href="property_details.html" class="slider__address">{{$property->address}}<span class="slider__address-city"> {{$property->city}}, {{$property->state}} {{$property->zip}}, {{$property->country}}</span></a>
                  <!-- end of block .slider__address-->
                  <div class="slider__params">
                    <dl>
                      <dt>Type:</dt>
                      <dd>{{$property->property_type}}</dd>
                      <dt>Area:</dt>
                      <dd>{{$property->home_size}} SQ FT</dd>
                      <dt>Market Status:</dt>
                      <dd>{{$property->sale_status}}</dd>
                    </dl>
                    <dl>
                      <dt>Bedrooms:</dt>
                      <dd>{{$property->bedrooms}}</dd>
                      <dt>Baths:</dt>
                      <dd>{{$property->bathrooms}}</dd>
                      <dt>Minimum Lease:</dt>
                      <dd>{{$property->minimum_lease}}</dd>
                    </dl>
                  </div>
                  <!-- end of block .slider__params--><a href="property_details.html" class="slider__more">Details</a>
                </div>
                <!-- end of block .slider__caption-->
              </div>

              @endforeach
             
            </div>
            <!-- end of block .slider__block-->
            <div class="slider__controls">
              <button class="slider__control slider__control--prev js-banner-prev fa"></button>
              <button class="slider__control slider__control--next js-banner-next fa"></button>
            </div>
          </div>
          <!-- END SLIDER-->
        </div>
      </div>

       <!-- END PROPERTY SLIDER-->