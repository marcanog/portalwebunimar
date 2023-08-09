@extends('layouts.layout')

@section ('content')
<div class="content">
{{--        banners --}}
    <div class="banner-main">
        <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/rector-office/rectordean.jpg')}}" alt="{{trans('rectorade.title')}}">
    </div>
{{--        section --}}
    <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/rector-office/Rec-02.png')}}">
            <h4>{{trans('rectorade.title')}}</h4>
        </div>
    </div>
{{--        cards presentation --}}
    <div class="d-flex justify-content-center flex-column">
        <div class="card-group">
            <div class="card border-0 m-4">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="rounded" src="{{URL::asset('/image/csuperior/antonietarosales.jpg')}}" alt="{{trans('rectorade.rector-charge')}}" style="max-width: 8em; height: 10.25em;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-left">
                            <h3 class="card-title fs-6">{{trans('rectorade.rector-name')}}</h3>
                            <p class="card-text fs-6 font-weight-bold">{{trans('rectorade.rector-charge')}}</p>
                            <p class="card-text font-weight-bold" id="name-funders">{{trans('rectorade.rector-email')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 m-4">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="rounded" src="{{URL::asset('/image/personal/rectorade/hirania-gonzales.png')}}" alt="{{trans('rectorade.rector-asist-charge')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-left">
                            <h3 class="card-title fs-6">{{trans('rectorade.rector-asist')}}</h3>
                            <p class="card-text fs-6 font-weight-bold">{{trans('rectorade.rector-asist-charge')}}</p>
                            <p class="card-text font-weight-bold" id="name-funders">{{trans('rectorade.rector-asist-email')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    content information --}}
    <div class="content justify-content-center m-4 content-vext">
        {{--Vision--}}
        <div class="row justify-content-center mb-4">
            <div class="col-sm-4 col-md-4 my-2"
                 data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                 aria-controls="collapse1">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/views/'.trans('commons.lang-banner').'/rector-office/Rec-03.png')}}" width="75%">
                </a>
            </div>
            <div class="col-sm-4 col-md-4 my-2"
                 data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                 aria-controls="collapse2">
                <a id="foundbtn">
                    <img src="{{URL::asset('/image/views/'.trans('commons.lang-banner').'/rector-office/Rec-04.png')}}" width="75%">
                </a>
            </div>
            {{--units ads--}}
            <div class="col-sm-4 col-md-4 my-2"
                 data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                 aria-controls="collapse4">
                <a id="campusbtn">
                    <img src="{{URL::asset('/image/views/'.trans('commons.lang-banner').'/rector-office/Rec-05.png')}}" width="75%">
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            {{--welcome--}}
            <div class="collapse mx-4" id="collapse">
                <div class="card border-0 card-body sectionbody">
                    <p class="text-left card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;text-indent: 0;">
                        {{trans('rectorade.rector-welcome')}}
                    </p>
                    <p class="text-justify"> {{trans('rectorade.rector-letter')}}</p>
                </div>
            </div>
            {{--functions--}}
            <div class="collapse mx-4" id="collapse3">
                <div class="card border-0 card-body text-justify">
                    <p class="text-left card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('rectorade.rector-functions-title')}}
                    </p>
                    <ul class="list-style">
                        <li><p> {{trans('rectorade.rector-functions-1')}}</p></li>
                        <li><p> {{trans('rectorade.rector-functions-2')}}</p></li>
                        <li><p> {{trans('rectorade.rector-functions-3')}}</p></li>
                    </ul>
                </div>
            </div>
            {{--Departaments--}}
            <div class="collapse mx-4" id="collapse4">
                <div class="card-body">
                    <p class="text-left card-text font-weight-bold" id="name-funders"  style="font-size: 1.25rem; font-weight: 600;">{{trans('rectorade.rector-deptos')}}</p>
                    <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-4 my-2">
                            <a id="link-subsystem" href="{{url('#')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/rector-office/Rec-06.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-sm-4 col-md-4 my-2">
                            <a id="link-subsystem" href="{{url('/rrhh')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/rector-office/Rec-07.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-sm-4 col-md-4 my-2">
                            <a id="link-subsystem" href="{{url('#')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/rector-office/Rec-08.png')}}" width="65%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <div class="border-0 d-flex m-4 text-justify card card-body">
        <h5 class="font-weight-bold">{{trans('rectorade.rector-info')}}</h5>
        <div class="flex-row">
            <p><b>{{trans('rectorade.rector-email-title')}}</b><p><p id="name-funders">&nbsp{{trans('rectorade.rector-email')}}</p>
        </div>
        <div class="flex-row">
            <p> <b>{{trans('rectorade.rector-telf-title')}}</b></p><p id="name-funders">&nbsp{{trans('rectorade.rector-telf')}}</p>
        </div>
        <div class="flex-row">
            <p><b>{{trans('rectorade.rector-schedule-title')}}</b></p><p id="name-funders">&nbsp{{trans('rectorade.rector-schedule')}}</p>
        </div>
    </div>

</div>
@endsection
