@extends('layouts.admin')
@section('content')
<div class="wrapper">
  <div class="main-panel">
    @include('partials.admin.nav')
    {{-- <div class="content"> --}}
    <div class="content">
      <div class="row">
        <div class="col-md-8">
          <h2>Crear Cita</h2>
          
          <div class="card">
            <div class="card-body">
              <input type="hidden" name="url" id="url" value="{{url('')}}">
              <form method="POST" action="{{ route('appointments.store') }}" >
                @csrf
               {{--  <input type="hidden" name="url" id="url" value="{{url('')}}"> --}}
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for=""><strong>Seleccione Doctor</strong></label>
                    <select class="js-example-basic-single form-control" 
                       id="sel1" name="doctor_id" required = "required">
                       @if (count($doctors) > 1){
                           <option value ="0">Seleccione...</option >
                       @endif
                       @foreach($doctors as $item) 
                         <option value ="{{ $item->id }}">
                           {{ $item->first_name . " " . $item->last_name }}
                         </option>
                       @endforeach
                    </select>
                  </div>

                  <div class="form-group col-sm-6">
                      <label for=""><strong>Seleccione especialidad del Doctor</strong></label>
                      <select class="js-example-basic-single form-control"
                        id="sel1" name="doctor_specialty_id" required>
                        @if (count($doctorspecialty) > 1){
                           <option value ="0">Seleccione especialidad del doctor...</option >
                        @endif
                        {{-- <option>Seleccione especialidad del doctor</option> --}}
                          @foreach($doctorspecialty as $item) 
                            <option value ="{{ $item->id }}">
                              {{ $item->name }}
                            </option>
                          @endforeach 
                      </select>
                  </div>
                </div>
               
                <div class="form-group">
                  <label for=""><strong>Seleccione Paciente</strong></label>
                  <select class="js-example-basic-single form-control" 
                     id="sel1" name="clinical_patient_id" required = "required">
                     @if (count($patients) > 1){
                         <option value ="">Seleccione paciente...</option >
                     @endif
                     
                     @foreach($patients as $item) 
                       <option value ="{{ $item->id }}">
                         {{ $item->first_name . " " . $item->last_name }}
                       </option>
                     @endforeach
                  </select>
                </div>

                <div class="row">
                  <div class="form-group col-sm-6">
                      <label for=""><strong>Seleccione seguro medico</strong></label>
                      <select class="js-example-basic-single form-control" id="sel1" name="insurance_id" 
                          required = "required">
                          @if(count($insurances) > 1)
                             <option value = 0><strong>Seleccione su Seguro Medico</strong></option>
                          @endif
                          
                          @foreach($insurances as $item)
                             <option value ="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                      </select>
                  </div>
                  
                  <div class="form-group col-sm-6">                  
                    <label for=""><strong>Fecha de la Consulta</strong></label>
                    <input id="appointment_date" type="date" name = "appointment_date"
                           class="form-control" 
                           value="@php echo date("Y-m-d")@endphp"> 
                  </div>
                </div>

                <div class="form-group">                  
                    <label for=""><strong>Hora de la Consulta</strong></label>
                    <strong>
                        <input type="text" name = "time_consultation"
                            class="form-control" 
                            value="@php echo date("H:m")@endphp"> 
                    </strong>
                </div>

                <div class="form-group">
                  <label for=""><strong>Motivo de la consulta</strong></label>
                  <strong>
                      <input type="text" name="reason_consultation" class="form-control">
                  </strong>
                </div>

                <div class="form-group">
                  <center>
                   <button type="submit" id = "salvar" class="btn btn-primary" >Guardar</button>
                  </center>
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
           // $('#sel1').on('change',function(){
           //     var optionText = $("#sel1 option:selected").text();
           //     var id = $("#sel1 option:selected").val();
           // });

                
        }); 


  </script>

@stop
