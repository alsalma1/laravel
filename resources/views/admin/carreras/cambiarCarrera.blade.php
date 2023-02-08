<style>
    td,th{border: 1px solid;}
    td{width: 80px}
    table{width: 1200px;margin: auto;text-align: center;}
    img{width: 50%;height: 50%}
</style>
<h1>Editar carrera</h1>
<form action="{{$carreras['id']}}" method="POST">
    @csrf
    @csrf
    <div class="form-group row">
      <label for="description" class="col-sm-2 col-form-label">Descripción</label>
      <div class="col-sm-10">
        <textarea id="description" name="description" required value="{{$carreras['description']}}"></textarea>
      </div>
    </div>

    <div class="form-group row">
        <label for="desnivel" class="col-sm-2 col-form-label">Desnivel</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="desnivel" name="unevenness" max="99" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="mapa" class="col-sm-2 col-form-label">Imagen del mapa</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="mapa" name="image" accept=".jpg" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="participantes" class="col-sm-2 col-form-label">Participantes màximos</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="participantes" name="number_participants" max="9999" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="km" class="col-sm-2 col-form-label">Kilómetros</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="km" name="km" max="100" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-10">
          <input type="datetime-local" class="form-control" id="fecha" name="date" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="salida" class="col-sm-2 col-form-label">Punto de salida</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="salida" name="start" maxlength="255" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="cartel" class="col-sm-2 col-form-label">Cartel de promoción</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="cartel" name="promotion" accept=".jpg" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="coste" class="col-sm-2 col-form-label">Coste depatrocinio</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="coste" name="price"  max="99" required>
        </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="send">Crear carrera</button>
      </div>
    </div>
</form>   

<a href="{{url('/paginaPrincipal')}}">Volver atras</a>