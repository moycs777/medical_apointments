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
                            <input type="text" class="form-control" disabled="" placeholder="12345678" value="{{ $clinicalpatient->user->password }}">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 pr-md-1">
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
                        <div class="col-md-6 pl-md-1">
                          <div class="form-group">
                            <label>Apellido</label>
                            <input id="last_name" 
                                type="text" 
                                class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                placeholder="apellido"
                                name="last_name" 
                                value="{{ $clinicalpatient->last_name }}"
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
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>DNI</label>
                            <input id="dni" 
                                type="text" 
                                class="form-control {{ $errors->has('dni') ? ' is-invalid' : '' }}"
                                placeholder="DNI"
                                name="dni" 
                                value="{{ $clinicalpatient->dni }}"
                            >
                            @if ($errors->has('dni'))
                                <span style="color: red; class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('dni') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      </div>

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

                      <div class="row">
                        <div class="col-md-12">
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
                        <div class="col-md-12">
                          <div class="radio-inline">
                            <label>
                                <input type="radio" id = "optmas" name="optmas" 
                                  @if ($clinicalpatient->gender == 'M')
                                      checked
                                      value="{{$clinicalpatient->gender}}"
                                  @endif
                                >  Masculino
                            </label>
                          </div>

                          <div class="radio-inline">
                             <label>
                                 <input type="radio" id = "optfem" name="optmas" 
                                  @if ($clinicalpatient->gender == 'F')
                                      checked
                                      value="{{$clinicalpatient->gender}}"
                                  @endif
                                > Femenino
                             </label>
                          </div>
                          <input type="hidden" id="genero"  name ="genero" 
                             value = "{{$clinicalpatient->gender}}">
                        </div>
                      </div>


                      <button type="submit" class="btn btn-fill btn-primary">Save</button>

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





                

