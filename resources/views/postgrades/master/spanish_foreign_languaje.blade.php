@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/spanish_foreign_languaje.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Lingüística del Español como Lengua Extranjera</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Universidad de Margarita, oferta este programa de maestría, a modo de responder a las necesidades de formación de especialistas actualizados y cualificados con los estándares de calidad educativa, como lo demanda el mercado competitivo de la enseñanza de lenguas.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Los interesados pueden solicitar el formulario de pre-inscripción al correo lingüística del español(ele)@unimar.edu.ve o acudiendo personalmente a la sede de la Subdirección de Investigación y Postgrado de la Universidad de Margarita. Cumplidos los requisitos de admisión, se realizará la inscripción, cuyo costo actual para cada unidad de crédito es de US$ 22 (o su equivalente al cambio oficial fijado por el BCV).</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>"Formar especialistas en el español como lengua extranjera, con desempeño y dominio en las principales líneas de actuación de la linüística aplicada del español".</p>
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
                            <td>El Español y la Industria del Español en el Mundo</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>La Adquisición de la Lengua Materna y el Aprendizaje de Lenguas Extranjeras</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Foética y Fonología del Español en la Clase de Español como Lengua Extranjera</td>
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
                            <td>La Gramática en la Clase de Español como Lengua Extrajera</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>El Enfoque Comunicativo</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Historia de la Metodología de Lenguas Extranjeras</td>
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
                            <td>Introducción a la Pragmática: Aportaciones a la Enseñanza de Segundas Lenguas</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Competencia Discursiva y Comunicación No Verbal</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>El Léxico del Español en la Clase de Español como Lengua Extrajera</td>
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
                            <td>La Enseñanza/Aprendizaje de las Destrezas Comunicativas</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Electiva</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario de Metodología de la Investigación y Educación del Español como Lengua Extranjera</td>
                            <td>3</td>
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
                            <td>El Diseño de Programas en la Clase de Español como Lengua Extrangera</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Electiva</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Trabajo de Grado</td>
                            <td>6</td>
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
                            <td>La Enseñanza del Español con Fines Específicos</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Las Nuevas Tecnologías Aplicadas en la Enseñanza/Aprendizaje de Español como Lengua Extranjera: Análisis de Materiales</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>La Literatura Hispánica en el Aula de Español como Lengua Extranjera: Mitos y Explotación Didáctica</td>
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
                    <p>amurguey.6054@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>800-UNIMAR (800-864627)</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 295 2870866 </p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 295 2870932 </p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 416 6953135</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ubicación: Universidad de Margarita, El Valle del Espíritu Santo, Sector Toporo, Isla de Margarita, Estado Nueva Esparta, Venezuela. Rif: J-30660040-0.<p>
                </div>
            </div>
        </div>
    </div>
@endsection
