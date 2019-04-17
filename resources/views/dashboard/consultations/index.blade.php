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
              Listado de Consultas
              <a href="{{ route('consultations.create') }}" class ='btn btn-primary pull-rigth'>Crear</a>
              <div class="table-responsive ps">
                <div class="panel-body">
                  <table class="table tablesorter">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Fecha Consulta</th>
                        <th>Motivo Consulta</th>
                        <th>Paciente</th>
                        <th>Doctor</th>
                        <th>Estatus</th>
                        <th colspan="3"></th>
                      </tr>
                    </thead>
                    @foreach($consultations as $item)
                    <tbody>
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->date_consultation }}</td>
                        <td>{{ $item->reason_consultation }}</td>
                        <td>{{ $item->first_name . " " . $item->last_name}}</td>  
                        <td>{{ $item->nomdoctor. " " . $item->apedoctor }} 
                        <td>{{ $item->status}}
                        <td width = "10px">
                          <a href="{{ route('consultations.edit', $item->id) }}" 
                             class = "btn btn-sm">Editar 
                          </a>
                        </td>
                        <td width = "10px">
                          <a href="" class = "btn btn-sm btn-danger" onclick="event.preventDefault();
                          document.getElementById('delete-form-{{ $item->id }}').submit();">
                          Eliminar
                          </a>
                          <form id="delete-form-{{ $item->id }}"
                            action="{{ route('consultations.destroy',$item->id) }}"
                            method="POST" style="display: none;">
                            @csrf @method('DELETE')
                          </form>
                        </td>
                        <td>
                          <form 
                            action="{{ route('pdf_generate') }}" method="POST" >
                            @csrf 
                            <input type="hidden" name="id" value="{{$item->id}}" />
                            <button type="submit" id = "salvar" class="btn btn-sm">imprimir</button>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                </table>
                  {{-- {{ $consultations->render() }} --}}
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





