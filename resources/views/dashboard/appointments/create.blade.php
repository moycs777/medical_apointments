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
                  <label for=""><strong>Seleccione Doctor</strong></label>
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
                  <label for=""><strong>Seleccione Paciente</strong></label>
                  <select class="js-example-basic-single form-control" 
                     id="sel1" name="clinical_patient_id" required = "required">
                     <option value ="0">Seleccione...</option >
                     @foreach($patients as $item) 
                       <option value ="{{ $item->id }}">
                         {{ $item->first_name . " " . $item->last_name }}
                       </option>
                     @endforeach
                  </select>
                </div>
                
                <div class="form-group">
                  <label for=""><strong>Fecha de la Consulta</strong></label>
                  <input id="appointment_date" type="date" name = "appointment_date"
                         class="form-control" 
                         value="@php echo date("Y-m-d")@endphp"> 
                </div>

                <div class="form-group">
                  <label for=""><strong>Motivo de la consulta</strong></label>
                  <input type="text" name="reason_consultation" class="form-control">
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

           $('#sel1').on('change',function(){
             //var n = $(this).val();
             //var optionText = $('#dropdownList option[value="'+optionValue+'"]').text();
             var optionText = $("#sel1 option:selected").text();
             var id = $("#sel1 option:selected").val();
            
           });

           $('.js-example-basic-single').select2();
          

        }); 


  </script>

@stop
