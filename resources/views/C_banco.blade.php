@extends('welcome')
@section('contenido')
    @if (session()->has('confirmado'))
        {!! "<script> swal('Todo correcto', 'Banco Guardado','success')</script>" !!}
    @endif

@section('css')
    @if (session()->has('Actualizado'))
        {!! "<script> swal('Todo correcto', 'Banco Actualizado','success')</script>" !!}
    @endif

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection
<title>Consulta bancos</title>

<div class="container mt-4 table-responsive table-align-middle">
    <table id="C_banco" class="table table-striped" style="width:100%">
        <thead>

            <tr class="align-bottom">
                <th scope="col">IdEmpleado</th>
                <th scope="col">Nombre</th>
                <th scope="col">Banco</th>
                <th scope="col">Cuenta</th>
                <th scope="col">Clabe interbancaria</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($resultBa as $consulta)
                <tr>
                    <th scope="row">{{ $consulta->idEmpleado }}</th>
                    <td>{{ $consulta->Nombre }}</td>
                    <td>{{ $consulta->Banco }}</td>
                    <td>{{ $consulta->Cuenta }}</td>
                    <td>{{ $consulta->Clabe_interbancaria }}</td>
                    <td><button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#ModalActualizarB-{{ $consulta->idEmpleado }}">
                            Actualizar <i class="bi bi-pencil-square"></i>
                        </button></td>
                    <td> <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#ModalEliminarB-{{ $consulta->idEmpleado }}">
                            Eliminar <i class="bi bi-trash"></i>
                        </button></td>

                </tr>
                @include('M-ActualizarB', ['id' => $consulta->idEmpleado])
                @include('M-EliminarB', ['id' => $consulta->idEmpleado])
            @endforeach

        </tbody>
    </table>
    @section('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#C_banco').DataTable({
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
