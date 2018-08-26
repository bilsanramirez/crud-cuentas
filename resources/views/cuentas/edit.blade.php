@extends('../layouts/app')
@section('content')
    <div class="col-sm-8">
        <h2>
            Editar cuenta
            <a href="{{ route('cuentas.index') }}" class="btn btn-default float-right">Listado</a>
        </h2>
        @include('cuentas.fragment.error')
        {!! Form::model($cuenta, ['route'=>['cuentas.update', $cuenta->id], 'method'=>'PUT']) !!}

            @include('cuentas.fragment.form')

        {!! Form::close() !!}
    </div>
    <div class="col-sm-4">
        @include('cuentas.fragment.aside')
    </div>
@endsection