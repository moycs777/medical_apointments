@extends('layouts.web.web')
  
@section('content')
  
  <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
    <div class="clearfix hidden-xl-up"></div>   
     
    <div class="container">
      <div class="clearfix hidden-xl-up"></div>
      <div class="row">
        <div class="col-md-2 col-xl-2">
          <div class="container">
            <h3 class="p-y-1 text-xs-center">Crea tu <strong>Cita</strong></h3>
          </div>
        </div>
        <div class="col-md-8 col-xl-8">
        <form method="POST" action="{{ route('appoints.store') }}" >
            @csrf
          <div class="card card-chart">
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="icon-status status-completed"></span> 
                    <select class=" id="sel1" name="">
                    <option>Seleccione su doctor</option>
                    @foreach($doctors as $item)
                        <option value ="{{ $item->id }}">
                            {{ $item->first_name }}, {{ $item->last_name }}
                        </option>
                    @endforeach 
                    </select>
                </li>
                <li class="list-group-item">
                    <span class="icon-status status-completed"></span> 
                    <input type="text" name="reason_consultation" placeholder="Motivo de consulta"/>
                    
                </li>
                <li class="list-group-item">
                    <span class="icon-status status-noticket"></span> 
                    <input type="date" name="appointment_date" min="2018-01-02">
                </li>
                <input type="hidden" name="clinical_patient_id" value="{{ Auth::user()->id }}" />
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-xl-2">
            <button type="submit" class="btn btn-primary has-gradient btn-block" >Guardar</button>
        </div>
      </div>
    </div>
    </form>  

  </header>

    

   
@endsection()

    