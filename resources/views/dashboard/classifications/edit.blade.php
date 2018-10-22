@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <div class ="col-md-8 col-md-8-offset-2" >
         <div class = "panel panel-default">
            <div class= "panel-heading">
                <a href="{{ route('dashboard.classifications.create') }}" class="btn btn-primary pull-right">Crear</a>
            </div>

            <div class="panel-body">

              <div class="form-group" method="POST" action ="{{ route('dashboard.classifications.update') }}">
                @csrf

                <div class ="form-group">
                    <label for ="">Codigo</label>
                    <input type="text" name="codigo" value ="{{ classifications->codigo }}" class="form-control">
                </div>

                <div class ="form-group">
                    <label for ="">Nombre</label>
                    <input type="text" name="nombre" value ="{{ classifications->nombre }}" class="form-control">
                </div>

                <div class ="form-group">
                    <label for ="">O.M.S.</label>
                    <input type="text" name="oms" value ="{{ classifications->oms }}" class="form-control">
                </div>

                <div class ="form-group">
                    <label for ="">Particular</label>
                    <input type="text" name="particular" value ="{{ classifications->particular }}" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
              </div>
            </div>
         </div>
      </div>
   </div>
</div>


@endsection
