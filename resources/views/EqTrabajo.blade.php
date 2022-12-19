@extends('welcome')

@section('contenido')

  

    <div class="container col-md-6 mt-4">
        <h6 class="display-6 text-center mt-8 mb-3">Registro de equipo</h6>

        <div class="card text-center font-monospace">
            <div class="card-header">
                <title>Equipo</title>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('C-e.store') }}">
                    @csrf
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Proveedor" value="{{ old('txtProveedor') }}" name="txtProveedor"
                            aria-describedby="basic-addon1">
                    </div>
                    <div>
                        @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('txtProveedor') }}</p>
                        @endif
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Descripcion" value="{{ old('txtDescripcion') }}" name="txtDescripcion"
                            aria-describedby="basic-addon1">
                    </div>
                    <div>
                        @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('txtDescripcion') }}</p>
                        @endif
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Precio U" value="{{ old('txtPrecioU') }}" name="txtPrecioU"
                            aria-describedby="basic-addon1">
                    </div>
                    <div>
                        @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('txtPrecioU') }}</p>
                        @endif
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Factura" value="{{ old('txtFactura') }}" name="txtFactura"
                            aria-describedby="basic-addon1">
                    </div>
                    <div>
                        @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('txtFactura') }}</p>
                        @endif
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Nombre" value="{{ old('txtNombreE') }}" name="txtNombreE"
                            aria-describedby="basic-addon1">
                    </div>
                    <div>
                        @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('txtNombreE') }}</p>
                        @endif
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Procesador" value="{{ old('txtProcesador') }}" name="txtProcesador"
                            aria-describedby="basic-addon1">
                    </div>
                    <div>
                        @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('txtProcesador') }}</p>
                        @endif
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Nucleos" value="{{ old('txtNucleos') }}" name="txtNucleos"
                            aria-describedby="basic-addon1">
                    </div>
                    <div>
                        @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('txtNucleos') }}</p>
                        @endif
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Almacenamiento" value="{{ old('txtAlmace') }}" name="txtAlmace"
                            aria-describedby="basic-addon1">
                    </div>
                    <div>
                        @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('txtAlmace') }}</p>
                        @endif

                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="RAM" value="{{ old('txtRAAM') }}" name="txtRAAM"
                            aria-describedby="basic-addon1">
                    </div>
                    <div>
                        @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('txtRAAM') }}</p>
                        @endif
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Identidicador de dispositivo"
                           value="{{ old('txtIdentificador') }}" name="txtIdentificador" aria-describedby="basic-addon1">
                    </div>
                    <div>
                        @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('txtIdentificador') }}</p>
                        @endif
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="ID del producto" value="{{ old('txtIdpro') }}" name="txtIdpro"
                            aria-describedby="basic-addon1">
                    </div>
                    <div>
                        @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('txtIdpro') }}</p>
                        @endif
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <label class="input-group-text" for="inputGroupSelect01">Status</label>
                        <select class="form-select" id="inputGroupSelect01" value="{{ old('txtStatus') }}" name="txtStatus">
                            <option selected>Seleccionar...</option>
                            <option value="En uso">En uso</option>
                            <option value="Sin Uso">Sin uso</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Equipo" value="{{ old('txtEquipo') }}" name="txtEquipo"
                            aria-describedby="basic-addon1">
                    </div>
                    <div>
                        @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('txtEquipo') }}</p>
                        @endif
                    </div>
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Matricula" value="{{ old('txtMatricula') }}" name="txtMatricula"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtMatricula') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Marca" value="{{ old('txtMarca') }}" name="txtMarca"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtMarca') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Modelo" value="{{ old('txtModelo') }}" name="txtModelo"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtModelo') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Color" value="{{ old('txtColor') }}" name="txtColor"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtColor') }}</p>
                    @endif

                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <span class="input-group-text">Fecha compra</span>
                        <input type="date" class="form-control" aria-label="form-label" value="{{ old('txtFechaC') }}" name="txtFechaC">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtFechaC') }}</p>
                    @endif
                    <div class="input-group mb-3 m-lg-2 col-sm-7">
                        <input type="text" class="form-control" placeholder="Estado" value="{{ old('txtEstadoC') }}" name="txtEstadoC"
                            aria-describedby="basic-addon1">
                    </div>
                    @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('txtEstadoC') }}</p>
                    @endif


                    <div class="card-footer text-muted">
                        <button hrf="Archivos" type="submit" class="btn btn-danger">Registrar equipo</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
@stop
