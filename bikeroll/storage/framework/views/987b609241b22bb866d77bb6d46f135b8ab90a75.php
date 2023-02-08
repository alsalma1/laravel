<h1>Soy la pagina principal</h1>

<div style="border:1px solid;width:20%;margin:auto">
    <div id="div1" style="border:1px solid;width:100%;text-align:center">
        <h3>Gestionar carreras</a></h3>
        <p><a href="<?php echo e(url('anyadirCarrera')); ?>">Añadir carrera</a></p>
        <p><a href="<?php echo e(url('editarCarrera')); ?>">Info carreras</a></p>
    </div>
    
    <div style="border:1px solid;width:100%;text-align:center">
        <h3>Gestionar aseguradoras</h3>
        <p><a href="<?php echo e(url('mostrarTodosAs')); ?>">Mostrar todos</a></p>
        <p><a href="<?php echo e(url('anyadirAseguradora')); ?>">Añadir aseguradora</a></p>
        <p><a href="<?php echo e(url('editarAsegurador')); ?>">Editar aseguradora</a></p>
        <p><a href="<?php echo e(url('desactivarAsegurador')); ?>">Desactivar aseguradora</a></p>
    </div>
    
    <div style="border:1px solid;width:100%;text-align:center">
        <h3>Gestionar sponsors</h3>
        <p><a href="">Mostrar todos</a></p>
        <p><a href="">Añadir sponsor</a></p>
        <p><a href="">Editar sponsor</a></p>
        <p><a href="">Desactivar sponsor</a></p>
    </div>
</div>

<h3><a href="<?php echo e(url('/')); ?>">Cerrar sesión</a></h3>


<?php /**PATH C:\xampp\htdocs\bikeroll\resources\views/admin/paginaPrincipal.blade.php ENDPATH**/ ?>