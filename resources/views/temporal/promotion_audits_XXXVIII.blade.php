@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/temporal/promotion-audits-xxxviii.png')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                    src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/home/home-02.png')}}">
                <h4>Auditorías de Expedientes de Grado</h4>
            </div>
        </div>
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text" id="card-b-author">
                    <p>El proceso de revisión de expedientes en el área de Grado del Departamento de Control de Estudios inicia cuando los estudiantes cursan el último trimestre y se convierten en aspirantes a grado.</p>
                    <p>Una vez que se ha completado la auditoría de los expedientes, el Departamento de Control de Estudios a través de las redes sociales notifica a los aspirantes si deben o no entregar algún documento, y la fecha límite para efectuar dicha entrega.</p>
                    <p>Los documentos que deben reposar en el expediente, para que puedan egresar de la UNIMAR, son los exigidos por el Ministerio del Poder Popular para la Educación Universitaria y se listan a continuación:</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>PREGRADO:</b></p>
                </div>
                <div class="card text-black text-justify border-0 ml-3">
                    <div class="card-text">
                        <ol>
                            <li>Copia ampliada de la cédula de identidad vigente.</li>
                            <li>Foto actualizada</li>
                            <li>Copia de la certificación de notas correspondientes al séptimo, octavo y noveno grado de Educación Básica y primero y segundo año de Educación Diversificada, expedida por el Ministerio del Poder Popular para la Educación.</li>
                            <li>Copia de la partida de nacimiento.</li>
                            <li>Fondo negro del título de Bachiller.  </li>
                            <li>Copia del Registro de Ingreso en Educación Superior emitido por la Oficina de Planificación del Sector Universitario, OPSU.</li>
                            <li>Certificación de cumplimiento del Servicio Comunitario.</li>
                            <li>Certificación de aprobación de la prueba de conocimientos en un idioma moderno. </li>
                        </ol>
                    </div>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Con el objeto de contribuir con la socialización de la información, puedes descargar el listado de auditoría de expedientes de los aspirantes a grado de la Promoción XXXVIII Prof. Pedro Augusto Beauperthuy Urich y verificar el estatus de tu documentación. <a href="/download/Promotion%20Audits/Listado-auditoria-XXXVIII-sin-cedula-NOVIEMBRE.xls">Clic aquí</a></p>
                    <p>En caso de haber consignado los documentos señalados como faltantes en este listado, rogamos hacer caso omiso a esta publicación.</p>
                    <p>Para más información por favor contacta al Departamento de Control de Estudios al correo: <a href="mailto:control.estudios@unimar.edu.ve" target="_blank">control.estudios@unimar.edu.ve</a> o al <b>WhatsApp al <a href="https://wa.me/+584125957430" target="_blank">0412 595 7430</a></b>
                </div>
            </div>
        </div>
    </div>
@endsection
