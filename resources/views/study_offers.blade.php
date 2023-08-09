@extends('layouts.layout')

@section ('content')
    <div class="content">
        {{--        banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/academic-offers/academic-offers.jpg')}}" width="100%">
        </div>
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}"><h4>{{trans('commons.academic-offers')}}</h4>
            </div>
            <div class="card border-0 card-body sectionbody">
                <p class="text-justify"> {{trans('academicoffers.main-description')}}</p>
            </div>
        </div>
        {{--        content information --}}
        <div class="d-inline-flex justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                <div class="col-md-3 col-sm-3 my-2"
                     data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false"
                     aria-controls="collapse1">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-03.png')}}" width="80%">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 my-2"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-04.png')}}" width="80%">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 my-2"
                     data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                     aria-controls="collapse3">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-05.png')}}" width="80%">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 my-2"
                     data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                     aria-controls="collapse4">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-06.png')}}" width="80%">
                    </a>
                </div>
            </div>
        </div>

        {{--cards bodies--}}
        <div class="d-flex justify-content-around flex-column" id="contevext">
            {{--Departaments--}}
            <div class="collapse m-4" id="collapse1">
                <div class="card border-0 card-body">
                    <p class="text-justify fw-bold fs-4" id="name-funders">
                        {{trans('academicoffers.pregrade-offers-title')}}
                    </p>
                    <div class="row justify-content-lg-center m-2">
                        <div class="col-md-3 col-sm-3 border-0 mb-2">
                            <a id="link-subsystem" href="{{url('/career/engine/systemengineering')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-07.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 border-0">
                            <a id="link-subsystem" href="{{url('/career/humarte/graphicdesing')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-08.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 border-0">
                            <a id="link-subsystem" href="{{url('/career/humarte/modernlangs')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-09.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 border-0">
                            <a id="link-subsystem" href="{{url('/career/humarte/integraleducation')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-22.png')}}" width="65%">
                            </a>
                        </div>
                    </div>
                    <div class="row justify-content-lg-center m-2">
                        <div class="col-md-3 col-sm-3 border-0">
                            <a id="link-subsystem" href="{{url('/career/ceys/administration')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-10.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 border-0">
                            <a id="link-subsystem" href="{{url('/career/ceys/publicaccounting')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-11.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 border-0">
                            <a id="link-subsystem" href="{{url('/career/cjyp/law')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-12.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 border-0"> {{--Comunicación Social--}}
                            <a id="link-subsystem" href="{{url('/career/socialcomunication/soccomunication')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-21.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 border-0 mb-2">
                            <a id="link-subsystem" href="{{url('/career/psychology/psychology_mention_social_intervention')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-23.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 border-0 mb-2">
                            <a id="link-subsystem" href="{{url('/career/humarte/langsturism')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-24.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 border-0 mb-2">
                            <a id="link-subsystem" href="{{url('/career/ceys/administration_mention_csf')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-22.png')}}" width="65%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse m-4" id="collapse2">
                <div class="card border-0 card-body">
                    <p class="text-justify fw-bold fs-4" id="name-funders">
                        {{trans('academicoffers.postgrade-offers-title')}}
                    </p>
                    <div class="row justify-content-around">
                        <div class="col-md-3 col-sm-3 my-2 border-0">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-13.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 my-2 border-0">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-14.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 my-2 border-0">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-15.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 my-2 border-0">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-16.png')}}" width="65%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse m-4" id="collapse3">
                <div class="card border-0 card-body">
                    <p class="text-justify fw-bold fs-4" id="name-funders">
                        {{trans('academicoffers.diplomat-title')}}
                    </p>
                    <div class="row justify-content-around">
                        <div class="col-md-3 col-sm-3 my-2 border-0">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-17.png')}}" width="65%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse m-4" id="collapse4">
                <div class="card border-0 card-body">
                    <p class="text-justify fw-bold fs-4" id="name-funders">
                        {{trans('academicoffers.course-title')}}
                    </p>
                    <div class="row justify-content-around">
                        <div class="col-md-3 col-sm-3 my-2 border-0">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-18.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 my-2 border-0">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-19.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 my-2 border-0">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-20.png')}}" width="65%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
