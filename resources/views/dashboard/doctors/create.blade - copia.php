@extends('layouts.admin')

@section('content')

<div class="wrapper">

    <div class="main-panel">
        <!-- Navbar -->
        @include('partials.admin.nav')

        <div class="content">
            <div class="row">
                <div class="col-md-6">
                <h2>Crear Medico</h1>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('doctors.store') }}" >
                                @csrf

                                 <div class="form-group row">
                                    <div class="col-xs-2">
                                        <label for="ex1">Cedula</label>
                                        <input class="form-control" id="ex1" type="number" 
                                        name ='identification_card'
                                        placeholder="* Ingrese cedula" required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                     <label for="">Nombres</label>
                                     <input type="text" name ="first_name" class="form-control" 
                                            placeholder="* Ingrese Nombres"
                                            required="required">
                                </div> 
                                            
                                <div class="form-group row">
                                    <label for="">Apellidos</label>
                                    <input type="text" name ="last_name" class="form-control" 
                                           placeholder="* Ingrese apellidos"
                                           required="required">
                                </div>   
                                
                                <div class="radio-inline">
                                  <label>
                                      <input type="radio" id = "optmas" name="gender" value="M" checked>  Masculino
                                  </label>
                                </div>

                                <div class="radio-inline">
                                   <label>
                                       <input type="radio" id = "optfem" name="gender" value="F">  Femenino
                                   </label>
                                </div>
                                
                                <div class="form-group row">
                                     <label for="">Direccion </label>
                                     <input type="text" name ="address" class="form-control" 
                                            placeholder="* Ingrese su direccion"
                                            required="required">
                                </div> 

                                <div class="form-group row">
                                    <div class="col-xs-2">
                                        <label for="ex1">Telefono de habitacion</label>
                                        <input class="form-control"   
                                        name ='home_phone'
                                        placeholder="Ingrese Nro celular">
                                    </div>

                                    <div class="col-xs-2">
                                        <label for="ex1">Telefono donde labora</label>
                                        <input class="form-control"   
                                        name ='work_phone'
                                        placeholder="Ingrese Nro celular">
                                    </div>

                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-xs-2">
                                        <label for="ex1">Nro de Celular</label>
                                        <input class="form-control"   
                                        name ='mobile_1'
                                        placeholder="Ingrese Nro celular">
                                    </div>

                                    <div class="col-xs-2">
                                        <label for="ex1">Nro de Celular</label>
                                        <input class="form-control"   
                                        name ='mobile_2'
                                        placeholder="Ingrese Nro celular">
                                   </div>
                                   
                                </div>            
                                
                                <div class="form-group row">
                                     <label for="">Correo electronico (Email) </label>
                                     <input type="email" name ="email" class="form-control" 
                                            placeholder="Ingrese su email">
                                </div>

                                <div class="form-group row">
                                    <div class="col-xs-2">
                                       <label for="">Beeper</label>
                                       <input type="text" name ="beeper" class="form-control" 
                                            placeholder="Ingrese Beeper">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>

                                <input type="hidden" id="genero"  name ="genero" 
                                      value = "F">

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
     
      $("#optmas").click(function(){ 
                                
        $("input[name=gender]").each(function (index) { 
           if($(this).is(':checked')){
              $("#genero").val('M');
           }
        });
      });
            
      $("#optfem").click(function(){ 
                
        $("input[name=gender]").each(function (index) { 
           if($(this).is(':checked')){
              $("#genero").val('F');
           }
        });
       });  
  </script>

@stop
