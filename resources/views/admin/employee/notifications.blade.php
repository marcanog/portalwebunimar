@extends('admin.home')

@section ('admincontent')
    <!-- Page heading -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="d-sm-flex align-items-center justify-content-between shadow-4 mb-2">
        <h1 class="h3 mb-0 text-gray-dark">Notificaciones</h1>
    </div>
    <div class="row section-content">
        <div class="col-md-6 small">Cédula: {{$user->document_id}}</div>
        <div class="col-md-6 small">Nombre: {{$user->name}}</div>
        <div class="col-md-6 small">Departamento: </div>
        <div class="col-md-6 small">Cargo: </div>
    </div>

    <select class="btn btn-primary dropdown-toggle float-right" onchange="filter(this)">
            <option value="00">Todos</option>
            <option value="01">Enero</option>
            <option value="02">Febrero</option>
            <option value="03">Marzo</option>
            <option value="04">Abril</option>
            <option value="05">Mayo</option>
            <option value="06">Júnio</option>
            <option value="07">Júlio</option>
            <option value="08">Agosto</option>
            <option value="09">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
    </select>

    <!-- List of notifications -->
    <div class="table-responsive-xl table-container">
        <table class="table table-hover col-lg-12 text-center" id="myTable">
            <thead class="thead-blue">
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Departamento</th>
                <th scope="col">Asunto</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody id="dataoutput">
                @foreach($notifications as $notification)
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
                                        data-date="{{ $notification->created_at }}"
                                        data-target="#Shownotification">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
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
                            <h6 class="small" id="departmentshow"></h6>
                        </div>
                        <div class="mailbox-controls with-border text-center">
                            <a href="/admin/FormatPDF" target="_blank" class="btn btn-default btn-sm" title="Print" id="pdf1">
                            <i class="fas fa-file-pdf"></i>
                            </a>
                        </div>
                        <div class="mailbox-read-message" id="contentshow" style="overflow-x: scroll;"></div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                        <a href="/admin/FormatPDF" target="_blank"  type="button" class="btn btn-default" id="pdf2"><i class="fas fa-file-pdf"></i> Ver PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Local scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            openBtn("empleados");
            activeBtn("notificaciones-empleados");
            //Show new
            $('.btnshow').click(function () {
                $('#subjectshow').html($(this).attr('data-subject'));
                $('#departmentshow').html("De: "+$(this).attr('data-department')+"<span class='mailbox-read-time float-right'>"+new Date($(this).attr('data-date')).toLocaleString()+"</span>");
                $('#contentshow').html($(this).attr('data-content'));
                $('#pdf1').attr("href", "/admin/FormatPDF/"+$(this).attr('data-id'));
                $('#pdf2').attr("href", "/admin/FormatPDF/"+$(this).attr('data-id'));
            });
        });
        function formatDate(dateOld){
            var date = new Date(dateOld);
            var year=date.getFullYear();
            var month="0"+(date.getMonth()+1);
            var day=date.getDate();
            var hour=date.getUTCHours();
            var minute=date.getUTCMinutes();
            var second=date.getUTCSeconds();
            var formatted=year+"-"+month+"-"+day+" "+hour+":"+minute+":"+second;
            return formatted;
        }
        function filter(month){
            $('#dataoutput').html("");
            @foreach($notifications as $notification)
                var date = new Date("{{$notification->created_at}}");
                var cMonth="0"+(date.getMonth()+1);
                if(month.value == "00" || cMonth == month.value){
                    var row = document.getElementById("dataoutput").insertRow(-1);
                    var date = row.insertCell(-1);
                    date.innerHTML = formatDate("{{$notification->created_at}}");
                    var department = row.insertCell(1);
                    department.innerHTML = "{{$notification->department}}";
                    var subject = row.insertCell(2);
                    subject.innerHTML = "{{$notification->subject}}";
                    var action = row.insertCell(3);
                    var single = "'";
                    action.innerHTML = '<button type="button" class="btn text-primary open-modal btnshow" data-open="Shownotification" data-toggle="modal" data-placement="top" title="Ver" data-id="{{$notification->id}}" data-department="{{$notification->department}}" data-subject="{{$notification->subject}}" data-content="{{$notification->content}}" data-date="'+formatDate("{{$notification->created_at}}")+'" data-target="#Shownotification"><i class="fas fa-eye"></i></button>';
                }
                $('.btnshow').click(function () {
                    $('#subjectshow').html($(this).attr('data-subject'));
                    $('#departmentshow').html("De: "+$(this).attr('data-department')+new Date($(this).attr('data-date')).toLocaleString()+"</span>");
                    $('#contentshow').html($(this).attr('data-content'));
                    $('#pdf1').attr("href", "/admin/FormatPDF/"+$(this).attr('data-id'));
                    $('#pdf2').attr("href", "/admin/FormatPDF/"+$(this).attr('data-id'));
                });
            @endforeach
        }
    </script>
@endsection

