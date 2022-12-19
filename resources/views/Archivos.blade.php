@extends('welcome')
@section('contenido')

    @if (session()->has('confirmacion'))
        {!! "<script> swal('Todo correcto', 'Documentos Guardados','success')</script>" !!}
    @endif
    <div class="container col-md-6 mt-4">
        <h2 class="display-6 text-center mt-8 mb-3">Archivos empleados.</h2>
        <div class="card text-center font-monospace">
            <div class="card-header">
                <title>Archivos</title>
            </div>
            <form action="{{ route('ar.Insertar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Apellidos" name="txtApellidos"
                        aria-describedby="basic-addon1">
                </div>
                @if ($errors->all())
                    <p class="text-danger fst-italic">{{ $errors->first('txtApellidos') }}</p>
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombres" name="txtNombres"
                        aria-describedby="basic-addon1">
                </div>
                @if ($errors->all())
                    <p class="text-danger fst-italic">{{ $errors->first('txtNombres') }}</p>
                @endif

            <div class="text-start"><label class="form-label ">Acta de Nacimiento</label></div>
            <div class="input-group mb-3 ">
                <input type="file" class="form-control" name="Acta" id="inputGroupFile02">
            </div>
            <div class="text-start"><label class="form-label">CURP</label></div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="CURP" id="inputGroupFile02">
            </div>
            <div class="text-start"><label class="form-label">CV</label></div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="Cv" id="inputGroupFile02">
            </div>
            <div class="text-start"><label class="form-label">RFC</label></div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="RFC" id="inputGroupFile02">
            </div>
            <div class="text-start"><label class="form-label ">Carta antecedentes</label></div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="Carta" id="inputGroupFile02">
            </div>
            <div class="text-start"><label class="form-label ">Comprobante de domicilio</label></div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="domicilio" id="inputGroupFile02">
            </div>
            <div class="text-start"><label class="form-label ">NSS</label></div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="NSS" id="inputGroupFile02">
            </div>
            <div class="text-start"><label class="form-label ">Licencia</label></div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="Licencia" id="inputGroupFile02">
            </div>
            <div class="text-start"><label class="form-label ">Examen medico</label></div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="Examen" id="inputGroupFile02">
            </div>
            <div class="text-start"><label class="form-label ">Alta de IMMS</label></div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="Alta" id="inputGroupFile02">
            </div>
            <div class="text-start"><label class="form-label ">Baja de IMMS</label></div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="Baja" id="inputGroupFile02">
            </div>
            <div class="text-start"><label class="form-label ">Constancia retencion IMMS</label></div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="Constancia" id="inputGroupFile02">
            </div>
            <div class="text-start"><label class="form-label ">Psicometricos</label></div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="Psico" id="inputGroupFile02">
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-danger">Guardar Archivos</button>
            </div>
        </form>




            









        </div>
    </div>








@stop
