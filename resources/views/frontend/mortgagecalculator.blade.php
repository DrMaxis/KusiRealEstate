@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))
@section('xcss')

<style>

.home-price::before {

    content: "$";
    position: absolute;
    font-size: 13px;
    left: 8px;
    top: 50%;
    color: #515666;
    transform: translateY(-50%);
}



</style>

<link rel="stylesheet" href="{{asset('css/mcalc/a.css')}}">

<link rel="stylesheet" href="{{asset('css/mcalc/base.css')}}">
@endsection
@section('content')
   @include('frontend.partials.mortgagecalculator.breadcrumb')

 {{--   @include('frontend.partials.mortgagecalculator.map') --}}

   @include('frontend.partials.mortgagecalculator.content')
   @include('frontend.includes.footer')
@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif
@endpush
@section('xjs')
<script src="{{asset('js/ajax/MortgageCalculator.js')}}"></script>



<script src="{{asset('js/mcalc/jquery.js')}}"></script>
<script src="{{asset('js/mcalc/bowerjquery.js')}}"></script>
<script src="{{asset('js/mcalc/foundation.js')}}"></script>
<script src="{{asset('js/mcalc/plugin.js')}}"></script>
<script src="{{asset('js/mcalc/numbers.js')}}"></script>
<script src="{{asset('js/mcalc/graph.js')}}"></script>
<script src="{{asset('js/mcalc/base.js')}}"></script>

<script language="javascript" type="text/javascript">
    function showHide(shID) {
      if (document.getElementById(shID)) {
        if (document.getElementById(shID + '-show').style.display != 'none') {
          document.getElementById(shID + '-show').style.display = 'none';
          document.getElementById(shID).style.display = 'block';
        } else {
          document.getElementById(shID + '-show').style.display = 'inline';
          document.getElementById(shID).style.display = 'none';
        }
      }
    }
  </script>
@endsection





 <script>
 
 "use strict";
var demodata = [{
  "address": "401 South Sycamore Street, Santa Ana, CA 92701, USA",
  "image": "01",
  "area": "460",
  "bedrooms": "1",
  "price": "8,780",
  "type": "Multifamily",
  "lat": "33.74229160384012",
  "lng": "-117.86845207214355"
}, {
  "address": "649 West Adams Boulevard, Los Angeles, CA 90007, USA",
  "image": "02",
  "type": "Self Storage",
  "area": "371",
  "bedrooms": "1",
  "price": "4,555",
  "lat": "34.02902892690632",
  "lng": "34.02902892690632"
}, {
  "address": "9750 3rd Ave NE, #425, Seattle, WA 98115, USA ",
  "image": "03",
  "type": "Mixed-Use",
  "area": "190",
  "bedrooms": "2",
  "price": "6,72M",
  "lat": "47.699527",
  "lng": "-122.325697"
}, {
  "address": "1026 Ohio Avenue, Long Beach, CA 90804, USA",
  "image": "04",
  "type": "Multifamily",
  "area": "2516",
  "bedrooms": "1",
  "price": "2,5M",
  "lat": "33.77943269617864",
  "lng": "-118.16001892089844"
}];
 
 </script>