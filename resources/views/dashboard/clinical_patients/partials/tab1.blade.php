<input type="hidden" name="url" id="url" value="{{url('')}}">

@php
  $Tipo_Sangre = array('A+','A-','B+','B-','AB+','AB-','O+','O-');
@endphp

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label><strong>Username</strong></label>
    <input id="Username"
        type="text"
        class="form-control {{ $errors->has('Username') ? ' is-invalid' : '' }}"
        placeholder="Nombre de usuario" name="Username" required = "require"
    >
    @if ($errors->has('Username'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('Username') }}</strong>
        </span>
    @endif 
  </div>
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label for="exampleInputEmail1"><strong>Email</strong></label>
    <input id="email"
        type="text"
        class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
        placeholder="Email"
        name="email"
        required = "require" 
    >
    @if ($errors->has('date_consultation'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('date_consultation') }}</strong>
        </span>
    @endif 
  </div>
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label><strong>Password</strong></label>
    <input id="password"
        type="text"
        class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
        placeholder="" name="password" disabled
        value="{{ old('password') }}" 
    >
    @if ($errors->has('password'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label for=""><strong>Nombre</strong></label>
    <input id="email"
        type="text"
        class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
        placeholder="Ingrese nombre"
        name="first_name"
        required = "require" 
    >
    @if ($errors->has('first_name'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('first_name') }}</strong>
        </span>
    @endif 
  </div>
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label><strong>Apellido</strong></label>
    <input id="last_name"
        type="text"
        class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
        placeholder="Ingrese apellido" name="last_name" 
        value="{{ old('last_name') }}" 
    >
    @if ($errors->has('last_name'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('last_name') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-4 pr-md-1">
  <div class="form-group">
    <label><strong>DNI</strong></label>
    <input id="dni"
        type="text"
        class="form-control {{ $errors->has('dni') ? ' is-invalid' : '' }}"
        placeholder="Ingrese Dni" name="dni" 
        value="{{ old('dni') }}" 
    >
    @if ($errors->has('dni'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('dni') }}</strong>
        </span>
    @endif
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Seleccione seguro</label>
    <select class="form-control" id="sel1" name="insurance_id">
      <option value="0">Seleccione</option>
         @foreach($insurances as $item)
           <option value ="{{ $item->id }}">
              {{ $item->name }}
           </option>
        @endforeach 
     </select>
  </div>
</div>  
  
<div class="col-md-12">
  <div class="form-group">
    <label><strong>Direccion</strong></label>
    <input id="address"
        type="text"
        class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}"
        placeholder="Ingrese direccion" name="address" 
        value="{{ old('dni') }}" 
    >
    @if ($errors->has('address'))
        <span style="color: red; class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('address') }}</strong>
        </span>
    @endif
  </div>
</div>
  
<div class="row">
  <div class="col-md-12">
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
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for=""><strong>Seleccione tipo de sangre</strong></label>
      <select class="form-control" 
        id="bloodtype" name="bloodtype" required = "required">
        @php $i = 0; @endphp
        @foreach($Tipo_Sangre as $tipo)
           @php $i++; @endphp
           <option value=" @php $i; @endphp">{{ $tipo }}</option>
        @endforeach
      </select>
    </div>
  </div>
</div>









