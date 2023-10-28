@extends('layouts.app')

@section('content')
<section class="container">
    <div class="d-flex justify-content-center">
        <!-- -------------------------------- -->
        <div class="card p-4 shadow-lg p-3 mb-5 bg-body rounded mt-5">
        <form class="mx-auto">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="calle">Calle</label>
                    <input type="text" class="form-control border border-primary" id="calle" placeholder="Wallaby">
                </div>
                <div class="row g-2 align-items-center">
                    <div class="form-group col-md-3">
                        <label for="cp">CP</label>
                        <input type="text" class="form-control border border-primary" id="cp" placeholder="12500">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control border border-primary" id="numero" placeholder="42">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="localidad">Localidad</label>
                    <input type="text" class="form-control border border-primary" id="localidad" placeholder="Sidney">
                </div>
            </div>
            <div class="form-row">
                <div class="row g-2 align-items-center">
                    <div class="form-group col-auto">
                        <label for="latitud">Latitud</label>
                        <input type="text" class="form-control border border-primary" id="latitud" placeholder="-33.78661240526052">
                    </div>
                    <div class="form-group col-auto">
                        <label for="latitud">Longitud</label>
                        <input type="text" class="form-control border border-primary" id="longitud" placeholder="150.86863553369454">
                    </div>
                </div>
            </div>
            <div class="form-group">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Publicar</button>
        </form>
    </div>
        <!-- ------------------------------------ -->
    </div>
</section>
@endsection