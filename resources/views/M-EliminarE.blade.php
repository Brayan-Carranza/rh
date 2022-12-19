<!-- Modal -->
@if (session()->has('Eliminacion'))
    {!! "<script> swal('Todo correcto', 'Empleado Eliminado','success')</script>" !!}
@endif
<div class="modal fade" id="ModalEliminarE-{{ $id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="ModalEliminarE" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Eliminar Empleado.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @foreach ($resultEm as $consulta)
                @if ($consulta->idEmpleado == $id)
                    <div class="modal-body">
                        <form method="post" action="{{ route('emple.update', $consulta->idEmpleado) }}">
                            @csrf
                            {!! method_field('PUT') !!}
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Nombre }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->ApellidoP }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->ApellidoM }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Celular }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Telefono_fijo }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Correo_Personal }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Genero }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Fecha_Nacimiento }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Nivel_Estudios }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Estado_Civil }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Codigo_Postal }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Estado }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Municipio }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Direccion }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Nombre_C_Emergencia }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Telefono_C_Emergencia }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Parentezco }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Grupo_Sanguineo }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Tipo_Licencia }} </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Banco }} </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Cuenta }} </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->Clabe_interbancaria }} </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->NSS }} </label>

                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->CURP }} </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">{{ $consulta->RFC }} </label>
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
                <a href="{{ route('emple.index') }}" class="btn btn-danger">No, regresame</a>
                </form>
            </div>
        </div>
    </div>
</div>
