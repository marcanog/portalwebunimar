@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{asset('./image/banners/'.trans('commons.lang-banner').'/vice-academics/viceadacmicsdean.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('/image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-02.png')}}" width="100%"><h4>{{trans('vacademy.vacad-title')}}</h4>
            </div>
        </div>
        <div class="content">
            {{--  cards presentation --}}
            <div class="d-flex justify-content-around flex-column">
                <div class="card-group">
                    <div class="card border-0 m-4">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="rounded" src="{{URL::asset('/image/personal/Vice-academics/vice.jpg')}}" alt="Vicerrector Académico" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-left">
                                    <h3 class="card-title fs-6">{{trans('vacademy.vacad-author')}}</h3>
                                    <p class="card-text fs-6 font-weight-bold">{{trans('vacademy.vacad-author-title')}}</p>
                                    <p class="card-text font-weight-bold" id="name-funders">{{trans('vacademy.vacad-author-email')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 m-4">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="rounded" src="{{URL::asset('/image/personal/Vice-academics/livia-garcia.png')}}" alt="{{trans('vacademy.vacad-atitle')}}" width="100%" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-left">
                                    <h3 class="card-title fs-6">{{trans('vacademy.vacad-asist')}}</h3>
                                    <p class="card-text fs-6 font-weight-bold">{{trans('vacademy.vacad-atitle')}}</p>
                                    <p class="card-text font-weight-bold" id="name-funders">{{trans('vacademy.vacad-asitmail')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--contens--}}
            <div class="d-inline-flex justify-content-around m-4 content-vext">
                <div class="row justify-content-around m-4">
                    <div class="col-sm-4 col-md-4 my-2"
                         data-toggle="collapse" href="#collapse2"
                         role="button" aria-expanded="false" aria-controls="collapse2">
                        <a id="foundbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-03.png')}}" width="75%">
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-4 my-2"
                         data-toggle="collapse" href="#collapse3"
                         role="button" aria-expanded="false"
                         aria-controls="collapse3">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-04.png')}}" width="75%">
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-4 my-2"
                         data-toggle="collapse" href="#collapse" role="button"
                         aria-expanded="false"
                         aria-controls="collapse3">
                        <a id="campusbtn">
                            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-05.png')}}" width="75%">
                        </a>
                    </div>
                </div>
            </div>
            {{--  information contents--}}
            <div class="d-flex justify-content-around flex-column" id="contevext">
                <div class="collapse mx-4" id="collapse2">
                    <div class="card text-left border-0 card-body">
                        <p class="card-text font-weight-bold mx-2" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('vacademy.vacad-functions')}}
                        </p>
                        <ul>
                            <li>
                                <p>Cumplimiento de estatuto orgánico, normativas, reglamentos de la Universidad de Margarita.</p>
                            </li>
                            <li>
                                <p>Proponer al rector, para su aprobación, necesidades de reclutamiento del personal adscrito al Vicerrectorado Académico, incluyendo profesores según los instrumentos a aplicar (perfil del cargo, baremo, entrevista).</p>
                            </li>
                            <li>
                                <p>Asistir a las convocatorias del Consejo Universitario o a cualquier actividad inherente al cargo. (actos de grado, actos en representación de Unimar, convocatorias del Consejo Superior)</p>
                            </li>
                            <li>
                                <p>Convocar y presidir el Consejo Docente.</p>
                            </li>
                            <li>
                                <p>Planificar y elaborar todas las labores de docencia (horarios, carga de cada profesor, asignación de aulas, cumplimiento de las actividades de aula y de los programas de cada unidad curricular, planes de curso, planes de evaluación, participar en la Comisión de Equivalencia, consignación de notas)</p>
                            </li>
                            <li>
                                <p>Supervisar, controlar y corregir desviaciones en las labores de docencia y de proyectos institucionales.</p>
                            </li>
                            <li>
                                <p>Proponer para su aprobación programas de mejoramiento profesional del personal docente y administrativo dependiente del Vicerrectorado Académico.</p>
                            </li>
                            <li>
                                <p>Revisar y actualizar permanentemente los diseños curriculares de todas las carreras y posterior aprobación ante el Consejo Universitario.</p>
                            </li>
                            <li>
                                <p>Preparar los planes operativos y presupuesto de todas las dependencias del Vicerrectorado Académico de Unimar.</p>
                            </li>
                            <li>
                                <p>Participar en las actividades de la Comisión de Equivalencia.</p>
                            </li>
                            <li>
                                <p>Representar a la Universidad de Margarita en los núcleos de vicerrectores académicos.</p>
                            </li>
                            <li>
                                <p>Planificar, supervisar, coordinar e implantar todas las actividades necesarias para satisfacer las necesidades de la Universidad de Margarita en cuanto a la enseñanza on-line.</p>
                            </li>
                            <li>
                                <p>Planificar y supervisar las actividades de la Biblioteca UNIMAR y del Centro de Idiomas.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="collapse m-4" id="collapse3">
                    <div class="content m-4">
                        <p class="text-justify card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('vacademy.vacad-units')}}
                        </p>
                        <div class="d-flex justify-content-around m-2">
                            <div class="row justify-content-center">
                                <div class="col-sm-3 col-md-3 border-0">
                                    <a id="link-subsystem" href="{{url('/library')}}">
                                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-06.png')}}" width="85%">
                                    </a>
                                </div>
                                <div class="col-sm-3 col-md-3 border-0">
                                    <a id="link-subsystem" href="{{url('/comcurricula')}}">
                                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-07.png')}}" width="85%">
                                    </a>
                                </div>
                                <div class="col-sm-3 col-md-3 border-0">
                                    <a id="link-subsystem" href="{{url('/deans')}}">
                                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-08.png')}}" width="85%">
                                    </a>
                                </div>
                                <div class="col-sm-3 col-md-3 border-0">
                                    <a id="link-subsystem" href="https://www.unimarcientifica.edu.ve/adminmoodle/">
                                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-09.png')}}" width="85%">
                                    </a>
                                </div>
                            </div>
                        </div>
{{--                        <div class="d-flex justify-content-around m-2">--}}
{{--                            <div class="row justify-content-center">--}}
{{--                                <div class="col-sm-5 col-md-5 border-0">--}}
{{--                                    <a id="link-subsystem" href="https://www.unimarcientifica.edu.ve/adminmoodle/">--}}
{{--                                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-09.png')}}" width="65%">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-5 col-md-5 border-0" data-toggle="collapse"--}}
{{--                                     href="#collapseExample" role="button" aria-expanded="false"--}}
{{--                                     aria-controls="collapseExample">--}}
{{--                                    <a id="link-subsystem">--}}
{{--                                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-10.png')}}" width="65%">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="d-flex justify-content-around" id="contevac">
                            <div class="collapse" id="collapseExample">
                                <div class="row justify-content-center">
                                        <div class="col-md-4 col-sm-4">
                                            <a id="link-subsystem" href="#">
                                             <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-11.png')}}" width="65%">
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <a id="link-subsystem" href="#">
                                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-12.png')}}" width="65%">
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <a id="link-subsystem" href="#">
                                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/ViceA-12.png')}}" width="65%">
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse m-4" id="collapse">
                    <p class="text-justify mx-4 card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('vacademy.vacad-struct')}}
                    </p>
                    <div class="content">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/viceacademic/orgvice.jpg')}}" width="100%">
                    </div>
                </div>
            </div>
            <div class="d-flex m-4 card border-0 card-body text-left">
                <h5 class="font-weight-bold">{{trans('vacademy.vacad-info-title')}}</h5>
                <div class="flex-row">
                    <p><b>{{trans('vacademy.vacad-info-etitle')}}</b></p><p id="name-funders">&nbsp {{trans('vacademy.vacad-info-email')}}</p>
                </div>
                <div class="flex-row">
                    <p><b>{{trans('vacademy.vacad-info-teltit')}}</b></p><p id="name-funders">&nbsp{{trans('vacademy.vacad-info-telf')}}</p>
                </div>
                <div class="flex-row">
                    <p><b>{{trans('vacademy.vacad-info-schedtit')}}</b></p><p id="name-funders">&nbsp{{trans('vacademy.vacad-info-sched')}}</p>
                </div>
        </div>
    </div>
@endsection
