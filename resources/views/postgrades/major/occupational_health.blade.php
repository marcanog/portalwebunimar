@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/occupational_health.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Salud Ocupacional</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Universidad de Margarita, en el marco de la globalización de los procesos de trabajo seguro, los cuales hacen énfasis en la prevención de accidentes y enfermedades laborales, en concordancia con la homologación que hiciera la Federación Médica Venezolana en el año 2009 de Medicina del Trabajo /Salud Ocupacional, asume la iniciativa de impartir el programa de Especialización en Salud Ocupacional, en el entendido que la multidisciplinariedad de los profesionales que participen en él, coadyuven con los conocimientos adquiridos al aporte de soluciones exitosas en las diferentes circunstancias y problemáticas a plantearse relacionadas con la seguridad y salud laboral. </p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Igualmente, la Salud Ocupacional cobra vital importancia en la toma de decisiones de los empresarios, toda vez que, permite visibilizar la necesidad que ellos tienen de adecuarse a las normas jurídicas existentes en la materia. Así mismo la UNIMAR, a través de este programa de estudios de 4º nivel se erige como un canal facilitador para regularizar el ejercicio de la Medicina, formando especialistas en el área, evitando así que los profesionales de la salud incurran en el denominado intrusismo médico. Cabe destacar, por otra parte, que el avance tecnológico en las ciencias de la ingeniería ha determinado cambios rápido y sustanciales progresos en esta área del conocimiento.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>(2) Fotos tipo Carnet</p></li>
                        <li><p>Fotocopia de la cédula de identidad ampliada 150%.</p></li>
                        <li><p>Título universitario de pregrado autenticado.</p></li>
                        <li><p>Fotocopia de las notas certificadas de los estudios universitarios de pregrado.</p></li>
                        <li><p>Fotocopia de la partida de nacimiento</p></li>
                        <li><p>Síntesis curricular</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Valor de la Unidad de Credito</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El costo de la unidad de crédito es de 22,00 US$, o en bolívares al cambio de la tasa establecida por el BCV.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Especialización en Salud Ocupacional, está orientada a formar Especialistas en el campo de la Salud y Seguridad laboral, con el suficiente conocimiento científico y tecnológico, que les permita liderizar sistemas de gestión de seguridad y salud laboral, tendentes a controlar o prevenir los riesgos ocupacionales, y, de la misma forma, mejorar la salud en los puestos de trabajo.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Especialización en Salud Ocupacional es un programa multidisciplinario que da cabida a todos los profesionales de las distintas áreas del conocimiento. En este sentido pueden participar Abogados, Ingenieros, Médicos, Odontólogos, Enfermeros, Contadores, Administradores, Arquitectos, Fisioterapeutas, Licenciados en Educación, entre otros.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Multimodal.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Especialista en Salud Ocupacional.</p>
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
                            <td>Legislación en Seguridad y Salud Laboral</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Principios en Salud Ocupacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seguridad en el Trabajo</td>
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
                            <td>Higiene Ocupacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Toxicología Ocupacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Epidemiología Ocupacional</td>
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
                            <td>Ergonomía, Fisiología y Neurociencia del Trabajo</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Clínica Ocupacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario de Investigación I</td>
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
                            <td>Electiva I</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Sistemas de Gestión en Salud Ocupacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Gestión en Salud Ocupacional en Centros Hospitalarios</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-text" id="card-b-author">
                    <p><b>Trimestre V</b></p>
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
                            <td>Seminario de Investigación II</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Psicología Ocupacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Electiva II</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-text" id="card-b-author">
                    <p><b>Trimestre VI</b></p>
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
                            <td>Electiva III</td>
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
                    <p>pg.saludocupacional@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>800-UNIMAR (800-864627). </p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 412 8687208</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ubicación: Universidad de Margarita, El Valle del Espíritu Santo, Sector Toporo, Isla de Margarita, Estado Nueva Esparta, Venezuela. Rif: J-30660040-0.<p>
                </div>
            </div>
        </div>
    </div>
@endsection
