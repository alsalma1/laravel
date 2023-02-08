<style>
    td,th{border: 1px solid;}
    td{width: 80px}
    table{width: 1200px;margin: auto;text-align: center;}
    img{width: 50%;height: 50%}
</style>
<h1>Carreras</h1>
<table style="border-collapse:collapse">
    <tr>
        <th>Nº de carrera</th>
        <th>Descripción</th>
        <th>Desnivel</th>
        <th>Imagen</th>
        <th>Numero de participantes</th>
        <th>Km</th>
        <th>Fecha</th>
        <th>Promocion</th>
        <th>Estado</th>
        <th>Precio del patrocinio</th>
    </tr>
    <?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $id = $row['id'];
        ?>
        <tr>
            <td><?php echo e($row['id']); ?></td>
            <td><?php echo e($row['description']); ?></td>
            <td><?php echo e($row['unevenness']); ?> km</td>
            
            <?php $image=preg_replace('([^A-Za-z0-9 ])', '', $row['image'])?>
            <td><img src="../resources/img/<?php echo strtolower($image) ?>.png" alt=""></td>

            <td><?php echo e($row['number_participants']); ?></td>
            <td><?php echo e($row['km']); ?></td>
            <td><?php echo e($row['date']); ?></td>

            <?php $prom=preg_replace('([^A-Za-z0-9 ])', '', $row['promotion'])?>
            <td><img src="../resources/img/<?php echo strtolower($prom) ?>.png" alt=""></td>

            <td>
                <?php if($row['state'] == 0): ?>
                    <a href="activarAseguradora/<?php echo e($id); ?>"><img src="../resources/img/off.png" alt=""></a>
                <?php else: ?>
                    <a href="activarAseguradora/<?php echo e($id); ?>"><img src="../resources/img/on.png" alt=""></a>
                <?php endif; ?>
            </td>
            <td><?php echo e($row['price']); ?>€</td>

        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<a href="<?php echo e(url('/paginaPrincipal')); ?>">Volver atras</a><?php /**PATH C:\xampp\htdocs\bikeroll\resources\views/admin/carreras/editarCarrera.blade.php ENDPATH**/ ?>