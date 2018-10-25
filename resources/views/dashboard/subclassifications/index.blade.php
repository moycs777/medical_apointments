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
		        	Listar Subclasificaciones
			    	<a href="{{ route('subclassifications.create') }}" class ='btn btn-primary pull-rigth'>
			    		Crear
			    	</a>
			    	<div class="table-responsive ps">
				  	    <div class="panel-body">
				  	    	<table class="table tablesorter">
				  	    		<thead>
				  	    			<tr>
				  	    				<th>Id</th>
				  	    				<th>Nombre</th>
	                                    <th>Clasificacion</th>
				  	    				<th colspan="2"></th>
				  	    			</tr>
				  	    		</thead>
				  	    		@foreach($subclassifications as $subclassification)
				  	    		<tbody>
				  	    			<tr>
				  	    				<td>{{ $subclassification->id }}</td>
				  	    				<td>{{ $subclassification->name }}</td>
				  	    				<td>{{ $subclassification->classification->name }}</td>
				  	    								  	    				
				  	    				<td width = "10px">
				  	    					<a href="{{ route('subclassifications.edit', $subclassification->id) }}"
	                                            class = "btn btn-sm">Editar 
				  	    					</a>
				  	    				</td>
				  	    				<td width = "10px">
	                                        <a href="" class = "btn btn-sm btn-danger" 
	                                           onclick="event.preventDefault();
	                                           document.getElementById('delete-form-{{ $subclassification->id }}').submit();">
	                                           Eliminar
	                                        </a>
	                                        <form id="delete-form-{{ $subclassification->id }}"
	                                              action="{{ route('subclassifications.destroy',
	                                                                $subclassification->id) }}"
	                                              method="POST" style="display: none;">
	                                              @csrf @method('DELETE')
	                                        </form>
				  	    				</td>
				  	    			</tr>
				  	    		</tbody>
				  	    		@endforeach
				  	    	</table>
			  	    	    {{ $subclassifications->render() }}
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
