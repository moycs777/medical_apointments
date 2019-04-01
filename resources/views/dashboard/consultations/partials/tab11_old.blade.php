

{{-- <input type="hidden" name="url" id="url" value="{{url('')}}"> --}}

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label>Numero/codigo de la cita</label>
    
     <input id="appointment_id"
        type="text" class="form-control" name="appointment_id" 
        value="{{ $consultation->appointment_id }}" disabled 
     >
     @if ($errors->has('appointment_id'))
         <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('appointment_id') }}</strong>
         </span>
     @endif 
  </div>
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label for="">Fecha de la consulta</label>
    <input type="text" class="form-control"
        name="date_consultation" value="{{ $consultation->date_consultation }}"  disabled
    >
  </div>
</div>

<div class="col-md-4">
   <input id="x" type="hidden" name="codigo_paciente" value="{{ $appointment->clinical_patient_id }}" >
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label>Nombre del paciente</label>
    <input id="clinical_patient_full_name"
        type="text" class="form-control" name="clinical_patient_id" disabled
        value="{{ $appointment->clinical_patient->first_name . " " . $appointment->clinical_patient->last_name }}" required
    >
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
        value="{{ $consultation->reason_consultation }}" required
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
    <label>Enfermedad Actual</label>
        
    <input id="disease"
        type="text" class="form-control {{ $errors->has('disease') ? ' is-invalid' : '' }}"
        placeholder="Describa enfermedad"  name="disease" value="{{ $consultation->disease }}">
    @if ($errors->has('disease'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('disease') }}</strong>
        </span>
    @endif
  </div>
</div>

 
<div class="col-md-12">
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