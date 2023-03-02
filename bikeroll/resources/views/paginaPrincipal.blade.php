<link rel="stylesheet" href="../resources/css/app.css">
<h1>Página principal</h1>
<div class="races">
    @foreach($races as $race)
        <?php
            $id = $race['id'];
        ?>
        <div class="divraces">
            <?php $image=preg_replace('([^A-Za-z0-9 ])', '', $race['image'])?>
            <a href=""><img src="../resources/img/<?php echo strtolower($image) ?>.jpg" alt=""></a>
            <h2>{{$race['title']}}</h2>
            <p>{{$race['description']}}</p>
            <p>{{$race['date']}}</p>
            <a href="infoRace/{{$id}}"><div class="info"><p>Más información</p></div></a>
        </div>
    @endforeach
</div>


<h3><a href="{{url('/formAdmin')}}">Login Admin</a></h3>