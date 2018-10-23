@extends('layouts.admin')

@section('content')

<div class="wrapper">

    <div class="main-panel">
        <!-- Navbar -->
        @include('partials.admin.nav')

        <div class="content">
            <div class="row">
                <div class="col-md-8">
                <h2>Crear Clasificacion</h1>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('classifications.store') }}" >
                                @csrf

                                    <div class="form-group">
                                        <label for="">Codigo</label>
                                        <input type="text" name="codigo" class="form-control" placeholder="Ingresa codigo"  >
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" name="nombre" class="form-control" placeholder="Ingresa descripcion" >
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" name ="oms" class ="checkbox" value="1">  O.M.S.
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" name ="particular" class ="checkbox" value="1">  Particular
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
</div>
@stop

@section('page-script')

  <script type="text/javascript">
         $(".checkbox").on( 'change', function() {
            if( $(this).is(':checked') ) {
            // Hacer algo si el checkbox ha sido seleccionado
                $(this).prop("checked","1")
                alert("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
            } else {
            // Hacer algo si el checkbox ha sido deseleccionado
                $(this).val('0');
                $(this).prop("unchecked","0")
                alert("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");
        }
        });
  </script>

@stop
