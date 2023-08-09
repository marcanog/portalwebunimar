@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/elderly_care.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Gerontología y Atención a la Tercera Edad</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El proceso de envejecimiento del ser humano es una transformación, progresiva, que incluye el menoscabo de algunas capacidades anatómicas y fisiológicas que de ordinario limitan la respuesta a algunas situaciones creadas o ambientales; no obstante, pese a que forma parte de la vida misma, el individuo que envejece no suele verse con naturalidad, y por el contrario, se excluye al adulto mayor, sin tomar en cuenta el acervo de conocimiento que guarda y la capacidad de transmitirlo. La Maestría en Gerontología y Atención a la Tercera Edad, se presenta como una alternativa en la atención de esta creciente, y cada vez mayor, población longeva, necesitada de estrategias coherentes de asistencia y atención, centradas en necesidades reales y aspiraciones propias de su grupo etario aun en capacidad de ser productiva y útil física e intelectualmente. El Magister en Gerontología y Atención a la Tercera Edad será capaz de garantizar respuestas a los requerimientos e inquietudes que se suceden, tanto en el anciano como en aquel individuo que atraviesa la fase de transición, conocida como la sexalescencia.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Formalizar la solicitud de pre-inscripción ante la Coordinación del Departamento de Docencia del Subsistema de Investigación y Posgrado. ·</p></li>
                        <li><p>Presentar original a la vista y dos copias (Una de ellas en fondo negro) del título universitario que le acredite como profesional de la salud o afín. </p></li>
                        <li><p>Resumen curricular. (Original y copia, firmados) </p></li>
                        <li><p>Dos fotografías de frente, tipo carnet. </p></li>
                        <li><p>Dos fotocopias de la cédula de identidad.</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Formar profesionales especializados y sensibilizados en el área de Gerontología y Atención a la Tercera Edad, en los procesos de dirección, control y gestión de centros gerontológicos, que les permita ejercer eficazmente las funciones públicas, privadas, y de docencia e investigación sobre esa área del conocimiento.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a: </h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Profesionales de la Salud y profesionales afines.</p>
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
                    <h5 id="name-funders">Perfil del Egresado:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El egresado del Programa de Maestría Gerontología y Atención a la Tercera Edad estará en capacidad de acreditar los conocimientos y herramientas idóneas para desarrollarse como profesional exitoso, capacitado para integrar organismos, entidades de gestión públicas y privadas en materia de gerontología y asistencia a la tercera edad.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Magíster en Gerontología y Atención a la Tercera Edad.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Plan de estudios</h5>
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
                            <td>Psicología y Gerontología</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Biología del Envejecimiento y Geriatría</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Derechos Humanos y Tercera Edad</td>
                            <td>2</td>
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
                            <td>Envejecimiento Activo y la Organización Mundial de la Salud</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Aspectos Sociológicos y Educativos del Envejecimiento</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Políticas y Sistemas de Atención a los Adultos Mayores</td>
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
                            <td>Neuropsicología del Envejecimiento</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Bioética en la Gerontología</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario Metodológico de Investigación</td>
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
                            <td>Comportamiento Humano en las Organizaciones Gerontológicas</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Habilidades Cognitivas y Afectivas de la Vejez</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario Metodológico de Investigación II</td>
                            <td>2</td>
                        </tr>
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
                    <p>f.cortez1210@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>800-UNIMAR (800-864627)</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 (0295) 2870866 </p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 (0295) 2870466 </p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 (0295) 2870101 </p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 (0295) 8500081</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ubicación: Universidad de Margarita, El Valle del Espíritu Santo, Sector Toporo, Isla de Margarita, Estado Nueva Esparta, Venezuela. Rif: J-30660040-0.<p>
                </div>
            </div>
        </div>
    </div>
@endsection
