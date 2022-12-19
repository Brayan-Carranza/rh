<!-- Modal -->
@if (session()->has('Actualizado'))
    {!! "<script> swal('Todo correcto', 'Equipo Actualizado','success')</script>" !!}
@endif
<div class="modal fade" id="ModalActualizar-{{ $id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="ModalActualizar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('C-e.update', $id) }}">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Actualizar equipo.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @foreach ($resultEqui as $consultaId)
                    @if ($consultaId->idEquipo == $id)
                        <div class="modal-body">

                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <input type="text" class="form-control" placeholder="Descripcion"
                                    value="{{ $consultaId->Descripcion }}" name="txtDescripcion"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div>
                                @if ($errors->all())
                                    <p class="text-danger fst-italic">{{ $errors->first('txtDescripcion') }}</p>
                                @endif
                            </div>

                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <input type="text" class="form-control" placeholder="Nombre"
                                    value="{{ $consultaId->Nombre }}" name="txtNombreE" aria-describedby="basic-addon1">
                            </div>
                            <div>
                                @if ($errors->all())
                                    <p class="text-danger fst-italic">{{ $errors->first('txtNombreE') }}</p>
                                @endif
                            </div>

                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <input type="text" class="form-control" placeholder="Almacenamiento"
                                    value="{{ $consultaId->Almacenamiento }}" name="txtAlmace"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div>
                                @if ($errors->all())
                                    <p class="text-danger fst-italic">{{ $errors->first('txtAlmace') }}</p>
                                @endif

                            </div>
                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <input type="text" class="form-control" placeholder="RAM"
                                    value="{{ $consultaId->RAAM }}" name="txtRAAM" aria-describedby="basic-addon1">
                            </div>
                            <div>
                                @if ($errors->all())
                                    <p class="text-danger fst-italic">{{ $errors->first('txtRAAM') }}</p>
                                @endif
                            </div>

                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <label class="input-group-text" for="inputGroupSelect01">Status</label>
                                <select class="form-select" id="inputGroupSelect01" value="{{ $consultaId->Status }}"
                                    name="txtStatus">
                                    <option selected>Seleccionar...</option>
                                    <option value="En uso">En uso</option>
                                    <option value="Sin Uso">Sin uso</option>
                                </select>
                            </div>

                            <div class="input-group mb-3 m-lg-2 col-sm-7">
                                <input type="text" class="form-control" placeholder="Estado"
                                    value="{{ $consultaId->Estado }}" name="txtEstadoC"
                                    aria-describedby="basic-addon1">
                            </div>
                            @if ($errors->all())
                                <p class="text-danger fst-italic">{{ $errors->first('txtEstadoC') }}</p>
                            @endif

                        </div>
                    @endif
                @endforeach
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm" data-bs-dismiss="modal">Guardar</button>
                    <a href="{{ route('C-e.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
