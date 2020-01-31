@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))
@section('xcss')

@endsection

@section('prescripts')
<script type="text/javascript" src="https://maps.google.com/maps/api/js?libraries=places,drawing,geometry"></script>
@endsection

@section('content')





{{-- <script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-32612" src="//pacificnorthlistings.idxbroker.com/idx/customslideshowjs.php?widgetid=32612"></script>
 --}}



{{-- 
@include('frontend.partials.homepage.propertySlider')
 --}}
{{-- @include('frontend.partials.homepage.searchbox')
 
 @include('frontend.partials.homepage.propertyMap')

--}}

@include('frontend.partials.homepage.searchSlider')
 @include('frontend.partials.homepage.agentsShowcase')
 
 @include('frontend.partials.homepage.testimonials')
@include('frontend.partials.homepage.submitProperty') 
@include('frontend.includes.footer')
{{--
@include('frontend.partials.homepage.featuredProperties')










--}}
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



<script>
    $(function() {

    $(document).ready(function() {
         $('.IDX-qsTextInput').each(function(){
         $(this).addClass('form-control');
     });
     $('.IDX-qsFieldWrap').addClass('form-group');
     $('.IDX-qsTextInput').addClass('form-control');
     $('.IDX-qsButtonInput').addClass('form__submit');
     $('.IDX-qsButtonInput').css('margin-left', '0px');
     $('#IDX-quicksearch-30573').css('width', '100%');
});
    

 })
 
 
</script>





@endsection