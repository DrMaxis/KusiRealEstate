@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))
@section('xcss')

@endsection

@section('prescripts') 
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places,drawing,geometry"></script> 
@endsection

@section('content')
   



@include('frontend.partials.homepage.propertySlider')

{{-- @include('frontend.partials.homepage.searchbox') --}}

@include('frontend.partials.homepage.propertyMap')

@include('frontend.partials.homepage.teamShowcase')

@include('frontend.partials.homepage.agentsShowcase')

@include('frontend.partials.homepage.achievements')

@include('frontend.partials.homepage.testimonials')

@include('frontend.partials.homepage.partners')

@include('frontend.partials.homepage.submitProperty')






@endsection


@section('xjs')

{{-- 
<script>
jQuery(window).load(function () {

    setTimeout(function () {
        $('.thumb').addClass('fa');
    }, 1500);

});

</script>
 --}}

    






@endsection
