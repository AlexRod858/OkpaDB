@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('database') }}" class="btn btn-primary mb-2">Volver Atrás</a>
            <div class="card">
                <div class="card-header">DETALLES</div>

                <div class="card-body">
                    <p>Calle: <?= $detallitos->calle ?></p>
                    <p>Código postal: <?= $detallitos->cp ?></p>
                    <p>Número: <?= $detallitos->numero ?></p>
                    <p>Localidad: <?= $detallitos->localidad ?></p>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
