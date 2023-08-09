@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/natural_sciences_teaching.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Educación con Mención en Enseñanza de las Ciencias Naturales</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La formación de docentes de ciencias naturales, con una preparación sólida y actualizada, con actitud científica suficientemente sustentada y de calidad, capaces de analizar e interrelacionar	 el	proceso histórico evolutivo del hombre y el medio, son recursos	 que al	cabo	de	un lapso redundarán en el desarrollo de un país. Es por esta razón que la Universidad de Margarita se esmera en elaborar programas como la	Maestría en Educación  con Mención en Enseñanza de las Ciencias Naturales, dentro de la cual	el cursante desarrollará herramientas que le permitan diseñar, ejecutar	 y evaluar propuestas innovadoras para la enseñanza de las ciencias naturales, así como aplicar métodos de investigación socioeducativa y estrategias que fomenten el aprendizaje significativo e integral.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Formalizar la solicitud de pre-inscripción ante la Coordinación del Departamento de Docencia del Subsistema de Investigación y Posgrado.</p></li>
                        <li><p>Presentar original a la vista y dos copias (Una de ellas en fondo negro) del título universitario que le acredite como profesional.</p></li>
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
                    <p>Formar investigadores en el área de educación, específicamente en el área de la  Enseñanza   de las   Ciencias Naturales, con competencias para desarrollar proyectos de investigación que aborden problemas socio-educativos regionales y nacionales, y que, simultáneamente, produzcan conocimiento pertinente y susceptible de ser utilizado en  contextos de  enseñanza y aprendizaje presenciales y virtuales.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a: </h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Profesionales de la docencia, profesionales de la salud y profesiones afines. (Docentes, Médicos, Enfermeras, Bioanalistas, nutricionistas).</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil del egresado</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El egresado de este Programa de Maestría, estará en capacidad de diseñar, ejecutar y evaluar propuestas innovadoras para la enseñanza de las ciencias naturales; comprender y aplicar los supuestos teóricos y metodológicos de la investigación socioeducativa, así como aplicar estrategias didácticas que potencien el aprendizaje significativo e integral, a fin de construirla ciencia a partir de conceptos propios, enmarcados en proyectos integradores.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Al finalizar el postgrado se obtendrá el título de Magíster Scientiarum en Educación, mención enseñanza de las Ciencias Naturales.</p>
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
                    <p>La especialización está organizada en cuatrimestres, cuatro en su totalidad, que incluyen once materias relacionadas con el nivel cognitivo, un seminario metodológico y presentación del trabajo de grado.</p>
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
                            <td>Teorías de Aprendizaje</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Didáctica de la Biología y la Química</td>
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
                            <td>Teoría de las Ciencias Naturales</td>
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
                            <td>Didáctica de la Física y la Astronomía</td>
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
                            <td>Didáctica de la Geología</td>
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
                    <p>+58 (0295) 8500081</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ubicación: Universidad de Margarita, El Valle del Espíritu Santo, Sector Toporo, Isla de Margarita, Estado Nueva Esparta, Venezuela. Rif: J-30660040-0.<p>
                </div>
            </div>
        </div>
    </div>
@endsection
