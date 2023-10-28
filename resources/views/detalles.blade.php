@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('database') }}" class="btn btn-primary mb-2">Volver Atrás</a>
            <div class="card">
                <div class="container">
                    <div class="card-header ">
                        <h2>DETALLES</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <h4><strong>Calle: </strong><?= $detallitos->calle ?></h4>
                                <h4><strong>Código postal: </strong><?= $detallitos->cp ?></h4>
                                <h4><strong>Número: </strong><?= $detallitos->numero ?></h4>
                                <h4><strong>Localidad: </strong><?= $detallitos->localidad ?></h4>
                            </div>
                            <div class="col-md-6">
                                <div id="mapa" data-latitud="{{ $latitud }}" data-longitud="{{ $longitud }}" style="width: 100%; height:500px;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function iniciarMapa() {
        // Obtener los datos desde los atributos data-*
        let latitud = parseFloat(document.getElementById("mapa").getAttribute("data-latitud"));
        let longitud = parseFloat(document.getElementById("mapa").getAttribute("data-longitud"));
        coordenadas = {
            lng: longitud,
            lat: latitud
        }
        generarMapa(coordenadas);
    }

    function generarMapa(coordenas) {
        let mapa = new google.maps.Map(document.getElementById("mapa"), {

            zoom: 10,
            center: new google.maps.LatLng(coordenas.lat, coordenas.lng)
        });
        marcador = new google.maps.Marker({
            map: mapa,
            draggable: false,
            position: new google.maps.LatLng(coordenas.lat, coordenas.lng)
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=&callback=iniciarMapa"></script>



@endsection