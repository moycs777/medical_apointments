@extends('layouts.admin')
@section('content')
<div class="wrapper">
  <div class="main-panel">
    <!-- Navbar -->
    @include('partials.admin.nav')
    <div class="content">
      <div class="row">
        <div class="col-md-8">
          <h2>Editar exploracion</h1>
            <div class="card">
              <div class="card-body">

                <form method="POST" action="{{ route('explorations.update', $exploration->id) }}" >
                  @csrf
                  {{ method_field('PUT') }}

                  <div class="form-group">
                    <label for=""><strong>Nombre</strong></label>
                    <input type="text" name="name" class="form-control" rows = "20"
                    required = "required" value="{{ $exploration->name }}"
                     placeholder="Descripción de la exploracion"
                    >
                  </div>

                  <div class="form-group">
                    <label for=""><strong>DE</strong></label>
                    <input type="text" name="de" class="form-control" 
                     value="{{ $exploration->de }}"
                    required = "required" placeholder=""
                    >
                  </div>

                  <div class="form-group">
                      <label for="sel1">Seleccione especialidad</label>
                      <select class="js-example-basic-single form-control"  id="sel1" name="specialty_id"
                         required = "required">
                        @foreach($specialties as $item)
                          <option value ="{{ $item->id }}"
                            @if($item->id == $exploration->specialty_id) 
                               selected='selected' 
                            @endif
                          >
                         {{ $item->name }} 
                          </option>
                       @endforeach 
                    </select>
                  </div>            

                  <div class="form-group">
                    <label for=""><strong>Status</strong></label>
                      <input type="checkbox" name="status" value="{{ $exploration->status }}"
                        placeholder="Estatus"  
                        @if ($exploration->status == '1')
                          checked
                        @endif
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

<script type="text/javascript">
  $(document).ready(function() {
     //$('.js-example-basic-single').select2();
  });    
</script>

@stop