@extends('layouts.admin')
@section('content')
<div class="wrapper">
    <div class="main-panel">
      <!-- Navbar -->
      @include('partials.admin.nav')
      <div class="content">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif 
              </div>
                <div class="card">

                  @php
                  $i =0;
                  $dias = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
                  @endphp

                  <div class="card-header">
                    <h5 class="title">Crear Horario</h5>
                  </div>

                  <div class="card-body">
                    <form  method="POST" action="{{ route('medical_schedules.store') }}" >
                      @csrf

                      @foreach($dias as $dia)
                      <div class="row">
                        <div class="col-md-1 pr-md-1">
                          <div class="form-group">
                            <input type="text" class="form-control" 
                                name="day[' .$i . ']' . '"'  disabled=""
                                value="{{ $dia }}"
                            >
                          </div>
                        </div>
                        
                        <div class="col-md-2 pl-md-1">
                          <div class="form-group">
                            <input id = "hour_from_1" type="text" class="form-control"  
                            placeholder="Hora Desde" 
                            name="hour_from_1[' .$i . ']' . '"' value = "00:00" maxlength="5">
                          </div>
                        </div>

                        {{-- <div class="col-md-2 pl-md-1">
                          <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Hora hasta" 
                            name="minutes_from_2[' .$i . ']' . '"'  value = "12:00"  maxlength="5">
                          </div>
                        </div> --}}
                     
                        <div class="col-md-2 pr-md-1">
                          <div class="form-group">
                            <input id="hour_until" type="text" class="form-control"
                                placeholder="Hora Desde"
                                name="hour_until_1[' .$i . ']' . '"' value = "00:00"  maxlength="5"
                            >
                          </div>
                        </div>

                        {{-- <div class="col-md-2 pr-md-1">
                          <div class="form-group">
                            <input id="hour_until" type="text" class="form-control"
                                placeholder="Hora Hasta"
                                name="hour_until_2[' .$i . ']' . '"' value = "6:00" maxlength="5"
                            >
                          </div>
                        </div> --}}

                        <div class="col-md-2 pl-md-1">
                          <div class="form-group">
                           <input id="last_name" type="text" class="form-control"
                                placeholder="Estatus" name="status[' .$i . ']' . '"'
                            >
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                      <input id = "parrafo" type="text">
                      <button type="submit" class="btn btn-fill btn-primary">Save</button>

                    </form>
                  </div>
                  <div class="card-footer">
                    <!-- <button type="submit" class="btn btn-fill btn-primary">*Save</button> -->
                  </div>
                </div>
            </div>
          </div>
          <div class="row">
          </div>
      </div>
    </div>
</div>
@stop
@section('page-script')
  <script type="text/javascript">

     
$(document).ready(function(){
     
    // $("#hour_from_1").keyup(function(event){
      $("#hour_from_1").keyup(function(event){
        var n = 0;

        
        if(event.shiftKey){
          event.preventDefault();
        }
 
        if ((event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105)) {
           // alert("A "+event.which);
        }
        else { 
          // alert("B "+event.keyCode);
          $("#hour_from_1").on('Borrar',function(event,param1){
              $(this).val(param1);
          });
          //-----------------------
          var n = $(this).val();
        
          var nn =n.substr(0,n.length-1);
          if (nn.length == 2 ) return;
         
          var texto_nuevo = n.substr(0,n.length-1);
         
          $("hour_from_1").val(texto_nuevo); 

          $("#hour_from_1").trigger("Borrar",[texto_nuevo]);
          return;
        }

        //------------------------------------------------
        n = $(this).val();
        
        if ($(this).val().length == 2){
           // alert($(this)[0].value);
           
           $("#hour_from_1").on('myParam',function(event,param1){
              $(this).val(param1);
           });
           
           n = n + ':';
           $("#hour_from_1").trigger("myParam",[n]);
           $(this).val() = 'n';
        }
       
    }); 

    

});
  </script>
@stop


 


                

