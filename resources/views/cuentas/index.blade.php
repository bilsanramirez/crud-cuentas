@extends('../layouts/app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2>
                    Listado de cuentas
                    <a href="{{ route('cuentas.create')  }}" class="btn btn-primary float-right">Nuevo</a>
                </h2>
                @include('cuentas.fragment.info')
                <table class="table table-hover table-striped table-bordered table-responsive-sm">
                    <thead>
                    <tr>
                        <th width="20px">Id</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th colspan="3">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($cuentas as $cuenta)
                        <tr>
                            <td>{{ $cuenta->id }}</td>
                            <td>{{ $cuenta->nombre }}</td>
                            <td>{{ $cuenta->usuario }}</td>
                            <td>
                                <a href="{{ route('cuentas.show', $cuenta->id)  }}" class="btn btn-link">Ver</a>
                            </td>
                            <td>
                                <a href="{{ route('cuentas.edit', $cuenta->id) }}" class="btn btn-link">Editar</a>
                            </td>
                            <td>
                                <form action="{{route('cuentas.destroy', $cuenta->id)}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-link">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">No hay registros!!</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $cuentas->render() }}
            </div>
            <div class="col-sm-4">
                @include('cuentas.fragment.aside')
            </div>
        </div>
    </div>
@endsection