@extends('layouts.admin')
@section('content')
<div class="wrapper">
    <div class="main-panel">
        <!-- Navbar -->
        @include('partials.admin.nav')
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
	                    @if (session('status'))
	                        <div class="alert alert-success" role="alert">
	                            {{ session('status') }}
	                        </div>
	                    @endif

                        <div class="card-body">
                            Listar Ocupaciones
                            <a href="{{ route('occupations.create') }}" class ='btn btn-primary pull-rigth'>Crear</a>
                            <div class="table-responsive ps">
                                <div class="panel-body">
                                    <table class="table tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre Ocupacion</th>
                                                <th colspan="2"></th>
                                            </tr>
                                        </thead>
                                        @foreach($occupations as $occupation)
                                        <tbody>
                                            <tr>
                                                <td>{{ $occupation->id }}</td>
                                                <td>{{$occupation->name }}</td>
                                                <td width = "10px">
                                                    <a href="{{ route('occupations.edit',$occupation->id) }}"
                                                        class = "btn btn-sm">Editar
                                                    </a>
                                                </td>
                                                <td width = "10px">
                                                    <a href="" class = "btn btn-sm btn-danger" onclick="event.preventDefault();
                                                    document.getElementById('delete-form-{{ $occupation->id }}').submit();">
                                                    Eliminar
                                                    </a>
                                                    <form id="delete-form-{{ $occupation->id }}"
                                                        action="{{ route('occupations.destroy',$occupation->id) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                    {{ $occupations->render() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                </div>
        </div>
   </div>
</div>
@stop

