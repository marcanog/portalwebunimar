@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/service_management.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Gerencia de Servicios</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El contexto actual de globalización y apertura económica ha hecho que todas las organizaciones en sus diferentes sectores enfrenten un alto nivel de competitividad, esto amerita que nuestros profesionales universitarios cursen programas de formación complementaria y actualización de conocimientos, relacionados con las nuevas tendencias mundiales en el ámbito gerencial. El servicio es, hoy en día, una de las actividades de mayor relevancia en el mundo. Una gran parte de la fuerza laboral está dedicada al ámbito de los servicios. Es por ello que dicho sector es uno de los mayores dinamizadores de la economía y su crecimiento depende en gran manera de la orientación y formas de gestión que asumen los entes prestadores de servicios.</p>
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
                        <li><p>Planilla de inscripción suministrada por el Decanato de Postgrado.</p></li>
                        <li><p>Fotocopia ampliada de la cédula de identidad vigente</p></li>
                        <li><p>Acta de nacimiento</p></li>
                        <li><p>Síntesis curricular</p></li>
                    </ul>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El costo actual de la unidad de crédito es de 22 $ (sujeto a revisión) o al cambio establecido por institución.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Tener la capacidad de desarrollar un nuevo enfoque participativo en las empresas, a través de la Gerencia de Servicio, participando de manera consiente, analítica y responsable en la identificación y gestión de las necesidades de servicio, que fortalezca las relaciones entre la empresa y sus clientes.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Profesionales de las áreas de Economía, Administración de Empresas, Contaduría Pública, Derecho, Ingeniería y otras disciplinas vinculadas con el área de prestación de servicio.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Presencial y multimodal</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Al finalizar el postgrado se obtendrá el título de Especialista en Gerencia de Servicios.</p>
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
                            <td>Gestión de Recursos Humanos</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Comunicación Organizacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Herramientas Financieras</td>
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
                            <td>Diseño y Desarrollo de los Procesos de Servicios</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Mercadeo Estratégico de Servicios I</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Negociación</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Sistemas y Tecnología de la Información</td>
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
                            <td>Gerencia Estratégica</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Gestión de los Procesos de Servicios</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Mercadeo Estratégico de Servicios II</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Métodos de Medición de Servicios</td>
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
                            <td>Desempeño Profesional y Ético</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Calidad y Excelencia del Servicio</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Métodos de Auditoria de Servicios</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Metodología de la Investigación</td>
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
                    <p>pg.gerencia.servicios@unimar.edu.ve</p>
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
