@extends('layouts.layout')

@section('styles')
    <style>
        #card-content p {
            height: auto !important;
            display: -webkit-box;
        }
        .card-outline {
            border-top: 3px solid #336699 !important;
        }
        .responsive{
            height: 100% !important;
        }
        .owl-theme .owl-dots .owl-dot {
            zoom: 1.3 !important;
        }
        .owl-theme .owl-dots .owl-dot span {
            margin: 0 1.5px !important;
        }
        @media (min-width: 576px) {
            .owl-theme .owl-dots{
                position: absolute;
                right: 5px;
            }
            .owl-theme .owl-dots .owl-dot {
                zoom: 2 !important;
            }
        }
        .no-gutters{
            border-radius: 15px !important;
        }
        .event-title-adjust-md{
            padding: 0 !important;
        }
        .event-title-adjust-md img{
            margin-left: 0 !important;
        }
        .event-title-adjust-md h4{
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .content-date{
            border-top-left-radius: 15px !important;
            border-top-right-radius: 15px !important;
        }
        @media (min-width: 768px) {
            .content-date{
                border-top-left-radius: 15px !important;
                border-bottom-left-radius: 15px !important;
                border-top-right-radius: 0 !important;
            }
        }
        .card-link{
            color: #336699;
            font-size: small;
        }
        .card-link-whatch-more:before {
            content: "|";
            margin-right: 0.2em;
            color: #e0ded9;
        }
    </style>
@endsection

@section('scripts')
    <!-- Owl Carousel -->
    <script src="{{ asset('plugins/owlcarousel/dist/owl.carousel.min.js') }}" defer></script>
    <script>
        $(document).ready(
            function(){
                $(".news-carousel").owlCarousel({
                    margin: 10,
                    responsive:{
                        0:{items:1, nav:!1},
                        600:{items:3, nav:!1},
                        1e3:{items:4, nav:!1, loop:!1}
                    }
                });
                $(".graduation-carousel").owlCarousel({
                    loop: 1,
                    items: 1,
                    mouseDrag: 0,
                    margin: 15,
                    dots: 1,
                    responsiveClass: 1,
                    autoplay: 1,
                    autoplayHoverPause: 1,
                });
            }
        )
    </script>
@endsection

@section('content')
    <div class="content">
        {{--main carousel--}}
        <div class="graduation-carousel owl-carousel owl-theme">
            <div class="owl_text"><img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/ceremonies/review-xxxvii/rv-main.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/ceremonies/review-xxxvii/rv-1.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/ceremonies/review-xxxvii/rv-2.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/ceremonies/review-xxxvii/rv-3.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/ceremonies/review-xxxvii/rv-4.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/ceremonies/review-xxxvii/rv-5.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/ceremonies/review-xxxvii/rv-6.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/ceremonies/review-xxxvii/rv-7.jpg')}}" class="img_size"></div>
            <div class="owl_text"><img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/ceremonies/review-xxxvii/rv-8.jpg')}}" class="img_size"></div>
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                    src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/ceremonies-01.png')}}">
                <h4>{{trans('ceremonies.title')}}</h4>
            </div>
        </div>
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">En un emotivo y solemne acto, UNIMAR entregó más de 90 títulos de pregrado</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Con las emociones a flote y satisfechos del camino recorrido, el pasado martes 16 de mayo egresaron de la Universidad de Margarita, Unimar, en la Promoción XXXVII “Prof. Pedro Augusto Beauperthuy Urich”, 83 profesionales de 6 carreras distintas, y en convenio con la Universidad Católica Santa Rosa, Ucsar, 16 profesionales en la Promoción “Tricentenario de la Pontificia Universidad Católica Santa Rosa”.</p>
                    <p>Administración (13), Artes mención Diseño Gráfico (8), Contaduría Pública (10), Derecho (23), Idiomas Modernos (14), Ingeniería de Sistemas (15) y Comunicación Social (16) fueron las profesiones escogidas por los jóvenes, que en un acto lleno de orgullo, recibieron su título universitario, acompañados además de sus padrinos, Daniel Andrés Peláez Rangel, Wilman Guerra, Fabiola Cosentino, Ledwy Díaz, Flavio Rosales y Trina Ballesteros, respectivamente.</p>
                    <p>Lo que hizo de esta ocasión aún más especial, fue la entrega por primera vez en Nueva Esparta, de los títulos de Comunicadores Sociales otorgados en convenio con la Ucsar, por su Secretaria General, Prof. María Osorio.</p>
                    <p>Durante el acto, el rendimiento académico fue reconocido con la mención honorífica Cum Laude, otorgada a, Antonella Correa (Comunicación Social), Johan Martínez y Alejandro Canelón (Derecho) y Marian Acosta (Idiomas Modernos). </p>
                    <p>Antonella Correa en representación de los graduandos de Comunicación Social, en su emotivo discurso mencionó que “no sólo se llevaban un título, se llevaban experiencias, momentos inigualables, sonrisas e incluso lágrimas que los acompañarán por el resto de sus vidas”.</p>
                    <p>Por su parte, Johan Martínez, con el mejor índice académico de su promoción,  destacó en sus palabras que “hace 4 años ingresaban al campus de la Universidad de Margarita quizás con un poco de miedo y algo despistados, pero si algo debían tener presente, es que desde el primer día en que decidieron iniciar su preparación universitaria, lo hicieron con valentía y con unas ganas insaciables de superar todos los obstáculos que a bien se les presentaran; sin duda alguna, tomaron la mejor decisión de sus vidas”.</p>
                    <p>El epónimo de la promoción Prof. Pedro Augusto Beauperthuy Urich ofreció a los graduandos un admirable discurso con énfasis en los necesarios valores para el ejercicio de la vida en sociedad y el arraigo a la patria. “Ustedes inician, expresó, a partir de ahora una vida profesional que será muy diferente a la de estudiantes, pero en la cual nunca podrán dejar de estudiar si quieren seguir siendo exitosos. Ahora, se hace necesario asumir los retos que afrontarán en el porvenir y echar a volar todos los sueños que teníamos hacia el futuro. A ninguno se les escapa el momento histórico en el cual les tocará desenvolverse. Momento histórico tan comprometedor, tan complejo y tan difícil; tan cargado de incertidumbre. A ustedes, les va a corresponder asumir compromisos adicionales a los de ejercer una profesión; compromisos adicionales a los de ser profesionales, para así contribuir efectivamente con el progreso de esta sociedad más necesitada que nunca del amor de todos sus hijos. Tendrán ustedes, el deber de ayudar en la recuperación de valores abandonados o perdidos. No olviden nunca que ustedes convivieron en una comunidad universitaria donde coexistían armoniosamente personas de todas las ideologías y credos religiosos, pues la universidad debe ser siempre espacio de encuentro para buscar soluciones a todos los asuntos que se presenten...".</p>
                    <p>“Con toda seguridad, todos sabemos que lo que nos está ocurriendo, requerirá corregir algunos y aplicar cambios drásticos en la conducción. Tenemos el deber de señalar lo que nos está ocurriendo y advertir sobre sus consecuencias para nuestro futuro. Recuerden ustedes que de las lecciones aprendidas podríamos deducir, el cómo actuar y utilizar los momentos de dificultades para provocar los cambios y transformaciones positivas, para así renovar esperanzas”</p>
                    <p>Seguidamente, la rectora Antonieta Rosales de Oxford, se dirigió a los graduandos y público presente, reconociendo en primer lugar, el legado del epónimo de la promoción, por su vocación comprometida con la educación, como base esencial de sustento del futuro y desarrollo económico y social del país.</p>
                    <p>A los graduandos dijo, "Desde hoy su vida tomará otro giro, serán ustedes los únicos capaces de demostrar, y de demostrarse la fuerza espiritual, responsabilidad, conocimientos, honestidad, valores éticos y morales asimilados, esos que signarán su existencia, el porvenir profesional, el futuro de sus familias, el derecho a ser valorados, a levantar la voz en defensa de sus derechos, a ser reconocidos socialmente como hombres nobles y dignos, como ciudadanos".</p>
                    <p>"Hagan suya la lucha por erradicar la ignorancia, enciendan la luz que ilumine el camino de aquellos que aún transitan por la ruta del desconocimiento y son víctimas del mismo, comuniquen apegados a ley, a la razón, aúpen la esperanza, la tolerancia, la hermandad, la ciudadanía". Entre aplausos, la rectora concluyó su discurso ratificando el legado de la Unimar de seguir compartiendo el conocimiento, la universalidad del pensamiento y la palabra, como sinónimo de libertad, "nuestro orgullo: ser UNIMARISTA".</p>
                    <p>“Les deseamos todo lo mejor en su futuro y esperamos que lleven consigo siempre el espíritu de su alma mater”. </p>
                    <p>¡Felicitaciones para todos, integrantes de la XXXVII Promoción Prof. Augusto Beauperthuy Urich!</p>
                    <a class="mx-4" target="_blank" href="{{URL::asset('docs-unimar/graduations/xxxvii/discurso-rectora.pdf')}}">Discurso Rectora Antonieta Rosales de Oxford.</a><br>
                    <a class="mx-4" target="_blank" href="{{URL::asset('docs-unimar/graduations/xxxvii/discurso-beauperthuy.pdf')}}">Discurso Epónimo Prof. Pedro Augusto Beauperthuy Urich.</a><br>
                    <a class="mx-4" target="_blank" href="{{URL::asset('docs-unimar/graduations/xxxvii/discurso-johan.pdf')}}">Discurso Abog. Johan Martínez.</a><br>
                    <a class="mx-4" target="_blank" href="{{URL::asset('docs-unimar/graduations/xxxvii/discurso-antonella.pdf')}}">Discurso Licda. en Comunicación Social Antonella Correa.</a>
                </div>
            </div>
        </div>
    </div>

    {{--end content--}}
@endsection
