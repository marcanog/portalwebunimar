@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/temporal/intensive-course-2023.png')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                    src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/home/home-02.png')}}">
                <h4>INTENSIVO AGOSTO 2023</h4>
            </div>
        </div>
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text" id="card-b-author">
                    <p>El Vicerrectorado Académico informa a todos los estudiantes de pregrado que están abiertas las inscripciones para los Cursos Intensivos.</p>
                    <p>El lapso académico será del <b>1 al 31 de agosto</b> de 2023 y en cumplimiento de la Normativa de Cursos Intensivos de la Universidad de Margarita (Art. 12), solo se podrá inscribir un máximo de dos (02) asignaturas.</p>
                    <p>La mencionada normativa, también establece que deben inscribirse un mínimo de participantes para que una materia pueda ser impartida.</p>
                    <p>El cronograma de inscripción, está establecido en dos etapas, una administrativa y otra académica:</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Inscripción Administrativa</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Del 12 al 19 de julio de 2023</b></p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Pagos por transferencia:</b></p>
                    <p>Solo puedes realizar <b>transferencias desde cuentas bancarias del mismo banco</b> y registrarla en el Sistema de Pagos Online, siguiendo el procedimiento allí señalado.</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Cuentas Bancarias:</b></p>
                    <div class="card text-black text-justify border-0 ml-3">
                        <div class="card-text">
                            <ul>
                                <li>Banco Mercantil:  0105-0111-37-111110627-4</li>
                                <li>Banco Banesco:  0134-0221-33-221102929-6</li>
                                <li>Banco de Venezuela:  0102-0511-58-000001746-2</li>
                                <li>Razón Social: Universidad de Margarita, UNIMAR A.C</li>
                                <li>RIF: J-30660040-0</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Pagos Divisas:</b></p>
                    <p>Transferencias electrónicas y depósitos en taquilla en todas las agencias en el ámbito nacional.</p>
                    <div class="card text-black text-justify border-0 ml-3">
                        <div class="card-text">
                            <ul>
                                <li>Banco Nacional de Crédito - BNC: 0191-0146-11-2300009652</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Pagos vía Zelle:</b></p>
                    <p>Cuenta Zelle: unimarllc@unimar.edu.ve</p>
                    <p>Se recuerda que debe incluirse en el pago el 3% del IGTF y enviar toda la información al WhatsApp 0412-595-7440.</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Pagos por taquilla:</b></p>
                    <p>Del <b>12 al 27</b> de julio en horario de 8:00 a.m. a 4: 00 p.m.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Inscripción Académica</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Se realizará los días <b>27 y 28 de julio</b> de forma online como usualmente se realiza la inscripción del trimestre.</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La oferta de unidades curriculares que ofrecen los distintos decanatos para este intensivo son las siguientes:</p>
                    <div class="card text-black text-justify border-0 ml-3">
                        <div class="card-text">
                            <ul>
                                <li><a href="/download/Intensive%20Course%202023/ESTUDIOS-GENERALES.pdf">ESTUDIOS GENERALES</a></li>
                                <li>CIENCIAS ECONÓMICAS Y SOCIALES: <a href="/download/Intensive%20Course%202023/ADMINISTRACIÓN.pdf">ADMINISTRACIÓN,</a><a href="/download/Intensive%20Course%202023/CONTADURÍA.pdf"> CONTADURÍA</a></li>
                                <li>HUMANIDADES, ARTES Y EDUCACIÓN: <a href="/download/Intensive%20Course%202023/ARTES.pdf">ARTES MENCIÓN DISEÑO GRÁFICO</a>, <a href="/download/Intensive%20Course%202023/IDIOMAS.pdf">IDIOMAS MODERNOS</a>, <a href="/download/Intensive%20Course%202023/COMUNICACIÓN-SOCIAL.pdf">COMUNICACIÓN SOCIAL MENCIÓN ORGANIZACIONAL</a></li>
                                <li>CIENCIAS JURÍDICAS Y POLÍTICAS: <a href="/download/Intensive%20Course%202023/DERECHO.pdf">DERECHO</a></li>
                                <li>DECANATO DE INGENIERÍA Y AFINES: <a href="/download/Intensive%20Course%202023/INGENIERÍA.pdf">INGENIERÍA DE SISTEMAS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Importante</h5>
                </div>
                <div class="card text-black text-justify border-0 ml-3">
                    <div class="card-text">
                        <ul>
                            <li>Para atención en el área administrativa, comunícate al: 0295 287 1648, 0295 287 0271 y al 0412 595 7440.</li>
                            <li>Si se presentan inconvenientes antes o durante la inscripción en línea y requieres modificar algo, deberás notificarlo el mismo día de la inscripción, a través de los siguientes números: 0295 287 1648 / 0295 287 0271 y 0412 595 7430.</li>
                            <li>Si necesitas gestionar un reembolso, realízalo durante los tres primeros días del inicio de clases, a través del correo: <a href="mailto:">cobranza@unimar.edu.ve</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
