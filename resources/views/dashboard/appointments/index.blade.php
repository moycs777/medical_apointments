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
              Listar Citas
              <a href="{{ route('appointments.create') }}" class ='btn btn-primary pull-rigth'>Crear</a>
              <div class="table-responsive ps">
                <div class="panel-body">
                  <table class="table tablesorter">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Fecha Consulta</th>
                        <th>Hora Consulta</th>
                        <th>Motivo Consulta</th>
                        <th>Doctor</th>
                        <th>Paciente</th>
                        <th>Estatus</th>
                        <th colspan="2"></th>
                      </tr>
                    </thead>
                    @foreach($appointments as $item)
                    <tbody>
                      <tr >
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->appointment_date }}</td>
                        <td>{{ $item->time_consultation }}</td>
                        <td>{{ $item->reason_consultation }}</td>
                        <td>{{ $item->doctor->first_name . " " . $item->doctor->last_name}}</td>
                        <td>{{ $item->clinical_patient->first_name . " " . 
                               $item->clinical_patient->last_name }}
                        </td>
                        @if ($item->status == 'pendiente')
                            <td><strong>{{ $item->status }}</strong></td>
                        @else
                            <td>{{ $item->status }}</td>
                        @endif 

                        <td width = "10px">
                          <a href="{{ route('appointments.edit', $item->id) }}"
                            class = "btn btn-sm">Editar 
                          </a>
                        </td>
                        <td width = "10px">
                          <a href="" class = "btn btn-sm btn-danger" onclick="event.preventDefault();
                          document.getElementById('delete-form-{{ $item->id }}').submit();">
                          Eliminar
                          </a>
                          <form id="delete-form-{{ $item->id }}"
                            action="{{ route('appointments.destroy',$item->id) }}"
                            method="POST" style="display: none;">
                            @csrf @method('DELETE')
                          </form>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                </table>
                  {{ $appointments->render() }}
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






{{-- @extends('layouts.admin')
@section('content')
<div class="wrapper">
    <div class="main-panel">
      <!-- Navbar -->
      @include('partials.admin.nav')
      <div class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                  @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                  @endif citas!
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
  @stop --}}







