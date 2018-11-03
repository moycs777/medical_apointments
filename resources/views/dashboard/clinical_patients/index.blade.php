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
                              <th>Sexo</th>
                              <th>Direccion</th>
                              <th>Estatus</th>
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
                              <td>{{ $item->gender }}</td>
                              <td>{{ $item->address }}</td>
                              <td>{{ $item->status }}</td>                        
                              <td width = "10px">
                                <a href="{{ route('clinicalpatients.edit', $item->id) }}"
                                  class = "btn btn-sm">Editar 
                                </a>
                              </td>
                              <td width = "10px">
                                <a href="" class = "btn btn-sm btn-danger" 
                                   onclick="
                                    confirm('Esta seguro de eliminar?'); 
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $item->id }}').submit();"
                                >
                                   Eliminar
                                </a>
                                <form id="delete-form-{{ $item->id }}"
                                      action="{{ route('clinicalpatients.destroy',$item->id) }}"
                                      method="POST" style="display: none;">
                                      @csrf @method('DELETE')
                                </form>
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
