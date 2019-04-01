
<input type="hidden" name="url" id="url" value="{{url('')}}">

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label>Numero/codigo de la cita</label>
     <input type = "hidden" id="appointment_id"
        class="form-control" name="appointment_id" 
        value="{{ $consultation->appointment_id }}" 
     >
     <input type="text" class="form-control" value="{{ $consultation->appointment_id }}" disabled>
     @if ($errors->has('appointment_id'))
         <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('appointment_id') }}</strong>
         </span>
     @endif 
  </div>
</div>

<input type = "hidden" id="date_consultation" class="form-control" name="date_consultation" 
        value="{{ $consultation->date_consultation }}" 
>
<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label for="">Fecha de la consulta</label>
    <input type="text" class="form-control" 
       value="{{Carbon\Carbon::parse($consultation->date_consultation)->format('d-m-Y')}}" disabled>
    </div>
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label>Nombre del paciente</label>
    <input id="clinical_patient_full_name"
        type="text" class="form-control" name="clinical_patient_id" disabled
        value="{{ $appointment->clinical_patient->first_name . " " . $appointment->clinical_patient->last_name }}" 
    >
  </div>
</div>
<div class="col-md-4 pr-md-1">
   <input id="x" type="hidden" name="codigo_paciente" value="{{ $appointment->clinical_patient_id }}" >
</div>

