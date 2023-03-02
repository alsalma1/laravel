<form action="{{ route('selectRaces') }}" method="post">
    <table>
        <tr>
            <th>Carreras</th>
        </tr>
        <tr>
            @foreach ($races as $race)
                <?php $id = $race['id']; ?>
                <td>
                    <input type="checkbox" name="racescheck[]" value="{{$id}}">
                    <label>{{$race['title']}}</label><br>
                </td>
            @endforeach
        </tr> 
    </table>
    <input type="submit" value="Seleccionar" name="select">
</form>