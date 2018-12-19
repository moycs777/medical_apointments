@extends('layouts.admin')
@section('content')
<div class="wrapper">
  <div class="main-panel">
       <!-- Navbar -->
    @include('partials.admin.nav')
    <div class="content">
      <div class="row">
        <div class="col-md-8">
          <h2>Crear Especialidad de Doctores</h1>
          <div class="card">
            <div class="card-body">
              <form method="POST" action="{{ route('doctorspecialties.store',$doctorspecialties->id) }}" >

                @csrf
                {{ method_field('PUT') }}
                
                <div class="form-group">
                  <label for="sel1"><strong>Seleccione Doctor</strong></label>
                  <select class="form-control" id="sel1" name="doctor_id">
                    @foreach($doctors as $item)
                      <option value ="{{ $item->id }}">
                        {{ $item->name }}
                      </option>
                    @endforeach 
                  </select>
                </div>

                <div class="form-group">
                  <label for="sel1"><strong>Seleccione Doctor</strong></label>
                  {{-- <select class="form-control" id="sel1" name="doctor_id"> --}}
                    @foreach($specialties as $item_1)
                      <li>{{ $item_1->name }}</li>
                    @endforeach 
                  {{-- </select> --}}
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