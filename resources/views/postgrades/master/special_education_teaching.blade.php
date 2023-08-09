@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/special_education_teaching.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Educación con Mención en Enseñanza de la Educación Especial</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El Programa de Maestría en Educación con Mención en Educación Especial, surge en atención a la obligación que se tiene, en el área de la educación, de afianzar en sus habilidades investigativas al recurso humano dedicado a la docencia. Ello resulta prioritario para la producción de saberes científicos fructíferos y eficientes que favorezcan el hallazgo de soluciones a la diversidad de conflictos, dilemas educativos nacionales, regionales y locales; con la finalidad de agenciar transformaciones efectivas en el Sistema Educativo Nacional y consolidar una sociedad sustentada en valores que refrenden la importancia del bienestar y la evolución social de la colectividadvenezolana. La Universidad de Margarita (UNIMAR) concibe estos estudios desde una óptica integral; de formación profesional y personal, científica y humanística, orientada al fortalecimiento cognitivo e investigativo de docentes de la región, con la finalidad de generar transformaciones en los procesos de enseñanza y aprendizaje para mejorar la calidad de la educación y consolidar una sociedad.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Dos fotos tipos carnet</p></li>
                        <li><p>Fotocopia de las notas certificadas</p></li>
                        <li><p>Fondo negro del título autenticado</p></li>
                        <li><p>Planilla de inscripción, suministrada por el Decanato de Postgrado</p></li>
                        <li><p>Fotocopia ampliada de la cédula de identidad vigente</p></li>
                        <li><p>Acta de nacimiento</p></li>
                        <li><p>Síntesis curricular</p></li>
                    </ul>
                </div>
                <p>El costo de la unidad de crédito se fija de acuerdo con la descripción desde la institución.</p>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Su objetivo es el de formar investigadores en el área de educación, con competencias para desarrollar proyectos de investigación que aborden problemas socioeducativos regionales y nacionales, y que, simultáneamente, produzcan conocimiento pertinente y susceptible de ser utilizado en contextos de enseñanza y aprendizaje presenciales y virtuales.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a: </h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Licenciados en Educación o carreras afines.</p>
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
                    <p>Al finalizar el postgrado se obtiene el título de Magister Scientiarum en Educación con Mención en Enseñanza de la Educación Especial.</p>
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
                            <td>Comprensión y Producción de Textos Académicos</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Teorías de Aprendizaje</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Didáctica de la Enseñanza e Integración de los Impedido Físicos y Motrices</td>
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
                            <td>Sociedad, Ciber, Educación Y Ciudadanía </td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Seminario de Investigación I</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Gestión de Programas y Proyectos de Educación Especial</td>
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
                            <td>Didáctica de la Enseñanza e Integración de los Impedidos Visual y Auditivos</td>
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
                            <td>Didáctica de la Enseñanza e Integración de los Estudiantes con Retardo Mental, Talento y Autismo</td>
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
                            <td>Adaptación Curricular</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Educación para la Sustentabilidad</td>
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
                    <p>postgrado@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>ymarcano.9555@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>800-UNIMAR (800-864627)</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 414 7919158</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ubicación: Universidad de Margarita, El Valle del Espíritu Santo, Sector Toporo, Isla de Margarita, Estado Nueva Esparta, Venezuela. Rif: J-30660040-0.<p>
                </div>
            </div>
        </div>
    </div>
@endsection
