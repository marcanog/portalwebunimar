@extends('layouts.layout')

@section('styles')
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('plugins/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/adminlte/dist/css/adminstyle.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <style>
        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #0d4d98 !important;
            border-color: #0d4d98 !important;
            font-weight: bold;
        }
    </style>
@endsection

@section('scripts')
    <!-- AdminLTE App -->
    <script src="{{ asset('plugins/adminlte/dist/js/adminlte.min.js') }}" defer></script>
    <!-- Admiltejs -->
    <script src="{{ asset('plugins/adminlte/dist/js/adminltejs.js') }}" defer></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('plugins/owlcarousel/dist/owl.carousel.min.js') }}" defer></script>
    <script>
        $(document).ready(
            function(){
                $(".owl-carousel").owlCarousel(
                    {
                        stagePadding: 15,
                        loop:0,
                        margin:15,
                        nav:!1,
                        dots:!0,
                        responsiveClass:!0,
                        autoplay:1,
                        autoplayHoverPause: 1,
                        responsive:{
                            0:{items:1,nav:!1},
                            576:{items:3,nav:!1},
                        }
                    }
                )
            }
        )
    </script>
@endsection

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/ceremonies.jpg')}}" width="100%">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                    src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/ceremonies-01.png')}}">
                <h4>{{trans('ceremonies.title')}}</h4>
            </div>
        </div>
        {{--carousel--}}
        <div id="owl-example" class="owl-carousel owl-theme">
            <div class="owl_text"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/list-xxxvii/listados-portada-xxxvii.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/list-xxxvii/administracion.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/list-xxxvii/artes.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/list-xxxvii/contaduria.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/list-xxxvii/derecho-1.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/list-xxxvii/derecho-2.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/list-xxxvii/idiomas.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/list-xxxvii/ingenieria.jpg')}}" class="img_size"></div>
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-03.png')}}" width="100%"><h4>Cronograma de Actividades</h4>
            </div>
        </div>
        <div class="content m-4">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row justify-content-around">
                        <div class="col-sm-6">
                            <div class="card bg-blueu font-weight-bold my-4">
                                <p class="card-subtitle text-white m-4">Viernes 5/5/2023</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card text-black text-left border-0 my-4">
                                <span class="card-text fs-6 font-weight-bold">Prueba y Entrega de togas</span>
                                <span class="card-text">Hora: 9:00 a.m. a 12:00 m y de 1:00 p.m. a 4:00 p.m.</span>
                                <span class="card-text">Sala de Extensión (Todas las carreras)</span>
                                <span class="card-text fs-6 font-weight-bold">Ensayo General</span>
                                <span class="card-text">Hora: 2:00 p.m.</span>
                                <span class="card-text">Lugar: Cancha techada (Todas las carreras)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row justify-content-around">
                        <div class="col-sm-6">
                            <div class="card bg-blueu font-weight-bold my-4">
                                <p class="card-subtitle text-white m-4">Jueves 11/5/2023</p>
                            </div>
                        </div>
                        <div class="col-sm-6 my-4">
                            <div class="card text-black text-left border-0">
                                <span class="card-text fs-6 font-weight-bold">Firma del Libro de Actas</span>
                                <span class="card-text">Hora: 9:00 a.m.</span>
                                <span class="card-text">Sala de Conferencias II (Todas las carreras)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row justify-content-around">
                        <div class="col-sm-6">
                            <div class="card bg-blueu font-weight-bold my-4">
                                <p class="card-subtitle text-white m-4">Sábado 13/5/2023</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card text-black text-left border-0 my-4">
                                <span class="card-text fs-6 font-weight-bold">Misa y Caminata Académica</span>
                                <span class="card-text">Hora: 10:30 a.m.</span>
                                <span class="card-text">Lugar: Basílica Menor Nuestra Señora del Valle (Todas las carreras)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row justify-content-around">
                        <div class="col-sm-6">
                            <div class="card bg-blueu font-weight-bold my-4">
                                <p class="card-subtitle text-white m-4">Martes 16/5/2023</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card text-black text-left border-0 my-4">
                                <span class="card-text fs-6 font-weight-bold">Acto Académico</span>
                                <span class="card-text">Hora: 9:00 a.m.</span>
                                <span class="card-text">Lugar: Salón Bicentenario, Hotel Venetur (Todas las carreras)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body" style="padding: 1.5rem 0">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="vert-tabs-schedule-tab" data-toggle="pill" href="#vert-tabs-schedule" role="tab" aria-controls="vert-tabs-schedule" aria-selected="true">Padrinos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="vert-tabs-acknowledgments-tab" data-toggle="pill" href="#vert-tabs-acknowledgments" role="tab" aria-controls="vert-tabs-acknowledgments" aria-selected="false">Reconocimientos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="vert-tabs-honorary-mentions-tab" data-toggle="pill" href="#vert-tabs-honorary-mentions" role="tab" aria-controls="vert-tabs-honorary-mentions" aria-selected="false">Menciones Honoríficas</a>
                </li>
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="vert-tabs-schedule" role="tabpanel" aria-labelledby="vert-tabs-schedule-tab">
                    <div class="banner-main">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/list-xxxvii/padrinos-xxxvii.jpg')}}" width="100%">
                    </div>
                </div>
                <div class="tab-pane fade" id="vert-tabs-acknowledgments" role="tabpanel" aria-labelledby="vert-tabs-acknowledgments-tab">
                    <div class="banner-main">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/list-xxxvii/reconocimientos-xxxvii.jpg')}}" width="100%">
                    </div>
                </div>
                <div class="tab-pane fade" id="vert-tabs-honorary-mentions" role="tabpanel" aria-labelledby="vert-tabs-honorary-mentions-tab">
                    <div class="banner-main">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/list-xxxvii/menciones-honorificas-xxxvii.jpg')}}" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
