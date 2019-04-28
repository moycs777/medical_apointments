@extends('layouts.web.web')
  
@section('content')
    <!-- Hero Section
    ================================================== -->
    <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
      <div class="container">
      <!-- <section class="section-signup bg-faded "> -->
      <div class="container">
        <h3 class="text-xs-center m-b-3">Registrate</h3>
        <form   method="POST" action="{{ route('register') }}">
          @csrf
          {{-- <div class="row">  --}} 
          <div class="row">         
            <div class="col-md-6  col-md-offset-0">
              <div class="form-group has-icon-left form-control-name">
                <label class="sr-only" for="inputName">Your name</label>
                <input id="name" 
                    type="text" 
                    class="form-control form-control-lg {{ $errors->has('name') ? ' is-invalid' : '' }}"
                    placeholder="Nombre"
                    name="name" 
                    value="{{ old('name') }}" required autofocus
                >
                @if ($errors->has('name'))
                    <span style="color: red; class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </div>
            </div>

            <div class="col-md-6  col-md-offset-0">
              <div class="form-group has-icon-left form-control-name">
                <label class="sr-only" for="inputName">Your name</label>
                <input id="last_name" 
                    type="text" 
                    class="form-control form-control-lg {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                    placeholder="Apellido"
                    name="last_name" 
                    value="{{ old('last_name') }}" required autofocus
                >
                @if ($errors->has('name'))
                    <span style="color: red; class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div> 

          <div class="row">
            <div class="col-md-6  col-md-offset-0">
              <div class="form-group has-icon-left form-control-name">
                <label class="sr-only" for="inputName">Your name</label>
                <input id="username" 
                    type="text" 
                    class="form-control form-control-lg {{ $errors->has('username') ? ' is-invalid' : '' }}"
                    placeholder="User name"
                    name="username" 
                    value="{{ old('username') }}" required
                >
                @if ($errors->has('username'))
                    <span style="color: red; class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            
            <div class="col-md-6 col-md-offset-0">
              <div class="form-group has-icon-left form-control-name">
                <label class="sr-only" for="inputName">Your name</label>
                <input id="email" 
                    type="text" 
                    class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}"
                    placeholder="Email (opcional)"
                    name="email" 
                    value="{{ old('email') }}"  
                >
                @if ($errors->has('email'))
                    <span style="color: red; class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div>

          <div class="row">
             <div class="col-md-6 col-md-offset-0">
              <div class="form-group has-icon-left form-control-name">
                <label class="sr-only" for="inputName">Telefono de contacto</label>
                <input 
                    id="telephone-contact" type="text" 
                    class="form-control form-control-lg {{ $errors->has('phone_1') ? ' is-invalid' : '' }}" 
                    id="inputphone_1" placeholder="Telefono de contacto" autocomplete="off"
                    name="phone_1" required
                >
                @if ($errors->has('telephone-contac'))
                    <span style="color: red; class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone_1') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-md-offset-0">
              <div class="form-group has-icon-left form-control-name">
                <label class="sr-only" for="inputPassword">Enter a password</label>
                <input 
                    id="password" type="password" 
                    class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                    id="inputPassword" placeholder="Password" autocomplete="off" name="password" required
                >
                @if ($errors->has('password'))
                    <span style="color: red; class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            
            <div class="col-md-6 col-md-offset-0">
              <div class="form-group has-icon-left form-control-password">
                <label class="sr-only" for="inputPassword">Enter a password</label>
                <input 
                    id="password_confirm" type="password" class="form-control form-control-lg" 
                    id="inputPassword" placeholder="Repite el Password" autocomplete="off"
                    name="password_confirmation" required
                >
              </div>
            </div>
          </div>

         {{-- <div class="col-md-6 col-xl-3"> --}}
             {{--  <div class="text-center"> --}}
                {{-- <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block center-block">Registrarme</button>
                </div> --}}
            {{--   </div> --}}
         {{-- </div>--}}
         
           <div class="form-row text-center">
              <div class="col-12">
                  <button type="submit" class="btn btn-primary">Registrarme</button>
              </div>
           </div>    
              
        </form>
      </div>
      <!-- </section> -->
      </div>
    </header>

@endsection()

    