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
                <input type="hidden" name="url" id="url" value="{{url('')}}">
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
                
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
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
                        <tbody  id = "datos"></tbody>
                      </table>
                    </div>
                  </div>
                </div>
                {{-- <div class="form-group">
                  <label>
                  <input type="checkbox" name ="particular" class ="checkbox" 
                     value="1">  Particular
                  </label>
                </div> --}}

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
             mostrarHorario();
            
           });

           $('.js-example-basic-single').select2();
           mostrarHorario();
          function mostrarHorario(){
              var tablaDatos = $("#datos");
              var route = $('#url').val()+'/office/medical_schedules_ver_horario';
              var dias = [ 'Lunes', 'Martes','Miercoles', 'Jueves','Viernes', 'Sabado','Domingo' ];
           
           alert("Hola");
              $.get(route,function(res){
                res.forEach(function(res) {
                //console.log("respuesta: "+JSON.stringify(res));
                var entro = false
                if ((res.status_1 ==  1) && (res.status_2 ==  1) && 
                   (parseInt(res.hour_from_1) > 0) && (parseInt(res.hour_until_1) > 0) && 
                   (parseInt(res.hour_until_2) > 0) && (parseInt(res.hour_until_2) > 0)) {
                   tablaDatos.append("<tr><td>" + dias[res.id-1] + "</td>"  + 
                                     "<td>" + res.hour_from_1 + ":" + res.minutes_from_1 + "</td>"  +
                                     "<td>" + res.hour_until_1 + ":" + res.minutes_until_1 + "</td>"  +
                                     "<td>" + res.hour_from_2 + ":" + res.minutes_from_2 + "</td>"  +
                                     "<td>" + res.hour_until_2 + ":" + res.minutes_until_2 + "</td>"  +
                                     "<td>" + "<input type = 'radio' name = 'status'>" +
                                     "</tr>");
                              
                }
                 if ((res.status_1 ==  1) && (res.status_2 ==  0) &&
                   (parseInt(res.hour_from_1) > 0) && (parseInt(res.hour_until_1) > 0)) { 
                   tablaDatos.append("<tr><td>" + dias[res.id-1] + "</td>"  + 
                                     "<td>" + res.hour_from_1 + ":" + res.minutes_from_1 + "</td>"  +
                                     "<td>" + res.hour_until_1 + ":" + res.minutes_until_1 + "</td>"  +
                                     "<td>" + "<input type = 'radio' name = 'status'>" +
                                     "</tr>");
                 }
                
                if ((res.status_1 ==  0) && (res.status_2 ==  1) && 
                   (parseInt(res.hour_from_2) > 0) && (parseInt(res.hour_until_2) > 0)) { 
                   tablaDatos.append("<tr><td>" + dias[res.id-1] + "</td>"  + 
                                     "<td>" + res.hour_from_2 + ":" + res.minutes_from_2 + "</td>"  +
                                     "<td>" + res.hour_until_2 + ":" + res.minutes_until_2 + "</td>"  +
                                     "<td>" + "<input type = 'radio' name = 'status'>" +
                                     "</tr>");
                }
                
              });
           });
          }
        }); 


  </script>

@stop
