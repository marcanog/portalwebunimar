@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/postgrade-es.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/postgrade/Post-02.png' )}}">
                <h4>Postgrado</h4>
            </div>
        </div>
        <div class="d-flex text-justify m-4"> {{--equivalentes--}}
            <div class="card card-body border-0">
                <p>La Universidad de Margarita ofrece a los profesionales universitarios la posibilidad de cursar estudios de Maestría, Especialización y Doctorados.</p>
                <p>Estudiar un postgrado en la Unimar te ofrece los siguientes beneficios:</p>
                <div>
                    <ul>
                        <li><p>Actualización profesional.</p></li>
                        <li><p>Formación con docentes de alta calificación y trayectoria profesional.</p></li>
                        <li><p>Clases virtuales que puedes compaginar con tu horario, desde cualquier parte del mundo.</p></li>
                        <li><p>Flexibilidad para obtener más de una titulación.</p></li>
                        <li><p>Aprendizaje colaborativo y construcción de redes de contacto profesionales.  </p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around m-4 border-0 text-left card card-body">
            <h5 class="font-weight-bold">Oferta Académica:</h5>
        </div>
        <div class="d-flex justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                {{--especializations--}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse6" role="button" aria-expanded="false"
                     aria-controls="collapse6">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/postgrade/Post-07.png')}}" width="80%">
                    </a>
                </div>
                {{--Masters--}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false"
                     aria-controls="collapse5">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/postgrade/Post-08.png')}}" width="80%">
                    </a>
                </div>
                {{--PhD--}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                     aria-controls="collapse4">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/postgrade/Post-06.png')}}" width="80%">
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around flex-column m-4" id="contevext">
            <div class="collapse mx-4" id="collapse6">{{--espc card body--}}
                <div class="card border-0 card-body text-justify">
                    <p  class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('postgrade.postg-spec')}}
                    </p>
                    <ul>
                        <li><a href="{{ url('/postgrade/major/finance-major') }}"> {{trans('postgrade.postg-spec-1')}}</a></li>
                        <li><a href="{{ url('/postgrade/major/information-management') }}">{{trans('postgrade.postg-spec-2')}}</a></li>
                        <li><a href="{{ url('/postgrade/major/health-care-services') }}">{{trans('postgrade.postg-spec-3')}}</a></li>
                        <li><a href="{{ url('/postgrade/major/service-management') }}">{{trans('postgrade.postg-spec-4')}}</a></li>
                        <li><a href="{{ url('/postgrade/major/educational-management') }}">{{trans('postgrade.postg-spec-5')}}</a></li>
                        <li><a href="{{ url('/postgrade/major/tax-management') }}">{{trans('postgrade.postg-spec-6')}}</a></li>
                        <li><a href="{{ url('/postgrade/major/occupational-health') }}">{{trans('postgrade.postg-spec-7')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse5">{{--masters card body--}}
                <div class="card border-0 card-body text-justify">
                    <p  class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('postgrade.postg-certf')}}
                    </p>
                    <ul>
                        <li><a href="{{ url('/postgrade/master/forensic-audit') }}">{{trans('postgrade.postg-certf-1')}}</a></li>
                        <li><a href="{{ url('/postgrade/master/environmental-sciences') }}">{{trans('postgrade.postg-certf-2')}}</a></li>
                        <li><a href="{{ url('/postgrade/master/criminal-procedural-law') }}">{{trans('postgrade.postg-certf-3')}}</a></li>
                        <li><a href="{{ url('/postgrade/master/special-education-teaching') }}">{{trans('postgrade.postg-certf-4')}}</a></li>
                        <li><a href="{{ url('/postgrade/master/social-sciences-teaching') }}">{{trans('postgrade.postg-certf-5')}}</a></li>
                        <li><a href="{{ url('/postgrade/master/mathematics-teaching') }}">{{trans('postgrade.postg-certf-6')}}</a></li>
                        <li><a href="{{ url('/postgrade/master/spanish-teaching') }}">{{trans('postgrade.postg-certf-7')}}</a></li>
                        <li><a href="{{ url('/postgrade/master/natural-sciences-teaching') }}">{{trans('postgrade.postg-certf-8')}}</a></li>
                        <li><a href="{{ url('/postgrade/master/custom-management') }}">{{trans('postgrade.postg-certf-9')}}</a></li>
                        <li><a href="{{ url('/postgrade/master/works-management-department') }}">{{trans('postgrade.postg-certf-10')}}</a></li>
                        <li><a href="{{ url('/postgrade/master/elderly-care') }}">{{trans('postgrade.postg-certf-11')}}</a></li>
                        <li><a href="{{ url('/postgrade/master/regional-history-venezuela') }}">{{trans('postgrade.postg-certf-12')}}</a></li>
                        <li><a href="{{ url('/postgrade/master/spanish-foreign-languaje') }}">{{trans('postgrade.postg-certf-13')}}</a></li>
                        <li><a href="{{ url('/postgrade/master/multimedia-journalism') }}">{{trans('postgrade.postg-certf-14')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse4">{{--PhD card-body--}}
                <div class="card border-0 card-body text-justify">
                    <p  class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('postgrade.postg-doctor')}}
                    </p>
                    <ul>
                        <li><a href="{{ url('/postgrade/doctorate/administrative-sciences') }}">{{trans('postgrade.postg-doctor-1')}}</a></li>
                        <li><a href="{{ url('/postgrade/doctorate/educational-sciences') }}">{{trans('postgrade.postg-doctor-2')}}</a></li>
                        <li><a href="{{ url('/postgrade/doctorate/criminalforensic-sciences') }}">{{trans('postgrade.postg-doctor-3')}}</a></li>
                        <li><a href="{{ url('/postgrade/doctorate/engineering-renewable-energies') }}">{{trans('postgrade.postg-doctor-4')}}</a></li>
                        <li><a href="{{ url('/postgrade/doctorate/international-business') }}">{{trans('postgrade.postg-doctor-5')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around m-4 border-0 text-left card card-body">
            <h5 class="font-weight-bold">{{trans('postgrade.postg-title')}}</h5>
        </div>
        {{--  cards presentations --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Postgrade/Torrealba.jpg')}}" alt="{{trans('postgrade.postg-atitle')}}" style="max-width: 8em; height: 10.25em;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('postgrade.postg-author')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('postgrade.postg-author-title')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('postgrade.postg-author-email')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Postgrade/miledys-torres.png')}}" alt="{{trans('postgrade.postg-author-title')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('postgrade.postg-asist')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('postgrade.postg-atitle')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('postgrade.postg-asitmail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                {{--our subsystem--}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/postgrade/Post-03.png')}}" width="80%">
                    </a>
                </div>
                {{--Objetive--}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                     aria-controls="collapse1">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/postgrade/Post-04.png')}}" width="80%">
                    </a>
                </div>
                {{--functions--}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/postgrade/Post-05.png')}}" width="80%">
                    </a>
                </div>
            </div>
        </div>
        {{--cards bodies--}}
        <div class="d-flex justify-content-around flex-column m-4" id="contevext">
            <div class="collapse mx-4" id="collapse2"> {{--our subsystem--}}
                <div class="card border-0 card-body text-justify">
                    <p  class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('postgrade.postg-mission-title')}}
                    </p>
                    <div class="sectionbody">
                        <p> {{trans('postgrade.postg-mission')}}</p>
                    </div>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse">{{--objetive--}}
                <div class="card border-0 card-body">
                    <p  class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('postgrade.postg-vision-title')}}
                    </p>
                    <div class="sectionbody">
                        <p class="text-justify"> {{trans('postgrade.postg-vision')}}</p>
                    </div>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse3"> {{--functions--}}
                <div class="card border-0 card-body text-justify">
                    <p  class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('postgrade.postg-functions')}}
                    </p>
                    <ul>
                        <li><p> {{trans('postgrade.postg-functions-1')}}</p></li>
                        <li><p> {{trans('postgrade.postg-functions-2')}}</p></li>
                        <li><p> {{trans('postgrade.postg-functions-3')}}</p></li>
                        <li><p> {{trans('postgrade.postg-functions-4')}}</p></li>
                        <li><p> {{trans('postgrade.postg-functions-5')}}</p></li>
                        <li><p> {{trans('postgrade.postg-functions-6')}}</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around m-4 border-0 text-left card card-body">
            <h5 class="font-weight-bold">{{trans('postgrade.postg-info-title')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('postgrade.postg-info-etitle')}}</b></p>
                <p id="name-funders">&nbsp{{trans('postgrade.postg-info-email')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('postgrade.postg-info-teltit')}}</b></p>
                <p id="name-funders">&nbsp{{trans('postgrade.postg-info-telf')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('postgrade.postg-info-schedtit')}}</b></p>
                <p id="name-funders">&nbsp{{trans('postgrade.postg-info-sched')}}</p>
            </div>
        </div>
    </div>
@endsection
