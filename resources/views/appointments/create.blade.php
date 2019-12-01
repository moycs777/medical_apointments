@extends('layouts.web.web')

@section('content')

  <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
    <div class="clearfix hidden-xl-up"></div>

    <div class="container">
       <div class="clearfix hidden-xl-up"></div>

       <div class="row">
          <div class="col-md-2 col-xl-2">
            <div class="container">
              <h3 class="p-y-1 text-xs-center">Crea tu <strong>Cita</strong></h3>
            </div>
          </div>

          <div class="col-md-8 col-xl-8">
             <form method="POST" action="{{ route('appoints.store') }}" >
                @csrf
                <div class="card card-chart">
                  <ul class="list-group">
                    <li class="list-group-item">
                       <span class="icon-status status-completed"></span>
                       <select class="js-example-basic-single" id="sel1" name="doctor_id">
                          @if(count($doctors) > 1)
                             <option value = 0><strong>Seleccione su doctor</strong></option>
                          @endif
                          @foreach($doctors as $item)
                            <option value ="{{ $item->id }}">{{ $item->first_name }}, {{ $item->last_name }}</option>
                          @endforeach
                       </select>
                    </li>

                    <li class="list-group-item">
                        <span class="icon-status status-completed"></span>
                        <select class="js-example-basic-single" id="sel2" name="doctor_specialty_id">
                           {{-- <option><strong>Seleccione especialidad del doctor</strong></option> --}}
                           @if(count($doctorspecialty) > 1)
                             <option value = 0><strong>Seleccione especialidad del doctor</strong></option>
                           @endif
                           @foreach($doctorspecialty as $item)
                              <option value ="{{ $item->id }}">{{ $item->name }}</option>
                           @endforeach
                        </select>
                    </li>

                    <li class="list-group-item">
                        <span class="icon-status status-completed"></span>
                        <select class="js-example-basic-single" id="sel1" name="insurance_id">
                          @if(count($insurances) > 1)
                             <option value = 0><strong>Seleccione su Seguro Medico</strong></option>
                          @endif
                          {{-- <option><strong>Seleccione su Seguro Medico</strong></option> --}}
                            @foreach($insurances as $item)
                              <option value ="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </li>

                    <li class="list-group-item">
                        <span class="icon-status status-completed"></span>
                        <input type="text" name="reason_consultation" placeholder="Motivo de consulta"/>
                    </li>

                    <li class="list-group-item">
                        <span class="icon-status status-noticket"></span>
                        <input type="date" id ="appointment_date" name="appointment_date" min="2019-11-02">
                    </li>

                    <li>
                        <button type="submit" id = "salvar" class="btn btn-primary">Guardar</button>
                    </li>
                    <input type="hidden" name = "status" value = "pendiente">
                    <input type="hidden" name="clinical_patient_id" value="{{ Auth::user()->id }}" />
                  </ul>
                </div>
             </form>
          </div>
       </div>
    </div>
  </header>


@endsection()

@section('page-script')

<script type="text/javascript">


  $(document).ready(function() {

    console.log("wwww");

     $('.js-example-basic-single').select2();

      //alert("Hola");
      // $("#doctor_id").change(function(){
      //        //alert("Hola");
      //        especialidad_doctor($('select[name=doctor_id]').val());
      // });

      //   function especialidad_doctor(pid){

      //       var roumte = $('#url').val() + '/office/consultations_especialidad_doctor/' + pid;
      //       $.get(route,function(datos){
      //           console.log("Retorno :" + JSON.stringify(datos[0]));
      //           $("#clinical_patient_full_name").val(datos[0].first_name + " " + datos[0].last_name);
      //           $("#reason_consultation").val(datos[0].reason_consultation);
      //           $("#personal_history").val(datos[0].personal_history);
      //           $("#family_background").val(datos[0].family_background);
      //       });
      //   }
       $('body').on('focus',"#appointment_date", function(){
        $(this).datepicker();

      });

      $("#appointment_date").click(function(){
         
      });
     
  });
</script>

@stop

