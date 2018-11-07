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
                    <h5 class="title">Opciones</h5>
                  </div>
                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-6 pr-md-1">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <a href="" class="btn btn-fill btn-primary">Horario</a>
                            <a href="" class="btn btn-fill btn-primary">Configurar Agenda</a>
                            <a href="" class="btn btn-fill btn-primary">Pacientes por atender</a>
                            
                          </div>
                        </div>
                        
                      </div>

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





                

