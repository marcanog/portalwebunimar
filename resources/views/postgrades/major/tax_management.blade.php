@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/tax_management.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Gerencia Tributaria</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El especialista en Gerencia Tributaria es un profesional integral, que ha logrado conyugar la formación académica y la experiencia profesional, para lograr desempeñarse con éxito, en el desarrollo de la actividad tanto en la empresa pública como privada, así planteado la Universidad de Margarita, asume el reto de presentar esta especialización en Gerencia Tributaria, a los profesionales que en términos multidisciplinarios desarrollan actividad en la región insular del país.</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Al surgir las necesidades de la preparación del personal competente para la implantación, desarrollo y conducción de los complejos turísticos y de las empresas relacionadas con asiento en la región, así como el de una gerencia pública eficiente entorno a estas nuevas realidades, fue necesario establecer proyectos de formación de recursos humanos, lo que dio origen a la firma de diversos convenios tanto con empresas privadas como son universidades públicas y a la posterior conformación de la Oficina de Promoción y Desarrollo de la Universidad de Margarita.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>(2) Fotos tipo Carnet</p></li>
                        <li><p>Fotocopia de la cédula de identidad ampliada</p></li>
                        <li><p>Fotocopia de las notas certificadas de Pregrado</p></li>
                        <li><p>Copia a color del Título de Pregrado, autenticado o certificado debidamente por la institución de egreso</p></li>
                        <li><p>Fotocopia de la partida de nacimiento</p></li>
                        <li><p>Llenar la Planilla de Inscripción</p></li>
                        <li><p>Síntesis curricular</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Valor de la Unidad de Credito</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El costo de la unidad de crédito es por asignatura o su valor al cambio fijado por nuestra casa de estudios en su página web. La inscripción puede ser realizada en efectivo en la taquilla de caja de la Universidad o por transferencia bancaria al Banco Mercantil o Banesco. También, se ofrecen planes de financiamiento.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Especialización en Gerencia Tributaria, diseñada por la Universidad de Margarita (UNIMAR), está orientada a la formación de profesionales con un alto nivel académico, que requieran conocimientos, herramientas y habilidades para desarrollarse y enfrentar el ambiente que se impone sobre la actividad económica, financiera en el país y de este modo poder gerencial.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Profesionales con conocimientos formales de diversas disciplinas científicas, que les permitan concretar soluciones para aprobar diversos problemas de carácter económico y fiscal. Dicho egresado podrá visualizar y liderizar los procesos de cambio y desarrollo estratégico y financiero de su organización.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Multimodal, por lo que debe disponer de un computador y acceso a Internet.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Se obtendrá el título de Especialista en Gerencia Tributaria.</p>
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
                            <td>Teoría del Tributo</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Finanzas Públicas</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Gerencia Empresarial</td>
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
                            <td>Gerencia Tributaria</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Entorno Económico</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Código Orgánico Tributario</td>
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
                            <td>Impuesto sobre la Renta</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Impuesto sobre el Valor Agregado</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Tributación Estadal y Municipal</td>
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
                            <td>Impuesto sobre la Renta II</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Tributos Internos</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Tópicos Tributarios</td>
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
                            <td>Seminario Metodológico  de Trabajo Especial de Grado</td>
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
                    <p>800-UNIMAR (800-864627)</p>
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
