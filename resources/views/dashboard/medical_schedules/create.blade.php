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

                <div class="row">
                  <div class="col-md-4 pl-md-1">
                    <div class="form-group">
                      <input type="text" class="form-control" name="day_1"  disabled="" 
                         value="{{ $dias[$medicalschedule] }}">
                    </div>
                  </div>

                  <input type="hidden" name = "day" value = "{{ $medicalschedule }}">
                  <input type="hidden" name = "doctor_id" value = "{{ $doctor->id }}">
                </div>

                <div class = "row">         
                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Hora desde</strong></label>
                      <input id = "hour_from_1" type="number" class="form-control" autofocus="true" 
                        placeholder="Hora Desde" name="hour_from_1" 
                        value = "{{ old('hour_from_1') }}" 
                        min="00" max="12" >
                    </div>
                  </div>

                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Minutos desde</strong></label>
                      <input type="number" class="form-control"  placeholder="Minutos Desde" 
                        name="minutes_from_1"  
                        value = "00"  min="0">
                    </div>
                  </div> 
                   
                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Hora hasta</strong></label>
                      <input id="hour_until_1" type="number" class="form-control"
                        placeholder="Hora Hasta" name="hour_until_1" value = "{{ old('hour_until_1') }}"  
                        min="0"
                      >
                    </div>
                  </div>

                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Minutos hasta</strong></label>
                      <input id="minutes_until_1" type="number" class="form-control"
                        placeholder="Hora Hasta"
                        name="minutes_until_1" value =  "00" min="0"
                      >
                    </div>
                  </div>
                  
                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Estatus</strong></label>
                      <input id="status_1" type="checkbox" class="form-control"
                             name="status_1" value = "1" min = "00">
                    </div>
                  </div>

                </div>

                <div class = "row">         
                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Hora desde</strong></label>
                      <input id = "hour_from_2" type="number" class="form-control"  
                        placeholder="Hora Desde" name="hour_from_2" 
                        value = value = "{{ old('hour_from_2') }}"  min="0">
                    </div>
                  </div>

                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Minutos desde</strong></label>
                      <input id = "minutes_from_2" type="number" class="form-control"  
                        placeholder="Minutos Desde" 
                        name="minutes_from_2"  value = "00"  min="0">
                    </div>
                  </div> 
                   
                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Hora hasta</strong></label>
                      <input id="hour_until_2" type="number" class="form-control"
                        placeholder="Hora Hasta" name="hour_until_2" value = "{{ old('hour_until_2') }}" 
                        min="0"
                      >
                    </div>
                  </div>

                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Minutos hasta</strong></label>
                      <input id="minutes_until_2" type="number" class="form-control"
                        placeholder="Hora Hasta"
                        name="minutes_until_2" value = "00" min="0"
                      >
                    </div>
                  </div>

                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Estatus</strong></label>
                      <input id="status_2" type="checkbox" class="form-control"
                             name="status_2" value = "1" min = "0">
                    </div>
                  </div>
                </div>

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
     
    $(".checkbox").on( 'change', function() {
        if( $(this).is(':checked') ) {
            $(this).prop("checked","1");
        } else {
            $(this).value('0');
            $(this).prop("unchecked","0");
        }
    });

    $("#hour_from_1").keyup(function() {
       l = $("#hour_from_1").val();
       if (l.length > 2) {
          alert("Maximo tres (3) numeros...")
          $("#hour_from_1").val("");
       }
    });

    $("#minutes_from_1").keyup(function() {
       l = $("#minutes_from_1").val();
       if (l.length > 2) {
          alert("Maximo tres (3) numeros...")
          $("#minutes_from_1").val("");
       }
    });

    $("#hour_until_1").keyup(function() {
       l = $("#hour_until_1").val();
       if (l.length > 2) {
          alert("Maximo tres (3) numeros...")
          $("#hour_until_1").val("");
       }
    });

    $("#minutes_until_1").keyup(function() {
       l = $("#minutes_until_1").val();
       if (l.length > 2) {
          alert("Maximo tres (3) numeros...")
          $("#minutes_until_1").val("");
       }
    });

    //*******************************************
    $("#hour_from_2").keyup(function() {
       l = $("#hour_from_1").val();
       if (l.length > 2) {
          alert("Maximo tres (3) numeros...")
          $("#hour_from_1").val("");
       }
    });

    $("#minutes_from_2").keyup(function() {
       l = $("#minutes_from_2").val();
       if (l.length > 2) {
          alert("Maximo tres (3) numeros...")
          $("#minutes_from_2").val("");
       }
    });

    $("#hour_until_2").keyup(function() {
       l = $("#hour_until_2").val();
       if (l.length > 2) {
          alert("Maximo tres (3) numeros...")
          $("#hour_until_2").val("");
       }
    });

    $("#minutes_until_2").keyup(function() {
       l = $("#minutes_until_2").val();
       if (l.length > 2) {
          alert("Maximo tres (3) numeros...")
          $("#minutes_until_2").val("");
       }
    });

});
  </script>
@stop