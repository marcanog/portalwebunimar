@extends('admin.home')

@section ('admincontent')
    <!-- Add user form -->
    <div class="card card-primary">
        <div class="modal-header">
            <h3 class="card-title">Agregar Noticia</h3>
        </div>
        <form action="{{URL('/admin/news')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <!-- Success message for registry -->
                <x-registry-status/>
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" placeholder="" name='title'
                           value="{{ old('title') }}" required minlength="10" autocomplete="title" autofocus>
                </div>
                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea class="form-control" id="content" placeholder="" name="content"
                              value="{{ old('content') }}" autocomplete="content">{{ old('content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="resume">Resumen</label>
                    <textarea class="form-control" id="resume" placeholder="" name="resume" value="{{ old('resume') }}"
                              autocomplete="resume">{{ old('resume') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Imagen de cover</label>
                    <input type="file" class="form-control-file" accept="image/*"  id="img" name="img" required>
                </div>
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <div class="form-group-lg">
                        <input type="text" name="tags"
                               value="Prensa,Unimar,Rectorado,Vicerrectorado,Académico,Extensión"
                               data-role="tagsinput"/>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-default float-left" href="/admin/news"> <img src="{{URL::asset('image/return.png')}}"  href="javascript:history.go(-2);"style="width:15px"> Regresar</a>
                <button type="submit" class="btn btn-primary float-right">Agregar</button>
            </div>
        </form>
    </div>

    <!-- Local scripts -->
    <script>
        //CKEDITOR Textareas replacement
        ClassicEditor.create(document.querySelector('#content'), {
            ckfinder: {
                uploadUrl: '{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files&responseType=json'
            }
        })
        .catch(error => {
            console.error(error);
        });
        ClassicEditor.create(document.querySelector('#resume'), {
            toolbar: {
                items: [
                    'heading', '|',
                    'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                    'indent', 'outdent', '|',
                    'blockQuote', 'insertTable', 'undo', 'redo',
                ],
            },
        })
        .catch(error => {
            console.error(error);
        });
    </script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            openBtn("publicaciones");
            activeBtn("noticias");
        });
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>
@endsection
