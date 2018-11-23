@extends('layouts.admin')

@section('content')

<div class="wrapper">

  <div class="main-panel">
    <!-- Navbar -->
    @include('partials.admin.nav')

    <div class="content">
      <div class="row">
        <div class="col-md-8">
          <h2>Crear Enfermedad</h1>
            <div class="card">
              <div class="card-body">
                <form method="POST" action="{{ route('diseases.store') }}" >
                  @csrf

                  <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="name" class="form-control" 
                    required = "required" placeholder="Descripción de la enfermedad"
                    >
                  </div>

                  <div class="form-group">
                    <label for="sel1">Seleccione subclasificación</label>
                    <select class="js-example-basic-single form-control" 
                      id="sel1" name="subclassification_id" required = "required">

                      @foreach($subclassifications as $item) 
                        <option value ="{{ $item->id }}">{{ $item->name }}</option>
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
  $(document).ready(function() {
     $('.js-example-basic-single').select2();
  });    
</script>

@stop
