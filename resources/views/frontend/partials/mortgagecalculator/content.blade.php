{{-- 
  <div class="center">
    <div class="container">
        <div class="widget js-widget widget--landing">
            <div class="widget__header">
                <h2 class="widget__title">Sell Your Home</h2>
                <h5 class="widget__headline">Selling is our speciality! Get a complete marketing plan designed especially for your home and budget.</h5>
            </div>
            <div class="widget__content">
                <div class="contacts">
                    <div class="row">
                        <div class="contacts__column">
                    
                            @include('frontend.partials.mortgagecalculator.form')
                        </div>
                        <div class="contacts__column">
                            <div class="contacts__body">
                                <h4>Contact Us to Sign Up for an Open House</h4>
                                <p>Pacific North has been helping people buy and sell real estate in the Puget
                                    Sound region for over 30 years. We have hundreds of real estate brokers who
                                    consistently produce well above the industry average due to ongoing training and
                                    support.
                                 </p> 
                                    <p>
                                        Our brokers are constantly growing through experience and education. Don't
                                    settle for anything but the best professional service! Skyline's agents are involved
                                    in 25% of all real estate transactions in the Puget Sound.
                                </p>
                            </div>
                            <div class="feature__list">
                                    <div class="feature__item" style="visibility: visible; ">
                                            <svg class="feature__icon feature__icon--money-save">
                                                    <use xlink:href="#icon-money-save"></use>
                                            </svg>
                                            <div class="feature__item-content">
                                                    <h3 class="feature__item-title">Earn More</h3>
                                                    <div class="feature__text">
                                                            <p>It starts with our living database of more
                                                                    than 110 million U.S. homes – including
                                                                    homes for sale, homes for rent and homes
                                                                    not currently on the market.</p>
                                                    </div>
                                            </div>
                                    </div>
                                    <!-- end of block .feature__item-->
                                    <div class="feature__item" style="visibility: visible; ">
                                            <svg class="feature__icon feature__icon--good-sales">
                                                    <use xlink:href="#icon-good-sales"></use>
                                            </svg>
                                            <div class="feature__item-content">
                                                    <h3 class="feature__item-title">Good sales&amp;marketing
                                                    </h3>
                                                    <div class="feature__text">
                                                            <p>In addition, RealtySpace operates the largest
                                                                    real estate and rental advertising
                                                                    networks in the U.S. in partnership with
                                                                    Livemile Homes!</p>
                                                    </div>
                                            </div>
                                    </div>
                                    <!-- end of block .feature__item-->
                              
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>  --}}

