<h1>Añadir sponsor</h1>

<form action="anyadirSponsor" method="POST" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="name" id="name" maxlength="100"></td>
        </tr>
        <tr>
            <td>Descripción</td>
            <td><textarea name="desc" id="desc" cols="21" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>logo</td>
            <td><input type="file" name="logo" id="logo"></td>
        </tr>
        <tr>
            <td>Plana principal</td>
            <td>
                <input type="radio" id="opt1" name="pp" value="1"/>
                <label for="op1">Sí</label>

                <input type="radio" id="op2" name="pp" value="0"/>
                <label for="op2">No</label>
            </td>
        </tr>
    </table>
    <input type="submit" value="Crear" name="create">
</form>
<a href="{{url('/paginaPrincipal')}}">Pagina principal</a>