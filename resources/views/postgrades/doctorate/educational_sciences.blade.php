@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/educational_sciences.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Ciencias de la Educación</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El Programa  de  Doctorado  en  Ciencias  de  la Educación  para  la  Universidad  de  Margarita, UNIMAR, surge como respuesta a la necesidad de fortalecer  el  recurso  humano  investigador, necesario para generar conocimientos útiles que contribuyan a solucionar los diversos y múltiples problemas  educativos nacionales, regionales y locales;	producir cambios en el Sistema Educativo Nacional y construir una sociedad sostenida en valores que garanticen el bienestar colectivo y la transformación social de la población venezolana.</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Debe recalcarse que la gran demanda, por parte de docentes, que existe en el Estado Nueva Esparta, en cuanto a estudios de Postgrado se refiere, figura como razón ineludible para justificar la consolidación de un programa de estudios doctorales en Ciencias de Educación. Muchos de los profesionales de la docencia con grado de magister, que habitan en las ciudades de este estado y en las zonas de adyacencia, aspiran a obtener formación doctoral para fortalecerse como investigadores. Esto, obviamente, redundaría en un aumento progresivo de la producción científica, mediante la participación como ponentes en eventos, la publicación en revistas especializadas y en textos para el apoyo pedagógico.</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Lo anterior se traduciría no sólo en un aumento de la movilidad socioeconómica en la región, sino también en una mejora de la calidad académica de los profesionales de la educación y de otras áreas afines.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Los profesionales aspirantes a ingresar al programa doctoral deberán cumplir con los siguientes requisitos mínimos:</p>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Grado académico de Magister, Especialista o su equivalente, en áreas del conocimiento relacionadas directamente con el objeto del programa doctoral. En casos excepcionales, se considerará la admisión de aspirantes con maestrías en otras áreas, previo estudio de sus antecedentes académicos y experiencia profesional.</p></li>
                        <li><p>Presentar un ensayo, contentivo de lo que aspira a investigar, que esté relacionado con las líneas de investigación del programa.</p></li>
                        <li><p>Demostrar experiencia profesional en el campo educativo, en funciones de docencia, investigación, evaluación, administración o planificación educacional.</p></li>
                        <li><p>Demostrar conocimientos básicos de herramientas de computación (Microsoft Office o similar, Internet Explorer o similar).</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Formar profesionales-docentes con altos niveles académicos, científicos, tecnológicos y humanísticos; capaces de producir y difundir conocimientos que interpreten, den soluciones o transformen realidades educativas: locales, regionales, nacionales a los fines de coadyuvar con el desarrollo del país.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Este programa está dirigido a: profesionales de la docencia y de áreas afines con título de postgrado.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El Doctorado en Ciencias de la educación será ofertado en la modalidad de formación: MULTIMODAL (Presencial- online).</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Al finalizar el postgrado se obtendrá el título de Doctor (a) en Ciencias de la Educación.</p>
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
                            <td>Epistemología </td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Ética Profesional y Educación para los Valores</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Redacción y Composición Intelectual</td>
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
                            <td>Paradigma y Métodos de Investigación Cuantitativa</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Experiencias Investigativas</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Teoría y Modelos Pedagógicos</td>
                            <td>3</td>
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
                            <td>Paradigma y Métodos de Investigación Cualitativa</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Electiva </td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Paradigmas de Evaluación</td>
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
                            <td>Electiva I</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Tutoría I</td>
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
                            <td>Electiva II</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Tutoría II</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Tesis Doctoral</td>
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
                    <p>rtorrealba.1805@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>800-UNIMAR (800-864627).</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 4144650138</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ubicación: Universidad de Margarita, El Valle del Espíritu Santo, Sector Toporo, Isla de Margarita, Estado Nueva Esparta, Venezuela. Rif: J-30660040-0.<p>
                </div>
            </div>
        </div>
    </div>
@endsection
