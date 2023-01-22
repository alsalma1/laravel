<script src="{{url('C:\xampp\htdocs\bikeRoll\resources\views\scripts\script.js')}}" type="text/javascript"></script>
<h1>Soy la pagina principal</h1>

<div style="border:1px solid;width:20%;margin:auto">
    <div id="div1" style="border:1px solid;width:100%;text-align:center" onmouseover="mostrarMenu()">
        <h3>Gestionar carreras</a></h3>
        <p><a href="">Añadir carrera</a></p>
        <p><a href="">Editar carrera</a></p>
        <p><a href="">Desactivar carrera</a></p>
    </div>
    
    <div style="border:1px solid;width:100%;text-align:center">
        <h3>Gestionar aseguradores</h3>
        <p><a href="{{url('anyadirAsegurador')}}">Añadir asegurador</a></p>
        <p><a href="{{url('editarAsegurador')}}">Editar asegurador</a></p>
        <p><a href="{{url('desactivarAsegurador')}}">Desactivar asegurador</a></p>
    </div>
    
    <div style="border:1px solid;width:100%;text-align:center">
        <h3>Gestionar sponsors</h3>
        <p><a href="">Añadir sponsor</a></p>
        <p><a href="">Editar sponsor</a></p>
        <p><a href="">Desactivar sponsor</a></p>
    </div>
</div>

