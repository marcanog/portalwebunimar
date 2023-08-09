@extends('admin.home')

@section ('admincontent')
    <!-- Page heading -->
    <div class="d-sm-flex align-items-center justify-content-between shadow-4 mb-2">
        <h1 class="h3 mb-0 text-gray-dark">Documentos</h1>
        <a href="#" class="d-none d-xl-inline-block btn btn-sm btn-navbar shadow-sm navbar-blue-u open-modal"
           data-toggle="modal" data-target="#DocumentAddModal" data-open="DocumentAddModal">
            <i class="fas fa-user-plus fa-sm mr-1 text-white"></i>Agregar Documentos</a>
    </div>

    <!-- Success message for registry -->
    <x-registry-status/>

    <!-- List of documents -->
    <div class="table-responsive-xl">
        <table class="table table-hover col-lg-12 text-center">
            <thead class="thead-blue">
            <tr>
                @if(Auth::guest())
                    <th scope="col">Título</th>
                    <th scope="col">Archivo</th>
                    <th scope="col">Año</th>
                    <th scope="col">Trimestre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Status</th>
                @else
                    <th scope="col">Id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Archivo</th>
                    <th scope="col">Año</th>
                    <th scope="col">Trimestre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Status</th>
                    <th scope="col">Operaciones</th>
                @endif

            </tr>
            </thead>
            <tbody>
            @foreach($documents as $document)
                <tr>
                    @if (Auth::guest())
                        <td title="{{($document->name)}}">{{($document->name)}}</td>
                        <td title="{{($document->file)}}">{{($document->file)}}</td>
                        <td title="{{($document->date)}}">{{($document->date)}}</td>
                        <td title="{{($document->trimester)}}">{{($document->trimester)}}</td>
                        <td title="{{($document->type_name)}}">{{($document->type_name)}}</td>
                        <td title="{{($document->status_name)}}">{{($document->status_name)}}</td>
                    @else
                        <th title="{{($document->id)}}">{{($document->id)}}</th>
                        <td title="{{($document->name)}}">{{($document->name)}}</td>
                        <td title="{{($document->file)}}">{{($document->file)}}</td>
                        <td title="{{($document->date)}}">{{($document->date)}}</td>
                        <td title="{{($document->trimester)}}">{{($document->trimester)}}</td>
                        <td title="{{($document->type_name)}}">{{($document->type_name)}}</td>
                        <td title="{{($document->status_name)}}">{{($document->status_name)}}</td>
                        <td>
                            <button type="button" class="btn btn-warning open-modal btnedit" data-open="DocumentUpdModal"
                                    data-toggle="modal" data-placement="top" title="Editar"
                                    data-id="{{ $document->id }}"
                                    data-name="{{ $document->name }}"
                                    data-file="{{ $document->file }}"
                                    data-date="{{ $document->date }}"
                                    data-trimester="{{ $document->trimester }}"
                                    data-type_id="{{ $document->type_id }}"
                                    data-status_id="{{ $document->status_id }}"
                                    data-target="#DocumentUpdModal">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal add document -->
    <div class="modal fade" id="DocumentAddModal" tabindex="-1" role="dialog" aria-labelledby="DocumentAddModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalAddDocument">Agregar Documentos</h5>
                    <button type="button" class="close" data-dismiss="modal" data-toggle="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/documents" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Título: </label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required minlength="5" autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">Año del documento: </label>
                            <div class="col-md-6">
                                <input id="date" type="number" min="1998" max={{ now()->year }} value={{ now()->year }} class="form-control" name="date" value="{{ old('date') }}" autocomplete="date" autofocus required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="trimester" class="col-md-4 col-form-label text-md-right">Trimestre: </label>
                            <div class="col-md-6">
                                <input id="trimester" type="number" min="1" max="3" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" class="form-control" name="trimester"
                                       value="{{ old('trimester') }}" required autocomplete="trimester">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">Archivo: </label>
                            <div class="col-md-6">
                                <input id="file" type="file" class="" name="file" accept="application/pdf" value="{{ old('file') }}" required autocomplete="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="doc_type" class="col-md-4 col-form-label text-md-right">Tipo de documento: </label>
                            <div class="col-md-6">
                                <select class="form-control" id="doc_type" name="doc_type">
                                    @foreach($doc_types as $doc_type)
                                        <option value="{{$doc_type->id}}">{{$doc_type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal update document -->
    <div class="modal fade" id="DocumentUpdModal" tabindex="-1" role="dialog" aria-labelledby="DocumentUpdModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalUpdDoc">Actualizar Usuarios</h5>
                    <button type="button" class="close" data-dismiss="modal" data-toggle="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{URL('/admin/documents/update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        
                        <div class="form-group row">
                            <label for="nameedit" class="col-md-4 col-form-label text-md-right">Título: </label>
                            <div class="col-md-6">
                                <input id="nameedit" type="text" class="form-control" name="name" required minlength="5">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dateedit" class="col-md-4 col-form-label text-md-right">Año del documento: </label>
                            <div class="col-md-6">
                                <input id="dateedit" type="number" min="1998" max={{ now()->year }} class="form-control" name="date" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="trimesteredit" class="col-md-4 col-form-label text-md-right">Trimestre: </label>
                            <div class="col-md-6">
                                <input id="trimesteredit" type="numer" min="1" max="3" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" class="form-control" name="trimester" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fileedit" class="col-md-4 col-form-label text-md-right">Archivo: </label>
                            <div class="col-md-6">
                                <input id="fileedit" type="file" class="" name="file" accept="application/pdf">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="doc_typeedit" class="col-md-4 col-form-label text-md-right">Tipo de documento: </label>
                            <div class="col-md-6">
                                <select class="form-control" id="doc_typeedit" name="doc_type">
                                    @foreach($doc_types as $doc_type)
                                        <option value="{{$doc_type->id}}">{{$doc_type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status_id" class="col-md-4 col-form-label text-md-right">Status: </label>
                            <div class="col-md-6">
                                <select class="form-control" id="status_id" name="status_id">
                                    @foreach($status as $curr_status)
                                        <option value="{{$curr_status->id}}">{{$curr_status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="idedit" placeholder="" name='idedit' required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary btnupdtuser">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Local scripts -->
    <script>
        //Fill forms
        document.addEventListener('DOMContentLoaded', function () {
            $('.btnedit').click(function () {
                $('#idedit').val($(this).attr('data-id'));
                $('#nameedit').val($(this).attr('data-name'));
                $('#trimesteredit').val($(this).attr('data-trimester'));
                $('#dateedit').val($(this).attr('data-date'));
                $('#doc_typeedit').val($(this).attr('data-type_id'));
                $('#status_id').val($(this).attr('data-status_id'));
            });
        });
    </script>
@endsection

