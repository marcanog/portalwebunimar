@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/'.trans('commons.lang-banner').'/services/services.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-02.png')}}">
                <h4>{{trans('services.title')}}</h4>
            </div>
        </div>
        <div class="text-justify sectionbody mx-2">
            <p>{{trans('services.intro')}}</p>
        </div>
        {{--contents academics info services online presencial--}}
        <div class="d-flex justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                {{--academics services--}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                     aria-controls="collapse1">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-03.png')}}" width="80%">
                    </a>
                </div>
                {{--institutional mail--}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-01.png')}}" width="80%">
                    </a>
                </div>
                {{--library--}}
{{--                <div class="col-sm-3 col-md-3 my-2">--}}
{{--                    <a id="link-subsystem" href="{{url('/library')}}">--}}
{{--                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-06.png')}}" width="85%">--}}
{{--                    </a>--}}
{{--                </div>--}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-19.png')}}" width="80%">
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around m-4 content-vext">
            <div class="collapse my-4" id="collapse2">
                <div class="text-justify sectionbody mx-2">
                    <p>{{trans('services.intro-1')}}</p>
                    <p>{{trans('services.intro-2')}}</p>
                    <p>{{trans('services.intro-3')}}</p>
                    <p><b>{{trans('services.intro-4')}}</b></p>
                </div>
                    <div class="text-left text-black mx-4">
                        <ol>
                            <li><p>{{trans('services.mail-1')}}</p></li>
                            <li><p>{{trans('services.mail-2')}}</p></li>
                            <li><p>{{trans('services.mail-3')}}</p></li>
                            <li><p>{{trans('services.mail-4')}}&nbsp;<b>{{trans('services.mail-ctrlstudy')}}</b>&nbsp;{{trans('services.mail-5')}}</p></li>
                            <li><p>{{trans('services.mail-6')}}</p></li>
                            <li><p>{{trans('services.mail-7')}}</p></li>
                            <li><p>{{trans('services.mail-8')}}</p></li>
                        </ol>
                    </div>
                <div class="text-justify sectionbody mx-2">
                    <p><b>{{trans('services.atention')}}</b>&nbsp;{{trans('services.atention-1')}}&nbsp;<b>{{trans('services.mail-master')}}</b>&nbsp;{{trans('services.atention-2')}}</p>
                    <p><b>{{trans('services.atention-3')}}</b></p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start m-4 content-vext">
            <div class="collapse my-4" id="collapse5">
                <div class="card-text text-left mx-4">
                    <ul>
                        <li><a class="text-primary" href="{{ asset("./docs-unimar/templates/Planilla-Inscripcion-Introductorio.pdf") }}" target="_blank"><p>{{trans('services.doc-introductory')}}</p></a></li>
                        <li><a class="text-primary" href="{{ asset("./docs-unimar/templates/planilla-solicitud-de-inscripcion.pdf") }}" target="_blank"><p>{{trans('services.doc-inscription')}}</p></a></li>
                        <li><a class="text-primary" href="{{ asset("./docs-unimar/templates/planilla-registro-de-inscripcion-postgrados-maestrias-y-doctorados-2022.pdf") }}" target="_blank"><p>{{trans('services.doc-inscription-postgrade')}}</p></a></li>
                        <li><a class="text-primary" href="{{ asset("./docs-unimar/templates/actividades-extension.pdf") }}" target="_blank"><p>{{trans('services.doc-extention')}}</p></a></li>
                        <li><a class="text-primary" href="{{ asset("./docs-unimar/templates/planillas-grado-pregrado.pdf") }}" target="_blank"><p>{{trans('services.doc-grade-pregrade')}}</p></a></li>
                        <li><a class="text-primary" href="{{ asset("./docs-unimar/templates/planillas-grado-postgrado.pdf") }}" target="_blank"><p>{{trans('services.doc-grade-postgrade')}}</p></a></li>
                        <li><a class="text-primary" href="{{ asset("./docs-unimar/templates/formato-imposicion-medalla.pdf") }}" target="_blank"><p>{{trans('services.doc-medals')}}</p></a></li>
                        <li><a class="text-primary" href="{{ asset("./docs-unimar/templates/planilla-solicitud-extracreditos.pdf") }}" target="_blank"><p>{{trans('services.doc-extracredits')}}</p></a></li>
                        <li><a class="text-primary" href="{{ asset("./docs-unimar/templates/planilla-solicitud-beca.pdf") }}" target="_blank"><p>{{trans('services.doc-scholarships')}}</p></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around m-4 content-vext">
        {{--services academics --}}
            <div class="collapse m-4" id="collapse">
                <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('services.mode')}}
                </p>
                <div class="row justify-content-around">
                    <div class="col-sm-3 col-md-3 my-2"
                         data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                         aria-controls="collapse3">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-05.png')}}" width="80%">
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-3 my-2"
                         data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                         aria-controls="collapse4">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-06.png')}}" width="80%">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around m-4 content-vext">
            <div class="collapse m-4" id="collapse3">
                <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('services.servicesinp')}}
                </p>
                <div class="row justify-content-around">
                    <div class="col-sm-2 col-md-2 my-2"
                         data-toggle="collapse" href="#collapse31" role="button" aria-expanded="false"
                         aria-controls="collapse31">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-07.png')}}" width="80%">
                        </a>
                    </div>
                    <div class="col-sm-2 col-md-2 my-2"
                         data-toggle="collapse" href="#collapse32" role="button" aria-expanded="false"
                         aria-controls="collapse32">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-08.png')}}" width="80%">
                        </a>
                    </div>
                    <div class="col-sm-2 col-md-2 my-2"
                         data-toggle="collapse" href="#collapse33" role="button" aria-expanded="false"
                         aria-controls="collapse33">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-09.png')}}" width="80%">
                        </a>
                    </div>
                    <div class="col-sm-2 col-md-2 my-2"
                         data-toggle="collapse" href="#collapse34" role="button" aria-expanded="false"
                         aria-controls="collapse34">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-10.png')}}" width="80%">
                        </a>
                    </div>
                    <div class="col-sm-2 col-md-2 my-2"
                         data-toggle="collapse" href="#collapse35" role="button" aria-expanded="false"
                         aria-controls="collapse35">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-11.png')}}" width="80%">
                        </a>
                    </div>
                    <div class="col-sm-2 col-md-2 my-2"
                         data-toggle="collapse" href="#collapse36" role="button" aria-expanded="false"
                         aria-controls="collapse36">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-12.png')}}" width="80%">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-content-around m-4 content-vext">
            <div class="collapse m-4" id="collapse31"> {{--degree change--}}
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('services.degreechng')}}
                    </p>
                    <p class="font-weight-bold">{{trans('services.instructions')}}</p>
                    <ol>
                        <li>{{trans('services.inp-instdeg-1')}}</li>
                        <li>{{trans('services.inp-instdeg-2')}}</li>
                    </ol>
                </div>
            </div>
            <div class="collapse m-4" id="collapse32"> {{--reinstate--}}
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('services.reinstate')}}
                    </p>
                    <p class="text-gray-dark">{{trans('services.instreinst-pd')}}</p>
                    <p class="font-weight-bold">{{trans('services.instructions')}}</p>
                    <ol>
                        <li>{{trans('services.inp-instreinst-1')}}</li>
                    </ol>
                </div>
            </div>
            <div class="collapse m-4" id="collapse33"> {{--equivalences--}}
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('services.equivalences')}}
                    </p>
                    <p class="font-weight-bold">{{trans('services.instructions')}}</p>
                    <ol>
                        <li>{{trans('services.inp-instequiv-1')}}</li>
                        <li>{{trans('services.inp-instequiv-2')}}</li>
                        <li>{{trans('services.inp-instequiv-3')}}</li>
                        <li>{{trans('services.inp-instequiv-4')}}</li>
                        <li>{{trans('services.inp-instequiv-5')}}</li>
                        <li>{{trans('services.inp-instequiv-6')}}</li>
                        <li>{{trans('services.inp-instequiv-7')}}</li>
                        <li>{{trans('services.inp-instequiv-8')}}</li>
                    </ol>
                </div>
            </div>
            <div class="collapse m-4" id="collapse34"> {{--trimester withdrawal--}}
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('services.withdrawal')}}
                    </p>

                    <p class="text-gray-dark">{{trans('services.instwithd-pd')}}</p>
                    <p class="font-weight-bold">{{trans('services.instructions')}}</p>
                    <ol>
                        <li>{{trans('services.inp-instwith-1')}}</li>
                    </ol>
                </div>
            </div>
            <div class="collapse m-4" id="collapse35"> {{--remove mater--}}
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('services.removemat')}}
                    </p>
                    <p>{{trans('services.insremovmat-pd')}}</p>
                    <p class="font-weight-bold">{{trans('services.instructions')}}</p>
                    <ol>
                        <li>{{trans('services.inp-instremovmat-1')}}</li>
                        <li>{{trans('services.inp-instremovmat-2')}}</li>
                    </ol>
                </div>
            </div>
            <div class="collapse m-4" id="collapse36"> {{--extra credits--}}
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('services.extracredit')}}
                    </p>
                    <p>{{trans('services.instsolcred-pd')}}</p>
                    <p class="font-weight-bold">{{trans('services.instructions')}}</p>
                    <ol>
                        <li>{{trans('services.onl-instsolcred-1')}}</li>
                        <li>{{trans('services.onl-instsolcred-2')}}</li>
                        <li>{{trans('services.onl-instsolcred-3')}}</li>
                    </ol>
                    <p>{{trans('services.instsolcred-pd2')}}</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around m-4 content-vext">
            <div class="collapse m-4" id="collapse4">
                <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('services.servicesonl')}}
                </p>
                <div class="row justify-content-around">
                    <div class="col-sm-2 col-md-2 my-2"
                         data-toggle="collapse" href="#collapse41" role="button" aria-expanded="false"
                         aria-controls="collapse41">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-13.png')}}" width="80%">
                        </a>
                    </div>
                    <div class="col-sm-2 col-md-2 my-2"
                         data-toggle="collapse" href="#collapse42" role="button" aria-expanded="false"
                         aria-controls="collapse42">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-14.png')}}" width="80%">
                        </a>
                    </div>
                    <div class="col-sm-2 col-md-2 my-2"
                         data-toggle="collapse" href="#collapse43" role="button" aria-expanded="false"
                         aria-controls="collapse43">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-16.png')}}" width="80%">
                        </a>
                    </div>
                    <div class="col-sm-2 col-md-2 my-2"
                         data-toggle="collapse" href="#collapse44" role="button" aria-expanded="false"
                         aria-controls="collapse44">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-17.png')}}" width="80%">
                        </a>
                    </div>
                    <div class="col-sm-2 col-md-2 my-2"
                         data-toggle="collapse" href="#collapse45" role="button" aria-expanded="false"
                         aria-controls="collapse45">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/services/Ser-18.png')}}" width="80%">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-content-around m-4 content-vext">
            <div class="collapse m-4" id="collapse41"> {{--degree change--}}
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('services.degreechng')}}
                    </p>
                    <p class="font-weight-bold">{{trans('services.instructions')}}</p>
                    <ol>
                        <li>{{trans('services.onl-instdeg-1')}}</li>
                        <li>{{trans('services.onl-instdeg-2')}}</li>
                        <li>{{trans('services.onl-instdeg-3')}}</li>
                    </ol>
                </div>
            </div>
            <div class="collapse m-4" id="collapse42"> {{--reinstate--}}
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('services.reinstate')}}
                    </p>
                    <p class="text-gray-dark">{{trans('services.instreinst-pd')}}</p>
                    <p class="font-weight-bold">{{trans('services.instructions')}}</p>
                    <ol>
                        <li>{{trans('services.onl-instreinst-1')}}</li>
                        <li>{{trans('services.onl-instreinst-2')}}</li>
                        <li>{{trans('services.onl-instreinst-3')}}</li>
                    </ol>
                </div>
            </div>
            <div class="collapse m-4" id="collapse43"> {{--trimester withdrawal--}}
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('services.withdrawal')}}
                    </p>

                    <p class="text-gray-dark">{{trans('services.instwithd-pd')}}</p>
                    <p class="font-weight-bold">{{trans('services.instructions')}}</p>
                    <ol>
                        <li>{{trans('services.onl-instwithd-1')}}</li>
                        <li>{{trans('services.onl-instwithd-2')}} <a href="mailto:control.estudios@unimar.edu.ve">{{trans('services.mail-ctrlstudy')}}</a> &nbsp <a href="mailto:cobranza@unimar.edu.ve">{{trans('services.mail-pay')}}</a> </li>
                    </ol>
                </div>
            </div>
            <div class="collapse m-4" id="collapse44"> {{--remove mater--}}
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('services.removemat')}}
                    </p>
                    <p>{{trans('services.insremovmat-pd')}}</p>
                    <p class="font-weight-bold">{{trans('services.instructions')}}</p>
                    <ol>
                        <li>{{trans('services.onl-instremovmat-1')}}</li>
                        <li>{{trans('services.onl-instremovmat-2')}}</li>
                    </ol>
                </div>
            </div>
            <div class="collapse m-4" id="collapse45"> {{--extra credits--}}
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('services.extracredit')}}
                    </p>
                    <p>{{trans('services.instsolcred-pd')}}</p>
                    <p class="font-weight-bold">{{trans('services.instructions')}}</p>
                    <ol>
                        <li>{{trans('services.onl-instsolcred-1')}}</li>
                        <li>{{trans('services.onl-instsolcred-2')}}</li>
                        <li>{{trans('services.onl-instsolcred-3')}}</li>
                    </ol>
                    <p>{{trans('services.instsolcred-pd2')}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
