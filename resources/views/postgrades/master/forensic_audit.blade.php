@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/forensic_audit.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Auditoría Forense</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El egresado de nuestra casa de estudio como “Magister Scientiarum en Auditoria Forense” , habrá desarrollado las destrezas para aprender los conocimientos teóricoprácticos, necesarios para adquirir un nivel apropiado de competencia profesional y así poder diagnosticar, investigar y resolver situaciones que surgen dentro de las instituciones públicas y organizaciones privadas en todos sus niveles (nacionales o transnacionales); utilizando la auditoria forense y teniendo como punto de inicio: la información financiera; y así diseñar estrategias de planificación que fortalezcan los sistemas de control interno y mejora de los procedimientos en búsqueda de la excelencia y que facilite a los directivos y al gobierno corporativo la toma de decisiones acerca de una entidad económica en un contexto regional con enfoque globalizado. La Maestría en Auditoria Forense está dirigida a Contadores Públicos, Licenciados en Administración, Economistas, Licenciadosen Ciencias Fiscales, Abogados, Ingenierosen el campo de los sistemas y la informática, Criminólogos; que requieran profundizar conocimientos en el campo de la auditoria forense.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Haber sido seleccionado por el Decanato de Postgrado según el proceso de preinscripciones y cronograma de la Maestría en Auditoria Forense.</p></li>
                        <li><p>Entregar los siguientes recaudos: </p></li>
                        <ul>
                            <li>Dos (02) fotos tipo carnet.</li>
                            <li>Fotocopia de la cedula de identidad ampliada 150%.</li>
                            <li>Fotocopia a color del título universitario de pregrado autenticado por el Ministerio de Educación Superior.</li>
                            <li>Fotocopia de las notas certificadas de los estudios universitarios de pregrado.</li>
                            <li>Fotocopia de la partida de nacimiento.</li>
                            <li>Síntesis curricular y una carta de exposición de motivo para querer cursar la maestría.</li>
                        </ul>
                        <li><p>Haber cancelado en la cuenta a nombre de la Universidad de Margarita mediante nuestro sitio en la web.</p></li>
                    </ul>
                    <p>Actualmente el valor de la unidad de crédito es de 22,00 US$.</p>
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
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Sistema multimodal.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Universidad de Margarita otorga el título de: Magister Scientiarumen Auditoria Forense.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Plan de estudios</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El plan de estudios es de cinco trimestres, conformado en bloques de tres materias cada trimestre, con la presentación del trabajo de grado. Son 32 unidades de crédito.</p>
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
                            <td>Principio de Finanzas y Gobiernos Corporativos</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Teoría del Delito Económico</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Contabilidad Forense en Armonización con las Normas Internacionales</td>
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
                            <td>Legitimación de Capitales y Blanqueo de Activos</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Sistemas y Tecnologías de la Información</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Seminario de Metodología de Trabajo de Grado I</td>
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
                            <td>Planeación, Ejecución y Reportes de Auditoria Forense</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Derecho Procesal Penal y Teoría de la Prueba</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Regulación Mundial para la Prevención del Crimen Económico</td>
                            <td>1</td>
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
                            <td>Gestión de Riesgos</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Prevención y Detección de Ataques Informáticos</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario de Metodología de Trabajo de Grado II</td>
                            <td>1</td>
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
                            <td>Investigación Criminalística en la Auditoría Forense</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Sistemas de Procedimientos Contables</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Seminario de Metodología de Trabajo de Grado III</td>
                            <td>1</td>
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
                    <p>auditoria.forense@unimar.edu.vee</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>jesus.salazar@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>800-UNIMAR (800-864627)</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 426 7378096</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ubicación: Universidad de Margarita, El Valle del Espíritu Santo, Sector Toporo, Isla de Margarita, Estado Nueva Esparta, Venezuela. Rif: J-30660040-0.<p>
                </div>
            </div>
        </div>
    </div>
@endsection
