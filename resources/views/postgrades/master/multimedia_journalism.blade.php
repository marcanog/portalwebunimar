@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/multimedia_journalism.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Periodismo Multimedios</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El Plan de Estudio del Programa de Maestría en Periodismo Multimedios está dirigido a profesionales en las áreas de: Comunicación Social, Ingeniería, Diseñadores, Administradores, Abogados o profesionales relacionados con proyectos de Comunicación e Información en Medios de difusión, con el fin de obtener el Título de MAGISTER (Ms.) en PERIODISMO MULTIMEDIOS.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>(2) Fotos tipo Carnet; </p></li>
                        <li><p>(1) Fotocopia de la cédula de identidad ampliada </p></li>
                        <li><p>Fotocopia de las notas certificadas de Pregrado </p></li>
                        <li><p>(1) Copia a color del Título de Pregrado, autenticado o certificado debidamente por la institución de egreso </p></li>
                        <li><p>(1) Fotocopia de la partida de nacimiento. </p></li>
                        <li><p>(1) Llenar la Planilla de Inscripción </p></li>
                        <li><p>Síntesis curricular</p></li>
                    </ul>
                    <p>El costo de la unidad de crédito es por asignatura o su valor al cambio fijado por nuestra casa de estudios en su página web. La inscripción puede ser realizada en efectivo en la taquilla de caja de la Universidad o por transferencia bancaria Banco Mercantil, Banesco. También se ofrecen planes de financiamiento.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Brindar una sólida base de conocimientos técnicos, gerenciales y profesionales, desarrollando paralelamente una actividad sistemática y creativa en la solución de problemas y toma de decisiones a nivel de básica, media y alta dirección en proyectos de comunicación multimedios, al preparar profesionales en las diferentes Metodologías y Técnicas Informáticas y Comunicacionales, que permitan desarrollar con éxito las funciones de análisis, diseño e implementación de un Periodismo Multimedios con base en los Sistemas de Comunicación Digitales.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a: </h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El Plan de Estudio del Programa de Maestría en Periodismo Multimedios, está dirigido a profesionales en las áreas de: Comunicación Social, Ingeniería, Diseñadores, Administradores, Abogados o profesionales relacionados con proyectos de Comunicación e Información en Medios de difusión.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Multimodal, por lo que debe disponer de un computador y acceso a Internet.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Título de Magister (MS.) en Periodismo Multimedios.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Plan de estudios</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El programa consta de cuatro trimestres, representando aproximadamente dieciocho meses o un año y medio. Al culminar la escolaridad debe presentar un trabajo especial de grado.</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Ciclo Introductorio</b></p>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Unidad Curricular</th>
                            <th scope="col">UC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Inducción al Programa de Maestría en Periodismo Multimedia</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-text" id="card-b-author">
                    <p><b>Trimestre I</b></p>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Unidad Curricular</th>
                            <th scope="col">UC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Redacción Periodística para Multimedios I</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Composición y Diseño Gráfico para Proyectos Web I</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario de la Información y Periodismo Multimedios</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Marco Jurídico Comunicacional</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Seminario de Metodología de Trabajo de Grado II</td>
                            <td>3</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-text" id="card-b-author">
                    <p><b>Trimestre II</b></p>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Unidad Curricular</th>
                            <th scope="col">UC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Redacción Periodística para Multimedios II</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Producción de Contenido Multimedios</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Ética de la Comunicación</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario de Metodología de Trabajo de Grado II</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-text" id="card-b-author">
                    <p><b>Trimestre III</b></p>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Unidad Curricular</th>
                            <th scope="col">UC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Redacción Periodística para Multimedios III</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Composición y Diseño Gráfico para Proyectos Web II</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Gestión de Proyectos Multimedios de Comunicación</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario de Metodología de Trabajo de Grado III</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-text" id="card-b-author">
                    <p><b>Trimestre IV</b></p>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Unidad Curricular</th>
                            <th scope="col">UC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trabajo de Grado</td>
                            <td>4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Información de contacto:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>unimar@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>postgrado@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>periodismo.multimedios@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>800-UNIMAR (800-864627)</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ubicación: Universidad de Margarita, El Valle del Espíritu Santo, Sector Toporo, Isla de Margarita, Estado Nueva Esparta, Venezuela. Rif: J-30660040-0.<p>
                </div>
            </div>
        </div>
    </div>
@endsection
