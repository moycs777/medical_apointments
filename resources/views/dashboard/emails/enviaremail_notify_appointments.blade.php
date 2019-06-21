@extends('layouts.admin')

@section('content')

<div class="wrapper">

    <div class="main-panel">
        <!-- Navbar -->
        @include('partials.admin.nav')

        <div class="content">
            <div class="row">
                <div class="col-md-8">
                <h2>Enviar correo de confirmacion de citas</h2>
                    <div class="card">
                        <div class="card-body">
                            
                            {{-- <h4>Gustavo Palacio</h4>
                            <h4>gustavorpalacio@hotmail.com</h4>
                            <h4>Contenido:</h4> --}}
                            <p>{{ $a->first_name }}</p>
                            <p>{{ bbbbbbbbbbbbbbbbbbbbbbbb }}</p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus nam aut, doloremque labore animi voluptate. Rerum eius eligendi tenetur, vitae voluptatibus sapiente quas dolores repellat optio omnis, deserunt nulla illo.
                            </p>
                            {{-- <div class="form-group">
                                <button type="submit" class="btn btn-primary">Enviar Correo</button>
                            </div> --}}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop 