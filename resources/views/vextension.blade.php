@extends('layouts.layout')

@section('content')
    <div class="content">
{{--        Main Banner --}}
        <div class="banner-main">
            <img src="{{asset('./image/banners/'.trans('commons.lang-banner').'/vice-extention/extentiondean.jpg')}}" width="100%">
        </div>
{{--        Section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vextention/ViceExt-13.png')}}">
                <h4>{{trans('vextension.vext-title')}}</h4>
            </div>
        </div>
        <p>
        <div class="content">
{{--            Cards presentation --}}
            <div class="d-flex justify-content-around flex-column">
                <div class="card-group">
                    <div class="card border-0 m-4">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="rounded" src="{{URL::asset('./image/personal/Extention/Thamara.jpg')}}" alt="{{trans('vextension.vext-author-title')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-left">
                                    <h3 class="card-title fs-6">{{trans('vextension.vext-author')}}</h3>
                                    <p class="card-text fs-6 font-weight-bold">{{trans('vextension.vext-author-title')}}</p>
                                    <p class="card-text font-weight-bold" id="name-funders">{{trans('vextension.vext-mail')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 m-4">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="rounded" src="{{URL::asset('./image/personal/Extention/isabel.jpg')}}" alt="Asistente Vicerrectorado Extensión" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-left">
                                    <h3 class="card-title fs-6">{{trans('vextension.vext-asist')}}</h3>
                                    <p class="card-text fs-6 font-weight-bold">{{trans('vextension.vext-atitle')}}</p>
                                    <p class="card-text font-weight-bold" id="name-funders">{{trans('vextension.vext-asitmail')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{-- Content information --}}
            <div class="d-flex justify-content-around content-vext m-4">
                <div class="row justify-content-around">
                    <div class="col-sm-4 col-md-4 my-2"
                         data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                         aria-controls="collapse">
                        <a id="foundbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vextention/ViceExt-02.png')}}" width="75%">
    {{--                        <span>{{trans('vextension.vext-mission-title')}}</span>--}}
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-4 my-2"
                         data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                         aria-controls="collapse2">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vextention/ViceExt-03.png')}}" width="75%">
    {{--                        <span>{{trans('vextension.vext-functions')}}</span>--}}
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-4 my-2"
                         data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                         aria-controls="collapse3">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vextention/ViceExt-04.png')}}" width="75%">
    {{--                        <span>{{trans('vextension.vext-subsystems')}}</span>--}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-around" id="contevext">
                <div class="collapse m-4" id="collapse">
                    <div class="card border-0 card-body text-justify">
                        <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">{{trans('vextension.vext-mission-title')}}</p>
                        <p> {{trans('vextension.vext-mission')}}</p>
                    </div>
                </div>
                <div class="collapse m-4" id="collapse2">
                    <div class="card border-0 card-body text-justify">
                        <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('vextension.vext-functions')}}
                        </p>
                        <ul>
                            <li><p> {{trans('vextension.vext-functions-1')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-2')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-3')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-4')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-5')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-6')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-7')}}</p></li>
                            <li><p> {{trans('vextension.vext-functions-8')}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="collapse m-4" id="collapse3">
                    <div class="card border-0 card-body">
                        <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('vextension.vext-subsystems')}}</p>
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-3 my-2 border-0">
                                <a id="link-subsystem" href="{{url('/communityserv')}}">
                                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vextention/ViceExt-05.png')}}" width="75%">
{{--                                    <span>{{trans('vextension.vext-servcomuny')}}</span>--}}
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 my-2 border-0">
                                <a id="link-subsystem" href="#">
                                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vextention/ViceExt-06.png')}}" width="75%">
{{--                                    <span>{{trans('vextension.vext-educperm')}}</span>--}}
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 my-2 border-0" data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                                 aria-controls="collapse4">
                                <a id="link-subsystem">
                                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vextention/ViceExt-07.png')}}" width="75%">
                                    {{--                                    <span>{{trans('vextension.vext-educperm')}}</span>--}}
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 my-2 border-0" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false"
                                 aria-controls="collapse5">
                                <a id="link-subsystem">
                                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vextention/ViceExt-08.png')}}" width="75%">
                                    {{--                                    <span>{{trans('vextension.vext-educperm')}}</span>--}}
                                </a>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-3 my-2 border-0" data-toggle="collapse" href="#collapse6" role="button" aria-expanded="false"
                                 aria-controls="collapse6">
                                <a id="link-subsystem">
                                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vextention/ViceExt-09.png')}}" width="75%">
{{--                                    <span>{{trans('vextension.vext-sproj')}}</span>--}}
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 my-2 border-0">
                                <a id="link-subsystem" href="#">
                                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vextention/ViceExt-10.png')}}" width="75%">
{{--                                    <span>{{trans('vextension.vext-culture')}}</span>--}}
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 my-2 border-0">
                                <a id="link-subsystem" href="#">
                                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vextention/ViceExt-11.png')}}" width="75%">
{{--                                    <span>{{trans('vextension.vext-prom')}}</span>--}}
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 my-2 border-0" data-toggle="collapse" href="#collapse7" role="button" aria-expanded="false"
                                 aria-controls="collapse7">
                                <a id="link-subsystem">
                                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vextention/ViceExt-12.png')}}" width="75%">
{{--                                    <span>{{trans('vextension.vext-uniradio')}}</span>--}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-around" id="contevext">
                <div class="collapse m-4" id="collapse4">
                    <div class="card border-0 card-body text-justify">
                        <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">{{trans('vextension.vext-ceu')}}</p>
                        <div class="card-group">
                            <div class="card border-0 m-4">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="rounded" src="{{URL::asset('/image/personal/CEU/lourdes-rondon.png')}}" alt="{{trans('vextension.vext-ceu')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body text-left">
                                            <h3 class="card-title fs-6">{{trans('vextension.vext-ceu-1')}}</h3>
                                            <p class="card-text fs-6 font-weight-bold">{{trans('vextension.vext-ceu-2')}}</p>
                                            <p class="card-text font-weight-bold" id="name-funders">{{trans('vextension.vext-ceu-3')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 m-4">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="rounded" src="{{URL::asset('/image/personal/CEU/margoth-segovia.png')}}" alt="{{trans('vextension.vext-ceu')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body text-left">
                                            <h3 class="card-title fs-6">{{trans('vextension.vext-ceu-4')}}</h3>
                                            <p class="card-text fs-6 font-weight-bold">{{trans('vextension.vext-ceu-5')}}</p>
                                            <p class="card-text font-weight-bold" id="name-funders">{{trans('vextension.vext-ceu-5')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse m-4" id="collapse5">
                    <div class="card border-0 card-body text-justify">
                        <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">{{trans('vextension.vext-sports')}}</p>
                        <div class="card-group">
                            <div class="card border-0 m-4">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="rounded" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('vextension.vext-sports')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body text-left">
                                            <h3 class="card-title fs-6">{{trans('vextension.vext-sports-1')}}</h3>
                                            <p class="card-text fs-6 font-weight-bold">{{trans('vextension.vext-sports-2')}}</p>
                                            <p class="card-text font-weight-bold" id="name-funders">{{trans('vextension.vext-sports-3')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 m-4 invisible">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="rounded" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('vextension.vext-ceu')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body text-left">
                                            <h3 class="card-title fs-6">{{trans('vextension.vext-ceu-4')}}</h3>
                                            <p class="card-text fs-6 font-weight-bold">{{trans('vextension.vext-ceu-5')}}</p>
                                            <p class="card-text font-weight-bold" id="name-funders">{{trans('vextension.vext-ceu-5')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse m-4" id="collapse6">
                    <div class="card border-0 card-body text-justify">
                        <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">{{trans('vextension.vext-sproj')}}</p>
                        <div class="card-group">
                            <div class="card border-0 m-4">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="rounded" src="{{URL::asset('/image/personal/Specialprojects/ecberht-lucena.png')}}" alt="{{trans('vextension.vext-sproj')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body text-left">
                                            <h3 class="card-title fs-6">{{trans('vextension.vext-choir-1')}}</h3>
                                            <p class="card-text fs-6 font-weight-bold">{{trans('vextension.vext-choir-2')}}</p>
                                            <p class="card-text font-weight-bold" id="name-funders">{{trans('vextension.vext-choir-3')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 m-4 invisible">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="rounded" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('vextension.vext-ceu')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body text-left">
                                            <h3 class="card-title fs-6">{{trans('vextension.vext-ceu-4')}}</h3>
                                            <p class="card-text fs-6 font-weight-bold">{{trans('vextension.vext-ceu-5')}}</p>
                                            <p class="card-text font-weight-bold" id="name-funders">{{trans('vextension.vext-ceu-5')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse m-4" id="collapse7">
                    <div class="card border-0 card-body text-justify">
                        <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">{{trans('vextension.vext-uniradio')}}</p>
                        <div class="card-group">
                            <div class="card border-0 m-4">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="rounded" src="{{URL::asset('/image/personal/UNIRADIO/jose-alejandro.png')}}" alt="{{trans('vextension.vext-uniradio')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body text-left">
                                            <h3 class="card-title fs-6">{{trans('vextension.vext-op')}}</h3>
                                            <p class="card-text fs-6 font-weight-bold">{{trans('vextension.vext-op-1')}}</p>
                                            <p class="card-text font-weight-bold" id="name-funders">{{trans('vextension.vext-op-2')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 m-4 invisible">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="rounded" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('vextension.vext-ceu')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body text-left">
                                            <h3 class="card-title fs-6">{{trans('vextension.vext-ceu-4')}}</h3>
                                            <p class="card-text fs-6 font-weight-bold">{{trans('vextension.vext-ceu-5')}}</p>
                                            <p class="card-text font-weight-bold" id="name-funders">{{trans('vextension.vext-ceu-5')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around m-4 border-0 text-left card card-body">
            <h5 class="font-weight-bold">{{trans('vextension.vext-info-title')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('vextension.vext-info-etitle')}}</b></p>
                <p id="name-funders">&nbsp{{trans('vextension.vext-info-email')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('vextension.vext-info-teltit')}}</b></p>
                <p id="name-funders">&nbsp{{trans('vextension.vext-info-telf')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('vextension.vext-info-schedtit')}}</b></p>
                <p id="name-funders">&nbsp{{trans('vextension.vext-info-sched')}}</p>
            </div>
        </div>
    </div>
@endsection
