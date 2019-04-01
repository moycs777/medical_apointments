
<div class="col-md-12">
  <div class="form-group">
    <label for="sel22"><strong>Seleccione enfermedad (diagnostico)</strong></label>
      <select class="js-example-basic-single form-control" id="seldisease" name="disease_id" style="width: 100%;">
        <option value="0">Seleccione</option>
        @foreach($diseases as $item)
           <option value ="{{ $item->id }}">
              {{  $item->name }}
           </option>
        @endforeach 
      </select>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label for="sel22"><strong>Seleccione tratamiento</strong></label>
      <select class="js-example-basic-single form-control" id="sel22" name="subpatology_id" style="width: 100%;">
        <option value="0">Seleccione</option>
        @foreach($subpatologies as $item)
           <option value ="{{ $item->id }}">
              {{  $item->name . "---" .$item->recipe }}
           </option>
        @endforeach 
      </select>
  </div>
</div>

<div class="col-md-6 pr-md-1">
  <div class="form-group">
    <label for="">Recipe</label>
    <textarea name="recipe" 
      placeholder="Recipe" rows = '10' cols= "80" required = "required" 
      style="font-size: 13px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="recipe" >
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
    <textarea name="prescription" 
      placeholder="Describa las indicaciones" rows = '10' cols= "80" required = "required" 
      style="width: 100%; height: 100% px; font-size: 13px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="prescription">
    </textarea>
    @if ($errors->has('prescription'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('prescription') }}</strong>
        </span>
    @endif
  </div>
  
</div>
<div class="form-group">
   <button type="submit" id = "salvar" class="btn btn-primary">Guardar</button>
</div>


@section('page-script')
  <script type="text/javascript">
     console.log("Consulta Edit");
    
     $(document).ready(function() {
         $('.js-example-basic-single').select2();
         $('#qwe').select2();
         $('#asd').select2();


         $('#sel1').on('change',function(){
            //var n = $(this).val();
            //var optionText = $('#dropdownList option[value="'+optionValue+'"]').text();
            var optionText = $("#sel1 option:selected").text();
            var id = $("#sel1 option:selected").val();
         });
      
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

