<h1>Form admin</h1>

<form action="formAdmin" method="POST" accept-charset="UTF-8">
  @csrf
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="" name="passwd">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="send">Sign in</button>
      </div>
    </div>
</form>

{{-- Aqui va el formulario del administrador --}}
<a href="{{url('paginaPrincipal')}}">Iniciar sesion</a>