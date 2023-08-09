@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="content">
            <div class="banner-main">
                <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/new-students/newstudent.jpg')}}" width="100%">
            </div>
            {{--Section info--}}
            <div class="section-content">
                <div class="d-flex justify-content-start">
                    <img id="img-section"
                         src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/newstudents/newstudents-09.png')}}"><h4>{{trans('newstudents.n-title')}}</h4>
                </div>
            </div>
            <div class="row justify-content-around m-4">
                {{--Postgrade--}}
{{--                <div class="col-sm-3 col-md-3 my-2"--}}
{{--                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"--}}
{{--                     aria-controls="collapse2">--}}
{{--                    <a id="foundbtn">--}}
{{--                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/newstudents/newstudents-04.png')}}" width="80%">--}}
{{--                    </a>--}}
{{--                </div>--}}
                {{--Postgrade--}}
{{--                <div class="collapse mx-4 text-justify" id="collapse2">--}}
                    <div class="card border-0 card-body">
                        <p class="text-left card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">{{trans('newstudents.n-require')}}&nbsp{{trans('newstudents.n-posgrade')}}</p>
                        <div class="sectionbody">
                            <ul>
                                <li><p> {{trans('newstudents.n-requirepg-1')}}</p></li>
                                <li><p> {{trans('newstudents.n-requirepg-2')}}</p></li>
                                <li><p> {{trans('newstudents.n-requirepg-3')}}</p></li>
                                <li><p> {{trans('newstudents.n-requirepg-4')}}</p></li>
                                <li><p> {{trans('newstudents.n-requirepg-5')}}</p></li>
                                <li><p> {{trans('newstudents.n-requirepg-6')}}</p></li>
                                <li><p> {{trans('newstudents.n-requirepg-7')}}</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card border-0 card-body">
                        <div class="sectionbody">
                            <strong>{{trans('newstudents.n-accounts')}}</strong>
                            <ul>
                                <li><p>{{trans('newstudents.n-banks-ac')}}</p></li>
                                <li><p>{{trans('newstudents.n-titular')}}</p></li>
                            </ul>
                        </div>
                    </div>
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
