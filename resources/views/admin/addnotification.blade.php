@extends('admin.home')

@section ('admincontent')
    <div class="row">
        @if($unknown = Session::get('notfound'))
            <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                Los siguientes usuarios no fueron encontrados: 
                <ul style="margin:0">
                    @foreach($unknown as $currentunknown)
                            <li>{{ $currentunknown }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <!-- Add user form -->
    <div class="card card-primary">
        <div class="modal-header">
            <h3 class="card-title">Agregar Noticia</h3>
        </div>
        <form action="/admin/addnotification" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group row">
                    <label for="department" class="">Role: </label>
                    <div>
                        <select name="department" class="form-control" id="department">
                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="destiny">Destinatarios: </label>
                    <div class="form-group-lg">
                        <input required type="text" name="destiny" data-role="tagsinput"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subject">Asunto: </label>
                    <div>
                        <input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}"
                               required minlength="10" autocomplete="subject" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="content">Contenido: </label>
                    <textarea class="form-control" id="content" placeholder="" name="content"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-default float-left" href="javascript:history.back()"> <img src="{{URL::asset('image/return.png')}}"  href="/admin/notifications"style="width:15px"> Regresar</a>
                <button type="submit" class="btn btn-primary float-right">Agregar</button>
            </div>
        </form>
    </div>
    <!-- Local scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            activeBtn("notificaciones");
        });
        //Set ckeditors in modal
        let content;
        ClassicEditor.create(document.querySelector('#content'), {
                ckfinder: {
                    uploadUrl: '{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files&responseType=json'
                }
            })
            .then(editor => {
                content = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
