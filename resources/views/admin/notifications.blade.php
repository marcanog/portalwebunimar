@extends('admin.home')

@section ('admincontent')
    <!-- Page heading -->
    <div class="d-sm-flex align-items-center justify-content-between shadow-4 mb-2">
        <h1 class="h3 mb-0 text-gray-dark">Notificaciones</h1>
        <a href="{{url('/admin/addnotification')}}"
           class="d-none d-xl-inline-block btn btn-sm btn-navbar shadow-sm navbar-blue-u">
            <i class="fas fa-user-plus fa-sm mr-1 text-white"></i>Agregar Notificación</a>
    </div>

    <!-- List of notifications -->
    <div class="table-responsive-xl table-container">
        <table class="table table-hover col-lg-12 text-center">
            <thead class="thead-blue">
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Departamento</th>
                <th scope="col">Asunto</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach($notifications as $notification)
                    @if($notification->status_id == "1")
                        <tr>
                            <td title="">{{($notification->created_at)}}</td>
                            <td title="">{{($notification->department)}}</td>
                            <td title="">{!!($notification->subject)!!}</td>
                            <td title="">
                                <button type="button" class="btn text-primary open-modal btnshow" data-open="Shownotification"
                                        data-toggle="modal" data-placement="top" title="Ver"
                                        data-id="{{ $notification->id }}"
                                        data-department="{{ $notification->department }}"
                                        data-subject="{{ $notification->subject }}"
                                        data-content="{{ $notification->content }}"
                                        data-email="{{ $notification->users_email }}"
                                        data-date="{{ $notification->created_at }}"
                                        data-target="#Shownotification">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Modal show notification -->
    <div class="modal fade" id="Shownotification" tabindex="-1" role="dialog" aria-labelledby="Shownotification"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Mostrando Notificación</h5>
                    <button type="button" class="close" data-dismiss="modal" data-toggle="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-primary">
                    <div class="card-body p-0">
                        <div class="mailbox-read-info">
                            <h5 style="padding-bottom:5px" id="subjectshow"></h5>
                            <h6 class="small" id="usershow"></h6>
                            <h6 class="small" id="departmentshow"></h6>
                        </div>
                        <div class="mailbox-controls with-border text-center">
                            <div class="btn-group">
                                <a href="/admin/notifications/disable/" id="disablebtn0" type="button" class="btn btn-default btn-sm" data-container="body" title="Delete">
                                <i class="fas fa-power-off"></i>
                                </a>
                            </div>
                            <a href="/admin/FormatPDF" target="_blank" type="button" class="btn btn-default btn-sm" title="Print" id="pdf1">
                                <i class="fas fa-file-pdf"></i>
                            </a>
                        </div>
                        <div class="mailbox-read-message" id="contentshow" style="overflow-x: scroll;"></div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                        <a href="/admin/notifications/disable/" id="disablebtn" class="btn btn-default"><i class="fas fa-power-off"></i> Inhabilitar</a>
                        <a href="/admin/FormatPDF" target="_blank"  type="button" class="btn btn-file-pdf" id="pdf2"><i class="fas fa-print"></i> Ver PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Local scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            activeBtn("notificaciones");
            //Show new
            $('.btnshow').click(function () {
                $('#subjectshow').html($(this).attr('data-subject'));
                $('#usershow').html("Para: "+$(this).attr('data-email'));
                $('#departmentshow').html("De: "+$(this).attr('data-department')+"<span class='mailbox-read-time float-right'>"+new Date($(this).attr('data-date')).toLocaleString()+"</span>");
                $('#contentshow').html($(this).attr('data-content'));
                $('#disablebtn').attr('href','/admin/notifications/disable/'+$(this).attr('data-id'));
                $('#disablebtn0').attr('href','/admin/notifications/disable/'+$(this).attr('data-id'));
                $('#pdf1').attr("href", "/admin/FormatPDF/"+$(this).attr('data-id'));
                $('#pdf2').attr("href", "/admin/FormatPDF/"+$(this).attr('data-id'));
            });
        });
    </script>
@endsection
