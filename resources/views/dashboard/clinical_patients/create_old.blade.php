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
     #tab1:checked ~ .contentTabs #content1,
     #tab2:checked ~ .contentTabs #content2,
     #tab3:checked ~ .contentTabs #content3,
     #tab4:checked ~ .contentTabs #content4 {
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
            <form method="POST" action="{{ route('clinicalpatients.store') }}">
              @csrf
              <div class="col-md-12">
                  <div class="main" >
                    {{-- TabsMenu --}}
                    {{-- <input type="hidden" name="url" id="url" value="{{url('')}}"> --}}
                    <input id="tab1" type="radio" name="tabs" style="display: none !important;" checked>
                    <label for="tab1"><strong>Datos personales</strong></label>
                
                    <input id="tab2" type="radio" name="tabs" style="display: none !important;">
                    <label for="tab2"><strong>Antecedentes</strong></label>
                
                    {{-- Tabs --}}
                    <div class="contentTabs">  
                      <div id="content1">
                        <div class="row">
                          @include('dashboard.clinical_patients.partials.tab1')
                        </div>
                        <button type="submit" class="btn btn-fill btn-primary">Salvar</button>
                      </div>
                
                      <div id="content2">
                        <div class="row">
                          @include('dashboard.clinical_patients.partials.tab2')
                        </div>
                      </div>
                
                                 
                  </div>
                {{-- <a href="https://twitter.com/moycs777?lang=es" target="_blank"></a> --}}
              </div>     
            </form>
          </div>
      </div>
    </div>
</div>
@stop
@section('page-script')
  <script type="text/javascript">
    console.log("pacientes ");
     $(document).ready(function() {
         $('.js-example-basic-single').select2();
         $('#qwe').select2();
         $('#asd').select2();
         $('#appointment_id').select2();
         $('#sel1').on('change',function(){
            var optionText = $("#sel1 option:selected").text();
            var id = $("#sel1 option:selected").val();
         });

         $("#optmas").click(function(){
            $("input[name=optmas]").each(function (index) {
              if($(this).is(':checked')){
                  console.log("m");
                 $("#genero").val('M');
              }
            });
         });

        $("#optfem").click(function(){
          $("input[name=optmas]").each(function (index) {
             if($(this).is(':checked')){
                console.log("f");
                $("#genero").val('F');
             }
          });
        });

    }); 
  </script>
@stop







