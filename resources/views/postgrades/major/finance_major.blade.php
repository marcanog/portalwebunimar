@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/finance_major.png')}}" width="100%">
        </div>
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Finanzas</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Actualmente el proceso de la globalización financiera obliga a los directivos de las empresas a pensar y actuar en la búsqueda del mayor rendimiento y rentabilidad posible. Un conocimiento profundo del área financiera ha sido siempre fundamental en el éxito de una organización. La Especialización de Finanzas es un programa diseñado para transmitir al participante los conocimientos y habilidades necesarias para desarrollarse exitosamente en el mundo de las finanzas.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Especialización en Finanzas está orientada a la formación de profesionales con un alto nivel académico, que requieran conocimientos, herramientas y habilidades para desarrollarse y enfrentar el ambiente altamente volátil de la actividad económica, financiera y bursátil en el país, para de este modo poder gerenciar eficientemente las finanzas corporativas de las organizaciones.</p>
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
                    <h5 id="name-funders">Dirigido a: </h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Este programa está dirigido a profesionales de distintas áreas y en especial a los que están laborando en el área financiera, cuya actividad requiere de sólidos conocimientos en este campo.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Especialista en Finanzas.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Plan de estudios</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La especialización está diseñada para culminar en dos años o 6 trimestres, son10 unidades curriculares más un seminario de investigación. El número de unidades de crédito de la especialización es de 27u.c y el trabajo especial de grado tiene un total de 4u.c.</p>
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
                            <td>Entorno Económico Empresarial</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Principios de Finanzas Corporativas</td>
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
                            <td>Instituciones financieras</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Administración Financiera del Estado</td>
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
                            <td>Administración de Tesorería</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Finanzas Corporativas Avanzadas</td>
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
                            <td>Gerencia Fiscal y Tributaria</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Gerencia Estratégica de Negocios</td>
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
                            <td>Seminario de Trabajo Especial de Grado</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Administración de Portafolios de Inversión</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Seminario de Mercado de Capitales</td>
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
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Para realizar la pre-inscripción respectiva en la Especialización en Finanzas, el aspirante deberá cumplir con los siguientes requisitos administrativos y académicos:</p>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Formalizar la solicitud de pre-inscripción ante la Coordinación del Departamento de Docencia del Subsistema de Investigación y Postgrado, llenar la planilla diseñada para este efecto.</p></li>
                        <li><p>Copia del (fondo negro) del Título Universitario, que certifique su condición de Ingeniero, Licenciado o afines.</p></li>
                        <li><p>Copia de las notas certificadas.</p></li>
                        <li><p>Curriculum Vitae.</p></li>
                        <li><p>Una fotografía de frente (reciente), tamaño carnet.</p></li>
                        <li><p>Una fotocopia de la cédula de identidad.</p></li>
                        <li><p>Una fotocopia de la partida de nacimiento.</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Información de contacto:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Coordinador: Prof. José Romero.</b></p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Correo electrónico: </b> pg.finanzas@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Teléfono: </b> +58 414 395 4552</p>
                </div>
            </div>
        </div>
    </div>
@endsection
