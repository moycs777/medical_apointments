@extends('layouts.admin')

@section('content')

<div class="wrapper">
    <div class="main-panel">
       <!-- Navbar -->
       @include('partials.admin.nav')

        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <h2>Actualizar Clasificacion</h2>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('classifications.update', $classification->id ) }}">

                                @csrf
                                {{ method_field('PUT') }}

                                <div class="form-group">
                                    <label for="">Codigo</label>
                                    <input type="text" name="codigo" value="{{ $classification->codigo }}"
                                    class="form-control" placeholder="Ingresa codigo" >
                                </div>

                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" name="nombre" value="{{ $classification->nombre }}"
                                            class="form-control" placeholder="Ingresa descripcion" >
                                </div>

                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" value="{{ $classification->oms }}" name ="oms"
                                            @if ($classification->oms == '1')
                                                checked
                                            @endif
                                            id="chkoms" >  O.M.S.
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" value="{{ $classification->particular }}"
                                            @if ($classification->particular == '1')
                                                checked
                                            @endif
                                            name ="particular" id ="chkpart">  Particular
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
     //console.log("dashboard ");
        $("#chkoms").on( 'change', function() {
            console.log("oms ");
            if( $(this).is(':checked') ) {
                // Hacer algo si el checkbox ha sido seleccionado
                $(this).prop("checked","1")
                $(this).attr("value","1");
                console.log("oms : " +  $(this).val());

                //alert("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
            } else {
                //$(this).val('0');
                $(this).prop("unchecked","0")
                $(this).attr("value","0");
                console.log("oms : " +  $(this).val());

                //alert("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");
            }
        });

        $("#chkpart").on( 'change', function() {
            console.log("part ");

            if( $(this).is(':checked') ) {
                // Hacer algo si el checkbox ha sido seleccionado
                $(this).prop("checked","1")
                $(this).attr("value","1");
                console.log("part : " +  $(this).val());

                //alert("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
            } else {
                //$(this).val('0');
                $(this).prop("unchecked","0")
                $(this).attr("value","x");
                console.log("part : " +  $(this).val());

                //alert("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");
            }
        });
  </script>

@stop
