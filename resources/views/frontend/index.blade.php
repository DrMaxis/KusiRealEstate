@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))
@section('xcss')
<style>
    @media (max-width: 767px) {
        .header__span {
            display: inline;
        }
    }


    @media (max-width:767px) {
        .header__phone {
            color: black;

        }

        .header svg {
            fill: black;

        }

        .header {
            background: white;
            color: black;
        }
    }


    @media (max-width: 767px) {
        .navbar__wrap--init {
            display: block;
            background: white;
            width: 300px;
            bottom: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            margin: 0;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 0;
            float: none;
            padding-top: 50px;
            overflow-y: auto;
            -webkit-transform: translate(0px);
            -ms-transform: translate(0px);
            transform: translate(0px);
        }
    }

    @media (max-width: 767px) {
        .navbar__link {
            font-size: 17px;
            color: #000 !important;
            border-bottom: 1px solid #777777;
            padding: 15px 25px;
        }
    }
</style>
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

@include('frontend.partials.homepage.featuredProperties')

{{-- @include('frontend.partials.homepage.teamShowcase')

@include('frontend.partials.homepage.agentsShowcase')

@include('frontend.partials.homepage.achievements')

@include('frontend.partials.homepage.testimonials')

@include('frontend.partials.homepage.partners')

@include('frontend.partials.homepage.submitProperty') --}}

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

     $('.IDX-qsButtonInput').addClass('form__submit');
     $('.IDX-qsButtonInput').css('margin-left', '0px');
     $('#IDX-quicksearch-30573').css('width', '100%');
});
    

 })
 
 
</script>





@endsection