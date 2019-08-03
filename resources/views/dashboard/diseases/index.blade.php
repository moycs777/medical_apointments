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
		        	Enfermedades
			    	<a href="{{ route('diseases.create') }}" class ='btn btn-primary pull-rigth'>
			    		Crear
			    	</a>

			    	{{-- -------------------------------------------- --}}
		            <div class="page-header"><strong>Busqueda</strong>
		                <div class="form-group">
		                  
		                  <form method="GET" action="{{ route('diseases.index') }}" class="form-inline">
		                     
		                    <div class="col-md-6">
		                      <div class="form-group">
		                        <input type="text" name="name_1" class="form-control" 
		                           placeholder="Ingrese descripcion enfermedad"
		                        >
		                      </div>
		                    </div>

		                    <div class="col-md-6">
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
				  	    				<th>Id</th>
				  	    				<th>Codigo</th>
				  	    				<th>Nombre</th>
	                                    <th>Simbolo</th>
	                                    <th>Subclasificacion</th>
				  	    				<th colspan="2"></th>
				  	    			</tr>
				  	    		</thead>
				  	    		@foreach($diseases as $item)
				  	    		<tbody>
				  	    			<tr>
				  	    				<td>{{ $item->id }}</td>
				  	    				<td>{{ $item->code}}</td>
				  	    				<td>{{ $item->name }}</td>
				  	    				<td>{{ $item->symbol }}</td>
				  	    				<td>
										   @if ($item->subclassification->name)
									     	   {{ $item->subclassification->name }}
										   @endif
										</td>				  	    				
				  	    				<td width = "10px">
				  	    					<a href="{{ route('diseases.edit', $item->id) }}"
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
	                                              action="{{ route('diseases.destroy',$item->id) }}"
	                                              method="POST" style="display: none;">
	                                              @csrf @method('DELETE')
	                                        </form>
				  	    				</td>
				  	    			</tr>
				  	    		</tbody>
				  	    		@endforeach
				  	    	</table>
			  	    	    {{ $diseases->render() }}
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
