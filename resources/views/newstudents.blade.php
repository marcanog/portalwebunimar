@extends('layouts.layout')

@section('scripts')
    <script>
        window.addEventListener("load", function(event) {
            document.getElementById('collapse3').scrollIntoView();
        });
        function onLinkClick() {
            $('#collapse-doc').on("shown.bs.collapse", function () {
                document.getElementById('collapse-doc').scrollIntoView();
            });
        }
    </script>
@endsection

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/new-students/addstudents.jpg')}}" width="100%">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/newstudents/newstudents-09.png')}}"><h4>{{trans('newstudents.n-title')}}</h4>
            </div>
        </div>
        <div class="d-flex text-justify m-4">
            <div class="card border-0">
                <p class="sectionbody">
                    {{trans('newstudents.n-descript')}}
                </p>
            </div>
        </div>
        {{--contents--}}
        <div class="d-flex justify-content-around m-4 content-vext">
            {{--course introduc--}}
            <div class="row justify-content-around">
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse7" role="button" aria-expanded="false"
                     aria-controls="collapse7">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/newstudents/newstudents-02.png')}}" width="80%">
                    </a>
                </div>
                {{--Pregrade--}}
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                     aria-controls="collapse1">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/newstudents/newstudents-03.png')}}" width="80%">
                    </a>
                </div>
                {{--equivalentes--}}
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/newstudents/newstudents-05.png')}}" width="80%">
                    </a>
                </div>
            </div>
        </div>
        {{--card bodies--}}
        <div class="justify-content-around" id="contevext">
            <div class="collapse" id="collapse7"> {{--Introductorio--}}
                <div class="card border-0 card-body m-4 text-justify">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('newstudents.n-require')}}&nbsp{{trans('newstudents.n-intro')}}
                    </p>
                    <p>{{trans('newstudents.n-pregrade-desc')}}</p>
                    <div class="">
                        <ul>
                            <li><p> {{trans('newstudents.n-requireint')}}</p></li>
                            <li>
                                <a class="text-primary" href="{{ asset("./docs-unimar/templates/Planilla-Inscripcion-Introductorio.pdf") }}" target="_blank">{{trans('newstudents.n-requireint-2')}}</a>
                                <!--<p class="text-primary" type="button" data-bs-toggle="modal" data-bs-target="#preinscription">{{trans('newstudents.n-requireint-2')}}</p>-->
{{--                                @include('components.introductory')--}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{--Pregrade--}}
            <div class="collapse" id="collapse">
                <div class="card border-0 card-body m-4 text-justify">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('newstudents.n-pregrade')}}</p>
                    <div class="row justify-content-around">
                        <div class="col-sm-3 col-md-3 my-2" data-toggle="collapse"
                             href="#collapse4" role="button" aria-expanded="false"
                             aria-controls="collapse4">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/newstudents/newstudents-06.png')}}" width="80%">
                                <span>{{trans('newstudents.n-br')}}</span>
                            </a>
                        </div>
                        <div class="col-sm-3 col-md-3 my-2" data-toggle="collapse"
                             href="#collapse5" role="button" aria-expanded="false"
                             aria-controls="collapse5">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/newstudents/newstudents-07.png')}}" width="80%">
                                <span>{{trans('newstudents.n-lcdo')}}</span></a>
                        </div>
                        <div class="col-sm-3 col-md-3 my-2" data-toggle="collapse"
                             href="#collapse6" role="button" aria-expanded="false"
                             aria-controls="collapse6">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/newstudents/newstudents-08.png')}}" width="80%">
                                <span>{{trans('newstudents.n-tecsup')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            {{--info card bodies pregrade--}}
            <div class="justify-content-around" id="contevac">
                <div class="collapse card-body border-0 mx-4 text-justify" id="collapse4">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('newstudents.n-require')}}&nbsp{{trans('newstudents.n-br')}}
                    </p>
                    <div class="content-areas">
                        <div class="card border-0 card-body">
                            <div class="text-left">
                                <ul>
                                    <li><p> {{trans('newstudents.n-require-1')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-2')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-3')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-4')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-5')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-6')}}</p></li>
                                    <li><p> <a class="text-primary" href="{{ asset("./docs-unimar/templates/planilla-solicitud-de-inscripcion.pdf") }}" target="_blank">{{trans('newstudents.n-requireint-2')}}</a></p></li>
                                    <li><p> <a class="text-primary" href="{{ asset("./docs-unimar/templates/actividades-extension-2023-I.pdf") }}" target="_blank">{{trans('newstudents.file-extention')}}</a></p></li>
                                    <li><p> {{trans('newstudents.n-require-7')}}</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse card-body mx-4 text-justify" id="collapse5">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('newstudents.n-require')}}&nbsp{{trans('newstudents.n-lcdo')}}
                    </p>
                    <div class="content-areas">
                        <div class="card border-0 card-body">
                            <div class="text-left">
                                <ul>
                                    <li><p> {{trans('newstudents.n-require-2')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-3')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-4')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-5')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-6')}}</p></li>
                                    <li><p> <a class="text-primary" href="{{ asset("./docs-unimar/templates/planilla-solicitud-de-inscripcion.pdf") }}" target="_blank">{{trans('newstudents.n-requireint-2')}}</a></p></li>
                                    <li><p> <a class="text-primary" href="{{ asset("./docs-unimar/templates/actividades-extension-2023-I.pdf") }}" target="_blank">{{trans('newstudents.file-extention')}}</a></p></li>
                                    <li><p> {{trans('newstudents.n-require-7')}}</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse border-0 card-body mx-4 text-justify collapse showe" id="collapse6">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('newstudents.n-require')}}&nbsp{{trans('newstudents.n-tecsup')}}
                    </p>
                    <div class="content-areas">
                        <div class="card border-0 card-body mx-4 text-justify">
                            <div class="text-left">
                                <ul>
                                    <li><p> {{trans('newstudents.n-require-1')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-2')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-3')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-4')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-5')}}</p></li>
                                    <li><p> {{trans('newstudents.n-require-6')}}</p></li>
                                    <li><p> <a class="text-primary" href="{{ asset("./docs-unimar/templates/planilla-solicitud-de-inscripcion.pdf") }}" target="_blank">{{trans('newstudents.n-requireint-2')}}</a></p></li>
                                    <li><p> <a class="text-primary" href="{{ asset("./docs-unimar/templates/actividades-extension-2023-I.pdf") }}" target="_blank">{{trans('newstudents.file-extention')}}</a></p></li>
                                    <li><p> {{trans('newstudents.n-require-7')}}</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--equivalentes--}}
            <div class="collapse mx-4 text-justify {{$equivalency}}" id="collapse3"> {{--equivalentes--}}
                <div class="card card-body border-0">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem">
                        {{trans('newstudents.n-require')}}
                    </p>
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem">
                        {{trans('newstudents.n-equivalnts')}}
                    </p>
                    <p>{{trans('newstudents.n-eq-desc')}}</p>
                    <div class="">
                        <ol>
                            <li>
                                <p>
                                    {{trans('newstudents.n-process-0-p1')}}
                                        <a onclick="onLinkClick();" data-toggle="collapse" href="#collapse-doc" role="button" aria-expanded="false" aria-controls="collapse-doc">
                                            {{trans('newstudents.n-process-0-p2')}}
                                        </a>
                                    {{trans('newstudents.n-process-0-p3')}}
                                </p>
                            </li>
                            <li><p>{{trans('newstudents.n-process-1')}}</p></li>
                            <li><p>{{trans('newstudents.n-process-2')}}</p></li>
                            <li><p>{{trans('newstudents.n-process-3')}}</p></li>
                            <li><p>{{trans('newstudents.n-process-4')}}</p></li>
                            <li><p>{{trans('newstudents.n-process-5')}}</p></li>
                        </ol>
                    </div>
                    <div class="collapse" id="collapse-doc"> 
                        <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1rem">
                            {{trans('newstudents.n-documents')}}
                        </p>
                        <p>{{trans('newstudents.n-doc-desc')}}</p>
                        <div class="">
                            <ul>
                                <li><p> {{trans('newstudents.n-doc-0')}}</p></li>
                                <li><p> {{trans('newstudents.n-doc-1')}}</p></li>
                                <li><p> {{trans('newstudents.n-doc-2')}}</p></li>
                                <li><p> {{trans('newstudents.n-doc-3')}}</p></li>
                                <li><p> {{trans('newstudents.n-doc-4')}}</p></li>
                                <li>
                                    <p> {{trans('newstudents.n-doc-5')}}</p>
                                    <ul class="mx-4">
                                        <li>{{trans('newstudents.n-doc-50')}}</li>
                                        <li>{{trans('newstudents.n-doc-51')}}</li>
                                        <li>{{trans('newstudents.n-doc-52')}}</li>
                                        <li>{{trans('newstudents.n-doc-53')}}</li>
                                        <li>{{trans('newstudents.n-doc-54')}}</li>
                                        <li>{{trans('newstudents.n-doc-55')}}</li>
                                    </ul>
                                </li>
                            </ul>
                            <p>{{trans('newstudents.n-eq-advice')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
