<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label for="">Numero/codigo de la cita</label>
    <input id="appointment_number"
        type="text"
        class="form-control {{ $errors->has('appointment_number') ? ' is-invalid' : '' }}"
        placeholder="fieldName"
        name="appointment_number"
        value="{{ old('appointment_number') }}" required
    >
    @if ($errors->has('appointment_number'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('appointment_number') }}</strong>
        </span>
    @endif
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
        value="@php echo date("d-m-Y") @endphp" required = "require" disabled
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
    <input id="clinical_patient_id"
        type="text"
        class="form-control {{ $errors->has('clinical_patient_id') ? ' is-invalid' : '' }}"
        placeholder=""
        name="date_consultation"
        value="{{ old('clinical_patient_id') }}" required
    >
    @if ($errors->has('clinical_patient_id'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('clinical_patient_id') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-10 col-md-10-offset-2">
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

<div class="col-md-10 col-md-10-offset-2">
  <div class="form-group">
    <label>Enfermedad</label>
    
    <textarea class="form-control" name="disease"
      placeholder="Enfermedad" rows = '2'  
      style="width: 100%; height: 50px; font-size: 14px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="disease" >
    </textarea>
    @if ($errors->has('disease'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('disease') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-10 col-md-10-offset-2">
  <div class="form-group">
    <div class="form-group">
       <label for="sel1"><strong>Seleccione la exploracion</strong></label>
         <select class="form-control" id="sel1" name="exploration_id">
            @foreach($explorations as $item)
               <option value ="{{ $item->id }}">
                  {{ $item->name }}
               </option>
            @endforeach 
         </select>
    </div>
    
    @if ($errors->has('exploration_id'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('exploration_id') }}</strong>
        </span>
    @endif
  </div>
</div> 

<div class="col-md-10 col-md-10-offset-2">
  <div class="form-group">
    <label>Diagnostico</label>
    <textarea class="form-control" name="diagnosis"
      placeholder="Diagnostico" rows = '5' required = "required" 
      style="width: 100%; height: 50px; font-size: 14px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="diagnosis" >
    </textarea>
    @if ($errors->has('diagnosis'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('diagnosis') }}</strong>
        </span>
    @endif
  </div>
</div>

{{-- Subpatologia --}}
<div class="col-md-12">
  <div class="form-group">
    <div class="form-group">
       <label for="sel2"><strong>Seleccione subpatologia</strong></label>
         <select class="js-example-basic-single form-control" id="sel2" name="subpatology">
            @foreach($subpatologies as $item)
               <option value ="{{ $item->id }}">
                  {{ $item->recipe }}
               </option>
            @endforeach 
         </select>
    </div>
    
    @if ($errors->has('id'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('id') }}</strong>
        </span>
    @endif
  </div>
</div> 


<div class="col-md-6 pr-md-1">
  <div class="form-group">
    <label for="">Recipe</label>
    <textarea class="form-control" name="recipe"
      placeholder="Recipe" rows = '5' required = "required" 
      style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="recipe" >
    </textarea>
    @if ($errors->has('recipe'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('recipe') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-6 pr-md-1">
  <div class="form-group">
    <label for="">Indicaciones</label>
    <textarea class="form-control" name="prescription"
      placeholder="Describa las indicaciones" rows = '5' required = "required" 
      style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="prescription" >
    </textarea>
    @if ($errors->has('prescription'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('prescription') }}</strong>
        </span>
    @endif
  </div>
</div>

@section('page-script')

  <script type="text/javascript">

        $(document).ready(function() {

          // $('#sel1').on('change',function(){
          //    //var n = $(this).val();
          //    //var optionText = $('#dropdownList option[value="'+optionValue+'"]').text();
          //    var optionText = $("#sel1 option:selected").text();
          //    var id = $("#sel1 option:selected").val();
          //    alert("Selecciono 1");
          // });

          $("select[name=subpatology]").change(function(){
            //alert($('select[name=subpatology]').val());
            Mostrar_Recipe($('select[name=subpatology]').val());
            // $('input[name=valor1]').val($(this).val());
            //alert("Selecciono 2");
          });

          // $("#recipe").click(function(){
          //   $("#sel1").select();
          //   alert("Selecciono 2");
          // });

          // $("#sel1").select(function(){
          //   alert("Texto seleccionado 3");
          // });
     
          function Mostrar_Recipe(pid){
             var route = $('#url').val()+'/office/consultations_mostrar_recipe/'+pid;
             //alert("Hola "+pid);
             $.get(route,function(res){
               alert(res.recipe);
             });
          }

        }); 

  </script>

@stop