@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/information_management.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Gerencia de la Información</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Las organizaciones, hoy en día, tienden a ser estructuradas basadas en el conocimiento. Una organización es inteligente cuando es capaz de reconocer sus limitaciones, riesgos y saber cómo afrontarlas aprovechando para ello sus fortalezas y oportunidades, así como todas las herramientas y métodos que ponen a nuestro alcance las Tecnologías de la Información en el ejercicio de una gerencia eficiente. En los últimos años, estas herramientas se han venido aplicando de forma sistémica y progresiva para tratar de comprender el funcionamiento de una gran gama de sistemas empresariales.</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ahora bien, la gerencia deberá asumir un rol protagónico en cuanto a la utilización de las nuevas Tecnologías de la Información, ellas aportan una mayor libertad en la toma de decisiones, obteniendo así un elevado grado de autonomía e independencia para manejarlos recursos de la información. Es una responsabilidad darle apoyo a esas decisiones mediante el recurso tecnológico aplicado, el cual es uno de los objetivos que nos provee la formación en Gerencia de la Información.</p>
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
                    <p>El programa de postgrado está orientado a la formación de profesionales en las diferentes metodologías y técnicas, que les permitan desarrollar con éxito las funciones de análisis, diseño e implementación de sistemas de información gerencial.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Profesionales de las áreas de Ingeniería, Administración de Empresas, Contaduría Pública, Sistemas, Informática y otras disciplinas que se desempeñan en cargos relacionados con el área de computación, sistemas o informática.</p>
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
                    <p>Al finalizar el postgrado se obtendrá el título de Especialista en Gerencia de la Información.</p>
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
                            <td>Estadística Aplicada</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Metodología de la Investigación en Gerencia de la Información</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Teoría de la Organización y el Sistema</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Computación e Internet para Ejecutivos</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Sistemas de Información Gerencial</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Dinámica de Sistemas Gerenciales</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Organización y Gestión de los Sistemas de Base de Datos</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Evaluación y Selección de Hardware y Software</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario Metodológico del Trabajo Especial de Grado</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Gerencia Estratégica y Política Empresarial</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminarios sobre Tópicos Gerenciales Avanzados</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminarios sobre Sistemas Computacionales</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Electiva de Gerencia</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Electiva de Sistemas</td>
                            <td>2</td>
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
                    <p>pg.gerencia.informacion@unimar.edu.ve</p>
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
                    <p>+58 4147919158</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ubicación: Universidad de Margarita, El Valle del Espíritu Santo, Sector Toporo, Isla de Margarita, Estado Nueva Esparta, Venezuela. Rif: J-30660040-0.<p>
                </div>
            </div>
        </div>
    </div>
@endsection
