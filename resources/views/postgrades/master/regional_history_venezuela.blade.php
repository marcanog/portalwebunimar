@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/regional_history_venezuela.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Historia Regional de Venezuela</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>En virtud de la penetración cultural y demográfica que ha tenido la Isla de Margarita a causa de su status en el turismo nacional e internacional luego de que fuera decretada Zona Franca y Puerto Libre - cuyas consecuencias se ponen de manifiesto en la convivencia de personas procedentes de distintas regiones del país y del exterior dedicadas a las actividades turísticas y comerciales – se ha incrementado la formación de una sociedad heterogénea social y culturalmente, que rompe los esquemas tradicionales. La Universidad de Margarita con esta Maestría ofrece a la región, a la nación y al mundo en general, estudios de postgrado con la finalidad de formar sujetos críticos que expresen una sólida conciencia nacional y de soberanía, que desarrollen valores patrios, que se planteen la realidad como producto de una diversidad cultural que sea armónica con las tradiciones y especificidades socio-culturales de las otras regiones que constituyen el país, rescatando y difundiendo los bienes y las herencias culturales que forman el patrimonio histórico cultural.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Original o copia del fondo negro del título de pregrado autenticado (según sea la modalidad).</p></li>
                        <li><p>Original o copia de las notas certificadas (según sea la modalidad). </p></li>
                        <li><p>Síntesis curricular. </p></li>
                        <li><p>Dos (2) fotocopias de la cédula de identidad laminada ampliada, </p></li>
                        <li><p>Dos (2) fotografías recientes tamaño carnet. </p></li>
                        <li><p>Copia de la partida de nacimiento. </p></li>
                        <li><p>Llenar Planilla de Inscripción. Solicitarla a cualquiera de los 2 correos siguientes. </p></li>
                    </ul>
                    <p>Los recaudos se deben enviar a postgrado@unimar.edu.ve o a luis.garcia@unimar.edu.ve. </p>
                    <p>Una vez consignados los recaudos preguntar en la Secretaría de Postgrado o llamar a los teléfonos 0295-2871648 o 0295-2870271 extensión 1037 o al 0416-5167901 o enviar un mensaje a los correos arriba mencionados para cualquier duda. Se debe entrar a la página web de la Universidad de Margarita a la sección pagos en línea en donde está explicado el procedimiento para quienes viven fuera del estado Nueva Esparta o quienes deseen utilizar esta vía. Así mismo en esta sección se explica el pago en divisas. No se paga pre-inscripción.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Formar profesionales altamente especializados en el método propio de la investigación histórica aplicado al estudio, comprensión y difusión de los procesos históricos locales y regionales en la configuración y consolidación de la Nación Venezolana e Identidad Nacional.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a: </h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Maestría en Historia Regional de Venezuela está dirigida a Licenciados en el Área de Historia y Ciencias Sociales y a quienes posean Títulos en otras disciplinas afines, previa aprobación del Comité de Admisión.</p>
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
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Magíster en Historia Regional de Venezuela.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Plan de estudios</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La Maestría en Historia Regional de Venezuela tendrá un régimen académico trimestral. La Maestría en Historia Regional de Venezuela tiene un total de seis (6) trimestres.</p>
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
                            <td>Seminario Teoría y Metodología de la Historia</td>
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
                            <td>Seminario de Historia Regional de Venezuela I</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Taller de Investigación I</td>
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
                            <td>Seminario de Historia Regional de Venezuela II</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Taller de Investigación II</td>
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
                            <td>Seminario Electivo I</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Taller de Investigación III</td>
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
                            <td>Seminario Electivo II</td>
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
                            <td>Seminario Electivo III</td>
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
                    <p>unimar@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>postgrado@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>luis.garcia@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>800-UNIMAR (800-864627)</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 295-2871648 </p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 295-2870271 </p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 416-5167901</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ubicación: Universidad de Margarita, El Valle del Espíritu Santo, Sector Toporo, Isla de Margarita, Estado Nueva Esparta, Venezuela. Rif: J-30660040-0.<p>
                </div>
            </div>
        </div>
    </div>
@endsection
