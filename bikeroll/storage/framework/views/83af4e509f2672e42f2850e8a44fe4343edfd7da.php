<style>
    td,th{border: 1px solid;}
    td{width: 80px}
    table{width: 1200px;margin: auto;text-align: center;}
    img{width: 50%;height: 50%}
</style>
<h1>Editar carrera</h1>
<form action="<?php echo e($carreras['id']); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group row">
      <label for="description" class="col-sm-2 col-form-label">Descripción</label>
      <div class="col-sm-10">
        <textarea id="description" name="description" required><?php echo e($carreras['description']); ?></textarea>
      </div>
    </div>

    <div class="form-group row">
        <label for="desnivel" class="col-sm-2 col-form-label">Desnivel</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="desnivel" name="unevenness" max="99" value="<?php echo e($carreras['unevenness']); ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="participantes" class="col-sm-2 col-form-label">Participantes màximos</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="participantes" name="number_participants" max="999" value="<?php echo e($carreras['number_participants']); ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="km" class="col-sm-2 col-form-label">Kilómetros</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="km" name="km" max="100" value="<?php echo e($carreras['km']); ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-10">
          <input type="datetime-local" class="form-control" id="fecha" name="date" value="<?php echo e($carreras['date']); ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="salida" class="col-sm-2 col-form-label">Punto de salida</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="salida" name="start" maxlength="255" value="<?php echo e($carreras['start']); ?>" required>
        </div>
    </div>


    <div class="form-group row">
        <label for="coste" class="col-sm-2 col-form-label">Coste depatrocinio</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="coste" name="price"  value="<?php echo e($carreras['price']); ?>" max="99" required>
        </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="send">Editar carrera</button>
      </div>
    </div>
</form>   

<a href="<?php echo e(url('/paginaPrincipal')); ?>">Volver atras</a><?php /**PATH C:\xampp\htdocs\bikeroll\resources\views/admin/carreras/cambiarCarrera.blade.php ENDPATH**/ ?>