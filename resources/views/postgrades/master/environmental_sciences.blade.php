@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/environmental_sciences.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Ciencias Ambientales</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Coordinación de Investigación y Postgrado de la Universidad de Margarita, presenta esta propuesta de creación del programa de Maestría en Ciencias Ambientales, ante las autoridades competentes para su revisión y correspondiente aprobación. La propuesta se basa en la experiencia educativa obtenida de otras universidades a nivel nacional e internacional, las cuales en su momento se plantearon la necesidad de profundizar los conocimientos científicos y técnicos en materia medioambiental. Definitivamente para la UNIMAR, el programa de Maestría en Ciencias Ambientales, se constituye en un gran reto el cual debe ser afrontado como tal y que el mismo se convertirá en soporte y aporte de soluciones pragmáticas a los problemas ambientales que suceden día tras día en la región insular de Venezuela y su área de influencia.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Formalizar la solicitud de pre-inscripción ante la Coordinación del Departamento de Docencia del Subsistema de Investigación y Posgrado.</p></li>
                        <li><p>Presentar original a la vista y dos copias (Una de ellas en fondo negro) del título universitario que le acreditecomo profesional de la salud o afín.</p></li>
                        <li><p>Resumen curricular. (Original y copia,firmados)</p></li>
                        <li><p>Dos fotografías de frente, tipo carnet.</p></li>
                        <li><p>Dos fotocopias de la cédula deidentidad.</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Tiene como finalidad la formación de investigadores y actualización de profesionales interesados en la protección del medio ambiente, capaces de afrontar los retos establecidos por el desarrollo económico, industrial y social.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Multimodal y semipresencial.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Magister en Ciencias Ambientales.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Profesionales del sector público y privado de cualquier disciplina y profesionales que deseen desempeñarse como consultores ambientales.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Plan de estudios</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Maestría en Ciencias Ambientales está diseñada para culminar en dos años u ocho trimestres, son 21 unidades curriculares. El número de unidades de crédito de la maestría es de 51 u.c y el trabajo especial de grado tiene un total de 4 u.c.</p>
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
                            <td>Legislación Ambiental</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Ecología Aplicada</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario de Investigación Científica I</td>
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
                            <td>Gestión Integral de los Residuos Sólidos</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Sistema en Gestión Medioambiental</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Química Ambiental</td>
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
                            <td>Tecnología de las Aguas Residuales</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Ingeniería y Control de Factores de Riesgo de Carácter Ambiental</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Electiva I</td>
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
                            <td>Contaminación Atmosférica</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Seminario de Investigación Científica II</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Administración de Planes de Contingencia de Carácter Ambiental</td>
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
                            <td>Manejo Integral de Materiales Peligrosos</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Ordenamiento del Territorio y Urbanismo</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario de Investigación Científica III</td>
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
                            <td>Coeficiencia y Teoría del Desarrollo Sostenido</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Electiva II</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Estudios de Impacto Auditorías Ambientales</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-text" id="card-b-author">
                    <p><b>Trimestre VII</b></p>
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
                            <td>Recuperación de Áreas Degradadas</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Ética y Liderazgo</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Electiva III</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-text" id="card-b-author">
                    <p><b>Trimestre VIII</b></p>
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
                    <p>jesus.salazar@unimar.edu.ve</p>
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
