@extends('layouts.admin')
@section('content')
<div class="wrapper">
    <div class="main-panel">
      <!-- Navbar -->
      @include('partials.admin.nav')
      <div class="content">
         <div class="row">
           <div class="col-md-12">
             <div class="card">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
               
                <div class="card-body">

                  <div class="page-header">Busqueda de Pacientes
               
                    <div class="col-md-4">
                      <div class="form-group">
                        <form method="GET" action="{{ route('patientsconsultation.index') }}" 
                              class="form-inline pull-right">

                          <div class="row">

                            <div class="form-group">
                              <input type="text" name="dni" class="form-control" placeholder="Ingrese Dni">
                            </div>

                            {{-- <div class="form-group">
                              <input type="text" name="first_name" class="form-control" placeholder="Ingrese nombre">
                            </div>
                            
                            <div class="form-group">
                              <input type="text" name="last_name" class="form-control" placeholder="Ingrese apellido">
                            </div> --}}

                            <div class="form-group">
                              <button type="submit" class="btn btn-default">
                                 <span class="glyphicon glyphicon-search"></span>
                              </button>
                            </div>

                          </div>

                        </form>
                      </div>
                    </div>

                  </div>

                  <div class="table-responsive ps">
                      <div class="panel-body">
                        {{-- <table class="table tablesorter"> --}}
                        <table class="table table-hover table-striped">
                          <thead>
                            <tr>
                              <th>DNI</th>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>Email</th>
                              <th colspan="2"></th>
                            </tr>
                          </thead>

                          @foreach($clinicalpatients as $item)
                            <tbody>
                              <tr>
                                <td>{{ $item->dni }}</td>
                                <td>{{ $item->first_name}}</td>
                                <td>{{ $item->last_name }}</td>
                                {{-- <td>{{ $item->email }}</td> --}}
                              </tr>
                            </tbody>
                          @endforeach
                        </table>

                        {{ $clinicalpatients->render() }}
                    </div>
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
