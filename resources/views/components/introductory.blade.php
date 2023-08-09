<link href="{{ env('APP_URL') }}/public/css/app.css" rel="stylesheet">
<!-- Modal -->
<div class="modal fade" id="preinscription" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">{{trans('newstudents.file_title')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content" id="dataID">
                    <form id="newsinscription">
                        {{--logo--}}
                        <div class="row justify-content-around">
                            <div class="col-12">
                                <img src="{{URL::asset('./image/logo-formal-vertical.jpg')}}" width="20%">
                            </div>
                        </div>
                        {{--date--}}
                        <div class="row justify-content-around">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="date" class="form-label">Fecha:</label>
                                    <input type="date" id="date" name="date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="identify" class="form-label">Cédula: </label>
                                    <input type="number" class="form-control" id="cedula">
                                </div>
                                <div class="mb-3">
                                    <label for="career" class="form-label">Carrera: </label>
                                    <input type="text" class="form-control" id="career">
                                </div>
                            </div>
                            <div class="col-md-4 invisible"></div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="proc_institute" class="form-label">Institución de procedencia: </label>
                                    <input type="text" class="form-control" id="proc_institute">
                                </div>
                            </div>
                        </div>
                        {{--personal data--}}
                        <p class="fs-5 font-weight-bold text-left my-2" id="name-funders">Datos Básicos</p>
                        <div class="row justify-content-around">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Apellidos: </label>
                                    <input type="text" class="form-control" id="address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombres: </label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Estado Civil: </label>
                                    <input type="text" class="form-control" id="status">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="gendre" class="form-label">Genero: </label>
                                    <input type="text" class="form-control" id="gendre">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Hijos: </label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="child_numb" class="form-label">Cantidad: </label>
                                    <input type="number" class="form-control" id="child_numb">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nationality" class="form-label">Nacionalidad: </label>
                                    <input type="text" class="form-control" id="nationality">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="place_born" class="form-label">Lugar de Nacimiento: </label>
                                    <input type="text" class="form-control" id="place_born">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="birthday" class="form-label">Fecha de Nacimiento: </label>
                                    <input type="date" class="form-control" id="birthday">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="age" class="form-label">Edad: </label>
                                    <input type="number" class="form-control" id="age">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo Electrónico: </label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Teléfono: </label>
                                    <input type="number" class="form-control" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="mb-3">
                                <label for="address" class="form-label">Dirección: </label>
                                <textarea class="form-control" id="address" rows="2"></textarea>
                            </div>
                        </div>
                        {{-- sttudies --}}
                        <p class="fs-5 font-weight-bold text-left my-2" id="name-funders">Estudios Realizados</p>
                        <div class="row justify-content-around">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="institute1" class="form-label">Institución: </label>
                                    <input type="text" class="form-control" id="institute1">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="title1" class="form-label">Grado: </label>
                                    <input type="text" class="form-control" id="title1">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="date1" class="form-label">Fecha: </label>
                                    <input type="date" class="form-control" id="date1">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="child_numb" class="form-label">Ciudad: </label>
                                    <input type="text" class="form-control" id="child_numb">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="institute1" class="form-label">Institución: </label>
                                    <input type="text" class="form-control" id="institute1">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="title1" class="form-label">Grado: </label>
                                    <input type="text" class="form-control" id="title1">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="date1" class="form-label">Fecha: </label>
                                    <input type="date" class="form-control" id="date1">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="child_numb" class="form-label">Ciudad: </label>
                                    <input type="text" class="form-control" id="child_numb">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="institute1" class="form-label">Institución: </label>
                                    <input type="text" class="form-control" id="institute1">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="title1" class="form-label">Grado: </label>
                                    <input type="text" class="form-control" id="title1">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="date1" class="form-label">Fecha: </label>
                                    <input type="date" class="form-control" id="date1">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="child_numb" class="form-label">Ciudad: </label>
                                    <input type="text" class="form-control" id="child_numb">
                                </div>
                            </div>
                        </div>
                        <p class="fs-5 font-weight-bold text-left my-2" id="name-funders">Otros cursos</p>
                        <div class="row justify-content-around">
                            <div class="mb-3">
                                <label for="courses" class="form-label">Especifíque: </label>
                                <textarea class="form-control" id="courses" rows="2"></textarea>
                            </div>
                        </div>
                        <p class="fs-5 font-weight-bold text-left my-2" id="name-funders">Experiencia Laboral</p>
                        <div class="row justify-content-around">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="institute1" class="form-label">Nombre de la Empresa: </label>
                                    <input type="text" class="form-control" id="institute1">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-3">
                                    <label for="title1" class="form-label">Cargo: </label>
                                    <input type="text" class="form-control" id="title1">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-3">
                                    <label for="child_numb" class="form-label">Antigüedad: </label>
                                    <input type="text" class="form-control" id="child_numb">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="child_numb" class="form-label">Dirección: </label>
                                    <input type="text" class="form-control" id="child_numb">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-3">
                                    <label for="child_numb" class="form-label">Teléfono </label>
                                    <input type="text" class="form-control" id="child_numb">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="institute1" class="form-label">Nombre de la Empresa: </label>
                                    <input type="text" class="form-control" id="institute1">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-3">
                                    <label for="title1" class="form-label">Cargo: </label>
                                    <input type="text" class="form-control" id="title1">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-3">
                                    <label for="child_numb" class="form-label">Antigüedad: </label>
                                    <input type="text" class="form-control" id="child_numb">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="child_numb" class="form-label">Dirección: </label>
                                    <input type="text" class="form-control" id="child_numb">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-3">
                                    <label for="child_numb" class="form-label">Teléfono </label>
                                    <input type="text" class="form-control" id="child_numb">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="institute1" class="form-label">Nombre de la Empresa: </label>
                                    <input type="text" class="form-control" id="institute1">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-3">
                                    <label for="title1" class="form-label">Cargo: </label>
                                    <input type="text" class="form-control" id="title1">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-3">
                                    <label for="child_numb" class="form-label">Antigüedad: </label>
                                    <input type="text" class="form-control" id="child_numb">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="child_numb" class="form-label">Dirección: </label>
                                    <input type="text" class="form-control" id="child_numb">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-3">
                                    <label for="child_numb" class="form-label">Teléfono </label>
                                    <input type="text" class="form-control" id="child_numb">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                <a href="{{ url('/introductorypdf') }}" type="button" class="btn btn-primary" >Generar PDF</a>
{{--                <button type="button" class="btn btn-primary" onclick="javascript:imprim1(dataID);">Generar PDF</button>--}}
            </div>
        </div>
    </div>
</div>
<script>
    function imprim1(dataID){
        var printContents = document.getElementById('dataID').innerHTML;
        w = window.open();
        w.document.write(printContents);
        w.document.close(); // necessary for IE >= 10
        w.focus(); // necessary for IE >= 10
        w.print();
        w.close();
        return true;}
</script>

