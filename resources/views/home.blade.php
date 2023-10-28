@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header text-center">
                    <h2>MIS PROPIEDADES OCUPADAS</h2>
                </div>

                <div class="card-body">
                    <div class="row">
                        <?php foreach ($okupaciones as $okupacion) : ?>
                            <div class="col-md-4 p-3">
                                <a href="#">
                                    <div class="mapa" data-latitud="{{ $okupacion->latitud }}" data-longitud="{{ $okupacion->longitud }}" style="width: 100%; height: 300px;"></div>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function iniciarMapa() {
        var mapas = document.querySelectorAll(".mapa");

        mapas.forEach(function(mapa) {
            let latitud = parseFloat(mapa.getAttribute("data-latitud"));
            let longitud = parseFloat(mapa.getAttribute("data-longitud"));
            coordenadas = {
                lng: longitud,
                lat: latitud
            };
            generarMapa(mapa, coordenadas);
        });
    }

    function generarMapa(mapa, coordenadas) {
        let nuevoMapa = new google.maps.Map(mapa, {
            zoom: 12,
            center: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
        });
        marcador = new google.maps.Marker({
            map: nuevoMapa,
            draggable: false,
            position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
        });    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=&callback=iniciarMapa"></script>
@endsection