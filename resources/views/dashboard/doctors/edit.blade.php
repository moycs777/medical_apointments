@extends('layouts.admin')

@section('content')

<div class="wrapper">

    <div class="main-panel">
        <!-- Navbar -->
        @include('partials.admin.nav')

        <div class="content">
            <div class="row">
                <div class="col-md-6">
                <h2>Actualizar Medico</h1>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('doctors.update',$doctor->id) }}" >
                                @csrf
                                {{ method_field('PUT') }}

                                 <div class="form-group row">
                                    <div class="col-xs-2">
                                        <label for="ex1"><strong>Cedula</strong></label>
                                        <input class="form-control" id="ex1" type="number" 
                                        name ='identification_card'
                                        value ='{{ $doctor->identification_card }}'
                                        placeholder="* Ingrese cedula" required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                     <label for=""><strong>Nombres</strong></label>
                                     <input type="text" name ="first_name" class="form-control" 
                                            placeholder="* Ingrese Nombres"
                                            value ='{{ $doctor->first_name }}'
                                            required="required">
                                </div> 
                                            
                                <div class="form-group row">
                                    <label for=""><strong>Apellidos</strong></label>
                                    <input type="text" name ="last_name" class="form-control" 
                                           placeholder="* Ingrese apellidos"
                                           value ='{{ $doctor->last_name }}'
                                           required="required">
                                </div>   
                                
                                <div class="radio-inline">
                                  <label>
                                      <input type="radio" id = "optmas" name="gender" 
                                          @if ($doctor->gender == 'M')
                                              checked
                                              value="{{$doctor->gender}}"
                                          @endif
                                      >Masculino
                                  </label>
                                </div>

                                <div class="radio-inline">
                                   <label>
                                       <input type="radio" id = "optfem" name="gender"
                                           {{-- value="{{$doctor->gender}}" --}}
                                           @if ($doctor->gender == 'F')
                                              checked
                                              value="{{$doctor->gender}}"
                                           @endif
                                        >Femenino
                                   </label>
                                </div>
                                
                                <div class="form-group row">
                                     <label for=""><strong>Direccion</strong> </label>
                                     <input type="text" name ="address" class="form-control" 
                                            placeholder="* Ingrese su direccion"
                                            value ='{{ $doctor->address }}'
                                            required="required">
                                </div> 

                                <div class="form-group row">
                                    <div class="col-xs-2">
                                        <label for="ex1"><strong>Telefono de habitacion</strong></label>
                                        <input class="form-control"   
                                        name ='home_phone'
                                        value ='{{ $doctor->home_phone }}'
                                        placeholder="Ingrese Nro celular">
                                    </div>

                                    <div class="col-xs-2">
                                        <label for="ex1"><strong>Telefono donde labora</strong></label>
                                        <input class="form-control"   
                                        name ='work_phone'
                                        value ='{{ $doctor->work_phone }}'
                                        placeholder="Ingrese Nro celular">
                                    </div>

                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-xs-2">
                                        <label for="ex1"><strong>Nro de Celular</strong></label>
                                        <input class="form-control"   
                                        name ='mobile_1'
                                        value ='{{ $doctor->mobile_1 }}'
                                        placeholder="Ingrese Nro celular">
                                    </div>

                                    <div class="col-xs-2 ">
                                        <label for="ex1"><strong>Nro de Celular</strong></label>
                                        <input class="form-control"   
                                        name ='mobile_2'
                                        value ='{{ $doctor->mobile_2 }}'
                                        placeholder="Ingrese Nro celular">
                                   </div>
                                </div>            
                                
                                <div class="form-group row">
                                     <label for=""><strong>Correo electronico (Email)</strong> </label>
                                     <input type="email" name ="email" class="form-control" 
                                     value ='{{ $doctor->email }}'
                                            placeholder="Ingrese su email">
                                </div>

                                <div class="form-group row">
                                    <div class="col-xs-2">
                                       <label for=""><strong>Beeper</strong></label>
                                       <input type="text" name ="beeper" class="form-control" 
                                            value ='{{ $doctor->beeper }}'
                                            placeholder="Ingrese Beeper">
                                    </div>

                               </div>

                                <div class="form-group">
                                    <label>
                                      <input type="checkbox" name ="status" id="status"
                                        class ="checkbox" value="1"
                                        @if ($doctor->status == 1)
                                            checked
                                        @endif
                                        ><strong>{{ ($doctor->status == 1) ? ' Habilitado' : ' Inhabilitado' }}</strong>
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
       $(document).ready(function(){
          
            $("#status").on( 'change', function() {
                if( $(this).is(':checked') ) {
                    $(this).prop("checked","1")
                    $(this).attr("value","1");
                    
                } else {
                    $(this).prop("unchecked","0")
                    $(this).attr("value","0");
                    
                }
            });     
       });

       

  </script>

@stop
