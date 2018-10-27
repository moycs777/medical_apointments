@extends('layouts.admin')

@section('content')

<div class="wrapper">

    <div class="main-panel">
        <!-- Navbar -->
        @include('partials.admin.nav')

        <div class="content">
            <div class="row">
                <div class="col-md-8">
                <h2>Crear Especialidad</h1>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('specialties.store') }}" >
                                @csrf

                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" name="name" class="form-control" 
                                        placeholder="Descripción de la subclasificación" required="required"
                                    >
                                    </div>

                                    <div class="form-group">
                                        <label for="">Precio</label>
                                        <input type="number" name="price" class="form-control" 
                                        placeholder="Precio"  
                                    >
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

@section('page-script')