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
              <form method="POST" action="{{ route('doctorspecialties.store') }}" >
                @csrf

                <div class="form-group">
                  <label for="sel1"><strong>{{ $doctor->first_name}} {{ $doctor->last_name}}</strong></label>
                  <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                </div>

                <div class="form-group">
                  <div class="table-responsive ps">
                    <div class="panel-body">
                      <table class="table tablesorter">
                        <thead>
                          <tr>
                            {{-- <th>Id</th> --}}
                            <th>Especialidad</th>
                            <th>Seleccionar</th>
                            <th colspan="1"></th>
                          </tr>
                        </thead>
                        <tbody>
                          @php $i = 0; @endphp
                          @foreach($specialties as $item_1)
                            <tr>
                              @php $i++; @endphp
                              <td>{{ $item_1->name }}</td>
                              <td>
                                <input class = "checkbox" type="checkbox" name = "specialities_ids[]" 
                                  value="{{ $item_1->id }}" 
                                  @foreach ($doctor->specialities as $element)
                                    @if ($element->id == $item_1->id)
                                      checked="true" 
                                    @endif
                                  @endforeach
                                />
                              </td>
                              {{-- <td><input type = "text" name = "xx[]" value="0" id ="y"></td> --}}
                            </tr>
                          @endforeach 
                        </tbody>
                      </table>
                    </div>
                  </div>
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
    $(document).ready(function(){

        $(".checkbox").on( 'change', function() {
            if( $(this).is(':checked') ) {
            // Hacer algo si el checkbox ha sido seleccionado
                $(this).prop("checked","1");
                //$(this).val("1");
                console.log("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
                //alert("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
            } else {
            // Hacer algo si el checkbox ha sido deseleccionado
                //$(this).val('0');
                $(this).prop("unchecked","0")
                //$(this).val("0");
                console.log("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");

                //alert("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");
            }
        });
    });     
  </script>

@stop