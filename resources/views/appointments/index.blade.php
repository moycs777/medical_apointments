@extends('layouts.web.web')
  
@section('content')
  
  <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
    <div class="clearfix hidden-xl-up"></div>   
     
    <div class="container">
      <div class="clearfix hidden-xl-up"></div>
      <div class="row">
        <div class="col-md-6 col-xl-4">
          <div class="container">
            <h3 class="p-y-1 text-xs-center">Tus <strong>Citas</strong></h3>
            {{-- <a class="btn btn-primary has-gradient btn-block">Pide una cita!</a> --}}
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="card card-chart">
            <ul class="list-group">
              @forelse($appointments as $item)
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
        <div class="col-md-6 col-xl-4">
            <a  class="btn btn-primary has-gradient btn-block">Pedir cita!</a>
        </div>
      </div>
      {{-- <h2 class="display-3">Dr. Fernando Silva Chacón.</h1>
      <h3 class="m-b-3"><em>Otorrinolaringologo</em></h2>
      <h3 class="m-b-3"><em>Past-Presidente de la Asociación Latinoamericana</em> de Rinologia <a href="ui-elements.html" class="jumbolink"></a>.</h2>
      <a class="btn btn-secondary-outline m-b-1" href="http://tympanus.net/codrops/?p=25217" role="button"><span class="icon-sketch"></span>Pide tu cita</a>
      <ul class="nav nav-inline social-share">
        <li class="nav-item"><a class="nav-link" href="#"><span class="icon-twitter"></span> 1024</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><span class="icon-facebook"></span> 562</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><span class="icon-linkedin"></span> 356</a></li>
      </ul> --}}
    </div>
  </header>

    

   
@endsection()

    