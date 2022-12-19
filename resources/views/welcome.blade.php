<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    {{-- @if (session()->has('confirmacion'))

    {!! "<script> swal('Todo correcto', 'Empleado Guardado','success')</script>" !!}
@endif --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid ">
                <a class="navbar-brand">Ledsa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a
                                class="nav-link {{ request()->routeIs('C_empleado.create') ? 'text-danger fs-5 text-decoration-underline font-monospace' : '' }}"href="{{ route('C_empleado.create') }}">Empleados</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('Us') }}">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Ar') }}">Archivos</a>
                        </li> --}}
                        <li class="nav-item">
                            <a
                                class="nav-link {{ request()->routeIs('C_equipo.create') ? 'text-danger fs-5 text-decoration-underline font-monospace' : '' }}"href="{{ route('C_equipo.create') }}">Equipos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('C-e.index') ? 'text-danger fs-5 text-decoration-underline font-monospace' : '' }}"
                                href="{{ route('C-e.index') }}">Consulta equipos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link {{ request()->routeIs('emple.index') ? 'text-danger fs-5 text-decoration-underline font-monospace' : '' }}"
                                data-bs-toggle="dropdown"  href="{{ route('emple.index') }}">Consulta empleados</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{ route('emple.index') }}">Empleados</a></li>
                              <li><a class="dropdown-item" href="{{ route('ban.index') }}">Bancos</a></li>
                            </ul>
                          </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('contenido')
    @yield('js')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
