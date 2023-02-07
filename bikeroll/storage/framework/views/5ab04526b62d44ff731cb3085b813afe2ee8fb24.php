<style>
    td,th{border: 1px solid;}
    td{width: 15%}
    table{width: 60%;margin: auto;text-align: center;}
    img{width: 50%;height: 50%}
</style>
<h1>Aseguradoras</h1>
<table style="border-collapse:collapse">
    <tr>
        <th>CIF</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Estado</th>
        <th>Editar</th>
    </tr>
    <?php $__currentLoopData = $insurance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $id = $row['id'];
        ?>
        <tr>
            <td><?php echo e($row['CIF']); ?></td>
            <td><?php echo e($row['name']); ?></td>
            <td><?php echo e($row['address']); ?></td>
            <td>
                <?php if($row['estado'] == 0): ?>
                    <a href="activarAseguradora/<?php echo e($id); ?>"><img src="../resources/img/off.png" alt=""></a>
                <?php else: ?>
                    <a href="activarAseguradora/<?php echo e($id); ?>"><img src="../resources/img/on.png" alt=""></a>
                <?php endif; ?>
            </td>
            <td>
                <a href="editarAseguradora/<?php echo e($id); ?>"><img src="../resources/img/edit.png" alt=""></a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<a href="<?php echo e(url('/paginaPrincipal')); ?>">Volver atras</a><?php /**PATH C:\xampp\htdocs\bikeroll\resources\views/admin/aseguradoras/mostrarTodosAs.blade.php ENDPATH**/ ?>