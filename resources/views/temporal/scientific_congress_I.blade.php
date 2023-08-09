@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/temporal/scientific-congress-I.png')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                    src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/home/home-02.png')}}">
                <h4>I CONGRESO CIENTÍFICO DE LA UNIVERSIDAD DE MARGARITA</h4>
            </div>
        </div>
        <div class="card text-black text-justify border-0 m-2">
            <b class="text-right"><em>Ciencia, Ética e Integridad Académica.</em></b>
        </div>
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">INICIO</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Presentación</b></p>
                    <p>El I Congreso Científico de la Universidad de Margarita tendrá lugar el 20 y 21 de octubre de 2023, en el campus de nuestra Alma Mater del Caribe, ubicado en El Valle del Espíritu Santo, Isla de Margarita.   Este evento se concibe como un espacio de promoción y divulgación del conocimiento, en las diversas áreas científicas que conforman los ámbitos de producción intelectual de nuestra institución.</p>
                    <p>Animados con este propósito general, este evento se ofrece desde una mirada horizontal con la búsqueda de la participación de docentes, investigadores y estudiantes y de todo aquél que asume como reto profesional la actualización y el fortalecimiento ético de las ciencias.</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Objetivos</b></p>
                </div>
                <div class="card text-black text-justify border-0 ml-3">
                    <div class="card-text">
                        <ol>
                            <li>Promover los valores orientados hacia la integridad académica desde el compromiso con las buenas prácticas científicas.</li>
                            <li>Asumir la investigación científica como un eje formativo que fortalezca nuestra educación y liderazgo en las distintas áreas del saber.</li>
                            <li>Difundir los resultados de investigaciones, con el fin de comunicar los avances en las diversas disciplinas científicas.</li>
                            <li>Ofrecer espacios para la discusión de experiencias innovadoras que actualicen los procesos de enseñanza y aprendizaje en las diversas disciplinas científicas.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">ÁREAS TEMÁTICAS</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ciencias Económicas</p>
                    <p>Ciencias de la Salud</p>
                    <p>Ciencias Jurídicas </p>
                    <p>Ciencias Pedagógicas</p>
                    <p>Ciencias de la Ingeniería y la Tecnología</p>
                    <p>Ciencias Sociales y culturales</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">RECEPCIÓN DE RESÚMENES DE PONENCIAS</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Condiciones generales</b></p>
                    <p>La fecha de inicio de envíos de resúmenes será a partir del 25 DE JUNIO y la fecha de cierre será el 15 DE SEPTIEMBRE de 2023. El resumen debe ser enviado al correo: <a href="mailto:comiteacademico.congresos@unimar.edu.ve">comiteacademico.congresos@unimar.edu.ve</a></p>
                    <p>Para participar en el Congreso, los resúmenes se someterán a una revisión por parte del Comité Académico, quien enviará la aceptación por correo electrónico, notificando su inclusión en la programación.</p>
                    <p>En el caso de aquellos resúmenes que, en su revisión, precisan de alguna reelaboración, se les notificará por escrito a sus autores para su reescritura final, la cual deberá ser enviada nuevamente en el lapso de cinco días, contados a partir de la fecha de su recepción, a fin de poder ser incluido en la programación del Congreso. Es necesario tener siempre en cuenta el lapso de cierre del proceso de envío de resúmenes.</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Normas para el envío de resúmenes</b></p>
                    <p>El resumen debe tener entre 200 y 300 palabras y deberá contener la siguiente estructura textual: Título (centrado y en mayúsculas), Autor (Debajo del título y alineado a la derecha), Institución a la cual está adscrito el autor y correo electrónico (debajo del nombre del autor), cuerpo del resumen (objetivo, contexto en el que se ubica el trabajo, procedimiento utilizado, resultados o hallazgos, conclusiones y/o reflexiones) . El resumen debe enviarse usando formato doc o docx, letra arial 12 y espaciado simple. Adicionalmente, debe contener un mínimo de tres descriptores o palabras clave.  Se presenta a continuación la plantilla, que usted podrá descargar, para presentar su resumen.</p>
                </div>
                <div class="card-text ml-3 mb-3" id="card-b-author">
                    <a href="/download/Scientific%20Congress/Plantilla-CONGRESO-UNIMAR-2023.docx" class="btn btn-primary">Descargar plantilla</a>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Dirección de envío y fechas</b></p>
                    <p>El resumen debe ser enviado a la siguiente dirección electrónica: <a href="mailto:comiteacademico.congresos@unimar.edu.ve">comiteacademico.congresos@unimar.edu.ve</a></p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">MODALIDADES DE INSCRIPCIÓN Y FECHAS</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>MODALIDAD</b></p>
                    <p>Presencial, con presentaciones online para quienes vivan fuera de la Isla de Margarita. En el caso de las ponencias virtuales, es imprescindible que las mismas sean síncronas. Se dispondrá de una plataforma para estas presentaciones.</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th><b>Modalidad de inscripción</b></th>
                                <th><b>Hasta el 20/09</b></th>
                                <th><b>Hasta el 15/10</b></th>
                                <th><b>In situ**</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Asistente sin ponencia</td>
                                <td></td>
                                <td>Estudiante*:15$<br>Profesionales 25$</td>
                                <td>Estudiantes 20$<br>Profesionales 30$</td>
                            </tr>
                            <tr>
                                <td>Asistente presencial con ponencia</td>
                                <td>Estudiantes 20$<br>Profesionales 30$</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Asistente virtual con ponencia (solo para investigadores que vivan fuera de la isla de Margarita)</td>
                                <td>Estudiantes 20$<br>Profesionales  25$</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>*Para inscribirse como estudiante es necesario enviar, como archivo adjunto, copia del carnet o constancia vigente emitida por la respectiva institución.</p>
                    <p>**La inscripción in situ solo es posible bajo la modalidad de asistente sin ponencia.</p>
                    <p>Los depósitos o transferencias por inscripción deben realizarse a nombre de <b>“Universidad de Margarita UNIMAR A.C”, Rif: J-306600400</b> en los bancos:</p>
                    <div class="card text-black text-justify border-0 ml-3">
                        <div class="card-text">
                            <ul>
                                <li><b>Mercantil</b> (0105-0111-37-1111106274)</li>
                                <li><b>Banesco</b> (0134-0221-33-221102929-6)</li>
                                <li><b>Si se realiza pago por  ZELLE</b>,  solo debes seguir el siguiente procedimiento:</li>
                                <ol type="a">
                                    <li>Hacer el pago al correo: <a href="mailto:unimarllc@unimar.edu.ve">unimarllc@unimar.edu.ve</a> y enviar captura de la transacción realizada al <b>WhatsApp 0412 595 7440</b>, incluyendo los siguientes datos:</li>
                                    <ol>
                                        <li>Nombre y apellido.</li>
                                        <li>Número de cédula de identidad.</li>
                                        <li>Concepto de pago (Especificar qué pagas)</li>
                                    </ol>
                                    <li>Monto del pago (incluyendo el 3% del IGTF).</li>
                                </ol>
                            </ul>
                        </div>
                    </div>
                    <p>Si el pago es en bolívares, debe hacerse tomando en cuenta el valor del dólar de acuerdo con el Banco Central de Venezuela.</p>
                    <p>Quien quiera realizar el pago en taquilla, podrá hacerlo por punto de venta o en efectivo.</p>
                    <p><b>Una vez realizado el pago de la inscripción</b>, debe enviarse comprobante al siguiente correo  <a href="mailto:cobranza@unimar.edu.ve">cobranza@unimar.edu.ve</a></p>
                    <p><b>En el asunto</b> debe indicar <b>Inscripción como ponente</b> o <b>Inscripción como asistente</b> al I Congreso Científico.</p>
                    <p><b>En el mensaje</b> debe indicar los siguientes datos: Nombre completo, Número de cédula, si es estudiante de pregrado o profesional, lugar de procedencia. Indicar también un número telefónico.</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>EVENTOS ESPECIALES</b></p>
                    <p><em>En construcción.</em></p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>PROGRAMA</b></p>
                    <p><em>En construcción.</em></p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">CONTACTO</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><a href="mailto:comiteacademico.congresos@unimar.edu.ve">comiteacademico.congresos@unimar.edu.ve</a> / <a href="mailto:congresos@unimar.edu.ve">congresos@unimar.edu.ve</a></p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">COMITÉ ORGANIZADOR</h5>
                </div>
                <div>
                    <div class="row alert alert-dark">
                        <p class="col-4"><b>Coordinadora General del Congreso: </b></p>
                        <p class="col-8">
                            Dra. Mariela Díaz F.
                        </p>
                    </div>
                    <div class="row alert alert-dark">
                        <p class="col-4"><b>Coordinación Académica: </b></p>
                        <p class="col-8">
                            Dr. Antonio Murguey (Coordinador)<br>
                            Dr. José Viloria, Dr. Benito Marcano, M.Sc. Bernardo Alcalá, Dr. Rafael Torrealba.
                        </p>
                    </div>
                    <div class="row alert alert-dark">
                        <p class="col-4"><b>Coordinación de Inscripciones y Servicios: </b></p>
                        <p class="col-8">
                            Esp. Beatriz Cabello (Coordinadora)<br>
                            Licda. Andreína Marín, Abg. Migdalia Marcano, TSU. José Subero, TSU. Yadira Gómez.
                        </p>
                    </div>
                    <div class="row alert alert-dark">
                        <p class="col-4"><b>Coordinación de Logística y Protocolo: </b></p>
                        <p class="col-8">
                            Dra. Fanny Marcano S. (Coordinadora)<br>
                            Esp. Aracelys Quijada, Esp. Marianny de Lira, Abg. Ana Abreu, Esp. Celia Reyes, Abg. Víctor Rondón, Ing. Oswuald Hernández, Licdo. Carlos Brito.
                        </p>
                    </div>
                    <div class="row alert alert-dark">
                        <p class="col-4"><b>Coordinación de Eventos Especiales: </b></p>
                        <p class="col-6">
                            Dra. Thamara Echegaray (Coordinadora)<br>
                            Licda. Mabel Montaño, M.Sc. Manuel Silva, Prof. Omar Fernández, Br. Alejandro Hernández.
                        </p>
                    </div>
                    <div class="row alert alert-dark">
                        <p class="col-4"><b>Coordinación de Comunicación y Publicidad: </b></p>
                        <p class="col-8">
                            Licda. Joamacel Rodríguez (Coordinadora)<br>
                            Prensa: Ana Carolina Arias, Soraya Velásquez y Ana Erazo<br>
                            Diseño Gráfico: Adrián Quijano, María Gabriela Mata, María Celeste Aguilera<br>
                        </p>
                    </div>
                    <div class="row alert alert-dark">
                        <p class="col-4"><b>Coordinación Tecnológica: </b></p>
                        <p class="col-8">
                            Dr. Andrés Pedroza (Coordinador)<br>
                            Profa. Yemnel Torcat, Ing. Flavio Rosales.
                        </p>
                    </div>
                    <div class="row alert alert-dark">
                        <p class="col-4"><b>Coordinador de Gestión de Patrocinios: </b></p>
                        <p class="col-8">
                            Ing. Flavio Rosales (Coordinador)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
