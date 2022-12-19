<!-- Modal -->
@if (session()->has('Eliminacion'))
    {!! "<script> swal('Todo correcto', 'Equipo Eliminado','success')</script>" !!}
@endif
<div class="modal fade" id="ModalEliminar-{{ $id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="ModalEliminar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Eliminar Equipo.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @foreach ($resultEqui as $consulta)
                @if ($consulta->idEquipo == $id)
                    <div class="modal-body">
                        <form method="post" action="{{ route('C-e.update', $consulta->idEquipo) }}">
                            @csrf
                            {!! method_field('PUT') !!}
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Proveedor }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Descripcion }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->PrecioU }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Factura }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Nombre }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Procesador }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Nucleos }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Almacenamiento }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->RAAM }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Iden_Equipo }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->ProductoId }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Status }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Equipo }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Matricula }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Marca }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Modelo }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Color }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->FechaC }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Estado }} </label>
                            </div>
                    </div>
                @endif
            @endforeach
            <div class="modal-footer">
                <form action="{{ route('EqTrabajo.destroy', $consulta->idEquipo) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-success">Si, eliminalo</button>
                </form>
                <a href="{{ route('C-e.index') }}" class="btn btn-danger">No, regresame</a>
                </form>
            </div>
        </div>
    </div>
</div>
