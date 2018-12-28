@extends('layouts.web.web')
  
@section('content')
  
  <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
    <div class="clearfix hidden-xl-up"></div>   
     
    <div class="container">
      <div class="clearfix hidden-xl-up"></div>
      <div class="row">
        <div class="col-md-2 col-xl-2">
          <div class="container">
            <h3 class="p-y-1 text-xs-center">Edita tus <strong>Datos</strong></h3>
          </div>
        <form method="POST" action="{{ route('profile.store') }}" >

        <button type="submit" class="btn btn-primary has-gradient btn-block" >Guardar</button>

        </div>
        <div class="col-md-6 col-xl-6">
            @csrf
            @php
                $Tipo_Sangre = array('A+','A-','B+','B-','AB+','AB-','O+','O-');
                $i = 1;
            @endphp
            <div class="form-group has-icon-left form-control-name">
                <input id="name" 
                    type="text" 
                    class="form-control form-control-lg {{ $errors->has('name') ? ' is-invalid' : '' }}"
                    placeholder="Nombre"
                    name="name" 
                    value="@if($user->name){{$user->name}}@endif()" 
                    {{-- required --}} autofocus
                >
            </div>
            <div class="form-group has-icon-left form-control-name">
                <input id="last_name" 
                    type="text" 
                    class="form-control form-control-lg {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                    placeholder="Apellido"
                    name="last_name" 
                    value="@if($user->clinical_patient->last_name){{$user->clinical_patient->last_name}}@endif()" 
                    {{-- required --}} autofocus
                >
            </div>
            <div class="form-group has-icon-left form-control-name">
                <input id="username" 
                    type="text" 
                    class="form-control form-control-lg {{ $errors->has('username') ? ' is-invalid' : '' }}"
                    placeholder="username"
                    name="username" 
                    disabled
                    value="@if($user->username){{$user->username}}@endif()" 
                    {{-- required --}} autofocus
                >
            </div>
            {{-- <div class="form-group has-icon-left form-control-name">
                <input id="password" 
                    type="text" 
                    class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}"
                    placeholder="Password"
                    name="password" 
                    value="" 
                    
                >
            </div> --}}
            <div class="form-group has-icon-left form-control-name">
                <input id="email" 
                    type="text" 
                    class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}"
                    placeholder="Email"
                    name="email" 
                    value="@if($user->email){{$user->email}}@endif()" 
                    disabled
                    {{-- required --}} autofocus
                >
            </div>
            <div class="form-group has-icon-left form-control-name">
                <input id="name" 
                    type="dni" 
                    class="form-control form-control-lg {{ $errors->has('dni') ? ' is-invalid' : '' }}"
                    placeholder="DNI"
                    name="dni" 
                    value="@if($user->clinical_patient->dni){{$user->clinical_patient->dni}}@endif()" 
                    {{-- required --}} autofocus
                >
            </div>
            
        </div>
        <div class="col-md-4 col-xl-4">
            <div class="form-group has-icon-left form-control-name">
                <input id="address" 
                    type="text" 
                    class="form-control form-control-lg {{ $errors->has('address') ? ' is-invalid' : '' }}"
                    placeholder="Direccion"
                    name="address" 
                    value="@if($user->clinical_patient->address){{$user->clinical_patient->address}}@endif()" 
                    {{-- required --}} autofocus
                >
            </div>
            <div class="form-group has-icon-left form-control-name">
                <select class="js-example-basic-single form-control"  id="sel1" name="insurance_id">
                    <option value="0">Seleccione</option>
                    @foreach($insurances as $item)
                    <option value ="{{ $item->id }}"
                        @if($item->id == $user->clinical_patient->insurance_id) 
                            selected='selected' 
                        @endif
                    >
                        {{ $item->name }}
                    </option>
                    @endforeach 
                </select>
                
            </div>
            <div class="form-group has-icon-left form-control-name">
                <select class="form-control" 
                    id="bloodtype" name="bloodtype" required = "required">
                    
                    @foreach($Tipo_Sangre as $tipo)
                    <option value = "{{ $i }}"
                        @if($user->clinical_patient->bloodtype == $i) 
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
    </div>
    </form>  

  </header>

 
@endsection()

@section('page-script')

<script type="text/javascript">
  $(document).ready(function() {
      console.log("index profile :" );
  });    
</script>

@stop

    