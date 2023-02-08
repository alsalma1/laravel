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
        <th>Precio del patrocinio</th>
        <th>Estado</th>
        <th>Editar</th>
        <th>Subir fotos</th>
        <th>Ver fotos</th>
    </tr>
    @foreach($carreras as $row)
        @php
            $id = $row['id'];
        @endphp
        <tr>
            <td>{{$row['id']}}</td>
            <td>{{$row['description']}}</td>
            <td>{{$row['unevenness']}} km</td>
            
            <?php $image=preg_replace('([^A-Za-z0-9 ])', '', $row['image'])?>
            <td><img src="../resources/img/<?php echo strtolower($image) ?>.jpg" alt=""></td>

            <td>{{$row['number_participants']}}</td>
            <td>{{$row['km']}}</td>
            <td>{{$row['date']}}</td>

            <?php $prom=preg_replace('([^A-Za-z0-9 ])', '', $row['promotion'])?>
            <td><img src="../resources/img/<?php echo strtolower($prom) ?>.jpg" alt=""></td>

            <td>{{$row['price']}}€</td>

            <td>
                @if ($row['state'] == 0)
                    <a href="estadoCarrera/{{$id}}"><img src="../resources/img/off.png" alt=""></a>
                @else
                    <a href="estadoCarrera/{{$id}}"><img src="../resources/img/on.png" alt=""></a>
                @endif
            </td>


            <td><a href="datosCarrera/{{$id}}"><img src="../resources/img/edit.png" alt=""></td>

            <?php 
                //Si la carrera ya ha terminado permitir subir fotos
                if (date($row['date'])<date('Y-m-d H:i:s')){   
                    ?><td><a href="activarAseguradora/{{$id}}"><img src="../resources/img/upload.png" alt=""></td><?php
                }
                else{
                    ?><td><a href="activarAseguradora/{{$id}}"><img src="../resources/img/bloquear.png" alt=""></td><?php
                }
            ?>
            <td><a href="activarAseguradora/{{$id}}"><img src="../resources/img/ver.png" alt=""></td>

        </tr>
    @endforeach
</table>

<a href="{{url('/paginaPrincipal')}}">Volver atras</a>