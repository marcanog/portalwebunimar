@extends('admin.home')

@section ('admincontent')
    <!-- Page heading -->
    <div class="content">
        <h5>Facturas</h5>
        <div class="row mx-2 my-4">
            <div class="col-sm-12 col-md-6">
                <label for="cedula" class="form-label">Cédula: </label> {{auth()->user()->document_id}}
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="name" class="form-label">Nombre: </label> {{auth()->user()->name}}
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Correo Electrónico: </label> {{auth()->user()->email}}
            </div>
            <div class="col-sm-6 col-md-6">
                <label for="cedula" class="form-label">Saldo: </label> {{$student_data['data']['wallet_amount']}}
            </div>
            <div class="col-sm-6 col-md-6">
                <label for="name" class="form-label">Deuda por cuotas: </label> {{$student_data['data']['pending_amount']}}
            </div>
        </div>
    </div>

    @if($student_data['status'])
        <div class="row">
            <!-- List of Fees -->
            <div class="col-sm-12 col-md-12 career">
                <div class="col-sm-6 col-md-6">
                    <label for="cedula" class="form-label">Cuotas activas</label>
                </div>
                <div class="table-responsive-xl">
                    <table class="table table-hover col-lg-12 text-center">
                        <thead class="thead-blue">
                        <tr>
                            <th scope="col">Fecha de vencimiento</th>
                            <th scope="col">Valor de cuota</th>
                            <th scope="col">Numero de cuota</th>
                            <th scope="col">Numero de factura</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(sizeof($student_data['data']['fees']) == 0)
                            <tr>
                                <td title="">-</td>
                                <td title="">-</td>
                                <td title="">-</td>
                                <td title="">-</td>
                            </tr>
                            @else
                                @foreach($student_data['data']['fees'] as $fee)
                                <tr>
                                    <td title="">
                                        @empty($fee['expiration'])
                                            -
                                        @endempty
                                        {{ $fee['expiration'] }}
                                    </td>
                                    <td title="">
                                        @empty($fee['amount'])
                                            -
                                        @endempty
                                        {{ $fee['amount'] }}
                                    </td>
                                    <td title="">
                                        @empty($fee['no_fee'])
                                            -
                                        @endempty
                                        {{ $fee['no_fee'] }}
                                    </td>
                                    <td title="">
                                        @empty($fee['invoice_code'])
                                            -
                                        @endempty
                                        {{ $fee['invoice_code'] }}
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- List of receipt -->
            <div class="col-sm-12 col-md-12 career">
                <div class="col-sm-6 col-md-6">
                    <label for="cedula" class="form-label">Listado de facturas</label>
                </div>
                <div class="table-responsive-xl">
                    <table class="table table-hover col-lg-12 text-center">
                        <thead class="thead-blue">
                        <tr>
                            <th scope="col">Código Factura</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Concepto</th>
                            <th scope="col">Periodo</th>
                            <th scope="col">Monto</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($student_data['data']['invoices'] as $invoice)
                            <tr>
                                <td title="">
                                    @empty($invoice['code'])
                                        -
                                    @endempty
                                    {{ $invoice['code'] }}
                                </td>
                                <td title="">
                                    @empty($invoice['date'])
                                        -
                                    @endempty
                                    {{ $invoice['date'] }}
                                </td>
                                <td title="">
                                    @empty($invoice['concept'])
                                        -
                                    @endempty
                                    {{$invoice['concept']}}
                                </td>
                                <td title="">
                                    @empty($invoice['period'])
                                        -
                                    @endempty
                                    {{ $invoice['period'] }}
                                </td>
                                <td title="">
                                    @empty($invoice['amount'])
                                        -
                                    @endempty
                                    {{ $invoice['amount'] }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="row justify-content-around mx-2 my-4">
            <div class="col-sm-12 col-md-12 ">
                <label for="career" class="form-label">Error: </label> los recibos del estudiante no se encuentran disponibles para ser mostrados en este momento...
            </div>
        </div>
        <div class="col-sm-12 col-md-12 career">
            <div class="col-sm-6 col-md-6">
                <label for="cedula" class="form-label">Listado de facturas</label>
            </div>
            <!-- List of receipt -->
            <div class="table-responsive-xl">
                <table class="table table-hover col-lg-12 text-center">
                    <thead class="thead-blue">
                    <tr>
                        <th scope="col">Código Factura</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Descripción Concepto</th>
                        <th scope="col">Periodo</th>
                        <th scope="col">Carrera</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td title="">-</td>
                            <td title="">-</td>
                            <td title="">-</td>
                            <td title="">-</td>
                            <td title="">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            openBtn("estudiantes");
            activeBtn("facturas");
        });
    </script>
@endsection

