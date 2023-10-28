@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('database') }}" class="btn btn-primary mb-2">Volver Atrás</a>
            <div class="card">
                <div class="container">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2>DETALLES</h2>
                        <div class="d-flex ml-auto">
                        @if($detallitos->id_user === Auth::user()->id)
                            <a href="/database/{{ $detallitos->id }}/edit" class="me-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="blue" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                            <a href="/database/{{ $detallitos->id }}/borrar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="red" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg>
                            </a>
                            @endif
                        </div>
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
                                <div id="mapa" data-latitud="{{ $detallitos->latitud }}" data-longitud="{{ $detallitos->longitud }}" style="width: 100%; height:500px;">

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