<div class="col-md-12 pr-md-1">
  <div class="form-group">
    <label>Motivo de la consulta</label>
    <input id="reason_consultation"
        type="text"
        class="form-control {{ $errors->has('reason_consultation') ? ' is-invalid' : '' }}"
        placeholder="Describa motivo de la consulta"
        name="reason_consultation"
        value="{{ $consultation->reason_consultation }}" required
    >
    @if ($errors->has('reason_consultation'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('reason_consultation') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12 pr-md-1">
  <div class="form-group">
    <label>Enfermedad actual</label>
    <input id="current_illness"
        type="text"
        class="form-control {{ $errors->has('current_illness') ? ' is-invalid' : '' }}"
        placeholder="Describa enfermedad actual"
        name="current_illness"
        value="{{ $consultation->current_illness }}" required
    >
    @if ($errors->has('reason_consultation'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('current_illness') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12 pr-md-1">
  <div class="form-group">
    <label>Antecedentes Personales</label>
    <textarea class="form-control" name="personal_history" 
    placeholder="Antecedentes personales" rows = '10' required = "required" 
    style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px 
    solid #dddddd; padding: 10px;" id="personal_history" 
    value = "{{ $consultation->personal_history }}" >{!! $appointment->clinical_patient->personal_history !!}
    </textarea>
    @if ($errors->has('personal_history'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('personal_history') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12 pr-md-1">
  <div class="form-group">
    <label>Antecedentes Familiares</label>
    <textarea class="form-control" name="family_background" 
      placeholder="Antecedentes familiares" rows = '10' required = "required" 
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px 
      solid #dddddd; padding: 10px;" id="family_background" 
      value ="{!! $consultation->family_background !!}}" >{!! $appointment->clinical_patient->family_background !!}
    </textarea>

    @if ($errors->has('family_background'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('family_background') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="row">
  <div class="col-md-3 pr-md-1">
    <div class="form-group">
      <label>Peso</label>
      <input id="weight" maxlength="10"
          type="text" class="form-control {{ $errors->has('weight') ? ' is-invalid' : '' }}"
          placeholder="Indique el peso" name="weight" value="{{$consultation->weight }}">
      @if ($errors->has('weight'))
          <span style="color: red; class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('weight') }}</strong>
          </span>
      @endif
    </div>
  </div>

  <div class="col-md-3 pr-md-1">
    <div class="form-group">
      <label>Talla</label>
      <input id="size" maxlength="10"
          type="text" class="form-control {{ $errors->has('size') ? ' is-invalid' : '' }}"
          placeholder="Describa la talla" name="size" value="{{$consultation->size }}">
      @if ($errors->has('size'))
          <span style="color: red; class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('size') }}</strong>
          </span>
      @endif
    </div>
  </div>

  <div class="col-md-3 pr-md-1">
    <div class="form-group">
      <label>Presion sistolica</label>
      <input id="systolic_pressure" maxlength="10"
          type="text" class="form-control {{ $errors->has('systolic_pressure') ? ' is-invalid' : '' }}"
          placeholder="Indique la presion sistolica" name="systolic_pressure" 
          value="{{ $consultation->systolic_pressure }}">
          {{-- value="{{ $appointment->clinical_patient->systolic_pressure }}"> --}}
      @if ($errors->has('systolic_pressure'))
          <span style="color: red; class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('systolic_pressure') }}</strong>
          </span>
      @endif
    </div>
  </div>

  <div class="col-md-3 pr-md-1">
    <div class="form-group">
      <label>Presion diastolica</label>
      <input id="diastolic_pressure" maxlength="10"
          type="text" class="form-control {{ $errors->has('diastolic_pressure') ? ' is-invalid' : '' }}"
          placeholder="Describa la talla" name="diastolic_pressure" 
          value = "{{ $consultation->diastolic_pressure }}"
          {{-- value="{{ $appointment->clinical_patient->diastolic_pressure }}"> --}}
      @if ($errors->has('diastolic_pressure'))
          <span style="color: red; class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('diastolic_pressure') }}</strong>
          </span>
      @endif
    </div>
  </div>
</div>

<div class="col-md-12 pr-md-1">
  <div class="form-group">
    <label for="sel1"><strong>Exploracion</strong></label>
    <select class="form-control" id="asd" name="exploration_id" required = "required">
      @foreach($explorations as $item)
          <option 
             value ="{{ $item->id }}"
             @if($item->id == $consultation->exploration_id) 
                selected='selected' 
             @endif>
             {{ $item->name }} 
          </option>
      @endforeach 
    </select>
  </div>
</div>

<input type = "hidden" name = "status" value = "{{ $consultation->status }}">
<input type = "hidden" name = "nrocita" value = "{{ $consultation->appointment_id }}">


@section('page-script')
  <script type="text/javascript">
    console.log("pacientes ");
     $(document).ready(function() {  
        
         var a = new Array();
         var i = 0;
         var aa = '';
         $('.js-example-basic-single').select2();
               
         $('#qwe').select2();
         $('#asd').select2();
         $('#appointment_id').select2();
         $('#seldisease').select2();

         
         $('#sel1').on('change',function(){
            //var n = $(this).val();
            //var optionText = $('#dropdownList option[value="'+optionValue+'"]').text();
            var optionText = $("#sel1 option:selected").text();
            var id = $("#sel1 option:selected").val();
         });

         
         //tab 1
         $("select[name=subpatology_id]").change(function(){
             Mostrar_Recipe($('select[name=subpatology_id]').val());
         });

         function Mostrar_Recipe(pid){
           var route = $('#url').val()+'/office/consultations_mostrar_recipe/' + pid;
           $.get(route,function(res){
              $("#recipe").val($.trim(res.recipe));
              $("#prescription").val($.trim(res.prescription));
           });
         }
                

        $("#appointment_id").change(function(){
             //alert("Hola");
            console.log("appointment_id :" + $('select[name=appointment_id]').val() );
            Mostrar_Paciente($('select[name=appointment_id]').val());
        });

        function Mostrar_Paciente(pid){

            var route = $('#url').val() + '/office/consultations_mostrar_paciente/' + pid;
            $.get(route,function(datos){
                console.log("Retorno :" + JSON.stringify(datos[0]));
                $("#clinical_patient_full_name").val(datos[0].first_name + " " + datos[0].last_name);
                $("#reason_consultation").val(datos[0].reason_consultation);
                $("#personal_history").val(datos[0].personal_history);
                $("#family_background").val(datos[0].family_background);
            });
        }

        
    }); 
  </script>
@stop
