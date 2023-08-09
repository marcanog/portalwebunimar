@extends('layouts.layout')

@section ('content')
    <div class="content">
        {{-- main banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/cjyp.png')}}">
        </div>
        {{-- section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/cjyp/CJyP-05.png')}}"><h4>{{trans('cjyp.title')}}</h4>
            </div>
        </div>
        <!--  depto -->
        {{-- cards presentations --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/CJYP/ledwy-diaz.png')}}" alt="{{trans('cjyp.chief-role')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('cjyp.chief-name')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('cjyp.chief-role')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('cjyp.chief-mail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/CJYP/yulitzy-millan.png')}}" alt="{{trans('cjyp.asist-role')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('cjyp.asist-name')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('cjyp.asist-role')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('cjyp.asist-mail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  content information --}}
        <div class="d-flex justify-content-around my-4">
            <div class="row justify-content-around">
                <div class="col-sm-3 col-md-3 my-2" data-toggle="collapse"
                     href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/cjyp/CJyP-07.png')}}" width="80%">
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2" data-toggle="collapse"
                     href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/cjyp/CJyP-03.png')}}" width="80%">
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2" data-toggle="collapse"
                     href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse4">
                    <a id="campusbtn" href="{{url('/career/cjyp/law')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/cjyp/CJyP-06.png')}}" width="80%">
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2" role="button">
                    <a id="campusbtn" href="{{URL('/degreemodality')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/cjyp/CJyP-04.png')}}" width="80%">
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around m-4" id="contevext">
            <div class="collapse mx-4" id="collapse3">
                <div class="card border-0 card-body text-justify">
                    <p class="card-text text-left font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('cjyp.cjyp-obj-title')}}
                    </p>
                    <ul>
                        <li><p> {{trans('cjyp.cjyp-obj-1')}}</p></li>
                        <li><p> {{trans('cjyp.cjyp-obj-2')}}</p></li>
                        <li><p> {{trans('cjyp.cjyp-obj-3')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse4">
                <div class="card border-0 card-body text-justify">
                    <p class="card-text text-left font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('cjyp.cjyp-etics-title')}}
                    </p>
                    <p class="sectionbody"> {{trans('cjyp.cjyp-etics-1')}}</p>
                        <ul>
                            <li><p> {{trans('cjyp.cjyp-etics-2')}}</p></li>
                            <li><p> {{trans('cjyp.cjyp-etics-3')}}</p></li>
                            <li><p> {{trans('cjyp.cjyp-etics-4')}}</p></li>
                            <li><p> {{trans('cjyp.cjyp-etics-5')}}</p></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- informations contents --}}
    <div class="d-flex justify-content-around m-4 border-0 text-left card card-body">
        <h5 class="font-weight-bold">{{trans('cjyp.cjyp-info')}}</h5>
        <div class="flex-row">
            <p><b>{{trans('cjyp.cjyp-mail-title')}}</b></p><p id="name-funders">&nbsp {{trans('cjyp.cjyp-mail')}}</p>
        </div>
        <div class="flex-row">
            <p><b>{{trans('cjyp.cjyp-telf-title')}}</b></p><p id="name-funders">&nbsp{{trans('cjyp.cjyp-telf')}}</p>
        </div>
        <div class="flex-row">
            <p><b>{{trans('cjyp.cjyp-sched-title')}}</b></p><p id="name-funders">&nbsp{{trans('cjyp.cjyp-sched')}}</p>
        </div>
    </div>
@endsection
