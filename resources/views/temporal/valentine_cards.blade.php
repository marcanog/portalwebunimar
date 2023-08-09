@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/valentine-cards/cards-banner.png')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                    src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/home/home-02.png')}}">
                <h4>Concurso Cartas de Amor</h4>
            </div>
        </div>
        <div class="d-flex text-justify m-4"> {{--equivalentes--}}
            <div class="card card-body border-0">
                <p>Para celebrar el día del amor y la amistad y con el objetivo de promover la expresión artística y literaria, la Universidad de Margarita a través del Vicerrectorado de Extensión, Centro de Idiomas y la Dirección de Comunicación, convocaron al I Concurso Universitario Unimarista de Cartas de Amor.</p>
                <p>El jurado calificador estuvo integrado por:</p>
                <div class="">
                    <ul>
                        <li><p>Dra. Mariela Díaz</p></li>
                        <li><p>Abog. Olga Helena Suniaga</p></li>
                        <li><p>Prof. Judith Alvins</p></li>
                    </ul>
                </div>
                <p>Felicitamos a los 62 participantes por su entusiasmo y creatividad. Aquí te presentamos a los ganadores y sus Cartas de Amor.</p>
                <p>¡Disfruta su lectura!</p>
            </div>
        </div>
        <ul>
            <li class="row mb-5">
                <div class="col-12 col-sm-3 d-flex align-items-center mb-3">
                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/valentine-cards/giada-pic.png')}}" class="rounded-circle bg-grey" style="width:80%; margin: 0 10%;">
                </div>
                <div class="col-12 col-sm-9 d-flex text-justify">
                    <div class="card card-body border-0">
                        <h4 class="mb-3">Primer Lugar</h4>
                        <p class="m-0">Título: <strong>Conocí al amor cuando caminé de tu mano por aquí</strong></p>
                        <p class="m-0">Seudónimo: Jade Piccini</p>
                        <a class="mb-3" href="{{ asset("./docs-unimar/valentine-cards/giada-card.pdf") }}" target="_blank">Descarga aquí</a>
                        <p class="m-0"><strong>Sobre su autora: </strong></p>
                        <p>
                            <strong>Giada González</strong>, es estudiante del octavo trimestre de Comunicación Social. Su amor por la escritura comenzó a temprana edad, cuando descubrió que había todo un universo literario en el que podía navegar, con personas tan dignas de admiración como historias por leer y plasmar. 
                        </p>
                        <p>
                            Ha sido ganadora de diversos concursos universitarios de literatura y poesía. Para la autora “El mundo de las letras es un excelente sitio donde crecer, conocer, refugiarse y compartir. Un lugar en el que la violencia se transforma en balas de grafito, en el que la realidad puede ser teñida de sentimientos y pensares, donde se puede barajear eternamente el imaginario y siempre restará algo de que escribir”.
                        </p>
                    </div>
                </div>
            </li>
            <li class="row mb-5">
                <div class="col-12 col-sm-3 d-flex align-items-center mb-3">
                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/valentine-cards/manuel-pic.png')}}" class="rounded-circle bg-grey" style="width:80%; margin: 0 10%;">
                </div>
                <div class="col-12 col-sm-9 d-flex text-justify">
                    <div class="card card-body border-0">
                        <h4 class="mb-3">Segundo lugar</h4>
                        <p class="m-0">Título: <strong>Mariposa bailarina y silenciosa</strong></p>
                        <p class="m-0">Seudónimo: Juan Jacobo Blanco</p>
                        <a class="mb-3" href="{{ asset("./docs-unimar/valentine-cards/manuel-card.pdf") }}" target="_blank">Descarga aquí</a>
                        <p class="m-0"><strong>Sobre su autor: </strong></p>
                        <p>
                            <strong>Manuel Castellano Córcida</strong>, estudiante del 9no trimestre de Comunicación Social, es amante de la literatura, escritor de cuentos y poemas. Poseedor de una fuerte imaginación, pronto comprendió el valor de las historias, a través de la literatura, que dio orden a sus fantasías.  
                        </p>
                        <p>
                            Explica pausadamente que “Sin las letras, mi identidad sería algo impreciso, una imposibilidad. Con la literatura he hallado la ventura más grande que puede experimentar un ser humano: aplastar la otredad, hacer que el yo sea un otro. Sólo puedo ser real si existe alguien que lea esta página”. 
                        </p>
                    </div>
                </div>
            </li>
            <li class="row mb-5">
                <div class="col-12 col-sm-3 d-flex align-items-center mb-3">
                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/valentine-cards/leonel-pic.png')}}" class="rounded-circle bg-grey" style="width:80%; margin: 0 10%;">
                </div>
                <div class="col-12 col-sm-9 d-flex text-justify">
                    <div class="card card-body border-0">
                        <h4 class="mb-3">Tercer lugar</h4>
                        <p class="m-0">Título: <strong>Yo no sé a quién le escribo esta carta</strong></p>
                        <p class="m-0">Seudónimo: El Chimichimito</p>
                        <a class="mb-3" href="{{ asset("./docs-unimar/valentine-cards/leonel-card.pdf") }}" target="_blank">Descarga aquí</a>
                        <p class="m-0"><strong>Sobre su autor: </strong></p>
                        <p>
                            <strong>Leonel González</strong>, es un guionista y director margariteño. Realizó sus estudios de Cine en ESCINETV, Caracas. Su cortometraje Isla Sirena ha sido seleccionado y premiado en diferentes festivales internacionales. También dirigió el segmento llamando El Libro Nuevo, perteneciente a la película venezolana "Vernos Juntos"(en postproducción). Actualmente es profesor de las cátedras Cine y Dirección y Producción de Cine II en la carrera de Comunicación Social, convenio UCSAR-UNIMAR. 
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endsection
