@extends('admin.home')

@section('stylesheet')
    <!-- Boostrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.css') }}"></link>    
@endsection

@section('scripts')
    <!-- Boostrap4 Duallistbox -->
    <script src="{{ asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.js') }}"></script>  
    <!-- Other -->  
    <script src="{{ asset('js/components/forms.js') }}"></script> 
    <script src="{{ asset('js/users/main.js') }}"></script>  
@endsection

@section ('admincontent')
    <!-- Page heading -->
    <div class="d-sm-flex align-items-center justify-content-between shadow-4 mb-2">
        <h1 class="h3 mb-0 text-gray-dark">Usuarios</h1>
        <a href="#" class="d-none d-xl-inline-block btn btn-sm btn-navbar shadow-sm navbar-blue-u open-modal" data-toggle="modal" data-target="#user-add-modal" data-open="user-add-modal">
            <i class="fas fa-user-plus fa-sm mr-1 text-white"></i>Agregar Usuario
        </a>
    </div>
    <!-- /.page-heading -->

    <!-- Success message for registry -->
    <x-registry-status/>

    <!-- List of users -->
    <div class="table-responsive-xl table-container">
        <table class="table table-hover col-lg-12 text-center">
            <thead class="thead-blue">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Status</th>
                    <th scope="col">Operaciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th title="{{($user->id)}}">{{($user->id)}}</th>
                    <td title="{{($user->name)}}">{{($user->name)}}</td>
                    <td title="{{($user->email)}}">{{($user->email)}}</td>
                    <td title="{{($user->document_id)}}">{{($user->document_id)}}</td>
                    <td title="{{($user->birth)}}">{{($user->birth)}}</td>
                    <td title="{{($user->phone)}}">{{($user->phone)}}</td>
                    <td title="{{($user->status->name)}}">{{($user->status->name)}}</td>
                    <td>
                        <button type="button" class="btn btn-warning open-modal btnedit" data-open="user-update-modal"
                                data-toggle="modal" data-placement="top" title="Editar"
                                data-edit_id="{{ $user->id }}"
                                data-name="{{ $user->name }}"
                                data-email="{{ $user->email }}"
                                data-document_id="{{ $user->document_id }}"
                                data-birth="{{ $user->birth }}"
                                data-phone="{{ $user->phone }}"
                                data-permissions_dualbox="{{ $user->user_permissions_id }}"
                                data-status_id="{{ $user->status_id }}"
                                data-target="#user-update-modal">
                            <i class="fas fa-edit"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.list-of-users -->

    <!-- Modal add user -->
    <div class="modal fade" id="user-add-modal" tabindex="-1" role="dialog" aria-labelledby="user-add-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalAddUser">Agregar Usuarios</h5>
                    <button type="button" class="close" data-dismiss="modal" data-toggle="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/users" method="POST">
                    @include('admin.users.user_form')
                </form>
            </div>
        </div>
    </div>
    <!-- /.modal-add-user -->

    <!-- Modal update user -->
    <div class="modal fade" id="user-update-modal" tabindex="-1" role="dialog" aria-labelledby="user-update-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalUpdUser">Actualizar Usuarios</h5>
                    <button type="button" class="close" data-dismiss="modal" data-toggle="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{URL('/admin/users/update')}}" method="POST" id="edit-form">
                    @include('admin.users.user_form')
                </form>
            </div>
        </div>
    </div>
    <!-- /.modal-update-user -->
@endsection

