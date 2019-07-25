@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))
@section('xcss')

@endsection

@section('prescripts') 
 <script type="text/javascript" src="https://maps.google.com/maps/api/js?libraries=places,drawing,geometry"></script> 
@endsection



@section('breadcrumbs')

@include('frontend.properties.allproperties.partials.breadcrumb')

@endsection


@section('content')
   

@include('frontend.properties.allproperties.partials.properties')

@include('frontend.includes.footer')
@endsection


@section('xjs')



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
