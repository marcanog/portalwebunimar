@extends('admin.home')

@section('admincontent')
    <div class="content">
        <h5>Citas de inscripción</h5>
        <div class="row justify-content-around mx-2 my-4">
            <div class="col-sm-12 col-md-6">
                <label for="cedula" class="form-label">Cédula: </label> {{auth()->user()->document_id}}
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="name" class="form-label">Nombre: </label> {{auth()->user()->name}}
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Correo Electrónico: </label> {{auth()->user()->email}}
            </div>
        </div>

        
        @if($student_data['status'])
            <div class="row mx-2">
                <div class="col-sm-6 col-md-6">
                    <label for="trimester" class="form-label">Periodo: </label> -
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="table-responsive-xl">
                    <table class="table table-hover col-lg-12 text-center">
                        <thead class=" thead-blue">
                        <tr>
                            <th scope="col">Carrera</th>
                            <th scope="col">Inicio de inscripción</th>
                            <th scope="col">Cierre de inscripción</th>
                            <th scope="col">Disponibilidad</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($student_data['data'] as  $key => $current_inscription)
                            <tr>
                                <td>{{ $current_inscription['career'] }}</td>
                                <td>{{ $current_inscription['opening_date'] }}</td>
                                <td>{{ $current_inscription['due_date'] }}</td>
                                <td>
                                    @if($current_inscription['available'])
                                        Para realizar tu inscripción online has click <a target="_blank" href="/admin/student/inscriptions/start">aquí.</a> 
                                    @else
                                        Su inscripción no está disponible para ser realizada actualmente
                                    @endif
                                </td>                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mx-2">
                <div class="col-sm-12 col-md-12">
                    <label for="trimester" class="form-label">Nota: </label> De no poder realizar su inscripción de forma online o presentar algún tipo de inconveniente, por favor diríjase a las instalaciones de la universidad, hacia la taquilla de control de estudio para realizar su inscripción de forma presencial
                </div>
            </div>
        @else
            <div class="row justify-content-around mx-2 my-4">
                <div class="col-sm-12 col-md-12 ">
                    <label for="career" class="form-label">Error: </label> el estudiante no tiene fechas de inscripción actualmente...
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="table-responsive-xl">
                    <table class="table table-hover col-lg-12 text-center">
                        <thead class=" thead-blue">
                        <tr>
                            <th scope="col">Carrera</th>
                            <th scope="col">Lugar</th>
                            <th scope="col">Fecha de inscripción</th>
                            <th scope="col">Hora</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            openBtn("estudiantes");
            activeBtn("citas-de-inscripcion");
        });
    </script>
@endsection