<div class="center">
    <div class="container">
        <div class="widget js-widget widget--landing">
            <div class="widget__header">
                <h2 class="widget__title">Calculate Your Mortgage</h2>
                <h5 class="widget__headline">Here you can calculate your mortgage and learn about your estimated monthly payments</h5>
            </div>
            <div class="widget__content">
                    <div class="white-box">
                            <section>
                
                                <div class="row" style="overflow: hidden;">
                                    <div class="small-12 medium-5 columns">
                                        <div class="row">
                                            <div class="small-12 columns">
                                                <label for="home-price" class="inline">Home Price:</label>
                                            </div>
                                            <div class="small-12 columns">
                                                <input type="text" id="home-price" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="large-12 columns">
                                                <div id="home-price-slider" class="range-slider round" data-slider
                                                    data-options="start: 1000; end: 2000000; step: 1000;">
                                                    <span class="range-slider-handle" role="slider" tabindex="0"></span>
                                                    <span class="range-slider-active-segment"></span>
                                                    <input type="hidden">
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="row">
                                            <div class="small-12 columns">
                                                <label for="down-payment" class="inline">Down Payment:</label>
                                            </div>
                                            <div class="small-12  medium-5 columns">
                                                <input type="text" id="down-payment" placeholder="">
                                            </div>
                                            <div class="hide-for-small medium-2 columns">
                                                <center>or</center>
                                            </div>
                                            <div class="small-12 medium-5 columns">
                                                <input type="text" id="down-payment-percent" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="large-12 columns">
                                                <div id="down-payment-slider" class="range-slider round" data-slider
                                                    data-options="start: 0; end: 100; step: 1;">
                                                    <span class="range-slider-handle" role="slider" tabindex="0"></span>
                                                    <span class="range-slider-active-segment"></span>
                                                    <input type="hidden">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="small-12 columns">
                                                <label for="mortage-interest" class="inline">Interest rate:</label>
                                            </div>
                                            <div class="small-12 columns">
                                                <input type="text" id="mortage-interest" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="large-12 columns">
                                                <div id="mortage-interest-slider" class="range-slider round" data-slider
                                                    data-options="start: 0.125; end: 20; step: 0.025;">
                                                    <span class="range-slider-handle" role="slider" tabindex="0"></span>
                                                    <span class="range-slider-active-segment"></span>
                                                    <input type="hidden">
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="row">
                                            <div class="small-12 columns">Loan term (Years):</div>
                                            <div class="small-5 columns">
                                                <label class="inline">Years
                                                    <input id="yearsNumber" type="text" placeholder="" value="30" />
                                                </label>
                                            </div>
                                            <div class="small-2 columns">
                                                or
                                            </div>
                                            <div class="small-5 columns">
                                                <label class="inline">months
                                                    <input id="periodsNumber" type="text" placeholder="" value="360" />
                                                </label>
                                            </div>
                
                                        </div>
                                        <a href="#" id="advance-show" class="showLink"
                                            onclick="showHide('advance');return false;">Advanced fields <img
                                                class="icon icons8-Expand-Arrow"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAABYBJREFUeAHtmttuE0cYx2cCXLFGahu4TZxX6Av0FXpRUhUoUIrATtWDej5JVkuhFMqh1DZR0laQnkyLeIW+QF8hNrdJ1UrYueIw/b6NJ9pgez37eXc9tv4jJbMzs3P4//77zXidKIUEAiAAAiAAAiAAAiAAAiAAAiAAAiAAAiAAAiAAAiAAAiAAAiAAAiAAAiAAAiAAAiAAAiAAAiAAAiAAAiAwLQT0KELm6g9enDF68dk9wbG/z+iHo4w1aX2fXzb7/n3cWXuiTeN+6cA96fpnpB278BvUf/G/R50GL0g61qT1Y62smbXTA9hgFlINogiIwN+Bro2698zeYHHaI8HCN1pFoT+kSFiUREJiA/rBt+5PuwkD4Fv5IhMSGRAH365iWk0YAt/KT2yCswEu8O0qps0ER/hWfiITnA9h/rRDM+zs+Xa2fjnvj9NyMCeEzzj2dVn1Q9NT52zA3EZwlHrf7RlhQMU0mCCAzzTudlkNILO72tmAvyr6EQ38stLqz91DDC5Nsgki+MSGGTGrwVR2tzifAbbbCxWz9/6hzq9UfsnWDcsn7UwQwVfqD4L/ShL4zC2xAdwpNOFg5xfqfZjLLmlSTBDBN+rO3GZwJCl85iYyIAR+x+wp/kMm0NtgWHb45bsJIvhKNZqzwRF1WD92QNBzi/MZ0NOTJuSJycHfe9oGVPh8Jkjgk57fRoHPmOQGcG8yYX02OGqU4jPBKfloggg+aW49FxyTPvkW1mgG8ChkQms2eFUZxduRU/LJBAl81hpqFm47UUijG8Cj8Xa0SSYo83N08LhrH0wQwSeNodYU4DOfdAzgkSr6SXOjcJxMWOOiSxqnCUL4a6FG0uqiz+We9Azg2bZNOEEm3HaZnO8ZhwlC+LcJ/gnW6KrN5b50DeAZt004SWhvuSyA78nTBCH8WwT/ZNrwWbv8PYB7x6WKmZk/tLWqlSEz3FLW7wkS+Ebpn1ob+1/PAj5Tyc4AHp1NOLi1orV5jYsuKSsTRPCN/rG1uf90VvCZR7YG8AzG6GJ9a4UuTnHRJaVtggQ+ofmhWSL49PS4rFl6T/pnwNMrIQGhEKVWn24aVE7zTJDBV6t5wGf92UeApcyRcLOzTC8xp23VsHzUSBDB12qleTY4k/WTb7VnHwF2Jo4EEkZQl23VsHyUSJDA57XlCZ/15xcBljZFwkK9U6ON9aytGpYnjQQRfKVurpeCcl5PvtWcvwE8M5kwX+9UafKSXciw3NUECXx6GOqtUrCUN3zWnN8WFCVM29G2YFWLVsddu2xHEvi0B9TGBZ/1jicCIqSLtfb3VFyKVMVeDooEEXylqs1y4Y3YCTNuHE8ERER1AdyIVMVe9osEIfwb44bPQsceAZZ2sdq+Tqt505aH5TYS+D7+HyQ2ZlifnXajvmsuFd7aKY/xwhsDmMFCvX3NGOUMhk3gfknga62ur5cKb3M/H5JXBjCQhVr7Kn0qyQQQib22Xi684wN4u4axnwF2ITbfBmSu2HJ6ubniG3zW5p0BvKhm+cC79K7wLV+nkmiscMxUBkt3EO+2oKi8Yu3BJfqc8F60Lvm1uUzw30/eL58eXhvACOhri4vGmA8kOLTW39DXCx9K+ubVx8stKCqeAWqlL0brXK65j+/wWYf3EWBhz1c7F+gbjI9sOS6nr5q+bi0FH8fd40ub9xFgQTFQ+vvsBVuOyc9PCnzWMDEG8GJb5eATitmv+Lpvojb6euHTvm2eVk6UAcywWSp8Rtm5PjzPddv6NPlbNXEGMEp6yj+nP21+abHSQfZFWGcrkOdDYKHarvBPPrNhFhAAARAAARAAARAAARAAARAAARAAARAAARAAARAAARAAARAAARAAARAAARAAARAAARAAARBwI/A/U3DCK/89l2gAAAAASUVORK5CYII="
                                                width="12" height="12"></a>
                                        <div id="advance" class="more">
                
                                            <div class="row">
                                                <div class="small-12 columns">
                                                    <label class="inline">Annual Property Tax:</label>
                                                </div>
                                                <div class="small-12 columns">
                                                    <input id="propertyTax" type="text" placeholder="" value="$0" />
                                                </div>
                                            </div>
                
                                            <div class="row">
                                                <div class="small-12 columns">
                                                    <label class="inline">Homeowners Insurance:</label>
                                                </div>
                                                <div class="small-12 columns">
                                                    <input id="homeInsurance" type="text" placeholder="" value="$0" />
                
                                                </div>
                                            </div>
                
                                            <div class="row">
                                                <div class="small-12 columns">
                                                    <label class="inline">Condo/HOA Fees:</label>
                                                </div>
                                                <div class="small-12 columns">
                                                    <input id="condo" type="text" placeholder="" value="$0" />
                
                                                </div>
                                            </div>
                                            <br>
                                            <p><a href="#" id="advance-hide" class="hideLink"
                                                    onclick="showHide('advance');return false;">Hide advanced fields <img
                                                        class="icon icons8-Collapse-Arrow"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAABYtJREFUeAHtm9lyE0cUhrsNXDFyVRLsXFrSK+QF8goUCSYYY9YYyWTft4oKCAkEwhIk4ZhADAZiklReIS+QV/DIl7FdSZU1vmLpnJZ1qoSwPD09q8w/VdSx5OnT53zfzGimZYTABgIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIZIlCsNiv6X4ZKClyKDDwiIwMK1eYpIcVXuhxq4tRCOfd1RkoLVEZfCijUmqepyy+7Oj3jlnMtIV3vZ/pl3wko1JtnhBJfbEhVim/cUq5bzIa7ZuXNvhKQr3lnpVCf+cA7S2fCxoJ8Bqbx64E0JrWZM1/1vjWAr1N/rve1mSONMX1xBhRr3ndKqE+CAJJCnlsoO58GGZPGvpkXUKx755RSH9vAkVKeXyg5gcTZzBNmTKYFFGqr39NN5odhGhRCXXDLgx+FyxHf6MwKKFRXLwgpP4ikdaUuulODIUVGUskzSTIpgI78i3Tkv/9MtaHeUD/QmRCN0FB1PD04cwKKteYlJcS7T5cZzStq9jI9Mb8XTbZosmRKQLHevKyUeMe0NanEn3pfJcVu4zFSXFko5WIRbFpD536ZEUBrO1doUeftzuI2+1nDf2G7M6r3+e+RNx9EAj1JX3WncsaiN6sj7O8yIYDWdq5SI2+ZNsPw/56UD/WYV6bVjsAShPiRnpiNhZvWFnS/1AUQ/GtU9JRp4d3weZylhCpJOMk50ojpCVBKFq571+hyUDZtvBd8Hm8lQYqae8I5Sbe89Nmf/JaOAIKfr3tVmrxk2rIffM5jI4HI1xslZyoNCckLIPi0vFCjpk8wNL9oCp/z2EggENdp2aKctIRkBWj4Na9OdyyTDMsvBoXP+awkKDFNC3ilJCUkJ2D9mj9N1/zjDMkv2sLnvDYS6FZ4hj4TJpOSkIwADb/u/URgjjEcvxgWPue3kiDEDbfkvJmEhPgFtOCvzdDz6lGG4hejgs/z2EmQP7ulncfjlhCvgIoayA+tzdAd3hGG4Rejhs/z2UigY+dmY5kkVOQTzhN1jE+Ahj+8doO+RjxsWnRc8Hl+KwlC3mos7TwWl4R4BBD8wnDzJi0pT3DzfjFu+Dy/jQS6fM66S7kjcUiIXsA6/FsE/yA37ReTgs91WEq4TRIORy0hWgHr8H8h+OPcrF9MGj7XYynhDkk4FKWE6ASsw58l+Ae4Sb+YFnyuy1LCHEmYiEpCNAIeqG2FZW+WHmLGuDm/mDZ8rs9KghJ33SFnQuyVjzmPbQwvgODnV7zblGi/aRFZgc/12kigtax7jV3OwbASwgkg+MUVb46K2cfN+MWswed6rSRIcb/xkjMeRoK9AH3ZWfHuUgOtrwW5kc1iVuFzzTYSaOy8u8sZs5VgJeDVitq+OETwpdjLxfvFrMPn+q0kKPFgZNkZ+6siH3Ee0xhYQAv+sHePJnjdeJL2F+j8Ha7puLT2s5IgxG8jS87+oBICCWjBf9m7T0vKr5nC6Zcjv7sfKwlS/D7yj/NGEAnGAtpH/q9U6J7uYnu97lf43I+VBCH+oDNhn6kE4/8fsDjszT1P8LUEfcnUf3ukDySWYhD3tFkZ7CqEsYAnUs1Txtbf4fhl7vcjv7M/CwkP26w60/T82fgSpDOM1Fd3DyipRezolXErwe/s0fBypOGPLpYGjc+YQAJ0QZtJ2KrwWYSPhMDwdd7AAvSgjSRsdfi6b731kGAFX+ezEqAHdkp4XuDrvvXWJcEavs5lLUAPbksYfXGbM94vD1m67ig2LeHfx94d/YEb5JofxdzIAQIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgAAIgkE0C/wM8L6dYZY/+nwAAAABJRU5ErkJggg=="
                                                        width="12" height="12"></a></p>
                                        </div>
                                    </div>
                                    <div class="medium-1 hide-for-small columns left-calc">
                                        <div style="background:#e7e7e7;width:1px;min-height:500px;margin:0 auto;;">&nbsp;</div>
                                    </div>
                
                                    <div class="medium-5 small-12 columns left-calc"><br>
                                        <div class="Mortgage-header-payment">Monthly payment breakdown</div>
                                        <div class="doughnut-container">
                                            <label class="pie-label">
                                                <span id="MonthlyPayment" class="pie-jumbo">$0</span><span
                                                    class="blocker text-center pie-large">/month</span>
                                            </label>
                                            <div id="doughnut-chart">
                                                <canvas id="doughnutChart" width="200" height="200" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="large-12">
                
                                                <ul class="doughnutChart-legend">
                                                    <li class="legend1">
                                                        <span id="principal-interest" class="cost-1 principal-interest"
                                                            style="font-size: 22px;">$2,917</span><br><span class="text-1"
                                                            style="font-size: 14px;">Principal<br> &amp; Interest</span>
                                                    </li>
                                                    <li class="legend2">
                                                        <span id="property-tax" class="cost-2 property-tax"
                                                            style="font-size: 22px;">$685</span><br><span class="text-2"
                                                            style="font-size: 14px;">Property<br> Tax</span>
                                                    </li>
                                                    <li class="legend3">
                                                        <span id="home-insurance" class="cost-3 home-insurance"
                                                            style="font-size: 22px;">$164</span><br><span class="text-3"
                                                            style="font-size: 14px;">Home Insurance</span>
                                                    </li>
                                                    <li class="legend4" style="display: none;">
                                                        <span id="HoaFees" class="cost-5 hoa-fees"
                                                            style="font-size: 22px;">$0</span><br><span class="text-5"
                                                            style="font-size: 14px;">HOA<br>Fees</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                
                                    </div>
                            </section>
                        </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>