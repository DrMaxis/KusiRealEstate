<div class="center">
        <div class="container">
          <div class="row">
            <!-- BEGIN site-->
            <div class="site site--main" >
              <header class="site__header">
                <h1 class="site__title" style="margin-bottom:50px;">All Properties</h1>
               {{-- <h5 class="site__headline"> {{count($properties)}}  <strong>Last Updated {{ $now }} </strong></h5>--}}
              </header>
             {{--  <button type="button" data-goto-target=".js-search-form" class="widget__btn--goto js-goto-btn">Show Filter</button> --}}
              <div class="site__panel">
                  <h5 class="site__headline" style="color:white"><strong>Last Updated {{ $now }} </strong></h5>
                {{--<div class="listing__sort">
                  <div class="form-group">
                     <label for="in-listing-sort" class="control-label">Sort by:</label> 
                     <div class="form-control--select">
                      <select id="in-listing-sort" class="form-control js-in-select">
                        <option>Price + P&amp;P: Highest First</option>
                        <option>Time: Ending Soonset</option>
                        <option>Time: Newly Listed</option>
                        <option>Price + P&amp;P: Lowest First</option>
                        <option>Price + P&amp;P: Highest First</option>
                        <option>Price: Lowest First</option>
                        <option>Price: Highest First</option>
                        <option>Distance: Nearest First</option>
                        <option>Condition: New First</option>
                        <option>Condition: Used First</option>
                        <option>Best Match</option>
                      </select>
                    </div> 
                  </div>

                </div>--}}
                <!--end of block .listing__sort-->
{{--                 <div class="listing__view"><span class="control-label">View:</span><a href="properties_listing_grid.html" class="btn--white active"><i class="fa fa-th-large"></i></a><a href="properties_listing_list.html" class="btn--white"><i class="fa fa-bars"></i></a><a href="properties_listing_table.html" class="btn--white"><i class="fa fa-table"></i></a></div>
 --}}                <!--end of block .listing__view-->
              </div>
    {{--           <div class="listing__param"><span class="listing__param-item"><a class="listing__param-delete"></a>USA</span><span class="listing__param-item"><a class="listing__param-delete"></a>New Jersey</span><span class="listing__param-item"><a class="listing__param-delete"></a>New York City</span><span class="listing__param-item"><a class="listing__param-delete"></a>California</span><span class="listing__param-item"><a class="listing__param-delete"></a>Los Angeles</span><span class="listing__param-item"><a class="listing__param-delete"></a>For sale</span><span class="listing__param-item"><a class="listing__param-delete"></a>Privat apartment</span><span class="listing__param-item"><a class="listing__param-delete"></a>Price: $50k - $400k</span><span class="listing__param-item"><a class="listing__param-delete"></a>Area: 60 - 145 m2</span><span class="listing__param-item"><a class="listing__param-delete"></a>2 bedrooms</span><span class="listing__param-item"><a class="listing__param-delete"></a>3 bedrooms</span><span class="listing__param-item"><a class="listing__param-delete"></a>4 bedrooms<span class="listing__param-item"></span><a class="listing__param-delete"></a>Clear All</span></div>
     --}}          <!--end of block .listing__param-->
              <div class="site__main">
                <div class="widget js-widget widget--main">
                  <div class="widget__content">
                    <div class="listing listing--grid  js-properties-list">
    
                      {{-- @forelse($properties as $property) 
                      <div class="listing__item">
                        <div class="properties properties--grid">
                          <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="{{propertyImage($property->image)}}" alt=""/>
                              <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Home Size - {{$property->home_size}} Sq Ft</span><span class="properties__params">Land Size - {{$property->land_size}} Sq Ft</span><span class="properties__intro">{{ str_limit($property->head_description, $limit = 100, $end = '...') }}</span><span class="properties__time">{{ timezone()->convertToLocal($property->updated_at) }} ({{ $property->updated_at->diffForHumans() }})</span><span class="properties__more">View details</span>
                              </figure></a><span class="properties__ribon">{{$property->listing_type}}</span>
                          </div>
                          <!-- end of block .properties__thumb-->
                          <div class="properties__details">
                            <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">{{$property->address}}</span><span class="properties__address-city">{{$property->city}}, {{$property->state}} {{$property->zip}}, {{$property->country}}</span></a>
                              <div class="properties__offer">
                                <div class="properties__offer-column">
                                  <div class="properties__offer-label">Down Payment</div>
                                  <div class="properties__offer-value"><strong>${{$property->down_payment}}</strong>
                                  </div>
                                </div>
                                <div class="properties__offer-column">
                                  <div class="properties__offer-value"><strong>${{$property->rental_price}}</strong><span class="properties__offer-period">/month</span>
                                  </div>
                                </div>
                              </div>
                              <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Home Size - {{$property->home_size}} Sq Ft</span><span class="properties__params">Land Size - {{$property->land_size}} Sq Ft</span></div>
                            </div>
                          </div>
                          <!-- end of block .properties__info-->
                        </div>
                        <!-- end of block .properties__item-->
                      </div>
                      @empty 
    
                      <div class="info-title">
                          <p>
                            <span>
                                <h3>
                                   No Properties Found... Try another search?
                                </h3>
                              
                            </span>
                          </p>
                        </div>
    
                        @endforelse
     --}}

     <script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-32613" src="//pacificnorthlistings.idxbroker.com/idx/customshowcasejs.php?widgetid=32613"></script>


                      
                    </div>
                  </div>
                </div>
                <div class="widget__footer"><a href="http://pacificnorthlistings.idxbroker.com/idx/results/listings?hp=800000&amp;lp=200000&amp;pt=1&amp;idxID=a045&amp;idxsrp=30580&amp;per=100&amp;srt=pra" class="widget__more js-properties-more">More listings</a></div>
              </div>
            </div>
            <!-- END site-->
            <!-- BEGIN SIDEBAR-->
             <div class="sidebar">
              <div class="widget js-widget widget--sidebar">
                <div class="widget__header">
                  <h2 class="widget__title">Search</h2>
                  <h5 class="widget__headline">Find your apartment or house on the exact key parameters.</h5><a class="widget__btn js-widget-btn widget__btn--toggle">Show filter</a>
                </div>
                <div class="widget__content">
                  <!-- BEGIN SEARCH-->
                  <form action="properties_listing_list.html" class="form form--flex form--search js-search-form form--sidebar">
                      <script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-30573" src="//pacificnorthlistings.idxbroker.com/idx/quicksearchjs.php?widgetid=30573"></script>
                  </form>
                  <!-- end of block-->
                  <!-- END SEARCH-->
                </div>
              </div>
            </div> 
            <!-- END SIDEBAR-->
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <!-- END CENTER SECTION-->