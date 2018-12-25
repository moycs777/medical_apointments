@extends('layouts.admin')
@section('content')
<div class="wrapper">
  <div class="main-panel">
    @include('partials.admin.nav')
    <div class="content">
      <div class="row">
        <div class="col-md-8">
          <h2>Editar Citas</h2>
          @php
              $status = array('pendiente','confirmado','en consulta','atendido','anulado');
          @endphp
          <div class="card">
            <div class="card-body">
              <form method="POST" action="{{ route('appointments.update',$appointment->id) }}" >
                @csrf
                {{ method_field('PUT') }}

                {{-- <input type="hidden" name="url" id="url" value="{{url('')}}"> --}}

                <div class="form-group">
                  <label for="sel1"><strong>Seleccione Doctor</strong</label>
                    <select class="js-example-basic-single form-control" 
                      id="sel1" name="doctor_id">
                                  
                      @foreach($doctors as $item) 
                        <option value ="{{ $item->id }}"
                          @if($item->id == "$appointment->doctor_id") 
                            selected='selected' 
                          @endif
                        >
                        {{ $item->first_name . " " . $item->last_name}} 
                        </option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                  <label for="sel1"><strong>Especialidad del Doctor</strong</label>
                    <select class="js-example-basic-single form-control" 
                      id="sel1" name="doctor_specialty_id" required>
                      @foreach($doctorspecialty as $item) 
                        <option value ="{{ $item->id }}"
                          @if($item->id == "$appointment->doctor_specialty_id") 
                            selected='selected' 
                          @endif
                        >
                        {{ $item->name }} 
                        </option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                  <label for="sel1"><strong>Paciente</strong></label>
                  <input type="hidden" name="clinical_patient_id" class="form-control"
                  value = "{{ $appointment->clinical_patient->id }}">
                  <input type="text" name="clinical_patient_id" class="form-control"
                  value = "{{ $appointment->clinical_patient->first_name .' '.$appointment->clinical_patient->last_name  }}" disabled="true">
                </div>
                
                <div class="form-group">
                  <label for=""><strong><strong>Fecha de la Consulta</strong></strong></label>
                  <input id="appointment_date" type="date" name = "appointment_date"
                    class="form-control" 
                     {{-- value="{{ $appointment->appointment_date }}" --}}
                    value="{{date('Y-m-d', strtotime($appointment->appointment_date))}}"
                  > 
                </div>

                <div class="form-group">
                  <label for=""><strong><strong>Motivo de la consulta</strong></strong></label>
                  <input type="text" name="reason_consultation" class="form-control"
                  value = "{{ $appointment->reason_consultation }}">
                </div>

                <div class="form-group">
                  <label for=""><strong>Status de la consulta</strong></label>
                  <select class="form-control" name="status">

                    @php
                      foreach ($status as $item){
                        $cad = $item; 
                        $a = "";
                        $a = "<option value ='";
                        $a = $a . $cad . "'";
                        if($appointment->status == $cad){
                            $a = $a . " selected='selected' ";
                        }
                        echo  $a . ">" . $cad . "</option>";
                      }
                    @endphp
                    
                  </select>
                </div>

                <div class="form-group">
                   <button type="submit" id = "salvar" class="btn btn-primary">Guardar</button>
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

           // $('#sel1').on('change',function(){
           //   //var n = $(this).val();
           //   //var optionText = $('#dropdownList option[value="'+optionValue+'"]').text();
           //   var optionText = $("#sel1 option:selected").text();
           //   var id = $("#sel1 option:selected").val();
            
           // });

           $('.js-example-basic-single').select2();
          

        }); 


  </script>

@stop
