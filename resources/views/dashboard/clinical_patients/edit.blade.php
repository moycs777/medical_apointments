@extends('layouts.admin')
@section('content')
<div class="wrapper">
    <div class="main-panel">
      <!-- Navbar -->
      @include('partials.admin.nav')
      <div class="content">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif 
              </div>
                <div class="card">
                  <div class="card-header">
                    <h5 class="title">Editar paciente</h5>
                  </div>
                  <div class="card-body">
                    <form  method="POST" action="{{ route('clinicalpatients.update',$clinicalpatient->id) }}" >
                      @csrf
                      {{ method_field('PUT') }}

                      @php
                        $Tipo_Sangre = array('A+','A-','B+','B-','AB+','AB-','O+','O-');
                        $i = 1;
                      @endphp

                      <div class="row">
                        <div class="col-md-5 pr-md-1">
                          <div class="form-group">
                            <label>Username</label>
                            <input id="username" 
                                type="text" 
                                class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}"
                                placeholder="Username"
                                name="username" 
                                value="{{ $clinicalpatient->user->username }}" required
                            >
                            @if ($errors->has('username'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-3 px-md-1">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input id="email" 
                                type="text" 
                                class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                placeholder="email"
                                name="email" 
                                value="{{ $clinicalpatient->user->email }}" required
                            >
                            @if ($errors->has('email'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-4 pl-md-1">
                          <div class="form-group">
                            <label>Password ()</label>
                            <input type="text" class="form-control" disabled="" placeholder="12345678" 
                            value="{{ $clinicalpatient->user->password }}">
                          </div>
                        </div>
                      </div>

                      
                      <div class="row">
                        <div class="col-md-4 pr-md-1">
                          <div class="form-group">
                            <label>Nombre</label>
                            <input id="name" 
                                type="text" 
                                class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                placeholder="Nombre"
                                name="name" 
                                value="{{ $clinicalpatient->user->name }}" required
                            >
                            @if ($errors->has('name'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>

                        <div class="col-md-4 pl-md-1">
                          <div class="form-group">
                            <label>Apellido</label>
                            <input id="last_name" 
                                type="text" 
                                class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                placeholder="apellido" name="last_name" required
                                value="{{ $clinicalpatient->last_name }}"
                            >
                            @if ($errors->has('last_name'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      
                        <div class="col-md-4 px-md-1">
                          <div class="form-group">
                            <label>DNI</label>
                            <input id="dni" type="text" 
                                class="form-control {{ $errors->has('dni') ? ' is-invalid' : '' }}"
                                placeholder="DNI" name="dni" value="{{ $clinicalpatient->dni }}"
                            >
                            @if ($errors->has('dni'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('dni') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label for="sel1"><strong>Seleccione seguro</strong></label>
                              <select class="form-control" id="sel1" name="insurance_id" required = "required">
                                @foreach($insurances as $item)
                                  <option value ="{{ $item->id }}"
                                    @if($item->id == $clinicalpatient->insurance_id) 
                                        selected='selected' 
                                    @endif>
                                    {{ $item->name }}
                                  </option>
                                @endforeach 
                              </select>
                          </div>
                        </div>

                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label>Direccion</label>
                            <input id="address" 
                                type="text" 
                                class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}"
                                placeholder="address"
                                name="address" 
                                value="{{ $clinicalpatient->address }}"
                            >
                            @if ($errors->has('address'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label><strong>Antecedentes Personales</strong></label>
                           
                            <textarea class="form-control" name="personal_history" 
                              placeholder="Antecedentes personales" rows = '5'  
                              style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px 
                              solid #dddddd; padding: 10px;" id="personal_history" 
                              >{!! $clinicalpatient->personal_history !!}
                            </textarea>
                            @if ($errors->has('personal_history'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('personal_history') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>

                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label><strong>Antecedentes Familiares</strong></label>
                            
                            <textarea class="form-control" name="family_background" 
                              placeholder="Antecedentes familiares" rows = '5'  
                              style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 4px 
                              solid #dddddd; padding: 10px;" id="family_background"
                              >{!! $clinicalpatient->family_background !!}
                            </textarea>

                            @if ($errors->has('family_background'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('family_background') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label><strong>Peso</strong></label>
                            <input id="weight" maxlength="10"
                                type="text" class="form-control {{ $errors->has('weight') ? ' is-invalid' : '' }}"
                                placeholder="Indique el peso" name="weight" 
                                value="{{ $clinicalpatient->weight }}">
                            @if ($errors->has('weight'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('weight') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label><strong>Talla</strong></label>
                            <input id="size" maxlength="10"
                                type="text" class="form-control {{ $errors->has('size') ? ' is-invalid' : '' }}"
                                placeholder="Describa la talla" name="size" value="{{ $clinicalpatient->size }}">
                            @if ($errors->has('size'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('size') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label><strong>Presion sistolica</strong></label>
                            <input id="systolic_pressure" maxlength="10"
                                type="text" 
                                class="form-control {{ $errors->has('systolic_pressure') ? ' is-invalid' : '' }}"
                                placeholder="Indique la presion sistolica" name="systolic_pressure" 
                                value="{{ $clinicalpatient->systolic_pressure }}">
                            @if ($errors->has('systolic_pressure'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('systolic_pressure') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label><strong>Presion diastolica</strong></label>
                            <input id="diastolic_pressure" maxlength="10"
                                type="text" 
                                class="form-control {{ $errors->has('diastolic_pressure') ? ' is-invalid' : '' }}"
                                placeholder="Indique la presion sistolica" name="diastolic_pressure" 
                                value="{{ $clinicalpatient->diastolic_pressure }}">
                            @if ($errors->has('diastolic_pressure'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('diastolic_pressure') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label><strong>Telefono de contacto (1)</strong></label>
                            <input id="phone_1" maxlength="20"
                                type="text" required
                                class="form-control {{ $errors->has('phone_1') ? ' is-invalid' : '' }}"
                                placeholder="Telefono de contacto" name="phone_1" 
                                value="{{ $clinicalpatient->phone_1 }}">
                            @if ($errors->has('systolic_pressure'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_1') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label><strong>Telefono de contacto (2)</strong></label>
                            <input id="phone_2" maxlength="20"
                                type="text" 
                                class="form-control {{ $errors->has('phone_2') ? ' is-invalid' : '' }}"
                                placeholder="Telefono de contacto" name="phone_2" 
                                value="{{ $clinicalpatient->phone_2 }}">
                            @if ($errors->has('phone_2'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_2') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        <div class="col-md-6 pr-md-1">
                          <div class="radio-inline">
                            <label>
                                <input type="radio" id = "optmas" name="optmas" 
                                  @if ($clinicalpatient->gender == 'M')
                                      checked
                                      value="{{ $clinicalpatient->gender }}"
                                  @endif
                                >  Masculino
                            </label>
                          </div>

                          <div class="radio-inline">
                            <label>
                              <input type="radio" id = "optfem" name="optmas" 
                                @if ($clinicalpatient->gender == 'F')
                                  checked value="{{ $clinicalpatient->gender }}"
                                @endif
                              >Femenino
                            </label>
                          </div>
                          <input type="hidden" id="genero"  name ="genero" 
                             value = "{{$clinicalpatient->gender}}">
                        </div>
                        
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label for=""><strong>Seleccione tipo de sangre</strong></label>
                            <select class="form-control" 
                              id="bloodtype" name="bloodtype" required = "required">
                             
                              @foreach($Tipo_Sangre as $tipo)
                                <option value = "{{ $i }}"
                                   @if($clinicalpatient->bloodtype == $i) 
                                     selected='selected' 
                                   @endif
                                   >{{ $tipo }}
                                </option>
                                @php $i++ @endphp
                              @endforeach 
                            </select>
                          </div>
                        </div>
                      </div>
                      <center><button type="submit" class="btn btn-fill btn-primary">Save</button></center>
                    </form>
                  </div>
                  <div class="card-footer">
                    <!-- <button type="submit" class="btn btn-fill btn-primary">*Save</button> -->
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
    console.log("pacientes ");
    $("#optmas").click(function(){ 
        $("input[name=optmas]").each(function (index) { 
           if($(this).is(':checked')){
              console.log("m");
              $("#genero").val('M');
           } 
        });
    });
            
      $("#optfem").click(function(){ 
        $("input[name=optmas]").each(function (index) { 
           if($(this).is(':checked')){
              console.log("f");
              $("#genero").val('F');
           }
        });
       }); 

      $(document).ready(function() {
          $('.js-example-basic-single').select2();
      }); 
  </script>
@stop





                

