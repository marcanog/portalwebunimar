@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/deansoffice/humarte/humartedean.jpg')}}">
        </div>
        {{-- section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/humarte/humarte-07.png')}}"><h4>{{trans('humarte.title')}}</h4>
            </div>
        </div>
        {{-- cards presentations --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Humarte/juana.jpg')}}" alt="{{trans('graphicdesing.coord_name')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('humarte.chief-name')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('humarte.chief-role')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('humarte.chief-mail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Humarte/greizy.jpg')}}" alt="{{trans('estgen.asist-role')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('humarte.asist-name')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('humarte.asist-role')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('humarte.asist-mail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- content information --}}
        <div class="d-flex justify-content-around content-vext m-4">
            <div class="row justify-content-around">
                <div class="col-sm-4 col-md-4 my-2" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/humarte/humarte-09.png')}}" width="75%">
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 my-2" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/humarte/humarte-08.png')}}" width="75%">
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 my-2" role="button">
                    <a id="campusbtn" href="{{URL('/degreemodality')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/humarte/humarte-10.png')}}" width="75%">
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around mx-4" id="contevext">
            <div class="collapse m-4" id="collapse">
                <div class="text-justify">
                    <p class="fs-5 font-weight-bold" id="name-funders">
                        {{trans('humarte.hum-obj')}}
                    </p>
                    <ul>
                        <li><p class="text-black">{{trans('humarte.hum-obj-1')}}</p></li>
                        <li><p class="text-black">{{trans('humarte.hum-obj-2')}}</p></li>
                        <li><p class="text-black">{{trans('humarte.hum-obj-3')}}</p></li>
                        <li><p class="text-black">{{trans('humarte.hum-obj-4')}}</p></li>
                        <li><p class="text-black">{{trans('humarte.hum-obj-5')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="collapse m-4" id="collapse2">
                <h5 class="fs-5 font-weight-bold text-left my-4" id="name-funders"> {{trans('humarte.hum-offers')}}</h5>
                <div class="row justify-content-center m-2">
                    <div class="col-sm-4 col-md-4" role="button">
                        <a id="foundbtn" href="{{URL('/career/humarte/graphicdesing')}}">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/humarte/humarte-02.png')}}" width="65%">
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-4" role="button">
                        <a id="foundbtn" href="{{URL('/career/humarte/modernlangs')}}">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/humarte/humarte-03.png')}}" width="65%">
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-4" role="button">
                        <a id="foundbtn" href="{{URL('/career/humarte/langsturism')}}">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/humarte/humarte-04.png')}}" width="65%">
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center m-2">
                    <div class="col-sm-4 col-md-4" role="button">
                        <a id="foundbtn" href="{{URL('/career/psychology/psychology_mention_social_intervention')}}">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/humarte/humarte-05.png')}}" width="65%">
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-4" role="button">
                        <a id="foundbtn" href="{{URL('/career/humarte/integraleducation')}}">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/humarte/humarte-06.png')}}" width="65%">
                        </a>
                    </div>
                </div>
            </div>
            <div class="collapse" id="collapse3">
                <div class="card border-0 card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('humarte.hum-modern-title')}}
                    </p>
                    <p class="text-center">{{trans('humarte.hum-wait')}}</p>
                </div>
            </div>
        </div>
        <div class="d-flex m-4 card border-0 card-body text-left">
            <h5 class="font-weight-bold">{{trans('engineering.deaneng-info-title')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('humarte.hum-info-etitle')}}</b></p><p id="name-funders">&nbsp {{trans('humarte.hum-mail')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('humarte.hum-info-teltit')}}</b></p><p id="name-funders">&nbsp{{trans('humarte.hum-info-telf')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('humarte.hum-info-schedtit')}}</b></p><p id="name-funders">&nbsp{{trans('humarte.hum-info-sched')}}</p>
            </div>
        </div>
    </div>
@endsection
