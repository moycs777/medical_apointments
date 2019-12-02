@extends('layouts.admin')
@section('content')
<div class="wrapper">
  <div class="main-panel">
    @include('partials.admin.nav')
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
                           
            <div class="card-body"><strong>Confirmar citas a pacientes </strong>
              
                <div class="table-responsive ps">
                  <div class="panel-body">
                    <table class="table tablesorter">
                      <thead>
                        <tr>
                          <th># Cita</th><th>Fecha Cita</th><th>Hora</th><th># Paciente</th>
                          <th>Nombre</th><th>Apellido</th><th>Correo</th><th>Estatus</th>
                          <th colspan="3"></th>
                        </tr>
                      </thead>

                      @if (session('status'))
                        <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                        </div>
                      @endif

                      @foreach($patient as $item)
                          <tbody>
                            <tr>
                              <td>{{ $item->id }}</td>
                              <td>{{ $item->appointment_date }}</td>
                              <td>{{ $item->time_consultation }}</td>
                              <td>{{ $item->nro_paciente }}</td>
                              <td>{{ $item->first_name }}</td>
                              <td>{{ $item->last_name }}</td>
                              <td>{{ $item->email }}</td>
                              @if ($item->status == 'pendiente')
                                  <td><strong>{{ $item->status }}</strong></td>
                              @else
                                  <td>{{ $item->status }}</td>
                              @endif
                                           
                              <td>
                                <form action="{{ route('mostrar_cita_pantalla',$item->id) }}" 
                                  method="GET">
                                  <input type="hidden" name="id" value="{{$item->id}}" />
                                  <button type="submit" id = "envappointment" class="btn btn-sm">
                                  Notificar cita (Correo)</button>
                                </form>
                              </td>

                            </tr>
                          </tbody>
                      @endforeach
                    </table>
                    {{-- {{ $patients->render() }} --}}
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
  
@stop