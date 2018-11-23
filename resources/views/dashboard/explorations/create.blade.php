@extends('layouts.admin')
@section('content')
<div class="wrapper">
  <div class="main-panel">
    <!-- Navbar -->
    @include('partials.admin.nav')

    <div class="content">
      <div class="row">
        <div class="col-md-8">
          <h2>Crear Exploracion</h1>
            <div class="card">
              <div class="card-body">
                <form method="POST" action="{{ route('explorations.store') }}" >
                  @csrf

                  <div class="form-group">
                    <label for=""><strong>Nombre</strong></label>
                    {{-- <input type="text" name="name" class="form-control" rows = "20"
                    required = "required" placeholder="Descripción de la exploracion"
                    > --}}
                    <textarea class="form-control" rows="5" id="comment" rows = "10" name="name"
                      required = "required" placeholder="Descripción de la exploracion">
                    </textarea>
                  </div>

                  <div class="form-group">
                    <label for=""><strong>DE</strong></label>
                    <input type="text" name="de" class="form-control" 
                    required = "required" placeholder=""
                    >
                  </div>

                  <div class="form-group">
                    <label for="sel1"><strong>Seleccione Especialidad</strong></label>
                    <select class="js-example-basic-single form-control" 
                      id="sel1" name="specialty_id" required = "required">
                      @foreach($specialties as $item) 
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