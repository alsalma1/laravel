<h1>Darse de alta en {{$races['title']}}</h1>

<form action="anyadirCarrera" method="POST" accept-charset="UTF-8" class="formaddcarrera" enctype="multipart/form-data">
  @csrf
    <div class="form-group row">
      <label for="description" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" id="title" name="title" max-length="100" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="description" class="col-sm-2 col-form-label">Apellidos</label>
      <div class="col-sm-10">
        <input type="text" id="title" name="title" max-length="200" required>
      </div>
    </div>

    <div class="form-group row">
        <label for="desnivel" class="col-sm-2 col-form-label">Dirección</label>
        <div class="col-sm-10">
          <input type="text" id="title" name="title" max-length="200" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="mapa" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="fecha" name="date" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="participantes" class="col-sm-2 col-form-label">Sexo</label>
        <div class="col-sm-10">
          <input type="radio" name="sexo" />Masculino
          <input type="radio" name="sexo" />Femenino
        </div>
    </div>

    <div class="form-group row">
        <label for="km" class="col-sm-2 col-form-label">Opción</label>
        <div class="col-sm-10">
          <input type="radio" name="option" />Pro
          <input type="radio" name="option" />Open
        </div>
    </div>

    <div class="form-group row">
        <label for="fecha" class="col-sm-2 col-form-label">Numero de federado</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="km" name="km" maxlength="100" required>
        </div>
    </div>

   

    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="send">inscribirse</button>
      </div>
    </div>
</form>

<p><a href="{{url('paginaPrincipal')}}">Volver atrás</a></p>


<script>
  $(document).ready(function(){
      $('input[name="counting"]').click(function(){ 
          $('input[name="counting"]').not(this).prop('checked', false);
      });
  });
  </script>