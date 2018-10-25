@extends('layouts.admin')

@section('content')

<div class="wrapper">

    <div class="main-panel">
        <!-- Navbar -->
        @include('partials.admin.nav')

        <div class="content">
            <div class="row">
                <div class="col-md-8">
                <h2>Crear Subclasificacion</h1>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('subclassifications.store') }}" >
                                @csrf

                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" name="name" class="form-control" 
                                        placeholder="Descripción de la subclasificación"
                                    >
                                    </div>

                                    <div class="form-group">
                                       <label for="sel1">Seleccione clasificación</label>
                                       <select class="form-control" id="sel1" name="classification_id">
                                           @foreach($classifications as $classification)
                                            <option value ="{{ $classification->id }}">
                                                {{ $classification->name }}
                                            </option>
                                          @endforeach 
                                       </select>
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

  <script type="text/javascript">
         
  </script>

@stop
