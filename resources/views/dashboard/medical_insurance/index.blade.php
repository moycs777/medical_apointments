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
                            Listar Seguros
                            <a href="{{ route('insurances.create') }}" class ='btn btn-primary pull-rigth'>Crear</a>
                            <div class="table-responsive ps">
                                <div class="panel-body">
                                    <table class="table tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre Seguro</th>
                                                <th colspan="2"></th>
                                            </tr>
                                        </thead>
                                        @foreach($insurances as $insurance)
                                        <tbody>
                                            <tr>
                                                <td>{{ $insurance->id }}</td>
                                                <td>{{ $insurance->name }}</td>
                                                <td width = "10px">
                                                    <a href="{{ route('insurances.edit',$insurance->id) }}"
                                                        class = "btn btn-sm">Editar
                                                    </a>
                                                </td>
                                                <td width = "10px">
                                                    <a href="" class = "btn btn-sm btn-danger" onclick="event.preventDefault();
                                                    document.getElementById('delete-form-{{ $insurance->id }}').submit();">
                                                    Eliminar
                                                    </a>
                                                    <form id="delete-form-{{ $insurance->id }}"
                                                        action="{{ route('insurances.destroy',$insurance->id) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                    {{ $insurances->render() }}
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

