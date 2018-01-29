@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Lista de usuarios</h4>
                    <div class="material-datatables">
                        <table id="personas" class="table dataTable nowrap dataTables_wrapper table-striped table-no-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-left">Acciones</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Teléfono</th>
                                    <th>Edad</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection