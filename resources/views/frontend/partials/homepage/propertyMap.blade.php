
<!-- BEGIN PROPERTY SEARCH-->

<div class="widget js-widget">
        <div class="widget__content">
          <div class="map map--index">
            <div class="map__buttons">
              <button type="button" class="map__change-map js-map-btn">Property Map</button>
            </div>
            <div class="map__wrap">
              <div style="" data-infobox-theme="dark" class="map__view js-map-index-canvas"></div>
            </div>
            <div class="container">
              <div class="map__search">
                <!-- BEGIN SEARCH-->
                <form action="properties_listing_list.html" class="form form--flex form--search js-search-form form--banner-sidebar form--dark">
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
                        <button type="button" data-toggle="dropdown" data-placeholder="---" class="dropdown-toggle js-select-checkboxes-btn fa">---</button>
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
                    <div class="form-group"><span class="control-label">Location level 1</span>
                      <div class="dropdown dropdown--select">
                        <button type="button" data-toggle="dropdown" data-placeholder="States" class="dropdown-toggle js-select-checkboxes-btn fa">States</button>
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
                    <div class="form__buttons form__buttons--double">
                      <button type="button" class="form__reset js-form-reset">Reset</button>
                      <button type="submit" class="form__submit">Search</button>
                    </div>
                  </div>
                </form>
                <!-- end of block-->
                <!-- END SEARCH-->
              </div>
            </div>
          </div>
        </div>
      </div>

       <!-- END PROPERTY SEARCH-->