<style>
    td,th{border: 1px solid;}
    td{width: 15%}
    table{width: 60%;margin: auto;text-align: center;}
    img{width: 50%;height: 50%}
</style>
<h1>sponsors</h1>
<table style="border-collapse:collapse">
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>logo</th>
        <th>plana principal</th>
    </tr>
    @foreach($sponsor as $row)
        @php
            $id = $row['id'];
        @endphp
        <tr>
            <td>{{$row['name']}}</td>
            <td>{{$row['description']}}</td>
            <td><img src="{{$row['logo']}}" alt=""></td>
            <td>
                @if($row['plana principal'] == 1)
                    {{"Sí"}}
                @else
                    {{"No"}}
                @endif
            </td>
            {{-- <td>
                @if ($row['estado'] == 0)
                    <a href="activarAseguradora/{{$id}}"><img src="../resources/img/off.png" alt=""></a>
                @else
                    <a href="activarAseguradora/{{$id}}"><img src="../resources/img/on.png" alt=""></a>
                @endif
            </td> --}}
        </tr>
    @endforeach
</table>

<a href="{{url('/paginaPrincipal')}}">Volver atras</a>