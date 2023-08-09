@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/temporal/ORPANAC-banner.png')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                    src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/home/home-02.png')}}">
                <h4>"PREMIO AL BUEN CIUDADANO"</h4>
            </div>
        </div>
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text" id="card-b-author">
                    <p>En el marco de su XV aniversario la Organización para la Prevención Nacional de la Corrupción, Orpanac, y la Universidad de Margarita, Unimar, unen voluntades para la promoción de los valores humanos, reconociendo a aquellas personas que con su actuación demuestran y representan una ciudadanía integral y ejemplar.</p>
                    <p>Con ese objetivo surge el <strong>PREMIO ORPANAC AL BUEN CIUDADANO</strong>, otorgado cada dos años a aquellas personas, miembros de la sociedad civil y actores importantes con un elevado nivel de ética en su vida cotidiana. </p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">¿Quiénes pueden postularse?</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ciudadanos ejemplares que posean gran proyección de los valores y principios sociales.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">¿Cuáles son los criterios para la postulación de los ciudadanos? </h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Ser mayor de 18 años y estar residenciado en el estado Nueva Esparta.</p></li>
                        <li><p>Ser un ciudadano ejemplar, destacado por acciones comprobables en la comunidad. </p></li>
                        <li><p>Tener altos valores de ética y ciudadanía.</p></li>
                        <li><p>Contribuir con las causas sociales.</p></li>
                        <li><p>Poseer una conducta intachable (no debe presentar antecedentes penales).</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">¿Cómo puede hacerse la postulación?</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>
                        Una vez seleccionada la persona que cumpla con los criterios enunciados, debe enviarse la información del postulado a los siguientes correos: <br>
                        <a class="ml-4" href="mailto:orpanacvzla@gmail.com">orpanacvzla@gmail.com</a> / <a href="mailto:vicerrectorado.extension@unimar.edu.ve">vicerrectorado.extension@unimar.edu.ve</a>
                    </p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">¿Hasta qué fecha pueden enviarse las postulaciones?</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La recepción de los postulados culmina el <strong>1 de julio</strong> de 2023.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">¿Cuándo se entregará el premio?</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El <strong>PREMIO ORPANAC AL BUEN CIUDADANO</strong>, será entregado en acto especial en la Universidad de Margarita el <strong>10 de julio</strong> de 2023.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <h4>¡Postula a tu héroe anónimo!</h4>
            </div>
        </div>
    </div>
@endsection
