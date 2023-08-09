@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/health_care_services.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Gerencia de Servicios Asistenciales en Salud</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La crisis institucional que vive Venezuela en los últimos años es una realidad que afecta tanto al ámbito oficial como al privado. Las empresas e instituciones de salud no escapan a esta situación, donde el desamparo gerencial es tal, que resulta virtualmente imposible asegurar una gestión de calidad que permita garantizar la asistencia apropiada de los pacientes que acuden a las unidades de emergencias y hospitalización.</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Universidad de Margarita, comprometida con la comunidad Neoespartana, ha creado nuevos estudios de postgrado como alternativas para que los profesionales de la salud alcancen herramientas que les permitan gerenciar en sus distintos ámbitos y niveles; es acá donde nace la Especialidad en Gerencia de Servicios Asistenciales en salud, una especialización orientada a formar gerentes en el área de salud, capaces de dar respuestas a estas necesidades institucionales.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Formalizar la solicitud de pre-inscripción ante la Coordinación del Departamento de Docencia del Subsistema de Investigación y Posgrado.</p></li>
                        <li><p>Presentar original a la vista y dos copias (Una de ellas en fondo negro) del título universitario que le acredite como profesional de la salud o afín.</p></li>
                        <li><p>Resumen curricular. (Original y copia, firmados)</p></li>
                        <li><p>Dos fotografías de frente, tipo carnet.</p></li>
                        <li><p>Dos fotocopias de la cédula de identidad.</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Contribuir en la formación de un especialista en Gerencia de Servicios Asistenciales en Salud con amplitud teórica y metodológica capaz de conducir procesos de dirección y liderar los cambios necesarios en los distintos escenarios institucionales del sector salud.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Profesionales de la salud y profesiones afines. (Médicos, Enfermeras, Bioanalistas, Nuticionistas, Administradores, Abogados, Contadores) (Esp. Gerencia de Serv. Asisten. en salud)</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil del egresado:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El egresado de la Especialidad de Gerencia de Servicios Asistenciales de salud será un profesional capaz de conducir adecuadamente el funcionamiento de un establecimiento de salud en cualquiera de sus niveles y tipos, integrando de manera sinérgica las actividades en las diferentes áreas, unidades, servicios y departamentos que lo componen. De la misma forma estará en capacidad de conducir, y diseñar programas de salud pública dirigidos a controlar, minimizar o abolir condiciones de riesgo sanitario.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Presencial y multimodal</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Especialista en Gerencia de Servicios Asistenciales en Salud.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Plan de estudios</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La especialización está organizada en trimestres, cuatro en su totalidad que incluyen once materias relacionadas con el nivel cognitivo, un seminario metodológico y presentación del trabajo de grado.</p>
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
                            <td>Gerencia de Servicios de Salud</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Legislación de Salud</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Contabilidad Gerencial de Servicios de Salud</td>
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
                            <td>Bioestadísticas</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Gestión del Talento Humano</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Sistemas de Información en Servicios de Salud</td>
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
                            <td>Gestión de la Calidad en Servicios de Salud</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Demografía y Epidemiología</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario de Investigación</td>
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
                            <td>Ética y Salud</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Electiva</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Trabajo Especial de Grado (T.E.I)</td>
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
                    <p>+58 (0295) 2870866</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 (0295) 2870466</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 (0295) 2870101</p>
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
