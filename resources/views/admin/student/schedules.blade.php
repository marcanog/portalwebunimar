@extends('admin.home')

@section('admincontent')
    <div class="content">
        <h5>Cortes de Notas</h5>
        <div class="row justify-content-around mx-2 my-4">
            <div class="col-sm-6 col-md-6 my-2">
                <label for="cedula" class="form-label">Cédula: </label> 12345678
            </div>
            <div class="col-sm-6 col-md-6 my-2">
                <label for="name" class="form-label">Nombre: </label> Pedro Pérez
            </div>
            <div class="col-sm-6 col-md-6 my-2">
                <label for="email" class="form-label">Correo Electrónico: </label> napellido.1234@unimar.edu.ve
            </div>
            <div class="col-sm-6 col-md-6 my-2">
                <label for="career" class="form-label">Carrera: </label> Psicología
            </div>
        </div>
        <div class="row justify-content-around mx-2 my-4">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Trimestre: </strong>
                    <select class="form-select bg-lightblue" aria-label="Default select example">
                        <option selected>Seleccione el trimestre<option>
                        <option value="1">I</option>
                        <option value="2">II</option>
                        <option value="3">III</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Unidad Curricular: </strong>
                    <select class="form-select bg-lightblue" aria-label="Default select example">
                        <option selected>Seleccione sus materias<option>
                        <option value="1">I</option>
                        <option value="2">II</option>
                        <option value="3">III</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Sección: </strong>
                    <select class="form-select bg-lightblue" aria-label="Seleccione alguna opción">
                        <option selected>Seleccione su sección<option>
                        <option value="1">I</option>
                        <option value="2">II</option>
                        <option value="3">III</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
@endsection
