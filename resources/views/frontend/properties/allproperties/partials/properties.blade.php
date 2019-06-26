<div class="center">
        <div class="container">
          <div class="row">
            <!-- BEGIN site-->
            <div class="site site--main" style="width:100% !important;">
              <header class="site__header">
                <h1 class="site__title">All Properties</h1>
                <h5 class="site__headline">{{count($properties)}} <strong> Properties found</strong></h5>
              </header>
              <button type="button" data-goto-target=".js-search-form" class="widget__btn--goto js-goto-btn">Show Filter</button>
              <div class="site__panel">
                <div class="listing__sort">
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
                </div>
                <!--end of block .listing__sort-->
                <div class="listing__view"><span class="control-label">View:</span><a href="properties_listing_grid.html" class="btn--white active"><i class="fa fa-th-large"></i></a><a href="properties_listing_list.html" class="btn--white"><i class="fa fa-bars"></i></a><a href="properties_listing_table.html" class="btn--white"><i class="fa fa-table"></i></a></div>
                <!--end of block .listing__view-->
              </div>
    {{--           <div class="listing__param"><span class="listing__param-item"><a class="listing__param-delete"></a>USA</span><span class="listing__param-item"><a class="listing__param-delete"></a>New Jersey</span><span class="listing__param-item"><a class="listing__param-delete"></a>New York City</span><span class="listing__param-item"><a class="listing__param-delete"></a>California</span><span class="listing__param-item"><a class="listing__param-delete"></a>Los Angeles</span><span class="listing__param-item"><a class="listing__param-delete"></a>For sale</span><span class="listing__param-item"><a class="listing__param-delete"></a>Privat apartment</span><span class="listing__param-item"><a class="listing__param-delete"></a>Price: $50k - $400k</span><span class="listing__param-item"><a class="listing__param-delete"></a>Area: 60 - 145 m2</span><span class="listing__param-item"><a class="listing__param-delete"></a>2 bedrooms</span><span class="listing__param-item"><a class="listing__param-delete"></a>3 bedrooms</span><span class="listing__param-item"><a class="listing__param-delete"></a>4 bedrooms<span class="listing__param-item"></span><a class="listing__param-delete"></a>Clear All</span></div>
     --}}          <!--end of block .listing__param-->
              <div class="site__main">
                <div class="widget js-widget widget--main">
                  <div class="widget__content">
                    <div class="listing listing--grid listing--lg-6 js-properties-list">
    
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
                <div class="widget__footer"><a href="" class="widget__more js-properties-more">More listings</a></div>
              </div>
            </div>
            <!-- END site-->
            <!-- BEGIN SIDEBAR-->
           {{--  <div class="sidebar">
              <div class="widget js-widget widget--sidebar">
                <div class="widget__header">
                  <h2 class="widget__title">Filter</h2>
                  <h5 class="widget__headline">Find your apartment or house on the exact key parameters.</h5><a class="widget__btn js-widget-btn widget__btn--toggle">Show filter</a>
                </div>
                <div class="widget__content">
                  <!-- BEGIN SEARCH-->
                  <form action="properties_listing_list.html" class="form form--flex form--search js-search-form form--sidebar">
                    <div class="row">
                      <div class="form-group">
                        <label for="in-keyword" class="control-label">Keyword</label>
                        <input type="text" id="in-keyword" placeholder="Text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="in-contract-type" class="control-label">Listing Type</label>
                        <select id="in-contract-type" data-placeholder="---" class="form-control">
                          <option label=" "></option>
                          <option>Sale</option>
                          <option>Rent</option>
                        </select>
                      </div>
                      <div class="form-group"><span class="control-label">Property type</span>
                        <div class="dropdown dropdown--select">
                          <button type="button" data-toggle="dropdown" data-placeholder="---" class="dropdown-toggle js-select-checkboxes-btn">---</button>
                          <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                            <ul>
                              <li>
                                <input id="checkbox_type_1" type="checkbox" name="checkbox_type_1" class="in-checkbox">
                                <label for="checkbox_type_1" data-toggle="tooltip" data-placement="left" title="Tooltip on top" class="in-label">Privat apartment</label>
                              </li>
                              <li>
                                <input id="checkbox_type_2" type="checkbox" name="checkbox_type_2" class="in-checkbox">
                                <label for="checkbox_type_2" data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="in-label">Apartment</label>
                              </li>
                              <li>
                                <input id="checkbox_type_3" type="checkbox" name="checkbox_type_3" class="in-checkbox">
                                <label for="checkbox_type_3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                              </li>
                              <li>
                                <input id="checkbox_type_4" type="checkbox" name="checkbox_type_4" class="in-checkbox">
                                <label for="checkbox_type_4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Flat</label>
                              </li>
                              <li>
                                <input id="checkbox_type_5" type="checkbox" name="checkbox_type_5" class="in-checkbox">
                                <label for="checkbox_type_5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">House</label>
                              </li>
                              <li>
                                <input id="checkbox_type_6" type="checkbox" name="checkbox_type_6" class="in-checkbox">
                                <label for="checkbox_type_6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Condominium</label>
                              </li>
                              <li>
                                <input id="checkbox_type_7" type="checkbox" name="checkbox_type_7" class="in-checkbox">
                                <label for="checkbox_type_7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                              </li>
                              <li>
                                <input id="checkbox_type_8" type="checkbox" name="checkbox_type_8" class="in-checkbox">
                                <label for="checkbox_type_8" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Flat</label>
                              </li>
                              <li>
                                <input id="checkbox_type_9" type="checkbox" name="checkbox_type_9" class="in-checkbox">
                                <label for="checkbox_type_9" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                              </li>
                              <li>
                                <input id="checkbox_type_10" type="checkbox" name="checkbox_type_10" class="in-checkbox">
                                <label for="checkbox_type_10" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Condominium</label>
                              </li>
                            </ul>
                            <!-- end of block .dropdown-menu-->
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="in-tenure-type" class="control-label">Tenure</label>
                        <select id="in-tenure-type" data-placeholder="Any tenure" class="form-control">
                          <option label=" "></option>
                          <option>Tenure</option>
                          <option>Tenure</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="in-bedrooms-type" class="control-label">Bedrooms</label>
                        <select id="in-bedrooms-type" data-placeholder="---" class="form-control">
                          <option label=" "></option>
                          <option>1</option>
                          <option>2</option>
                        </select>
                      </div>
                      <div class="form-group"><span class="control-label">Location level 1</span>
                        <div class="dropdown dropdown--select">
                          <button type="button" data-toggle="dropdown" data-placeholder="States" class="dropdown-toggle js-select-checkboxes-btn">States</button>
                          <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                            <div class="region-select">
                              <ul class="js-checkboxes-tree bonsai region-select__list">
                                <li>
                                  <input type="checkbox" name="location[]" value="Fresno" id="region-select-states-0" class="in-checkbox">
                                  <label for="region-select-states-0" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                                  <ul>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Clovis" id="region-select-states-1" class="in-checkbox">
                                      <label for="region-select-states-1" data-toggle="tooltip" data-placement="top" title="Clovis" class="in-label">Clovis</label>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Fresno" id="region-select-states-2" class="in-checkbox">
                                      <label for="region-select-states-2" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-states-3" class="in-checkbox">
                                  <label for="region-select-states-3" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                                  <ul>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Glendale" id="region-select-states-4" class="in-checkbox">
                                      <label for="region-select-states-4" data-toggle="tooltip" data-placement="top" title="Glendale" class="in-label">Glendale</label>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Long Beach" id="region-select-states-5" class="in-checkbox">
                                      <label for="region-select-states-5" data-toggle="tooltip" data-placement="top" title="Long Beach" class="in-label">Long Beach</label>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-states-6" class="in-checkbox">
                                      <label for="region-select-states-6" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                                      <ul>
                                        <li>
                                          <input type="checkbox" name="location[]" value="Bel Air" id="region-select-states-7" class="in-checkbox">
                                          <label for="region-select-states-7" data-toggle="tooltip" data-placement="top" title="Bel Air" class="in-label">Bel Air</label>
                                        </li>
                                        <li>
                                          <input type="checkbox" name="location[]" value="Brentwood" id="region-select-states-8" class="in-checkbox">
                                          <label for="region-select-states-8" data-toggle="tooltip" data-placement="top" title="Brentwood" class="in-label">Brentwood</label>
                                        </li>
                                        <li>
                                          <input type="checkbox" name="location[]" value="Holywood Hills" id="region-select-states-9" class="in-checkbox">
                                          <label for="region-select-states-9" data-toggle="tooltip" data-placement="top" title="Holywood Hills" class="in-label">Holywood Hills</label>
                                        </li>
                                        <li>
                                          <input type="checkbox" name="location[]" value="Mar Vista" id="region-select-states-10" class="in-checkbox">
                                          <label for="region-select-states-10" data-toggle="tooltip" data-placement="top" title="Mar Vista" class="in-label">Mar Vista</label>
                                        </li>
                                        <li>
                                          <input type="checkbox" name="location[]" value="Silver Lake" id="region-select-states-11" class="in-checkbox">
                                          <label for="region-select-states-11" data-toggle="tooltip" data-placement="top" title="Silver Lake" class="in-label">Silver Lake</label>
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Santa Ana" id="region-select-states-12" class="in-checkbox">
                                      <label for="region-select-states-12" data-toggle="tooltip" data-placement="top" title="Santa Ana" class="in-label">Santa Ana</label>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <input type="checkbox" name="location[]" value="Santa Clara" id="region-select-states-13" class="in-checkbox">
                                  <label for="region-select-states-13" data-toggle="tooltip" data-placement="top" title="Santa Clara" class="in-label">Santa Clara</label>
                                  <ul>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Cupertino" id="region-select-states-14" class="in-checkbox">
                                      <label for="region-select-states-14" data-toggle="tooltip" data-placement="top" title="Cupertino" class="in-label">Cupertino</label>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Mountain View" id="region-select-states-15" class="in-checkbox">
                                      <label for="region-select-states-15" data-toggle="tooltip" data-placement="top" title="Mountain View" class="in-label">Mountain View</label>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Palo Alto" id="region-select-states-16" class="in-checkbox">
                                      <label for="region-select-states-16" data-toggle="tooltip" data-placement="top" title="Palo Alto" class="in-label">Palo Alto</label>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="San Jose" id="region-select-states-17" class="in-checkbox">
                                      <label for="region-select-states-17" data-toggle="tooltip" data-placement="top" title="San Jose" class="in-label">San Jose</label>
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                              <div class="region-select__buttons">
                                <button type="button" class="region-select__btn region-select__btn--reset js-select-checkboxes-reset">Clear</button>
                                <button type="button" class="region-select__btn js-select-checkboxes-accept">Accept</button>
                              </div>
                            </div>
                            <!-- end of block .region-select-->
                          </div>
                          <!-- end of block .dropdown-menu-->
                        </div>
                      </div>
                      <div class="form-group"><span class="control-label">Location level 2</span>
                        <div class="dropdown dropdown--select">
                          <button type="button" data-toggle="dropdown" data-placeholder="Location" class="dropdown-toggle js-select-checkboxes-btn">Locations</button>
                          <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                            <div class="region-select">
                              <ul class="js-checkboxes-tree bonsai region-select__list">
                                <li>
                                  <input type="checkbox" name="location[]" value="Fresno" id="region-select-location-18" class="in-checkbox">
                                  <label for="region-select-location-18" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                                  <ul>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Clovis" id="region-select-location-19" class="in-checkbox">
                                      <label for="region-select-location-19" data-toggle="tooltip" data-placement="top" title="Clovis" class="in-label">Clovis</label>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Fresno" id="region-select-location-20" class="in-checkbox">
                                      <label for="region-select-location-20" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-location-21" class="in-checkbox">
                                  <label for="region-select-location-21" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                                  <ul>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Glendale" id="region-select-location-22" class="in-checkbox">
                                      <label for="region-select-location-22" data-toggle="tooltip" data-placement="top" title="Glendale" class="in-label">Glendale</label>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Long Beach" id="region-select-location-23" class="in-checkbox">
                                      <label for="region-select-location-23" data-toggle="tooltip" data-placement="top" title="Long Beach" class="in-label">Long Beach</label>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-location-24" class="in-checkbox">
                                      <label for="region-select-location-24" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                                      <ul>
                                        <li>
                                          <input type="checkbox" name="location[]" value="Bel Air" id="region-select-location-25" class="in-checkbox">
                                          <label for="region-select-location-25" data-toggle="tooltip" data-placement="top" title="Bel Air" class="in-label">Bel Air</label>
                                        </li>
                                        <li>
                                          <input type="checkbox" name="location[]" value="Brentwood" id="region-select-location-26" class="in-checkbox">
                                          <label for="region-select-location-26" data-toggle="tooltip" data-placement="top" title="Brentwood" class="in-label">Brentwood</label>
                                        </li>
                                        <li>
                                          <input type="checkbox" name="location[]" value="Holywood Hills" id="region-select-location-27" class="in-checkbox">
                                          <label for="region-select-location-27" data-toggle="tooltip" data-placement="top" title="Holywood Hills" class="in-label">Holywood Hills</label>
                                        </li>
                                        <li>
                                          <input type="checkbox" name="location[]" value="Mar Vista" id="region-select-location-28" class="in-checkbox">
                                          <label for="region-select-location-28" data-toggle="tooltip" data-placement="top" title="Mar Vista" class="in-label">Mar Vista</label>
                                        </li>
                                        <li>
                                          <input type="checkbox" name="location[]" value="Silver Lake" id="region-select-location-29" class="in-checkbox">
                                          <label for="region-select-location-29" data-toggle="tooltip" data-placement="top" title="Silver Lake" class="in-label">Silver Lake</label>
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Santa Ana" id="region-select-location-30" class="in-checkbox">
                                      <label for="region-select-location-30" data-toggle="tooltip" data-placement="top" title="Santa Ana" class="in-label">Santa Ana</label>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <input type="checkbox" name="location[]" value="Santa Clara" id="region-select-location-31" class="in-checkbox">
                                  <label for="region-select-location-31" data-toggle="tooltip" data-placement="top" title="Santa Clara" class="in-label">Santa Clara</label>
                                  <ul>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Cupertino" id="region-select-location-32" class="in-checkbox">
                                      <label for="region-select-location-32" data-toggle="tooltip" data-placement="top" title="Cupertino" class="in-label">Cupertino</label>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Mountain View" id="region-select-location-33" class="in-checkbox">
                                      <label for="region-select-location-33" data-toggle="tooltip" data-placement="top" title="Mountain View" class="in-label">Mountain View</label>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="Palo Alto" id="region-select-location-34" class="in-checkbox">
                                      <label for="region-select-location-34" data-toggle="tooltip" data-placement="top" title="Palo Alto" class="in-label">Palo Alto</label>
                                    </li>
                                    <li>
                                      <input type="checkbox" name="location[]" value="San Jose" id="region-select-location-35" class="in-checkbox">
                                      <label for="region-select-location-35" data-toggle="tooltip" data-placement="top" title="San Jose" class="in-label">San Jose</label>
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                              <div class="region-select__buttons">
                                <button type="button" class="region-select__btn region-select__btn--reset js-select-checkboxes-reset">Clear</button>
                                <button type="button" class="region-select__btn js-select-checkboxes-accept">Accept</button>
                              </div>
                            </div>
                            <!-- end of block .region-select-->
                          </div>
                          <!-- end of block .dropdown-menu-->
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="in-favorites-search-type" class="control-label">Favorite searches</label>
                        <select id="in-favorites-search-type" data-placeholder="---" class="form-control">
                          <option label=" "></option>
                          <option>Kuala Lumpur - 1 flat</option>
                          <option>2</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="in-favorites-categories-type" class="control-label">Favorite categories</label>
                        <select id="in-favorites-categories-type" data-placeholder="---" class="form-control">
                          <option label=" "></option>
                          <option>Luxury</option>
                          <option>2</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="in-favorites-users-type" class="control-label">Favourite users</label>
                        <select id="in-favorites-users-type" data-placeholder="---" class="form-control">
                          <option label=" "></option>
                          <option>Josh Hartnett</option>
                          <option>2</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="in-datetime" class="control-label">Date Range</label>
                        <input type="text" id="in-datetime" data-start-date="12/03/2015" data-end-date="12/22/2015" data-time-picker="true" data-single-picker="false" class="js-datetimerange form-control">
                      </div>
                      <div class="form-group">
                        <div class="form__mode">
                          <button type="button" data-mode="input" class="form__mode-btn js-input-mode">Input</button>
                        </div>
                        <label for="range_price" class="control-label">Price</label>
                        <div class="form__ranges">
                          <input id="range_price" class="js-search-range form__ranges-in">
                        </div>
                        <div class="form__inputs js-search-inputs">
                          <input type="text" id="in-price-from" placeholder="From" data-input-type="from" class="form-control js-field-range">
                          <input type="text" id="in-price-to" placeholder="To" data-input-type="to" class="form-control js-field-range">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form__mode">
                          <button type="button" data-mode="input" class="form__mode-btn js-input-mode">Input</button>
                        </div>
                        <label for="range_area" class="control-label">Area</label>
                        <div class="form__ranges">
                          <input id="range_area" class="js-search-range form__ranges-in">
                        </div>
                        <div class="form__inputs js-search-inputs">
                          <input type="text" id="in-area-from" placeholder="From" data-input-type="from" class="form-control js-field-range">
                          <input type="text" id="in-area-to" placeholder="To" data-input-type="to" class="form-control js-field-range">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form__mode">
                          <button type="button" data-mode="percent" class="form__mode-btn js-input-commision">Percent</button>
                          <button type="button" data-mode="input" class="form__mode-btn js-input-mode">Input</button>
                        </div>
                        <label for="range_area" class="control-label">Commision</label>
                        <div class="form__ranges">
                          <input id="range_commision" class="js-search-range form__ranges-in">
                        </div>
                        <div class="form__inputs js-search-inputs">
                          <input type="text" id="in-commision-from" placeholder="From" data-input-type="from" class="form-control js-field-range">
                          <input type="text" id="in-commision-to" placeholder="To" data-input-type="to" class="form-control js-field-range">
                        </div>
                      </div>
                      <div class="form__buttons form__buttons--double">
                        <button type="button" class="form__reset js-form-reset">Reset</button>
                        <button type="submit" class="form__submit">Search</button>
                        <button type="button" class="form__favorite">Add search to favorites</button>
                      </div>
                    </div>
                  </form>
                  <!-- end of block-->
                  <!-- END SEARCH-->
                </div>
              </div>
            </div> --}}
            <!-- END SIDEBAR-->
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <!-- END CENTER SECTION-->