@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <div class ="col-md-8 col-md-8-offset-2" >
         <div class = "panel panel-default">
            <div class= "panel-heading">
                <a href="{{ route('classifications.create') }}" class="btn btn-primary pull-right">Crear</a>
            </div>

            <div class="panel-body">

              <form class="form-group" method="POST" action ="{{ route('classifications.store') }}">
                @csrf

                <div class ="form-group">
                    <label for ="">Codigo</label>
                    <input type="text" name="codigo" class="form-control">
                </div>

                <div class ="form-group">
                    <label for ="">Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>

                <div class ="form-group">
                    <label for ="">O.M.S.</label>
                    <input type="text" name="oms" class="form-control">
                </div>

                <div class ="form-group">
                    <label for ="">Particular</label>
                    <input type="text" name="particular" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
              </form>
            </div>
         </div>
      </div>
   </div>
</div>


@endsection
