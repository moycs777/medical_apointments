@extends('layouts.admin')

@section('content')

<div class="wrapper">
    <div class="main-panel">
       <!-- Navbar -->
       @include('partials.admin.nav')

        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <h2>Actualizar Especialidad</h2>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" 
                                action="{{ route('specialties.update', $specialty->id ) }}">

                                @csrf
                                {{ method_field('PUT') }}

                                <div class="form-group">
                                    <label for="">Descripcion especialidad</label>
                                    <input type="text" name="name" value="{{ $specialty->name }}"
                                    class="form-control" placeholder="Ingrese descripcion" >
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status" value="{{ $specialty->status }}"
                                    placeholder="Estatus"  
                                    @if ($specialty->status == '1')
                                        checked
                                    @endif
                                >

                                <div class="form-group">
                                    <label for="">Precio</label>
                                    <input type="number" name="price" value="{{ $specialty->price }}"
                                    class="form-control" placeholder="Precio"  
                                >
                               
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

