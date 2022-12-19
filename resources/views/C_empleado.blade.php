@extends('welcome')
@section('contenido')
    @if (session()->has('confirmado'))
        {!! "<script> swal('Todo correcto', 'Empleado Guardado','success')</script>" !!}
    @endif

@section('css')
    @if (session()->has('Actualizado'))
        {!! "<script> swal('Todo correcto', 'Empleado Actualizado','success')</script>" !!}
    @endif

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection
<title>Consulta empleados</title>

<div class="container mt-4 table-responsive table-align-middle">
    <table id="C_empleado" class="table table-striped" style="width:100%">
        <thead>

            <tr class="align-bottom">
                <th scope="col">IdEmpleado</th>
                <th scope="col">Nombre </th>
                <th scope="col">Apellido_P</th>
                <th scope="col">Apellido_M</th>
                <th scope="col">Celular</th>
                <th scope="col">Telefono_P</th>
                <th scope="col">Correo_P</th>
                <th scope="col">Genero</th>
                <th scope="col">Fecha_N</th>
                <th scope="col">N_Estudios</th>
                <th scope="col">E_Civil</th>
                <th scope="col">CP</th>
                <th scope="col">Estado</th>
                <th scope="col">Municipio</th>
                <th scope="col">Direccion </th>
                <th scope="col">C_Emergencia</th>
                <th scope="col">T_Emergencia</th>
                <th scope="col">Parentezco</th>
                <th scope="col">G_Sanguineo</th>
                <th scope="col">T_Licencia</th>
                <th scope="col">NSS</th>
                <th scope="col">CURP</th>
                <th scope="col">RFC</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($resultEm as $consulta)
                <tr>
                    <th scope="row">{{ $consulta->idEmpleado }}</th>
                    <td>{{ $consulta->Nombre }}</td>
                    <td>{{ $consulta->ApellidoP }}</td>
                    <td>{{ $consulta->ApellidoM }}</td>
                    <td>{{ $consulta->Celular }}</td>
                    <td>{{ $consulta->Telefono_fijo }}</td>
                    <td>{{ $consulta->Correo_Personal }}</td>
                    <td>{{ $consulta->Genero }}</td>
                    <td>{{ $consulta->Fecha_Nacimiento }}</td>
                    <td>{{ $consulta->Nivel_Estudios }}</td>
                    <td>{{ $consulta->Estado_Civil }}</td>
                    <td>{{ $consulta->Codigo_Postal }}</td>
                    <td>{{ $consulta->Estado }}</td>
                    <td>{{ $consulta->Municipio }}</td>
                    <td>{{ $consulta->Direccion }}</td>
                    <td>{{ $consulta->Nombre_C_Emergencia }}</td>
                    <td>{{ $consulta->Telefono_C_Emergencia }}</td>
                    <td>{{ $consulta->Parentezco }}</td>
                    <td>{{ $consulta->Grupo_Sanguineo }}</td>
                    <td>{{ $consulta->Tipo_Licencia }}</td>
                    <td>{{ $consulta->NSS }}</td>
                    <td>{{ $consulta->CURP }}</td>
                    <td>{{ $consulta->RFC }}</td>
                    <td><button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#ModalActualizarE-{{ $consulta->idEmpleado }}">
                            Actualizar <i class="bi bi-pencil-square"></i>
                        </button></td>
                    <td> <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#ModalEliminarE-{{ $consulta->idEmpleado }}">
                            Eliminar <i class="bi bi-trash"></i>
                        </button></td>

                </tr>
                @include('M-ActualizarE', ['id' => $consulta->idEmpleado])
                @include('M-EliminarE', ['id' => $consulta->idEmpleado])
            @endforeach

        </tbody>
    </table>
    @section('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#C_empleado').DataTable({
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
