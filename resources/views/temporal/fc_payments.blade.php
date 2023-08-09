@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/temporal/bank-onlineb.jpg')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                    src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/home/home-02.png')}}">
                <h4>Información Importante</h4>
            </div>
        </div>
        <div class="d-flex text-justify m-4"> {{--equivalentes--}}
            <div class="card card-body border-0">
                <p>Estudiante unimarista, ya contamos con cuenta zelle para facilitar los pagos en divisas.</p>
                <p>Para realizar la transacción solo debes seguir el siguiente procedimiento: </p>
                <p>1. Hacer el pago al correo <a href="mailto:unimarllc@unimar.edu.ve">unimarllc@unimar.edu.ve</a> y enviar captura de la transacción realizada al WhatsApp 0412 595 7440 incluyendo los siguientes datos: </p>
                <div class="">
                    <ul>
                        <li><p>Nombre y apellido.</p></li>
                        <li><p>Número de cédula de identidad.</p></li>
                        <li><p>Correo institucional.</p></li>
                        <li><p>Monto del pago (incluyendo el 3% del IGTF).</p></li>
                    </ul>
                </div>
                <p>2. Indicar la modalidad de pago del trimestre (contado, financiado, por unidades de crédito o si el pago es correspondiente a un servicio).</p>
                <p>Nota: En caso de requerir factura personalizada a nombre de otra persona natural o jurídica, enviar los datos solicitados junto con el rif.</p>
                <p class="mt-3">Para mayor información:</p>
                <p>0426 487 2666 <br> 0416 417 0925 <br> <a href="mailto:cobranzas@unimar.edu.ve">cobranzas@unimar.edu.ve</a></p>
            </div>
        </div>
    </div>
@endsection
