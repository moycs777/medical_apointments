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
               
            {{--  @php
              $Tipo_Sangre = array('A+','A-','B+','B-','AB+','AB-','O+','O-');
              $i = 1;
            @endphp --}}

            <div class="card-body"><strong>Pacientes </strong>
              <a href="{{ route('clinicalpatients.create') }}" class ='btn btn-primary pull-rigth'>
                Crear
              </a>

              {{-- -------------------------------------------- --}}
              <div class="page-header"><strong>Busqueda</strong>
                <div class="form-group">
                  <form method="GET" action="{{ route('clinicalpatients.index') }}" class="form-inline">
                     
                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" name="dni" class="form-control" placeholder="Ingrese Dni">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" name="first_name" class="form-control" placeholder="Ingrese nombre">
                      </div>
                    </div>
                          
                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" name="last_name" class="form-control" placeholder="Ingrese apellido">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <button type="submit" class="btn btn-default">
                                 <i class="fa fa-search"></i>
                              </button>
                            </div>
                          </div>
                  </form>
                </div>
              </div>
              {{-- -------------------------------------------- --}}

              <div class="table-responsive ps">
                  <div class="panel-body">
                    <table class="table tablesorter">
                      <thead>
                        <tr>
                          <th>DNI</th><th>Username</th><th>Nombre</th><th>Apellido</th><th>Seguro Medico</th>
                          <th>Telefono</th>
                          <th colspan="3"></th>
                        </tr>
                      </thead>
                      @foreach($clinicalpatients as $item)
                      <tbody>
                        <tr>
                          <td>{{ $item->dni }}</td><td>{{ $item->user->username }}</td>
                          <td>{{ $item->user->name }}</td><td>{{ $item->last_name }}</td>
                          <td>{{ $item->insurance->name }}</td><td>{{ $item->phone_1 }}</td>
                                           
                          <td width = "10px">
                            <a href="{{ route('clinicalpatients.edit', $item->id) }}"
                              class = "btn btn-sm">Editar 
                            </a>
                          </td>

                          <td width = "10px">
                            <a href="" class = "btn btn-sm btn-danger" 
                               onclick="event.preventDefault();
                                document.getElementById('delete-form-{{ $item->id }}').submit();"
                               >Eliminar
                            </a>
                            <form id="delete-form-{{ $item->id }}"
                                  action="{{ route('clinicalpatients.destroy',$item->id) }}"
                                  method="POST" style="display: none;">
                                  @csrf @method('DELETE')
                            </form>
                            
                            <td>
                              <form action="{{ route('verpaciente',$item->id) }}" method="GET" >
                                @csrf 
                                <input type="hidden" name="id" value="{{$item->id}}" />
                                <button type="submit" id = "salvar" class="btn btn-sm">Constancia Medica</button>
                              </form>
                            </td>

                            <td>
                              <form action="{{ route('notificar_cita',$item->id) }}" method="GET">
                                <input type="hidden" name="id" value="{{$item->id}}" />
                                <button type="submit" id = "envappointment" class="btn btn-sm">Notificar cita</button>
                              </form>
                            </td>
                          </td>
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
        <div class="row"></div>
    </div>
  </div>
</div>
@stop
@section('page-script')
  <script type="text/javascript">
     console.log("dashboard ");

     
  </script>
@stop
