


<!DOCTYPE html>

@langrtl
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl


@include('frontend.includes.head')


<body class="menu-default hover-default scroll-animation slider--slideInUp compact ">

    <div id="app" class="box js-box">

        @include('includes.partials.logged-in-as')

        @include('frontend.includes.header')


        @include('frontend.includes.navbar')


        <div class="site-wrap js-site-wrap">
            @yield('breadcrumbs')

            <div class="container">
                @include('includes.partials.messages')
            </div>

            @yield('content')
        </div>


    </div><!-- #app -->

   


    

  




@stack('before-scripts')
    {!! script(mix('js/manifest.js')) !!}
    {!! script(mix('js/vendor.js')) !!}
    {!! script(mix('js/frontend.js')) !!} 
@stack('after-scripts') 

<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places,drawing,geometry&key=AIzaSyAWIthRTDB8LhsvBtm_4ORggd9BM8Db8bU"></script>
<script type="text/javascript" src="http://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
<script type="text/javascript" src="{{asset('js/vendor/vendor.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/base.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/extras.js')}}"></script>

    @include('includes.partials.ga')
    
    {{-- --}} 
    @yield('xjs')
</body>

</html>