@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/administrative_sciences.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Ciencias Administrativas</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Universidad de Margarita, comprometida desde su misión con una educación democrática, participativa, respetuosa de la condición humana y vinculada a la realidad del país, propone un diseño curricular para la formación de doctores en Ciencias Administrativas desde la perspectiva de innovación social universitaria, en compromiso con la realidad propia de la UNIMAR y con los desafíos de la territorialidad y del contexto nacional, con énfasis en los lineamientos del Plan Económico y Social “Simón Bolívar” y los desafíos globales, en concordancia con las políticas y estrategias para el desarrollo de la educación en Venezuela y las políticas institucionales de la UNIMAR. Este programa doctoral se centra en darle relevancia al ser humano y sus actividades vinculadas a la transformación de los procesos administrativos y sus entornos; en consecuencia, la formación de los doctorados se enmarca en los principios de justicia, equidad y solidaridad entre los seres.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Requisitos para Residentes en Venezuela:</p>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Comprobante de pago del arancel por concepto de pre-inscripción.</p></li>
                        <li><p>Una fotocopia en papel fotográfico, tamaño carta, con fondo negro del título universitario.</p></li>
                        <li><p>Entregar una fotocopia en papel bond, tamaño carta, con fondo negro del título universitario.</p></li>
                        <li><p>Una (1) fotocopia en papel bond, tamaño carta, de las Notas debidamente Certificadas por la Universidad que otorgó el título de postgrado.</p></li>
                        <li><p>Entregar el original y una (1) fotocopia en papel bond, tamaño carta, de las Notas debidamente Certificadas por la Universidad que otorgó el título de pregrado.</p></li>
                        <li><p>Entregar el original y una (1) fotocopia en papel bond, del Acta de Nacimiento.</p></li>
                        <li><p>Entregar dos (2) fotocopias en papel bond, tamaño carta, centradas en la hoja, ampliada al 100% y legibles, de la cédula de identidad vigente.</p></li>
                        <li><p>Entregar dos (2) fotografías de frente, actuales, en papel fotográfico, tamaño carnet.</p></li>
                        <li><p>Entregar el original y una fotocopia en papel bond, tamaño carta de la Constancia de Trabajo actual.</p></li>
                        <li><p>Entregar un curriculum vitae (CV) en un máximo de tres hojas de papel bond, tamaño carta, indicando las principales actividades de investigación, docencia, extensión, participación en eventos científicos, experiencia profesional y publicaciones científicas, realizadas durante los últimos cinco años. Anexe los comprobantes.</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Formar en el área de las Ciencias Administrativas a investigadores y constructores del conocimiento  teórico-práctico necesario para dar respuesta a las  demandas de una realidad social cada día más  compleja como la actual, que aporten al crecimiento  sustentable de la Patria, a su desarrollo armónico, a  la transformación las relaciones sociales de  producción aún vigente, elevando el modo y calidad  de vida de los habitantes del país, con sentido humanitario y altos niveles de  creatividad, innovación, ética, reforzados por su vinculación permanente con la comunidad.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Profesionales de las áreas de economía, finanzas, administración, contabilidad, gerencia empresarial y otras áreas afines.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El Doctorado en Ciencias Administrativas será ofertado en la modalidad de formación:  MULTIMODAL.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Al finalizar el postgrado se obtendrá el título de Doctor (a) en Ciencias Administrativas.</p>
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
                            <td>Epistemología de las Ciencias Administrativas</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario de Tecnología de la Información y la Comunicación para la Investigación Científica</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Economía Gerencial</td>
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
                            <td>Seminario de Métodos</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Seminario de Administración Empresarial</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Administración de Finanzas</td>
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
                            <td>Seminario de Investigación I</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Seminario de Administración Pública</td>
                            <td>3</td>
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
                            <td>Seminario de Investigación II</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Seminario de Administración del Talento Humano</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Electiva II</td>
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
                            <td>Seminario de Investigación III</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Seminario de Administración de Marketing</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Electiva III</td>
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
