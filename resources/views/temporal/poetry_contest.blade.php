@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/temporal/poetry-contest.png')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                    src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/home/home-02.png')}}">
                <h4>II CONCURSO DE POESÍA Y CUENTO BREVE </h4>
            </div>
        </div>
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text" id="card-b-author">
                    <p>La Universidad de Margarita, a través de la Secretaría General, tiene el agrado de convocar a la Segunda Edición del Concurso de Poesía y Cuento Breve.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Plazo de presentación</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Hasta el 23 de junio de 2023</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Premiación</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>12 de julio de 2023 – Cancha Techada de Unimar</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Bases del concurso</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Podrán participar todos los estudiantes activos de pregrado que lo deseen.</p></li>
                        <li><p>La extensión de los trabajos, en el caso del género <b>cuento breve</b>, será de un <b>mínimo de tres páginas</b> y un <b>máximo de cinco, tamaño carta y con interlineado 1,5</b>. Debe tener márgenes de 3c.m. por cada lado y ser escrito con fuente Times New Román 12. Los que no cumplan este requisito serán eliminados.</p></li>
                        <li><p>El tema para ambos géneros es <b>LA VIRGEN DEL VALLE.</b></p></li>
                        <li><p>Se podrá presentar un único trabajo por autor, debidamente paginado.</p></li>
                        <li><p>En el caso del género <b>poesía</b>, se presentará un poemario con <b>un máximo de tres poemas</b>, cada uno con una extensión mínima de 20 versos. Debe darle un título al poemario.  La fuente a utilizar debe ser <b>Times New Roman 12</b>.</p></li>
                        <li><p>Los trabajos deberán ser consignados al correo electrónico <a href="mailto:secretaria.general@unimar.edu.ve">secretaria.general@unimar.edu.ve</a>, y deben ser identificados con un <b>pseudónimo</b>.  En un archivo diferente deben enviarse los datos personales del autor: nombre, edad, domicilio, teléfono, dirección de correo electrónico institucional, categoría en la que participa y título del texto.</p></li>
                        <li><p>La institución no devolverá los originales no premiados.</p></li>
                        <li><p>El autor, por el mero hecho de participar en el certamen, acepta cada una de las bases anteriores, así como el veredicto del jurado.  </p></li>
                        <li><p><b>La participación en este Concurso Literario supone la aceptación de las presentes bases.</b></p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Premios</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Tanto para la categoría <b>cuento breve</b> como para la de <b>poesía</b> se establecen los siguientes premios a los ganadores:</p>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p><b>PRIMER LUGAR:</b> Exoneración del 100% de la matrícula estudiantil. Trimestre sept- dic 2023</p></li>
                        <li><p><b>SEGUNDO LUGAR:</b> Descuento de un 50% de la matrícula estudiantil. Trimestre sept- dic 2023</p></li>
                        <li><p><b>TERCER LUGAR:</b>  Descuento de un 30% de la matrícula estudiantil. Trimestre sept- dic 2023</p></li>
                    </ul>
                </div>
                <b class="text-right"><em>El veredicto del jurado será inapelable.</em></b>
            </div>
        </div>
    </div>
@endsection
