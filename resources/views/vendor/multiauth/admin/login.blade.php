@extends('layouts.admin')

@section('content')

<div class="wrapper">
    
    <div class="main-panel">
      <!-- Navbar -->
      @include('partials.admin.nav')
      
    <div class="content">
        <div class="row">
          <div class="col-12">
          <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Admin Login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input 
                            id="email" 
                            type="email"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                            name="email" value="{{ old('email') }}" aria-describedby="emailHelp" 
                            placeholder="Ingresa tu email"
                            required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input 
                            id="password" 
                            type="password" 
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                            id="exampleInputPassword1" 
                            name="password"
                            required
                            placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span> 
                        @endif
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" 
                                name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}
                            >
                            Recordar
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                    <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
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
    console.log("dashboard ");
  </script>
  
@stop





                