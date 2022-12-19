<!-- Modal -->
@if (session()->has('Actualizado'))
    {!! "<script> swal('Todo correcto', 'Empleado Actualizado','success')</script>" !!}
@endif
<div class="modal fade" id="ModalActualizarE-{{ $id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="ModalActualizarE" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('emple.update', $id) }}">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Actualizar empleado.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @foreach ($resultEm as $consultaId)
                    @if ($consultaId->idEmpleado == $id)
                        <div class="modal-body">

                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <input type="text" class="form-control" placeholder="Celular"
                                    value="{{ $consultaId->Celular }}" name="txtCelular"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div>
                                @if ($errors->all())
                                    <p class="text-danger fst-italic">{{ $errors->first('txtCelular') }}</p>
                                @endif
                            </div>

                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <input type="text" class="form-control" placeholder="Telefono Personal"
                                    value="{{ $consultaId->Telefono_fijo }}" name="txtTelefono"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div>
                                @if ($errors->all())
                                    <p class="text-danger fst-italic">{{ $errors->first('txtTelefono') }}</p>
                                @endif
                            </div>

                            <div class="form-floating mb-3 m-lg-2 col-sm-6  ">
                                <select class="form-select" id="floatingSelect" name="txtEstadoC"
                                    value="{{ $consultaId->Estado_Civil }}" aria-label="Floating label select example">
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
                                <input type="text" class="form-control" placeholder="Codigo Postal"
                                    value="{{ $consultaId->Codigo_Postal }}" name="txtCodigoP"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div>
                                @if ($errors->all())
                                    <p class="text-danger fst-italic">{{ $errors->first('txtCodigoP') }}</p>
                                @endif
                            </div>

                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <input type="text" class="form-control" placeholder="Estado"
                                    value="{{ $consultaId->Estado }}" name="txtEstado" aria-describedby="basic-addon1">
                            </div>
                            <div>
                                @if ($errors->all())
                                    <p class="text-danger fst-italic">{{ $errors->first('txtEstado') }}</p>
                                @endif
                            </div>
                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <input type="text" class="form-control" placeholder="Municipio"
                                    value="{{ $consultaId->Municipio }}" name="txtMunicipio"
                                    aria-describedby="basic-addon1">
                            </div>
                            @if ($errors->all())
                                <p class="text-danger fst-italic">{{ $errors->first('txtMunicipio') }}</p>
                            @endif
                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <input type="text" class="form-control" placeholder="Direccion"
                                    value="{{ $consultaId->Direccion }}" name="txtDireccion"
                                    aria-describedby="basic-addon1">
                            </div>
                            @if ($errors->all())
                                <p class="text-danger fst-italic">{{ $errors->first('txtDireccion') }}</p>
                            @endif
                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <input type="text" class="form-control" placeholder="Nombre contacto de emergencia"
                                    value="{{ $consultaId->Nombre_C_Emergencia }}" name="txtNombreE"
                                    aria-describedby="basic-addon1">
                            </div>
                            @if ($errors->all())
                                <p class="text-danger fst-italic">{{ $errors->first('txtNombreE') }}</p>
                            @endif

                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <input type="text" class="form-control" placeholder="Telefono contacto de emergencia"
                                    value="{{ $consultaId->Telefono_C_Emergencia }}" name="txtTelefonoE"
                                    aria-describedby="basic-addon1">
                            </div>
                            @if ($errors->all())
                                <p class="text-danger fst-italic">{{ $errors->first('txtTelefonoE') }}</p>
                            @endif
                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <input type="text" class="form-control" placeholder="Parentezco"
                                    value="{{ $consultaId->Parentezco }}" name="txtParentezco"
                                    aria-describedby="basic-addon1">
                            </div>
                            @if ($errors->all())
                                <p class="text-danger fst-italic">{{ $errors->first('txtParentezco') }}</p>
                            @endif
                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <label class="input-group-text" for="inputGroupSelect01">Tipo de licencia</label>
                                <select class="form-select" id="inputGroupSelect01" name="txtLicencia"
                                    value="{{ $consultaId->Tipo_Licencia }}">
                                    <option selected>Seleccionar...</option>
                                    <option value="Ninguna">Ninguna</option>
                                    <option value="BE">Tipo B Estatal</option>
                                    <option value="BF">Tipo B federal</option>
                                    <option value="B-E">Tipo B,E Federal</option>
                                </select>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm" data-bs-dismiss="modal">Guardar</button>
                    <a href="{{ route('emple.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
