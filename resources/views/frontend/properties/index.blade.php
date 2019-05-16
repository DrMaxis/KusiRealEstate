@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))
@section('xcss')

@endsection

@section('prescripts') 
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places,drawing,geometry"></script> 
@endsection



@section('breadcrumbs')

@include('frontend.properties.includes.breadcrumb')

@endsection


@section('content')
   

@include('frontend.properties.partials.allProperties')


@endsection


@section('xjs')






@endsection
