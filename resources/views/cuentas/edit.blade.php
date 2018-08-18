@extends('../layout/layout')
@section('content')
    <div class="col-sm-8">
        <h2>
            Editar cuenta
            <a href="{{ route('cuentas.index') }}" class="btn btn-default float-right">Listado</a>
        </h2>
        formulario
    </div>
    <div class="col-sm-4">
        @include('cuentas.fragment.aside')
    </div>
@endsection