<!-- BEGIN NAVBAR-->
<div id="header-nav-offset"></div>
<nav id="header-nav" class="navbar navbar--header">
  <div class="container">
    <div class="navbar__row js-navbar-row">
      <div class="">
        {{--   <p>
                  <span>
                      <h3>
                        <a href="{{route('frontend.index')}}" class="navbar__brand">
        Pacific North Properties
        </a>
        </h3>

        </span>
        </p> --}}

        <a href="{{route('frontend.index')}}" class="navbar__brand">

          <img src="/img/frontend/placeholders/logo2.png" alt="" srcset="">

        </a>
      </div>


      <div id="navbar-collapse-1" class="navbar__wrap">
        <ul class="navbar__nav">
          <li class="navbar__item"><a href="{{route('frontend.index')}}" class="navbar__link">Home</a></li>
          
          <li class="navbar__item ">
            <a href="{{route('frontend.contact.sell')}} " class="navbar__link">
              Sell Your Home
            </a>

          </li>
          <li class="navbar__item"><a href="{{route('frontend.newbuyer')}}" class="navbar__link">New Home Buyer</a></li>

          <li class="navbar__item"><a href="{{route('frontend.mortgage')}}" class="navbar__link">Mortgage Calculator</a>
          </li>
          <li class="navbar__item"><a href="{{route('frontend.contact')}}" class="navbar__link">Contact Us</a></li>
        </ul>
        <!-- end of block  navbar__nav-->
      </div>
    </div>
  </div>
</nav>
<!-- END NAVBAR-->