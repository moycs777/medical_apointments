@extends('layouts.admin')
@section('content')
<div class="wrapper">
  <div class="main-panel">
    @include('partials.admin.nav')
    <div class="content">
      <div class="row">
        <div class="col-md-8">
          <h2>Crear Cita</h2>

          <div class="card">
            <div class="card-body">
              <form method="POST" action="{{ route('appointments.store') }}" >
                @csrf
                <input type="hidden" name="url" id="url" value="{{url('')}}">

                <div class="form-group">
                  <label for="">Seleccione Doctor</label>
                  <select class="js-example-basic-single form-control" 
                     id="sel1" name="doctor_id" required = "required">
                     <option value ="0">Seleccione...</option >
                     @foreach($doctors as $item) 
                       <option value ="{{ $item->id }}">
                         {{ $item->first_name . " " . $item->last_name }}
                       </option>
                     @endforeach
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="">Fecha de la Consulta</label>
                  <input id="appointment_date" type="date" name = "appointment_date"
                         class="form-control" 
                         value="@php echo date("Y-m-d")@endphp"> 
                </div>

                <div class="form-group">
                  <label for="">Motivo de la consulta</label>
                  <input type="text" name="reason_consultation" class="form-control">
                </div>

                <div class="form-group">
                  <label for="">Fecha</label>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table tablesorter" id="datos">
                        <thead class=" text-primary">
                          <tr>
                            <th> Dia</th>
                            <th> Hora Desde </th>
                            <th> Hora hasta</th>
                            <th> Hora Desde </th>
                            <th> Hora hasta</th>
                            <th class="text-center"> Estatus</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            {{-- <td> </td>
                            <td> </td>
                            <td> </td>
                            <td class="text-center"> </td> --}}
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                   <button type="submit" id = "salvar" class="btn btn-primary">Guardar</button>
                </div>

                <div class="form-group">
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
             var id = $("#sel1 option:selected").val();
             mostrarHorario(id);
           });

           $('.js-example-basic-single').select2();
           //mostrarHorario();
          function mostrarHorario(id){
              var tablaDatos = $("#datos");
              var route = $('#url').val()+'/office/medical_schedules_ver_horario/'+id;
              var dias = [ 'Lunes', 'Martes','Miercoles', 'Jueves','Viernes', 'Sabado','Domingo' ];
              var i = 0;
              console.log("la url "+route);
              eliminaFilas();

              $.get(route,function(res){
                res.forEach(function(res) {
                //console.log("respuesta: "+JSON.stringify(res));
                var entro = false
                if ((res.status_1 ==  1) && (res.status_2 ==  1) && 
                   (parseInt(res.hour_from_1) > 0) && (parseInt(res.hour_until_1) > 0) && 
                   (parseInt(res.hour_until_2) > 0) && (parseInt(res.hour_until_2) > 0)) {
                   tablaDatos.append("<tr><td>" + dias[res.day] + "</td>"  + 
                      "<td>" + res.hour_from_1 + ":" + res.minutes_from_1 + "</td>"  +
                      "<td>" + res.hour_until_1 + ":" + res.minutes_until_1 + "</td>"  +
                      "<td><input type = 'radio' name = 'status' value='M' id= 'status['" + 
                      i + "]'></td>" +
                      "<td>" + res.hour_from_2 + ":" + res.minutes_from_2 + "</td>"  +
                      "<td>" + res.hour_until_2 + ":" + res.minutes_until_2 + "</td>"  +
                      "<td class='text-center'>" + 
                      "<input type = 'radio' name = 'status' value='T'" + 
                      parseInt(res.id) + 1 + " id='status['" + i + 1 +"]'></td>" +
                      "</tr>");
                      i = i + 2 ;           
                }
                 if ((res.status_1 ==  1) && (res.status_2 ==  0) &&
                   (parseInt(res.hour_from_1) > 0) && (parseInt(res.hour_until_1) > 0)) { 
                   tablaDatos.append("<tr><td>" + dias[res.day] + "</td>"  + 
                      "<td>" + res.hour_from_1 + ":" + res.minutes_from_1 + "</td>"  +
                      "<td>" + res.hour_until_1 + ":" + res.minutes_until_1 + "</td>"  +
                      "<td><input type = 'radio' name = 'status' value='M' id= 'status['" + 
                      i + "]'></td>" +
                      "<td></td>"  + "<td></td>"  +
                      "<td class='text-center'>" + 
                      "<input type = 'radio' name = 'status' value='T' style = 'display:none;'" + 
                      parseInt(res.id) + 1 + " id='status['" + i + 1 +"]'></td>" +
                      "</tr>");
                      i++; 
                 }
                
                style='display:none;'
                if ((res.status_1 ==  0) && (res.status_2 ==  1) && 
                   (parseInt(res.hour_from_2) > 0) && (parseInt(res.hour_until_2) > 0)) { 
                   tablaDatos.append("<tr><td>" + dias[res.day] + "</td>"  + 
                      "<td>" + res.hour_from_2 + ":" + res.minutes_from_2 + "</td>"  +
                      "<td>" + res.hour_until_2 + ":" + res.minutes_until_2 + "</td>"  +
                      "<td></td>"+
                      "<td></td>"+
                      "<td class='text-center'>" +
                      "<td><input type = 'radio' name ='status' value='T' id='status['" + 
                      i + "]'>" +"</td></tr>");
                      i++;  
                }
                
              });
           });
          }

          function eliminaFilas() {
            //OBTIENE EL NÚMERO DE FILAS DE LA TABLA
            var n=0;
            var i=0;
            $("#datos tbody tr").each(function () {
               n++;
            });
            //BORRA LAS n-1 FILAS VISIBLES DE LA TABLA
            //LAS BORRA DE LA ULTIMA FILA HASTA LA PRIMERA
            for(i=n-1;i>0;i--) {
                $("#datos tbody tr:eq('"+i+"')").remove();
            };
          };

          $("#salvar").click(function () {
            recorrer();

          });



         function recorrer(){

             $('input:radio').each(function() {
                if($(this).is(':checked')) {
                    alert("Hola");
                } 
                else {
                  alert("Holabbbb"); 
                }
             }); 
         }

        }); 


  </script>

@stop
