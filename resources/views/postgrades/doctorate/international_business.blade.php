@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/international_business.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Negocios Internacionales</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El programa Doctorado en Negocios Internacionales abarca diversas ramas del conocimiento y la práctica profesional, incentivando la formación de investigadores   de   alto   nivel   con capacidad de análisis para la toma de decisiones en el campo de la economía y negocios, mediante el uso de herramientas de simulación estratégicas y de gestión logística. La capacidad intelectual alcanzada por nuestros doctorandos les va a permitir utilizar la investigación para visualizar con profundidad la realidad del mundo actual, y así desarrollar actividades comerciales que generen valor para las empresas públicas y privadas.</p>
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
                <div class="card-text">
                    <ul>
                        <li><p>Formar investigadores capaces de generar, aplicar nuevos conocimientos y gestionar estrategias que impulsen la innovación, desarrollo y crecimiento de las empresas (públicas, privadas) en el manejo de las operaciones de los negocios internacionales.</p></li>
                        <li><p>Dotar al profesional de un fuerte enfoque gerencial global que incentive la capacidad de análisis para aplicar soluciones creativas en todos los aspectos de intercambio comercial, con especial énfasis para dirigir programas de exportación e importación.</p></li>
                        <li><p>Proporcionar las herramientas administrativas y financieras para formular e implementar estrategias de negocios en un contexto global, ejerciendo actividades profesionales en las negociaciones comerciales, asesor de empresas, consultor privado y todas relacionadas con la planeación, consultoría, dirección y toma de decisiones.</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Profesionales de las áreas de economía, administración, finanzas, contabilidad y otras afines.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El Doctorado en Negocios Internacionales será ofertado en la modalidad de formación MULTIMODAL.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Al finalizar el postgrado se obtendrá el título de Doctor (a) en Negocios Internacionales.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Plan de estudios</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El programa de Doctorado en Negocios Internacionales tendrá un régimen académico trimestral, un trimestre tendrá una duración mínima de doce (12) semanas. El Doctorado tiene un total de seis (6) trimestres, que deberán cumplirse normalmente en un plazo mínimo de dos (2) años y en un plazo máximo de cinco (5) años, contados a partir del inicio formal de los estudios, en concordancia con el artículo 10, literal “c” del Reglamento de Investigación y Estudios de Postgrado de la Universidad de Margarita (2003).</p>
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
                            <td>Macroeconomía en un Entorno Global</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Economía y Comercio Internacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario Negocios Internacionales I</td>
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
                            <td>Estrategias para Negocios Internacionales</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Simulación de Decisiones Estratégicas</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario Negocios Internacionales II</td>
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
                            <td>Marketing Internacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Investigación de Mercado Internacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Electiva I</td>
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
                            <td>Finanzas y Gestión Financiera</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario Tesis Doctoral</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Electiva II</td>
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
                            <td>Logística y Transporte Internacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Seminario Tesis Doctoral</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Electiva III</td>
                            <td>3</td>
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
                            <td>6</td>
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
