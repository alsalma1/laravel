<h1>Añadir un asegurador</h1>

<form action="anyadirAseguradora" method="POST">
    @csrf
    <table>
        <tr>
            <td>CIF</td>
            <td><input type="text" name="cif" id="cif" maxlength="9"></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="insuranceName" id="insuranceName"></td>
        </tr>
        <tr>
            <td>Dirección</td>
            <td><input type="text" name="insuranceAdress" id="insuranceAdress"></td>
        </tr>
    </table>
    <input type="submit" value="Crear" name="create">
</form>
<a href="{{url('/paginaPrincipal')}}">Pagina principal</a>