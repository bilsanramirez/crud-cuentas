@extends('../layouts/app')
@section('content')
    <div class="col-sm-8">
        <h2>
            Nueva cuenta
            <a href="{{ route('cuentas.index') }}" class="btn btn-light float-right">Listado</a>
        </h2>

        @include('cuentas.fragment.error')

        {!! Form::open(['route'=>['cuentas.store']]) !!}

        @include('cuentas.fragment.form')

        {!! Form::close() !!}
    </div>
    <div class="col-sm-4">
        @include('cuentas.fragment.aside')
    </div>
@endsection