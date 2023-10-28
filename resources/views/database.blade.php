@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th scope="col">Num.</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Calle</th>
                            <th scope="col">CP</th>
                            <th scope="col">Localidad</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($direcciones as $direccion) : ?>

                            <tr scope="row">
                                <td>
                                    <?php echo $direccion->id ?>
                                </td>
                                <td>
                                    <?php echo $direccion->user->name; ?>
                                <td>
                                    <?php echo $direccion->calle ?>
                                </td>
                                <td>
                                    <?php echo $direccion->cp ?>
                                </td>
                                <td>
                                    <?php echo $direccion->localidad ?>
                                </td>
                                <td><a href="/database/<?php echo $direccion->id ?>" class="btn btn-primary">Detalles</a></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
                {{ $direcciones->links() }}
            </div>
        </div>

    </div>
</div>
@endsection