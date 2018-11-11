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
              <h5 class="title">Modificar Horario</h5>
            </div>

            <div class="card-body">
              <form  method="POST" action="{{ route('medical_schedules.update',$medicalschedule->id) }}" >
                @csrf
                {{ method_field('PUT') }}

                <div class="row">
                  <div class="col-md-4 pl-md-1">
                    <div class="form-group">
                      <input type="text" class="form-control" name="day"  disabled="" 
                         value="{{ $dias[$medicalschedule->day] }}">
                    </div>
                  </div>
                  <input type="hidden" name = "dia" value = "{{ $medicalschedule->day }}">
                </div>

                <div class = "row">         
                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Hora desde</strong></label>
                      <input id = "hour_from_1" type="number" class="form-control"  
                        placeholder="Hora Desde" name="hour_from_1" 
                        value = "{{ $medicalschedule->hour_from_1 }}">
                    </div>
                  </div>

                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Minutos desde</strong></label>
                      <input type="number" class="form-control"  placeholder="Minutos Desde" 
                        name="minutes_from_1"  value = "{{ $medicalschedule->minutes_from_1 }}" 
                        maxlength="2">
                    </div>
                  </div> 
                   
                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Hora hasta</strong></label>
                      <input id="hour_until_1" type="number" class="form-control"
                        placeholder="Hora Hasta" name="hour_until_1" 
                        value = "{{ $medicalschedule->hour_until_1 }}" 
                        maxlength="2"
                      >
                    </div>
                  </div>

                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Minutos hasta</strong></label>
                      <input id="minutes_until_1" type="number" class="form-control"
                        placeholder="Hora Hasta"
                        name="minutes_until_1" value = "{{ $medicalschedule->minutes_until_1 }}" 
                        maxlength="2"
                      >
                    </div>
                  </div>
                </div>

                <div class = "row">         
                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Hora desde</strong></label>
                      <input id = "hour_from_2" type="number" class="form-control"  
                        placeholder="Hora Desde" name="hour_from_2" 
                        value = "{{ $medicalschedule->hour_from_2 }}"
                        maxlength="2">
                    </div>
                  </div>

                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Minutos desde</strong></label>
                      <input id = "minutes_from_2" type="number" class="form-control"  
                        placeholder="Minutos Desde" name="minutes_from_2"  
                        value = "{{ $medicalschedule->minutes_from_2 }}" >
                    </div>
                  </div> 
                   
                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Hora hasta</strong></label>
                      <input id="hour_until_2" type="number" class="form-control"
                        placeholder="Hora Hasta" name="hour_until_2" 
                        value = "{{ $medicalschedule->hour_until_2 }}"
                      >
                    </div>
                  </div>

                  <div class="col-md-2 pl-md-1">
                    <div class="form-group">
                      <label for=""><strong>Minutos hasta</strong></label>
                      <input id="minutes_until_2" type="number" class="form-control"
                        placeholder="Hora Hasta"
                        name="minutes_until_2"  value = "{{ $medicalschedule->minutes_until_2 }}" 
                      >
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

     
 </script>
@stop