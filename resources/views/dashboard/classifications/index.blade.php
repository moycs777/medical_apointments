@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-md-8-offset-2" style="background-color:#aaa">
        	<h1>Titulo 1</h1>
        	<p>Ejemplo de Bootstrap</p>
        </div>
		<div class="col-md-8 col-md-8-offset-2">

		    <div class="panel panel-default">
		    	Listar Clasificaciones
		    	{{-- <a href="{{ route('admin.classifications.create') }}" class ='btn btn-primary pull-rigth'>Crear</a> --}}
		    	<a href="#" class ='btn btn-primary pull-rigth'>Crear</a>
		        <div class="panel-heading">
			  	    <div class="panel-body">
			  	    	<table class="striped table-hover">
			  	    		<thead>
			  	    			<tr>
			  	    				<th>Id</th>
			  	    				<th>Codigo</th>
			  	    				<th>Nombre</th>
			  	    				<th>Oms</th>
			  	    				<th colspan="3"></th>
			  	    			</tr>
			  	    		</thead>
			  	    		@foreach($classifications as $classification)
			  	    		<tbody>
			  	    			<tr>
			  	    				{{-- <td>{{ $classification->id }}</td> --}}
			  	    				<td>{{ $classification->codigo }}</td>
			  	    				<td>{{ $classification->nombre }}</td>
			  	    				<td>{{ $classification->oms }}</td>
			  	    				<td>{{ $classification->particular }}</td>
			  	    				<td width = "10px">
			  	    					{{-- <a href="{{ route('admin.classifications.show',$classification->id)}} class = "btn btn-sm">Ver
			  	    					</a> --}}
			  	    				</td>
			  	    				{{-- <td width = "10px">
			  	    					<a href="{{ route('admin.classifications.edit',$classification->id)}} class = "btn btn-sm">Editar
			  	    					</a>
			  	    				</td>
			  	    				<td width = "10px">
			  	    					<a href="{{ route('admin.classifications.edit',$classification->id)}} class = "btn btn-sm">Eliminar
			  	    					</a>
			  	    				</td> --}}
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
@endsection
