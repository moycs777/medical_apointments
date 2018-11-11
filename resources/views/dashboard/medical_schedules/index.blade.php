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
		       Horario Medico
			   <a href="{{ route('medical_schedules.create') }}" class ='btn btn-primary pull-rigth'>
			   	 Crear
			   </a>
			   @php
               	$i =0;
            	$dias = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
               @endphp
			   <div class="table-responsive ps">
				 <div class="panel-body">
				  <table class="table tablesorter">
				  	<thead>
                     <tr>
				  	  <th>Id</th>
				  	  <th>Dia</th>
	                  <th>Hora Desde</th>
	                  <th>Minutos Desde</th>
	                  <th>Hora Hasta</th>
	                  <th>Minutos Hasta</th>
	                  <th>Doctor</th>
	                  <th>Estatus</th>
				  	  <th colspan="2"></th>
				  	 </tr>
				  	</thead>
				  	@foreach($medical_schedules as $item)
				  	  <tbody>
				  	  	<tr>
				  	     <td>{{ $item->id }}</td>
				  	     <td>{{ $dias[$item->day] }}</td>
				  	     <td>{{ $item->hour_from_1 }}</td>
				  	     <td>{{ $item->minutes_from_1 }}</td>
				  	     <td>{{ $item->hour_until_1 }}</td>
				  	     <td>{{ $item->minutes_until_1 }}</td>
				  	     <td>{{ $item->doctor_id }}</td>
				  	     <td>{{ $item->status }}</td>
				  	     <td width = "10px">
				  	    	<a href="{{ route('medical_schedules.edit', $item->id) }}"
	                           class = "btn btn-sm">Editar 
				  	    	</a>
				  	     </td>
				  	     <td width = "10px">
	                        <a href="" class = "btn btn-sm btn-danger" 
	                           onclick="event.preventDefault();
	                           document.getElementById('delete-form-{{ $item->id }}').submit();">
	                           Eliminar
	                        </a>
	                        <form id="delete-form-{{ $item->id }}"
	                           action="{{ route('medical_schedules.destroy',$item->id) }}"
	                           method="POST" style="display: none;">
	                           @csrf @method('DELETE')
	                        </form>
				  	     </td>
				  	    </tr>
				  	  </tbody>
				  	@endforeach
				  </table>
			  	  {{ $medical_schedules->render() }}
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
