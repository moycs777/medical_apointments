@extends('layouts.admin')
@section('page-style')
  <style>
     *, *:before, *:after {margin: 0; padding: 0; box-sizing: border-box;}
     body {background: red; color: black; font: 14px 'Open Sans', sans-serif;}
     h1 {padding: 100px 0; font-weight: 400; text-align: center;}
     p {margin: 0 0 20px; line-height: 1.5;}
     .main {margin: 0 auto; min-width: 320px; max-width: 100%px;}
     .contentTabs {background: white; color: black;}
     .contentTabs > div {display: none; padding: 20px 25px 5px;}
     /*esta regla para los inputs produce conflicto con el select2*/
     /*input {display: none;}*/
     label {display: inline-block; padding: 15px 25px; font-weight: 600; text-align: center;}
     label {display: inline-block; padding:0px 25px; font-weight: 600; text-align: center;}
     label:hover {color: #1d8cf8; cursor: pointer;}
     input:checked + label {background: #1d8cf8; color: #fff;}
     #tab11:checked ~ .contentTabs #content11,
     #tab22:checked ~ .contentTabs #content22,
     #tab33:checked ~ .contentTabs #content33,
     #tab44:checked ~ .contentTabs #content44 {
       display: block;
     }
     @media screen and (max-width: 400px) { label {padding: 15px 10px;} }
  </style>
@stop
@section('content')
<div class="wrapper">
    <div class="main-panel">
      <!-- Navbar -->
      @include('partials.admin.nav')
      <div class="content">
         <div class="row">
            <input type="hidden" name="url" id="url" value="{{url('')}}">
            <form method="POST" action="{{ route('consultations.update',$consultation->id) }}">
              @csrf
              {{ method_field('PUT') }}
              <div class="col-md-12">
                <div class="main" >
                    
                  <input id="tab11" type="radio" name="tabs" style="display: none !important;" checked>
                  <label for="tab11"><strong>Consulta</strong></label>
                
                  <input id="tab22" type="radio" name="tabs" style="display: none !important;">
                  <label for="tab22"><strong>Antecedentes</strong></label>
                
                  <input id="tab33" type="radio" name="tabs" style="display: none !important;">
                  <label for="tab33"><strong>Otros</strong></label>
                    {{-- Tabs --}}
                  <div class="contentTabs">  
                    <div id="content11">
                      <div class="row">
                        @include('dashboard.consultations.partials.tab11')
                      </div>
                    </div>
                    <div id="content22">
                      <div class="row">
                        @include('dashboard.consultations.partials.tab22')
                      </div>
                    </div>
                  </div>

                </div>  
              </div>   
            </form>
          </div>
      </div>
    </div>
</div>
@stop
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