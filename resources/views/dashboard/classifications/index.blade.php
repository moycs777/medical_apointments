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
			    	Listar Clasificaciones
			    	<a href="{{ route('classifications.create') }}" class ='btn btn-primary pull-rigth'>Crear</a>
			    	<div class="table-responsive ps">
				  	    <div class="panel-body">
				  	    	<table class="table tablesorter">
				  	    		<thead>
				  	    			<tr>
				  	    				<th>Id</th>
				  	    				{{-- <th>Codigo</th> --}}
				  	    				<th>Nombre</th>
	                                    <th>Oms</th>
	                                    <th>Particular</th>
				  	    				<th colspan="2"></th>
				  	    			</tr>
				  	    		</thead>
				  	    		@foreach($classifications as $classification)
				  	    		<tbody>
				  	    			<tr>
				  	    				<td>{{ $classification->id }}</td>
				  	    				<td>{{ $classification->name }}</td>
				  	    				<td>{{ $classification->oms }}</td>
				  	    				<td>{{ $classification->particular }}</td>
				  	    				<td width = "10px">
				  	    					<a href="{{ route('classifications.edit', $classification->id) }}"
	                                            class = "btn btn-sm">Editar 
				  	    					</a>
				  	    				</td>
				  	    				<td width = "10px">
	                                          <a href="" class = "btn btn-sm btn-danger" onclick="event.preventDefault();
	                                          document.getElementById('delete-form-{{ $classification->id }}').submit();">
	                                          Eliminar
	                                          </a>
	                                          <form id="delete-form-{{ $classification->id }}"
	                                              action="{{ route('classifications.destroy',$classification->id) }}"
	                                              method="POST" style="display: none;">
	                                              @csrf @method('DELETE')
	                                          </form>
				  	    				</td>
				  	    			</tr>
				  	    		</tbody>
				  	    		@endforeach
				  	    	</table>
			  	    	    {{ $classifications->render() }}
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
