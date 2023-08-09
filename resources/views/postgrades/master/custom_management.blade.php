@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/custom_management.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Gerencia de Aduanas</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>En los actuales momentos, la comunidad internacional se encuentra sumergida dentro de grandes retos propios de la globalización, la apertura económica, las negociaciones internacionales, la modernización aduanera y el dinamismo resultante del comercio internacional; todos estos hechos requieren la creación de espacios de estudio que nos permitan evaluar y comprender las tendencias nacionales e internacionales para avalar la aplicación correcta de las normas, procedimientos, recursos, herramientas, técnicas y demás disposiciones propias de la actividad aduanera nacional y del comercio internacional en sí mismo. El comercio internacional es  sumamente dinámico y cambiante; día a día se adapta a las necesidades, estrategias y realidades existentes dentro de un mundo altamente globalizado.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Para realizar la pre-inscripción respectiva en la Maestría en Gerencia de Aduanas, el aspirante deberá cumplir con los siguientes requisitos administrativos y académicos:</p>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Formalizar la solicitud de pre-inscripción ante la Coordinación del Departamento de Docencia del Subsistema de Investigación y Postgrado, llenar la planilla diseñada para este efecto.</p></li>
                        <li><p>Copia del (fondo negro) del Título Universitario, que certifique su condición de Ingeniero, Licenciado o afines.</p></li>
                        <li><p>Copia de las notas certificadas.</p></li>
                        <li><p>Síntesis curricular.</p></li>
                        <li><p>Una fotografía de frente (reciente), tamaño carnet.</p></li>
                        <li><p>Una fotocopia de la cédula de identidad.</p></li>
                        <li><p>Una fotocopia de la partida de nacimiento.</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Formar investigadores en el área de educación, específicamente en el área de la  Enseñanza   de las   Ciencias Naturales, con competencias para desarrollar proyectos de investigación que aborden problemas socio-educativos regionales y nacionales, y que, simultáneamente, produzcan conocimiento pertinente y susceptible de ser utilizado en  contextos de  enseñanza y aprendizaje presenciales y virtuales.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a: </h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Profesionales de la región en las áreas de la Contaduría Pública, Administración, Derecho, así como en otras carreras afines. La Maestría en Gerencia de Aduanas se presenta como una alternativa para formarse como investigador, estudioso de la materia y profesional calificado: en el sector público, como experto en la gestión de los procesos aduaneros; y, en el sector privado, como consultor en el área de la gerencia aduanera.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Multimodal y presencial.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Magíster Scientiarum en Gerencia de Aduanas.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Plan de estudios</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Trimestre I</b></p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Maestría está diseñada para culminar en dos años, 6 trimestres. Son 15 unidades curriculares. El número de unidades de crédito de la especialización es de 29u.c y el trabajo especial de grado tiene un total de 4u.c. La unidad de crédito tiene un valor referencial de 22 $(sujeto a evaluación), pagadero a la tasa indicada por nuestra casa de estudios.</p>
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
                            <td>Nomenclatura Aduanera I</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Trámites y Procedimientos Aduaneros I</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Sistemas y Procedimientos Contables</td>
                            <td>1</td>
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
                            <td>Seminario Metodológico Trabajo de Grado I</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Valoración Aduanera I</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Nomenclatura Aduanera II</td>
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
                            <td>Seminario Metodológico Trabajo de Grado II</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Trámites y Procedimientos Aduaneros II</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Nomenclatura Aduanera II</td>
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
                            <td>Seminario Metodológico Trabajo de Grado III</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Operación de Resguardo Aduanero</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Sistemas y Tecnologías de la Información</td>
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
                            <td>Gerencia Estratégica</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Gestión de Compras y Negociación Internacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Legislación Aduanera</td>
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
                    <p>gerencia.aduana@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>jromero.5985@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>j2romeros@gmail.com </p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>800-UNIMAR (800-864627)</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 4143954552</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ubicación: Universidad de Margarita, El Valle del Espíritu Santo, Sector Toporo, Isla deMargarita, Estado Nueva Esparta,Venezuela. Rif: J-30660040-0.<p>
                </div>
            </div>
        </div>
    </div>
@endsection
