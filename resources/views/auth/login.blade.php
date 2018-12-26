@extends('layouts.web.web')
  
@section('content')
    <!-- Hero Section
    ================================================== -->

    <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
      <div class="container">
      <!-- <section class="section-signup bg-faded"> -->
      <div class="container">
        <!-- <h3 class="text-xs-center m-b-3">Sign up to receive free updates as soon as they hit!</h3> -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <div class="row">
            <!-- <div class="col-md-12 col-xl-3"> -->
              <div class="col-md-8 col-md-offset-0">
              <div class="form-group has-icon-left form-control-name">
                <label class="sr-only" for="inputName">Your name</label>
                <input style = "min-width: 300px;" id="email" type="text" 
                    class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}"
                    placeholder="User name"
                    name="email" 
                    value="{{ old('email') }}" required autofocus
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
            <div class="col-md-8 col-md-offset-0">
              <div class="form-group has-icon-left form-control-password">
                <label class="sr-only" for="inputPassword">Enter a password</label>
                <input 
                    id="password" type="password" 
                    class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                    id="inputPassword" 
                    placeholder="Enter a password" 
                    autocomplete="off"
                    name="password" required
                >
              </div>
            </div>
            </div>

            <div class="row">
            <div class="col-md-6 col-xl-3">
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">iniciar!</button>
              </div>
            </div>
            </div>

          <div class="row">
          <div class="col-md-12 col-md-offset-0">
          <label class="c-input ">
            <span class="c-indicator"></span> Olvide mi clave <a href="{{ route('password.request') }}">Recuperar</a>
          </label>
          </div>
          </div>
        </form>
      </div>
    <!-- </section> -->
      </div>
    </header>

@endsection()

    