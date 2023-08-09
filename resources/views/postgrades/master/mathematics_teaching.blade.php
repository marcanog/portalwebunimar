@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/mathematic_steaching.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Educación con Mención en Enseñanza de las Matemáticas</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Desde una mirada humanística, permeada por el uso responsable de las TIC, la equidad y la democracia, la Universidad de Margarita asume el compromiso académico de formar Magister en Educación con Mención en las Matemáticas, con habilidades investigativas orientadas hacia los nuevos requerimientos en materia deenseñanza y aprendizaje en esa área del conocimiento. Con la Maestría en Educación con mención en enseñanza de las matemáticas pretendemos impulsar la transformación, transmisión y aplicación del conocimiento matemático através de la docencia y la investigación para el desarrollo de la enseñanza y el aprendizaje en esta área del saber. Resulta de vital importancia en esta era de la información, afianzar el conocimiento matemático de los docentes a favor de la enseñanza y aprendizaje, en los diferentes ambientes en que estos procesos puedan darse.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Dos (02) fotos tipo carnet.</p></li>
                        <li><p>Fotocopia de la cedula de identidad ampliada 150%.</p></li>
                        <li><p>Título universitario de pregrado autenticado.</p></li>
                        <li><p>Fotocopia de las notas certificadas de los estudios universitarios de pregrado.</p></li>
                        <li><p>Fotocopia de la partida de nacimiento.</p></li>
                        <li><p>Síntesis curricular.</p></li>
                    </ul>
                </div>
                <p>El costo de la unidad de crédito se fija de acuerdo con la descripción desde la institución.</p>
                <p>Los interesados pueden solicitar el formulario de pre-inscripción al correo lingüísticadelespañol(ele)@unimar.edu.ve o acudiendo personalmente a la sede de la Subdirección de Investigación y Postgrado de la Universidad de Margarita.</p>
                <p>Cumplidos los requisitos de admisión, se realizará la inscripción. El costo de la unidad de crédito se fija de acuerdo con la descripción desde la institución.</p>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Orientar la actualización disciplinar de los docentes para el fortalecimiento del desarrollo de las competencias fundamentales que permitan el desempeño académico de calidad en su praxis pedagógica, fortaleciendo también el desarrollo de proyectos de investigación que respondan a problemáticas contemporáneas que plantea la práctica docente en el contexto de las matemáticas.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a: </h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Maestría en Educación con mención en las Matemáticas está dirigida a Licenciados en Matemáticas, Licenciados en Educación en todas sus menciones, docentes graduados como profesores en sus diferentes menciones, Licenciados en Estadística, Ingenieros de Sistemas; y todos aquellos profesionales que requieran profundizar conocimientos en el campo de las matemáticas aplicadas y su enseñanza.</p>
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
                    <p>Magister Scientiarum en Educación con Mención en enseñanza de las Matemáticas.</p>
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
                            <td>Compresión y Producción de Textos Académicos</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Teoría del Aprendizaje</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Aritmética y su didáctica</td>
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
                            <td>Teorías de las Ciencias</td>
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
                            <td>Geometría y su didáctica</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Electiva</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Seminario de Investigación II</td>
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
                            <td>Evaluación de los Aprendizajes</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>La Probabilidad, la Estadística y sus Didácticas</td>
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
            <div class="card text-black text-justify border-0 m-2">en relació
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
