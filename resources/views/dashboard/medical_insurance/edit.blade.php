@extends('layouts.admin')

@section('content')

<div class="wrapper">
    <div class="main-panel">
       <!-- Navbar -->
       @include('partials.admin.nav')

        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <h2>Actualizar Seguro</h2>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('insurances.update', $insurance->id ) }}">

                                @csrf
                                {{ method_field('PUT') }}

                                <div class="form-group">
                                    <label for="">Nombre del Seguro</label>
                                    <input type="text" name="name" value="{{ $insurance->name }}"
                                    class="form-control" placeholder="Ingrese nombre del Seguro" >
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
