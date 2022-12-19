@extends('welcome')

@section('contenido')
     @if (session()->has('confirmacion'))

        {!! "<script> swal('Todo correcto', 'Empleado Guardado','success')</script>" !!}
    @endif 

    <div class="container col-md-6 mt-4">
        <h6 class="display-6 text-center mt-8 mb-3">Registro de empleados</h6>

        <div class="card text-center font-monospace">
            <div class="card-header">
                <title>Empleados</title>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('emple.store') }}">
                    @csrf
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Nombres" value="{{ old('txtNombre') }}" name="txtNombre"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtNombre') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Apellido Paterno" value="{{ old('txtApellidoP') }}" name="txtApellidoP"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtApellidoP') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Apellido Materno" value="{{ old('txtApellidoM') }}" name="txtApellidoM"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtApellidoM') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Celular" value="{{ old('txtCelular') }}" name="txtCelular"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtCelular') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Telefono personal" value="{{ old('txtTelefono') }}" name="txtTelefono"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtTelefono') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Correo Personal" value="{{ old('txtCorreo') }}" name="txtCorreo"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtCorreo') }}</p>
                    @endif
                    <div class="form-floating mb-3 m-lg-2 col-sm-6  ">
                        <select class="form-select" id="floatingSelect" value{{ old('txtGenero') }} name="txtGenero"
                            aria-label="Floating label select example">
                            <option selected>Seleccionar</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                        <label for="floatingSelect">Genero</label>
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <span class="input-group-text">Fecha de nacimiento</span>
                        <input type="date" class="form-control" aria-label="form-label" value="{{ old('txtFechaN') }}" name="txtFechaN">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtFechaN') }}</p>
                    @endif
                    <div class="form-floating mb-3 m-lg-2 col-sm-6  ">
                        <select class="form-select" id="floatingSelect" value="{{ old('txtEstudios') }}" name="txtEstudios"
                            aria-label="Floating label select example">
                            <option selected>Seleccionar</option>
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria">Secundaria</option>
                            <option value="Preparatoria">Preparatoria</option>
                            <option value="Licenciatura">Licenciatura</option>
                            <option value="Superior">Superior</option>
                        </select>
                        <label for="floatingSelect">Nivel de estudios</label>
                    </div>
                    <div class="form-floating mb-3 m-lg-2 col-sm-6  ">
                        <select class="form-select" id="floatingSelect" value="{{ old('txtEstadoC') }}" name="txtEstadoC"
                            aria-label="Floating label select example">
                            <option selected>Seleccionar</option>
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Viudo">Viudo</option>
                            <option value="Divorciado">Divorciado</option>
                            <option value="Complicado">Es complicado</option>
                        </select>
                        <label for="floatingSelect">Estado civil</label>
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Codigo postal" value="{{ old('txtCodigo') }}" name="txtCodigoP"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtCodigoP') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Estado" value="{{ old('txtEstado') }}" name="txtEstado"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtEstado') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Municipio" value="{{ old('txtMunicipio') }}" name="txtMunicipio"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtMunicipio') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Direccion" value="{{ old('txtDireccion') }}" name="txtDireccion"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtDireccion') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Nombre contacto de emergencia"
                           value="{{ old('txtNombreE') }}" name="txtNombreE" aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtNombreE') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Telefono contacto de emergencia"
                          value="{{ old('txtTelefonoE') }}"  name="txtTelefonoE" aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtTelefonoE') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Parentesco" value="{{ old('txtParentezco') }}" name="txtParentezco"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtParentezco') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Grupo sanguineo" value="{{ old('txtGrupo') }}" name="txtGrupo"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtGrupo') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <label class="input-group-text" for="inputGroupSelect01">Tipo de licencia</label>
                        <select class="form-select" id="inputGroupSelect01" value="{{ old('txtLicencia') }}" name="txtLicencia">
                            <option selected>Seleccionar...</option>
                            <option value="Ninguna">Ninguna</option>
                            <option value="BE">Tipo B Estatal</option>
                            <option value="BF">Tipo B federal</option>
                            <option value="B-E">Tipo B,E Federal</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                      <label class="input-group-text" for="inputGroupSelect01">Tipo de Banco que maneja</label>
                      <select class="form-select" id="inputGroupSelect01" value="{{ old('txtBanco') }}" name="txtBanco">
                          <option selected>Seleccionar...</option>
                          <option value="BBVA">BBVA</option>
                          <option value="Santander">Santander</option>
                      </select>
                  </div>
                  <div class="input-group mb-3 m-lg-2 col-sm-7">
                    <input type="text" class="form-control" placeholder="Numero de cuenta" value="{{ old('txtCuenta') }}" name="txtCuenta"
                        aria-describedby="basic-addon1">
                </div>
                @if ($errors->all())
                    <p class="text-danger fst-italic">{{ $errors->first('txtCuenta') }}</p>
                @endif
                <div class="input-group mb-3 m-lg-2 col-sm-7">
                  <input type="text" class="form-control" placeholder="Clabe interbancaria" value="{{ old('txtClabe') }}" name="txtClabe"
                      aria-describedby="basic-addon1">
              </div>
              @if ($errors->all())
                  <p class="text-danger fst-italic">{{ $errors->first('txtClabe') }}</p>
              @endif
              <div class="input-group mb-3 m-lg-2 col-sm-7">
                <input type="text" class="form-control" placeholder="NSS" value="{{ old('txtNSS') }}" name="txtNSS"
                    aria-describedby="basic-addon1">
            </div>
            @if ($errors->all())
                <p class="text-danger fst-italic">{{ $errors->first('txtNSS') }}</p>
            @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="CURP" value="{{ old('txtCURP') }}" name="txtCURP"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtCURP') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="RFC" value="{{ old('txtRFC') }}" name="txtRFC"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtRFC') }}</p>
                    @endif
                    {{-- <div class="form-floating mb-3 m-lg-2 col-sm-6  ">
                        <select class="form-select" id="floatingSelect" name="txtArea"
                            aria-label="Floating label select example">
                            <option selected>Ninguna</option>
                            <option value="ALR">ALR</option>
                            <option value="Oficina">Oficina</option>
                        </select>
                        <label for="floatingSelect">Seleccione el area del empleado</label>
                    </div> --}}

                    <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-danger">Registrar empleado</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
@stop
