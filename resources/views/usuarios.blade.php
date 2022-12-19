@extends('welcome')
@section('contenido')
<div class="container col-md-6 mt-4">
    <h6 class="display-6 text-center mt-8 mb-3">Login</h6>
    <div class="card text-center font-monospace">
        <div class="card-header">
            <title>Usuarios</title>
        </div>
        <div class="card-body">
            <form method="post" action="guardarUsuario">
              @csrf
              <div class="input-group mb-3 m-lg-2 col-sm-7">
                <input type="text" class="form-control" placeholder="Usuario" name="txtUsuario" aria-describedby="basic-addon1">
              </div>
              @if ($errors->all())
              <p class="text-danger fst-italic">{{ $errors->first('txtUsuario') }}</p>
              
            @endif 
              <div class="input-group mb-3 m-lg-2 col-sm-7">
                <input type="text" class="form-control" placeholder="Correo" name="txtCorreo" aria-describedby="basic-addon1">
              </div>
              @if ($errors->all())
              <p class="text-danger fst-italic">{{ $errors->first('txtCorreo') }}</p>
              
            @endif      
            <div class="input-group mb-3 m-lg-2 col-sm-7">
                <input type="password" class="form-control" placeholder="Contraseña" name="txtContraseña" aria-describedby="basic-addon1">
              </div>
              @if ($errors->all())
              <p class="text-danger fst-italic">{{ $errors->first('txtContraseña') }}</p>
              
            @endif         

                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-danger">Entrar</button>
                </div>
                <div class="text-center p-3">
                    'Sino estas registrado'
                    <a clas="text-black" href="{{ route('emple.store') }}">Registrate</a>
                </div>

            </form>
        </div>
    </div>
</div>

@stop