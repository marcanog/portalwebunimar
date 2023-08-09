@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/temporal/folleto-cara-1.png')}}" width="100%">
        </div>
        <div class="banner-main">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/temporal/folleto-cara-2.png')}}" width="100%">
        </div>
    </div>
@endsection
