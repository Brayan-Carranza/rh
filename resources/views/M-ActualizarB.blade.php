<!-- Modal -->
@if (session()->has('Actualizado'))
    {!! "<script> swal('Todo correcto', 'Empleado Actualizado','success')</script>" !!}
@endif
<div class="modal fade" id="ModalActualizarB-{{ $id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="ModalActualizarB" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('ban.update', $id) }}">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Actualizar banco de empleado.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @foreach ($resultBa as $consultaId)
                    @if ($consultaId->idEmpleado == $id)
                        <div class="modal-body">
                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <label class="input-group-text" for="inputGroupSelect01">Tipo de Banco que maneja</label>
                                <select class="form-select" id="inputGroupSelect01" name="txtBanco">
                                    <option selected>Seleccionar...</option>
                                    <option value="BBVA">BBVA</option>
                                    <option value="Santander">Santander</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                              <input type="text" class="form-control" placeholder="Numero de cuenta" name="txtCuenta"
                                  aria-describedby="basic-addon1">
                          </div>
                          @if ($errors->all())
                              <p class="text-danger fst-italic">{{ $errors->first('txtCuenta') }}</p>
                          @endif
                          <div class="input-group mb-3 m-lg-2 col-sm-7">
                            <input type="text" class="form-control" placeholder="Clabe interbancaria" name="txtClabe"
                                aria-describedby="basic-addon1">
                        </div>
                        @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('txtClabe') }}</p>
                        @endif
                            
                        </div>
                    @endif
                @endforeach
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm" data-bs-dismiss="modal">Guardar</button>
                    <a href="{{ route('ban.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
