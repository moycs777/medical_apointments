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
               
                @php
                  $Tipo_Sangre = array('A+','A-','B+','B-','AB+','AB-','O+','O-');
                  $i = 1;
                @endphp

                <div class="card-body">
                    Pacientes 
                  <a href="{{ route('clinicalpatients.create') }}" class ='btn btn-primary pull-rigth'>
                    Crear
                  </a>
                  <div class="table-responsive ps">
                      <div class="panel-body">
                        <table class="table tablesorter">
                          <thead>
                            <tr>
                              <th>DNI</th>
                              <th>Username</th>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th colspan="2"></th>
                            </tr>
                          </thead>
                          
                          @foreach($clinicalpatients as $item)
                            <tbody>
                              <tr>
                                <td>{{ $item->dni }}</td>
                                <td>{{ $item->user->username }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->last_name }}</td>
                                               
                                {{-- <td width = "10px">
                                  <a href="{{ route('clinicalpatients.edit', $item->id) }}"
                                    class = "btn btn-sm">Editar 
                                  </a>
                                </td> --}}
                                
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
