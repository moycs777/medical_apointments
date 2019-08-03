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
		        	Patologias
			    	<a href="{{ route('pathologies.create') }}" class ='btn btn-primary pull-rigth'>
			    		Crear
			    	</a>

			    	{{-- -------------------------------------------- --}}
		            <div class="page-header"><strong>Busqueda</strong>
		                <div class="form-group">
		                  
		                  <form method="GET" action="{{ route('pathologies.index') }}" class="form-inline">
		                     
		                    <div class="col-md-6">
		                      <div class="form-group">
		                        <input type="text" name="name" class="form-control" 
		                           placeholder="Ingrese descripcion patologia"
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
				  	    				<th>Nombre</th>
	                                    <th>Clasificacion</th>
	                                    <th>Estatus</th>
				  	    				<th colspan="2"></th>
				  	    			</tr>
				  	    		</thead>
				  	    		@foreach($pathologies as $item)
				  	    		<tbody>
				  	    			<tr>
				  	    				<td>{{ $item->id }}</td>
				  	    				<td>{{ $item->name }}</td>
				  	    				<td>{{ $item->classification->name }}</td>
				  	    				<td>{{ ($item->status == 1) ? 'Habilitado':'Inhabilitado' }}</td>				  	    				
				  	    				<td width = "10px">
				  	    					<a href="{{ route('pathologies.edit', $item->id) }}"
	                                            class = "btn btn-sm">Editar 
				  	    					</a>
				  	    				</td>

				  	    				<td width = "10px">
	                                        <form action="{{ route('pathologies.destroy',  $item->id) }}" 
		                                      method="post" style="display:inline">
		                                      {{ csrf_field() }}
		                                      {{ method_field('DELETE') }}
		                                                                          
		                                      <button type="submit" alt="Eliminar"  class="btn btn-danger
		                                        onclick="return confirm('Esta seguro de eliminar?');">
		                                        <i class="fas fa-cut"></i>
		                                      </button>
		                                    </form>
				  	    				</td>
				  	    				
				  	    			</tr>
				  	    		</tbody>
				  	    		@endforeach
				  	    	</table>
			  	    	    {{ $pathologies->render() }}
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
