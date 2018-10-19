@extends('layouts.admin')

@section('content')

  <div class="wrapper">
    
    <div class="main-panel">
      <!-- Navbar -->
      @include('partials.admin_nav')
      
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <p>Hola</p>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig1"></canvas>
                </div>
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
    console.log("dashboard ");
  </script>
  
@stop
