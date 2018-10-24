@extends('layouts.admin')

@section('content')

<div class="wrapper">

    <div class="main-panel">
        <!-- Navbar -->
        @include('partials.admin.nav')

        <div class="content">
            <div class="row">
                <div class="col-md-8">
                <h2>Crear Ocupacion</h1>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('occupations.store') }}" >
                                @csrf

                                    <div class="form-group">
                                        <label for="">Descripcion Ocupacion</label>
                                        <input type="text" name="name" class="form-control" placeholder="Ingrese Ocupacion"  >
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