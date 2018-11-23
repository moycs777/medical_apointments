@extends('layouts.admin')

@section('content')

<div class="wrapper">

  <div class="main-panel">
        <!-- Navbar -->
    @include('partials.admin.nav')

    <div class="content">
        <div class="row">
            <div class="col-md-8">
               <h2>Crear Subpatologia</h1>
                  <div class="card">
                      <div class="card-body">
                          <form method="POST" action="{{ route('subpatologies.store') }}" >
                             @csrf
                                <div class="form-group">
                                   <label for="">Nombre</label>
                                   <input type="text" name="name" class="form-control" 
                                      placeholder="Descripción de la subpatologia">
                                </div>

                                <div class="form-group">
                                   <label for="">Recipe</label>
                                   <input type="text" name="recipe" class="form-control" 
                                      placeholder="Descripción recipe">
                                </div>

                                <div class="form-group">
                                   <label for="">Prescripcion</label>
                                   <input type="text" name="prescription" class="form-control" 
                                      placeholder="Detalle de la prescripcion">
                                </div>

                                <div class="form-group">
                                   <label for="sel1">Seleccione patologia</label>
                                     <select class="form-control" id="sel1" name="pathology_id">
                                        @foreach($pathologies as $pathologie)
                                           <option value ="{{ $pathologie->id }}">
                                              {{ $pathologie->name }}
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
