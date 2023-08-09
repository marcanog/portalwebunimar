@extends('admin.home')

@section('scripts')
    <!-- Other -->  
    <script src="{{ asset('js/students/record.js') }}"></script> 
@endsection

@section('admincontent')
    <div class="content">
        <h5>Materias Cursadas</h5>
        <div class="row mx-2 my-4">
            <div class="col-sm-12 col-md-6">
                <label for="cedula" class="form-label">Cédula: </label> {{auth()->user()->document_id}}
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="name" class="form-label">Nombre: </label> {{auth()->user()->name}}
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="email" class="form-label">Correo Electrónico: </label> {{auth()->user()->email}}
            </div>
            @if($student_data['status'])
                <div class="col-sm-12 col-md-6">
                    <label for="career" class="form-label">Carrera: </label> 
                    <select class="dropdown-toggle col-sm-9" onchange="filter(this)">
                        @foreach($student_data['data'] as $student_career) 
                            <option value="#career-record-{{$loop->index}}">{{ $student_career['career'] }}</option>
                        @endforeach
                    </select>
                </div>
                @foreach($student_data['data'] as $student_career) 
                    <div class="col-sm-12 col-md-6 career-record @if($loop->index != 0){{'d-none'}}@endif" id="career-record-{{$loop->index}}-credits">
                        <label for="email" class="form-label">Unidades de Crédito Aprobadas: </label> {{$student_career['approved_credits']}}
                    </div>
                    <div class="col-sm-12 col-md-6 career-record @if($loop->index != 0){{'d-none'}}@endif" id="career-record-{{$loop->index}}-trimester">
                        <label for="email" class="form-label">Trimestres Aprobados: </label> {{$student_career['approved_levels']}}
                    </div>
                @endforeach
            @endif
        </div>
        @if($student_data['status'])
            @foreach ($student_data['data'] as $career)
                <div class="career-record @if($loop->index != 0){{'d-none'}}@endif" id="career-record-{{$loop->index}}" >
                    @foreach ($career['periods'] as $key => $period)
                        <div class="career">
                            <label for="period" class="form-label">Período: </label> {{$key}} <br>
                            <div class="table-responsive-xl">
                                <table class="table table-hover col-lg-12 text-center">
                                    <thead class=" thead-blue">
                                        <tr>
                                            <th scope="col-4">Código Materia</th>
                                            <th scope="col-4">Unidad Curricular</th>
                                            <th scope="col-4">Nota</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($period['subjects'] as $subject)
                                            <tr>
                                                <td>{{$subject['code']}}</td>
                                                <td>{{$subject['name']}}</td>
                                                <td>{{$subject['grade']}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @else
            <div class="row justify-content-around mx-2 my-4">
                <div class="col-sm-12 col-md-12 ">
                    <label for="career" class="form-label">Error: </label> las materias cursadas del estudiante no se encuentran disponibles para ser mostradas en este momento...
                </div>
            </div>
            <div class="table-responsive-xl">
                <table class="table table-hover col-lg-12 text-center">
                    <thead class=" thead-blue">
                        <tr>
                            <th scope="col">Código Materia</th>
                            <th scope="col">Unidad Curricular</th>
                            <th scope="col">Nota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            openBtn("estudiantes");
            activeBtn("materias-cursadas");
        });
    </script>
@endsection

