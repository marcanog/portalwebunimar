@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/services/services.jpg')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                    src="{{URL::asset('/image/logo-unimar.png')}}"><h4>{{trans('commons.calendar-academy')}}</h4>
            </div>
        </div>
        <div class="content">

            <img src="{{URL::asset('./image/academic_calendar/calendar_2023.png')}}" width="80%">
{{--            <div class="d-grid col-md-4 mx-auto my-4">--}}
{{--                <a class="rounded p-2 fw-bold" role="button" style="background-color:#0d4d98; color:#FFF;" href="#">{{trans('library.benefits_card')}}</a>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
