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
                    <h5 class="title">Crear Paciente</h5>
                  </div>
                  <form  method="POST" action="{{ route('clinicalpatients.store') }}" >
                  
                  <div class="card-body">
                      @csrf

                      <div class="row">
                        <div class="col-md-4 pr-md-1">
                          <div class="form-group">
                            <label><strong>Usuario (Nombre)</strong></label>
                            <input id="username"
                                type="text"
                                class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}"
                                placeholder="Username" name="username"
                                value="{{ old('username') }}" required
                            >
                            @if ($errors->has('username'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        
                        <div class="col-md-4 px-md-1">
                          <div class="form-group">
                            <label for="exampleInputEmail1"><strong>Email</strong></label>
                            <input id="email"
                                type="text"
                                class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                placeholder="email" name="email" value="{{ old('email') }}" required
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
                            <label><strong>Password ()</strong></label>
                            <input type="text" class="form-control" disabled="" placeholder="12345678" value="12345678">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4 pr-md-1">
                          <div class="form-group">
                            <label><strong>Nombre</strong></label>
                            <input id="first_name"
                              type="text"
                              class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                              placeholder="Nombre" name="first_name" value="{{ old('first_name') }}" required
                            >
                            @if ($errors->has('first_name'))
                                <span style="color: red;" class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>

                        <div class="col-md-4 px-md-1">
                          <div class="form-group">
                            <label><strong>Apellido</strong></label>
                            <input id="last_name"
                                type="text"
                                class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                placeholder="apellido" name="last_name" value="{{ old('last_name') }}"
                            >
                            @if ($errors->has('last_name'))
                                <span style="color: red;" class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      

                        <div class="col-md-4 pl-md-1">
                          <div class="form-group">
                            <label><strong>DNI</strong></label>
                            <input id="dni"
                                type="text" class="form-control {{ $errors->has('dni') ? ' is-invalid' : '' }}"
                                placeholder="DNI" name="dni" value="{{ old('dni') }}">
                            @if ($errors->has('dni'))
                                <span style="color: red;" class="invalid-feedback" role="alert">
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
                              <select class="js-example-basic-single form-control"  id="sel1" name="insurance_id">
                                  <option value="0">Seleccione</option>
                                  @foreach($insurances as $item)
                                    <option value ="{{ $item->id }}">
                                        {{ $item->name }}
                                    </option>
                                  @endforeach 
                              </select>
                          </div>
                        </div>

                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label><strong>Direccion</strong></label>
                            <input id="address" type="text"
                                class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}"
                                placeholder="address" name="address" value="{{ old('address') }}"
                            >
                            @if ($errors->has('address'))
                                <span style="color: red;"  class="invalid-feedback" role="alert">
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
                              solid #dddddd; padding: 10px;" id="personal_history" >
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
                              solid #dddddd; padding: 10px;" id="family_background" >
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
                                placeholder="Indique el peso" name="weight" value="{{ old('weight') }}">
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
                                placeholder="Describa la talla" name="size" value="{{ old('size') }}">
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
                                value="{{ old('systolic_pressure') }}">
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
                                value="{{ old('diastolic_pressure') }}">
                            @if ($errors->has('diastolic_pressure'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('diastolic_pressure') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 pr-md-1">
                          <div class="radio-inline">
                            <label>
                                <input type="radio" id = "optmas" name="optmas" value="M" checked>  Masculino
                            </label>
                          </div>

                          <div class="radio-inline">
                             <label>
                                 <input type="radio" id = "optfem" name="optmas" value="F">  Femenino
                             </label>
                          </div>
                          <input type="hidden" id="genero"  name ="genero"
                             value = "M">
                        </div>


                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label for=""><strong>Seleccione tipo de sangre</strong></label>
                            <select class="js-example-basic-single form-control"  
                              id="bloodtype" name="bloodtype" required = "required">
                              <option value="0">Seleccione</option>
                              
                              <option value ="1">A+</option>
                              <option value ="2">A-</option>
                              <option value ="3">B+</option>
                              <option value ="4">B-</option>
                              <option value ="5">AB+</option>
                              <option value ="6">AB-</option>
                              <option value ="7">O+</option>
                              <option value ="8">O-</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <center>
                        <div class="col-md-4 col-md-4-offset-8">
                          <button type="submit" class="btn btn-fill btn-primary">Salvar</button>
                        </div>
                      </center>
                    </form>
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

  $(document).ready(function() {
      $("#optmas").click(function(){
          $("input[name=optmas]").each(function (index) {
              if($(this).is(':checked')){
                console.log("m");
                $("#genero").val('M');
                //$("#genero").val('F');
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

      $('.js-example-basic-single').select2();
      
      $('#bloodtype').on('change',function(){
          //var n = $(this).val();
          //var optionText = $('#dropdownList option[value="'+optionValue+'"]').text();
          var optionText = $("#bloodtype option:selected").text();
          var id = $("#bloodtype option:selected").val();
      }); 
  }); 
  </script>
@stop







