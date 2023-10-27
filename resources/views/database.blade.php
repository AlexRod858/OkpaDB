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
                                <a href="#"> <?php echo $direccion->id_user ?></a></td>
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
                <nav>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</div>
@endsection