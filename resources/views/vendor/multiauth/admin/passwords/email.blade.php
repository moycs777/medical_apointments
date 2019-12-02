{{-- @extends('multiauth::layouts.app') --}}
@extends('layouts.web.web')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Reset {{ ucfirst(config('multiauth.prefix')) }} Password</div>

                <div class="card-body">
                    

                    {{-- <form method="POST" action="{{ route('admin.password.email') }}" 
                        aria-label="{{ __('Resetear Password de Administrador') }}"> --}}

                    <form method="POST" action="{{ route('admin.customauth.email') }}" 
                        aria-label="{{ __('<<< Resetear Password Administrador >>>') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                            {{ __('Indique su email o correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                    required> @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar enlace de recuperacion de contraseña') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection