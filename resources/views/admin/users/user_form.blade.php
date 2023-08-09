@csrf
<div class="modal-body">
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Nombre: </label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required minlength="10" autocomplete="name" autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">Correo
            Electrónico: </label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
        </div>
    </div>
    <div class="form-group row">
        <label for="document_id" class="col-md-4 col-form-label text-md-right">Documento de identidad: </label>
        <div class="col-md-6">
            <input id="document_id" type="text" min class="form-control" name="document_id" value="{{ old('document_id') }}" minlength="8" maxlength="20" required autocomplete="document_id">
        </div>
    </div>
    <div class="form-group row">
        <label for="birth" class="col-md-4 col-form-label text-md-right">Fecha de
            nacimiento: </label>
        <div class="col-md-6">
            <input id="birth" type="date" class="form-control" name="birth" value="{{ old('birth') }}" autocomplete="birth" autofocus required>
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">Teléfono: </label>
        <div class="col-md-6">
            <input id="phone" type="tel" class="form-control" name="phone" value="{{ old('phone') }}" minlength="11" maxlength="15" autocomplete="phone" autofocus required>
        </div>
    </div>
    <div class="form-group row not-editable">
        <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña: </label>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" required minlength="8" autocomplete="password">
        </div>
    </div>
    <div class="form-group row not-editable">
        <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Confirmar
            Password: </label>
        <div class="col-md-6">
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required minlength="8" autocomplete="password_confirmation">
        </div>
    </div>
    <div class="form-group row">
        <label for="permissions" class="col-md-4 col-form-label text-md-right">Permisos: </label>
        <select multiple="multiple" id="permissions_dualbox" class="permissions" name="permissions[]">
            @foreach($permissions as $permission)
                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
            @endforeach
        </select>
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
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>