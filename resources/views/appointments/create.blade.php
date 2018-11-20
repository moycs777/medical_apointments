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
            {{-- <a class="btn btn-primary has-gradient btn-block">Pide una cita!</a> --}}
          </div>
        </div>
        <div class="col-md-8 col-xl-8">
          <div class="card card-chart">
            <ul class="list-group">
              @forelse($doctors as $item)
                <li class="list-group-item">
                  <span class="icon-status status-backlog"></span> {{ $item }}
                  <span class="label pull-xs-right">{{ $item }}</span>
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
                  {{-- <span class="label pull-xs-right">Citas</span> --}}
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

    