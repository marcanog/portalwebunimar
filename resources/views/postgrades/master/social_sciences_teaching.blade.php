@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/social_sciences_teaching.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Educación con Mención en Enseñanza en las Ciencias Sociales</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Maestría en Educación con Mención en las Ciencias Sociales asume que la actividad del docente no puede estar centrada en la transmisión de conocimientos. El eje central debe ser el desarrollo de las habilidades cognitivas y críticas para la investigación y la aplicación del conocimiento a las diversas situaciones problemáticas que pudiesen presentarse en la práctica pedagógica. Lo anterior implica la puesta en práctica de estrategias novedosas presenciales y a distancia que faciliten la construcción del conocimiento de manera autogestionada. Esta Maestría se centra en la necesaria actitud crítica que debe imponerse en el contexto de la formación, pues la función del conocimiento en el actual siglo informacional obliga a una toma de conciencia, de parte del docente, en relación con la manera como se accede a las informaciones y los contextos de nuevos conocimientos, incluyendo el espacio digital. Por ello es que la Maestría se orienta a integrar las experiencias de aprendizaje a los problemas sociales, especialmente a los relacionados con la problemática de la formación contemporánea.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Fondo negro del título de pregrado autenticado, con vista al original.</p></li>
                        <li><p>Fotocopia de las notas certificadas con vista al original.</p></li>
                        <li><p>Síntesis Curricular.</p></li>
                        <li><p>Dos (2) fotocopias de la cédula de identidad laminada ampliada.</p></li>
                        <li><p>Dos (2) fotografías recientes tamaño carnet.</p></li>
                        <li><p>Fotocopia de la partida de nacimiento.</p></li>
                        <li><p>Llenar la planilla de inscripción.</p></li>
                    </ul>
                </div>
                <p>El pago es trimestral. El costo de la unidad de crédito se fija de acuerdo con la descripción desde la institución. Hay diversas formas de pago (en taquilla, transferencia bancaria, enlínea). En este último caso, entrar en la página web de la Universidad de Margarita a la sección pagos en línea, en donde se explica el procedimiento.</p>
                <p>Los recaudos se deben entregar en la Secretaría del Decanato de Postgrado.</p>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Formar investigadores en el área de educación, con competencias para desarrollar proyectos de investigación que aborden problemas socioeducativos locales, regionales y nacionales, y que, simultáneamente, produzcan conocimiento pertinente y susceptible de ser utilizado en contextos de enseñanza presenciales y virtuales.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Licenciado(a)s en Educación o carreras afines, en áreas del conocimiento relacionadas directamente con la mención del Programa.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Presencial y multimodal.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Magister Scientiarum en Educación con Mención en enseñanza de las Ciencias Sociales.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Plan de estudios</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Maestría contempla 34 U.C.,distribuidas de la siguiente manera:Seminarios obligatorios 28 U.C.,Seminario Electivo 2 U.C. y Trabajo deGrado 4 U.C.</p>
                </div>
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
                            <td>Compresión y Producción de Textos Académicos</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Teoría del Aprendizaje</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>La Historia de los Procesos Sociales</td>
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
                            <td>Sociedad Cibereducación y Ciudadanía</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Seminario de Investigación I</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Teorías de las Ciencias Sociales</td>
                            <td>2</td>
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
                            <td>Didáctica Aplicada a las Ciencias Sociales</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Electiva</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario de Investigación II</td>
                            <td>3</td>
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
                            <td>Evaluación de los Aprendizajes</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Geografía Humana</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Trabajo de Grado</td>
                            <td>4</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-text" id="card-b-author">
                    <p><b>Electivas</b></p>
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
                            <td>Teorías de la Argumentación</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Estudios de la Familia</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Adaptación curricular</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Educación para la sustentabilidad</td>
                            <td>2</td>
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
                    <p>luis.garcia@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>800-UNIMAR (800-864627)</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 0295-2871648</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 0295-2870271</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 0295-2871037</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 416-5167901</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ubicación: Universidad de Margarita, El Valle del Espíritu Santo, Sector Toporo, Isla de Margarita, Estado Nueva Esparta, Venezuela. Rif: J-30660040-0.<p>
                </div>
            </div>
        </div>
    </div>
@endsection
