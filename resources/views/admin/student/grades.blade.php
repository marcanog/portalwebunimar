@extends('admin.home')

@section('scripts')
    <!-- Other -->  
    <script src="{{ asset('js/students/grades.js') }}"></script> 
@endsection

@section('admincontent')
    <div class="content">
        <h5>Corte de Notas</h5>
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
        </div>
        @if($student_data['status'])
            @foreach ($student_data['data'] as $student_career)
                <div class="row justify-content-around mx-2 my-4">
                    <div class="col-sm-12 col-md-6">
                        <label for="career" class="form-label">Carrera: </label> {{ $student_career['career'] }}
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label for="trimester" class="form-label">Periodo: </label> {{ $student_career['period'] }}
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="table-responsive-xl">
                        <table class="table table-hover col-lg-12 text-center">
                            <thead class=" thead-blue">
                            <tr>
                                <th scope="col">Código Materia</th>
                                <th scope="col">Sección</th>
                                <th scope="col">Unidad Curricular</th>
                                <th scope="col">Profesor</th>
                                <th scope="col">Correo Electrónico</th>
                                <th scope="col">Corte 1</th>
                                <th scope="col">Corte 2</th>
                                <th scope="col">Nota</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($student_career['subjects'] as $subject)
                                    <tr>
                                        <td>
                                            @empty($subject['code'])
                                                -
                                            @endempty
                                            {{ $subject['code'] }}
                                        </td>
                                        <td>
                                            @empty($subject['section'])
                                                -
                                            @endempty
                                            {{ $subject['section'] }}
                                        </td>
                                        <td>
                                            @empty($subject['name'])
                                                -
                                            @endempty
                                            {{ $subject['name'] }}
                                        </td>
                                        <td>
                                            @empty($subject['teacher_name'])
                                                -
                                            @endempty
                                            {{ $subject['teacher_name'] }}
                                        </td>
                                        <td>
                                            @empty($subject['teacher_email'])
                                                -
                                            @endempty
                                            {{ $subject['teacher_email'] }}
                                        </td>
                                        <td>
                                            @if(isset($subject['subject_grades'][0]))
                                                {{ $subject['subject_grades'][0] }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if(isset($subject['subject_grades'][1]))
                                                {{ $subject['subject_grades'][1] }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @empty($subject['subject_grades']['grade_total'])
                                                -
                                            @endempty
                                            {{ $subject['subject_grades']['grade_total'] }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row justify-content-around mx-2 my-4">
                <div class="col-sm-12 col-md-12 ">
                    <label for="career" class="form-label">Error: </label> las notas del estudiante no se encuentran disponibles para ser mostradas en este momento...
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="table-responsive-xl">
                    <table class="table table-hover col-lg-12 text-center">
                        <thead class=" thead-blue">
                        <tr>
                            <th scope="col">Código Materia</th>
                            <th scope="col">Unidad Curricular</th>
                            <th scope="col">Sección</th>
                            <th scope="col">Profesor</th>
                            <th scope="col">Correo Electrónico</th>
                            <th scope="col">Corte 1</th>
                            <th scope="col">Corte 2</th>
                            <th scope="col">Nota</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
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
            activeBtn("notas");
        });
    </script>
@endsection
