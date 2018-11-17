@extends('layouts.admin')
@section('content')
<div class="wrapper">
  <div class="main-panel">
    @include('partials.admin.nav')
    <div class="content">
      <div class="row">
        <div class="col-md-8">
          <h2>Crear Cita</h1>
          <div class="card">
            <div class="card-body">
              <form method="POST" action="{{ route('appointments.store') }}" >
                @csrf

                <div class="row">
                  <div class="col-md-8 pl-md-1">
                    <div class="form-group">
                      <label for="sel1"><strong>Seleccione Doctor</strong></label>
                      <select class="js-example-basic-single form-control" 
                         id="sel1" name="doctor_id" required = "required">
                         @foreach($doctors as $item) 
                           <option value ="{{ $item->id }}">
                             {{ $item->first_name . " " . $item->last_name }}
                           </option>
                         @endforeach
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Fecha de la Consulta</strong></label> 
                      <input id="date" type="date" name = "appointment_date"
                         class="form-control" 
                         value="@php echo date("Y-m-d")@endphp">
                    </div>  
                  </div>
                </div>
                   
                <div class="row">
                  <div class="col-md-12 pl-md-1">
                    <div class="form-group">
                      <label for="sel1"><strong>Motivo de la consulta</strong></label>
                      <input type="text" name="reason_consultation" class="form-control">
                    </div>
                  </div>
                </div>
                
                <table class="table tablesorter">
                    <thead>
                      <tr>
                        <th>Dia</th>
                        <th>Hora Desde</th>
                        <th>Hora Hasta</th>
                        <th>Estatus</th>
                        <th colspan="2"></th>
                      </tr>
                    </thead>
                    {{-- @foreach($appointments as $item)
                    <tbody>
                      <tr>
                      </tr>
                    </tbody>
                    @endforeach --}}
                </table>

                <div class="form-group">
                  <label>
                  <input type="checkbox" name ="oms" class ="checkbox" value="1"> 
                  </label>
                </div>

                <div class="form-group">
                  <label>
                  <input type="checkbox" name ="particular" class ="checkbox" 
                     value="1">  Particular
                  </label>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <input type="button" value ="Ver Horario" class="btn btn-primary"></button>
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


         $(".checkbox").on( 'change', function() {
            if( $(this).is(':checked') ) {
            // Hacer algo si el checkbox ha sido seleccionado
                $(this).prop("checked","1")
                // alert("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
            } else {
            // Hacer algo si el checkbox ha sido deseleccionado
                $(this).val('0');
                $(this).prop("unchecked","0")
                //alert("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");
            }
        });

        $(document).ready(function() {

           $('#sel1').on('change',function(){
           //var n = $(this).val();
           //var optionText = $('#dropdownList option[value="'+optionValue+'"]').text();
           var optionText = $("#sel1 option:selected").text();
           var n = $("#sel1 option:selected").val();
           //alert("Selected Option Text: " + optionText + " " + n);
           });

           $('.js-example-basic-single').select2();
        }); 
  </script>

@stop
