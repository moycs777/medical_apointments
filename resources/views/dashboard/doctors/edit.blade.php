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
                    <h5 class="title">Editar Doctor </h5>
                  </div>
                  <div class="card-body">
                    <form  method="POST" action="{{ route('doctors.update',$doctor->id) }}" >
                      @csrf
                      {{ method_field('PUT') }}
                      <div class="row">
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input id="email" 
                                type="text" 
                                class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                placeholder="email"
                                name="email"
                                disabled=""
                                autofocus="true" 
                                value="{{ $doctor->admin->email }}" required
                            >
                            @if ($errors->has('email'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" id="">
                              <option 
                                value="1"
                                @if( $doctor->status == "1") selected='selected' @endif
                              >
                                Habilitado
                              </option>
                              <option 
                                value="0"
                                @if( $doctor->status == "0") selected='selected' @endif
                              >
                                Deshabilitado
                              </option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label>Nombre</label>
                            <input id="first_name" 
                                type="text" 
                                class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                placeholder="Nombre"
                                name="first_name" 
                                value="{{ $doctor->first_name }}" required
                            >
                            @if ($errors->has('first_name'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label>Apellido</label>
                            <input id="last_name" 
                                type="text" 
                                class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                placeholder="apellido"
                                name="last_name" 
                                value="{{ $doctor->last_name }}"
                            >
                            @if ($errors->has('last_name'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label>Cedula</label>
                            <input id="identification_card" 
                                type="text" 
                                class="form-control {{ $errors->has('identification_card') ? ' is-invalid' : '' }}"
                                placeholder="identification_card"
                                name="identification_card" 
                                value="{{ $doctor->identification_card }}"
                            >
                            @if ($errors->has('identification_card'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('identification_card') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label>Beeper</label>
                            <input id="beeper" 
                                type="text" 
                                class="form-control {{ $errors->has('beeper') ? ' is-invalid' : '' }}"
                                placeholder="beeper"
                                name="beeper" 
                                value="{{ $doctor->beeper }}"
                            >
                            @if ($errors->has('beeper'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('beeper') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Direccion</label>
                            <input id="address" 
                                type="text" 
                                class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}"
                                placeholder="address"
                                name="address" 
                                value="{{ $doctor->address }}"
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
                            <label>Telefono de habitacion</label>
                            <input id="home_phone" 
                                type="text" 
                                class="form-control {{ $errors->has('home_phone') ? ' is-invalid' : '' }}"
                                placeholder="home_phone"
                                name="home_phone" 
                                value="{{ $doctor->home_phone }}"
                            >
                            @if ($errors->has('home_phone'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('home_phone') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label>Telefono donde labora</label>
                            <input id="work_phone" 
                                type="text" 
                                class="form-control {{ $errors->has('work_phone') ? ' is-invalid' : '' }}"
                                placeholder="work_phone"
                                name="work_phone" 
                                value="{{ $doctor->work_phone }}"
                            >
                            @if ($errors->has('work_phone'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('work_phone') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label>Nro de Celular</label>
                            <input id="mobile_1" 
                                type="text" 
                                class="form-control {{ $errors->has('mobile_1') ? ' is-invalid' : '' }}"
                                placeholder="mobile_1"
                                name="mobile_1" 
                                value="{{ $doctor->mobile_1 }}"
                            >
                            @if ($errors->has('mobile_1'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('mobile_1') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label>Telefono donde labora</label>
                            <input id="mobile_2" 
                                type="text" 
                                class="form-control {{ $errors->has('mobile_2') ? ' is-invalid' : '' }}"
                                placeholder="mobile_2"
                                name="mobile_2" 
                                value="{{ $doctor->mobile_2 }}"
                            >
                            @if ($errors->has('mobile_2'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('mobile_2') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      </div>

                     {{--  <div class="row">
                        <div class="col-md-6 pl-md-1">
                          <div class="form-group">
                            <label>Beeper</label>
                            <input id="beeper" 
                                type="text" 
                                class="form-control {{ $errors->has('beeper') ? ' is-invalid' : '' }}"
                                placeholder="beeper"
                                name="beeper" 
                                value="{{ $doctor->beeper }}"
                            >
                            @if ($errors->has('beeper'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('beeper') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      </div> --}}

                      <div class="row">
                        <div class="col-md-12">
                          <div class="radio-inline">
                            <label>
                                <input type="radio" id = "optmas" name="optmas" 
                                  @if ($doctor->gender == 'M')
                                      checked
                                      value="{{$doctor->gender}}"
                                  @endif
                                >  Masculino
                            </label>
                          </div>

                          <div class="radio-inline">
                             <label>
                                 <input type="radio" id = "optfem" name="optmas" 
                                  @if ($doctor->gender == 'F')
                                      checked
                                      value="{{$doctor->gender}}"
                                  @endif
                                > Femenino
                             </label>
                          </div>
                          <input type="hidden" id="genero"  name ="genero" 
                             value = "{{$doctor->gender}}">
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
  </script>
@stop





                

