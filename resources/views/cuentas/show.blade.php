@extends('../layout/layout')
@section('content')
    <div class="col-sm-8">
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Nombre: </strong>{{ $cuenta->nombre }}
            </li>
            <li class="list-group-item">
                <strong>Usuario: </strong>{{ $cuenta->usuario }}
            </li>
            <li class="list-group-item">
                <strong>Clave: </strong>{{ $cuenta->clave }}
            </li>
        </ul>
    </div>
    <div class="col-sm-4">
        @include('cuentas.fragment.aside')
    </div>
@endsection