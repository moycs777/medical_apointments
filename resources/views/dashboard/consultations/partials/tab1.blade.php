<input type="hidden" name="url" id="url" value="{{url('')}}">

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label>Numero/codigo de la cita</label>
    <select class="js-example-basic-single form-control" id="appointment_id" name="appointment_id">
        <option value="0">seleccione</option>
        @foreach($appointments as $item)
           <option value ="{{ $item->id }}">
              {{ $item->id . "              " . $item->first_name ." " . $item->last_name }}
           </option>
        @endforeach
    </select>
  </div>
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label for="">Fecha de la consulta</label>
    <input id="date_consultation"
        type="text"
        class="form-control {{ $errors->has('date_consultation') ? ' is-invalid' : '' }}"
        placeholder="Fecha de la consulta"
        name="date_consultation"
        value="@php echo date("Y-m-d") @endphp" required = "require" readonly
    >
    @if ($errors->has('date_consultation'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('date_consultation') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label>Nombre del paciente</label>
    <input id="clinical_patient_full_name"
        type="text"
        class="form-control {{ $errors->has('clinical_patient_id') ? ' is-invalid' : '' }}"
        placeholder="" name="clinical_patient_id" disabled 
        value="{{ old('clinical_patient_id') }}" required
        >
    @if ($errors->has('clinical_patient_id'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('clinical_patient_id') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Motivo de la consulta</label>
    <input id="reason_consultation"
        type="text"
        class="form-control {{ $errors->has('reason_consultation') ? ' is-invalid' : '' }}"
        placeholder="Describa motivo de la consulta"
        name="reason_consultation"
        value="{{ old('reason_consultation') }}" required
    >
    @if ($errors->has('reason_consultation'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('reason_consultation') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Enfermedad actual</label>
    <input id="current_illness"
        type="text"
        class="form-control {{ $errors->has('current_illness') ? ' is-invalid' : '' }}"
        placeholder="Describa enfermedad actual"
        name="current_illness"
        value="{{ old('current_illness') }}" required
    >
    @if ($errors->has('current_illness'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('current_illness') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Antecedentes Personales</label>
     <textarea class="form-control" name="personal_history" 
      placeholder="Antecedentes personales" rows = '10'  
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px 
      solid #dddddd; padding: 10px;" id="personal_history" >
    </textarea>
    @if ($errors->has('personal_history'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('personal_history') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Antecedentes Familiares</label>
    <textarea class="form-control" name="family_background" 
      placeholder="Antecedentes familiares" rows = '10'  
      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px 
      solid #dddddd; padding: 10px;" id="family_background" >
    </textarea>

    @if ($errors->has('family_background'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('family_background') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-3">
  <div class="form-group">
    <label>Peso</label>
    <input id="weight" maxlength="10"
        type="text" class="form-control {{ $errors->has('weight') ? ' is-invalid' : '' }}"
        placeholder="Indique el peso" name="weight" value="{{ old('weight') }}">
    @if ($errors->has('weight'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('weight') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-3">
  <div class="form-group">
    <label>Talla</label>
    <input id="size" maxlength="10"
        type="text" class="form-control {{ $errors->has('size') ? ' is-invalid' : '' }}"
        placeholder="Describa la talla" name="size" value="{{ old('size') }}">
    @if ($errors->has('size'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('size') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-3">
  <div class="form-group">
    <label>Presion sistolica</label>
    <input id="systolic_pressure" maxlength="10"
        type="text" class="form-control {{ $errors->has('systolic_pressure') ? ' is-invalid' : '' }}"
        placeholder="Indique la presion sistolica" name="systolic_pressure" value="{{ old('systolic_pressure') }}">
    @if ($errors->has('systolic_pressure'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('systolic_pressure') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-3">
  <div class="form-group">
    <label>Presion diastolica</label>
    <input id="diastolic_pressure" maxlength="10"
        type="text" class="form-control {{ $errors->has('diastolic_pressure') ? ' is-invalid' : '' }}"
        placeholder="Indique la presion sistolica" name="diastolic_pressure" value="{{ old('diastolic_pressure') }}">
    @if ($errors->has('diastolic_pressure'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('diastolic_pressure') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Exploracion</label>
    <select class="form-control" id="asd" name="exploration_id">
      <option value="0">Seleccione</option>
         @foreach($explorations as $item)
           <option value ="{{ $item->id }}">
              {{ $item->name }}
           </option>
        @endforeach
     </select>
  </div>
</div>

{{-- @section('page-script')
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
 --}}
