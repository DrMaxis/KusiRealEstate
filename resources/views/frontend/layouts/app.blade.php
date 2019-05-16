<!DOCTYPE html>
@langrtl
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
@include('frontend.includes.head')


<body class="index_slider menu-default hover-default scroll-animation slider--slideInUp compact ">

    <div id="app" class="box js-box">

        @include('includes.partials.logged-in-as')

        @include('frontend.includes.header')


        @include('frontend.includes.navbar')


        <div class="site-wrap js-site-wrap">
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


<script type="text/javascript" src="{{asset('js/vendor/vendor.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/base.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/extras.js')}}"></script>
    @include('includes.partials.ga')
    
    {{-- --}} 
    @yield('xjs')
</body>

</html>