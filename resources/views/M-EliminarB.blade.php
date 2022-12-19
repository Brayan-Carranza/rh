<!-- Modal -->
@if (session()->has('Eliminacion'))
    {!! "<script> swal('Todo correcto', 'Empleado Eliminado','success')</script>" !!}
@endif
<div class="modal fade" id="ModalEliminarB-{{ $id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="ModalEliminarB" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Eliminar Empleado.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @foreach ($resultBa as $consulta)
                @if ($consulta->idEmpleado == $id)
                    <div class="modal-body">
                        <form method="post" action="{{ route('ban.update', $consulta->idEmpleado) }}">
                            @csrf
                            {!! method_field('PUT') !!}
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Banco }} </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Cuenta }} </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Clabe_interbancaria }} </label>
                            </div>

                    </div>
                @endif
            @endforeach
            <div class="modal-footer">
                <form action="{{ route('Empleado.destroy', $consulta->idEmpleado) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-success">Si, eliminalo</button>
                </form>
                <a href="{{ route('ban.index') }}" class="btn btn-danger">No, regresame</a>
                </form>
            </div>
        </div>
    </div>
</div>
