@extends('welcome')
@section('contenido')
    @if (session()->has('confirmado'))
        {!! "<script> swal('Todo correcto', 'Equipo Guardado','success')</script>" !!}
    @endif

@section('css')
    @if (session()->has('Actualizado'))
        {!! "<script> swal('Todo correcto', 'Equipo Actualizado','success')</script>" !!}
    @endif

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection
<title>Consulta equipos.</title>

<div class="container mt-4 table-responsive table-align-middle">
    <table id="C_equipo" class="table table-striped" style="width:100%">
        <thead>

            <tr class="align-bottom">
                <th scope="col">IdEquipo</th>
                <th scope="col">Fecha_C</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio_U</th>
                <th scope="col">Factura</th>
                <th scope="col">Nombre</th>
                <th scope="col">Procesador</th>
                <th scope="col">Nucleos</th>
                <th scope="col">Almacenamiento</th>
                <th scope="col">RAM</th>
                <th scope="col">Ide_Equipo</th>
                <th scope="col">ProductoID</th>
                <th scope="col">Status </th>
                <th scope="col">Equipo</th>
                <th scope="col">Matricula</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Color</th>
                <th scope="col">Estado</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($resultEqui as $consulta)
                <tr>
                    <th scope="row">{{ $consulta->idEquipo }}</th>
                    <td>{{ $consulta->FechaC }}</td>
                    <td>{{ $consulta->Proveedor }}</td>
                    <td>{{ $consulta->Descripcion }}</td>
                    <td>{{ $consulta->PrecioU }}</td>
                    <td>{{ $consulta->Factura }}</td>
                    <td>{{ $consulta->Nombre }}</td>
                    <td>{{ $consulta->Procesador }}</td>
                    <td>{{ $consulta->Nucleos }}</td>
                    <td>{{ $consulta->Almacenamiento }}</td>
                    <td>{{ $consulta->RAAM }}</td>
                    <td>{{ $consulta->Iden_Equipo }}</td>
                    <td>{{ $consulta->ProductoId }}</td>
                    <td>{{ $consulta->Status }}</td>
                    <td>{{ $consulta->Equipo }}</td>
                    <td>{{ $consulta->Matricula }}</td>
                    <td>{{ $consulta->Marca }}</td>
                    <td>{{ $consulta->Modelo }}</td>
                    <td>{{ $consulta->Color }}</td>
                    <td>{{ $consulta->Estado }}</td>
                    <td><button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#ModalActualizar-{{ $consulta->idEquipo }}">
                            Actualizar <i class="bi bi-pencil-square"></i>
                        </button></td>
                    <td> <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#ModalEliminar-{{ $consulta->idEquipo }}">
                            Eliminar <i class="bi bi-trash"></i>
                        </button></td>

                </tr>
                @include('M-Actualizar', ['id' => $consulta->idEquipo])
                @include('M-Eliminar', ['id' => $consulta->idEquipo])
            @endforeach

        </tbody>
        

    </table>
    @section('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#C_equipo').DataTable({
                    "lengthMenu": [
                        [5, 10, 50, -1],
                        [5, 10, 50, "ALL"]
                    ]
                });
            });
        </script>

    @endsection
</div>

@stop
