@extends('layouts.admin')
@section('content')
<div class="wrapper">
  <div class="main-panel">
    @include('partials.admin.nav')
    <div class="content">
      <div class="row">
        <div class="col-md-8">
          <h2>Editar Citas</h2>

          <div class="card">
            <div class="card-body">
              <form method="POST" action="{{ route('appointments.update',$appointment->id) }}" >
                @csrf
                {{ method_field('PUT') }}

                {{-- <input type="hidden" name="url" id="url" value="{{url('')}}"> --}}

                <div class="form-group">
                  <label for="sel1">Seleccione Doctor</label>
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
                  <label for="sel1">Seleccione Paciente</label>
                    <select class="js-example-basic-single form-control" 
                      id="sel1" name="clinical_patient_id">
                                  
                      @foreach($patients as $item) 
                        <option value ="{{ $item->id }}"
                          @if($item->id == "$appointment->clinical_patient_id") 
                            selected='selected' 
                          @endif
                        >
                        {{ $item->first_name . " " . $item->last_name}} 
                        </option>
                      @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                  <label for=""><strong>Fecha de la Consulta</strong></label>
                  <input id="appointment_date" type="date" name = "appointment_date"
                         class="form-control" 
                         value="{{ $appointment->appointment_date }}"
                         > 
                </div>

                <div class="form-group">
                  <label for=""><strong>Motivo de la consulta</strong></label>
                  <input type="text" name="reason_consultation" class="form-control"
                  value = "{{ $appointment->reason_consultation }}">
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
