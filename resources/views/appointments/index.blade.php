@extends('layouts.web.web')
  
@section('content')
  
  <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
    <div class="clearfix hidden-xl-up"></div>   
     
    <div class="container">
      <div class="clearfix hidden-xl-up"></div>
      <div class="row">
        <div class="col-md-2 col-xl-2">
          <div class="container">
            <h3 class="p-y-1 text-xs-center">Tus <strong>Citas</strong></h3>
          </div>
        </div>
        <div class="col-md-8 col-xl-8">
          <div class="card card-chart">
            <ul class="list-group">
              @forelse($appointments as $item)
                <li class="list-group-item">
                  {{-- <span class="icon-status status-backlog"></span>  --}}
                  @if ($item->status == 'pendiente')
                      <span class="icon-status status-noticket"></span>pendiente por confirmar
                  @endif 
                  @if ($item->status == 'confirmado')
                      <span class="icon-status status-backlog"></span> Han confirmado
                  @endif 
                  @if ($item->status == 'en consulta')
                      En consulta
                  @endif 
                  @if ($item->status == 'atendido')
                      <span class="icon-status status-completed"></span>Te Han atendido
                  @endif 
                  {{ $item->appointment_date }} , 
                  doctor: {{ $item->doctor->first_name }}: 
                  {{ $item->reason_consultation }}
                  {{-- <span class="label pull-xs-right"></span> --}}
                </li>
              {{-- <li class="list-group-item complete">
                <span class="icon-status status-completed"></span> Completed
                <span class="label pull-xs-right">324</span>
              </li>
              <li class="list-group-item">
                <span class="icon-status status-backlog"></span> In backlog
                <span class="label pull-xs-right">34</span>
              </li>
              <li class="list-group-item">
                <span class="icon-status status-noticket"></span> Without ticket
                <span class="label pull-xs-right">20</span>
              </li> --}}
              @empty
                <li class="list-group-item">
                  <span class="icon-status status-noticket"></span> Aun no tienes citas
                </li>
              @endforelse()
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-xl-2">
            <a href="{{ route('appoints.create') }}"  class="btn btn-primary has-gradient btn-block">Pedir cita!</a>
        </div>
      </div>
    </div>
  </header>

   
@endsection()

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script>
  console.log("asd");
  $( document ).ready(function() {
      console.log( "ready!" );
  });

</script>
)


    