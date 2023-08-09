@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/educational_management.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Gerencia Educativa</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Programa de Especialización dirigido a profesionales de la educación y a otros universitarios en general, interesados en capacitarse como gerentes de la educación.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Los interesados pueden solicitar el formulario de pre-inscripción al Correo lingüísticadelespañol(ele)@unimar.edu.ve o acudiendo personalmente a la sede de la Subdirección de Investigación y Postgrado de la Universidad de Margarita.</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Cumplidos los requisitos de admisión, se realizará la inscripción, cuyo costo actual para cada unidad de crédito es de US$ 22 (o su equivalente al cambio oficial fijado por el BCV).</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Formar profesionales capacitados en el área de la planificación, administración, evaluación, supervisión e investigación educativas, a fin de desempeñarse como gerentes competentes en el campo de la educación.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Las clases se ofrecerán bajo la modalidad online y/o presencial.</p>
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
                            <td>Filosofía Educativa</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Manejo y Resolución de Conflictos</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Teoría y Desarrollo Organizacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Planificación y Evaluación Educativas</td>
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
                            <td>Gerencia e Recursos Humanos</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Metodología de la Investigación</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Administración Educativa</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Supervisión Educativa</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Legislación Educativa</td>
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
                            <td>Seminario de Formulación y Evaluación de Proyectos</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Legislación Educativa</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Estadística Aplicada a la Educación</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Gestión de Calidad</td>
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
                            <td>Seminario Metodológico Trabajo Especial de Grado</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Trabajo Especial de Grado</td>
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
                    <p>amurguey.6054@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>800-UNIMAR (800-864627)</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 295 2870866</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 295 2870932</p>
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
