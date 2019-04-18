@extends('layouts.admin')
@section('content')
<div class="wrapper">
  <div class="main-panel">
    @include('partials.admin.nav')
    <div class="content">
      <div class="row">
        <div class="col-md-8">
          
          <center><h2>Constancia Medica</h2></center>
          
          <div class="card">
            <div class="card-body">
               
               <form  method="POST" action="{{ route('pdf_generate_constancia') }}" >
                  
                  @csrf                            
                  <div class="form-group">
                     <input type="hidden" name="id" class="form-control"
                      value = "{{ $paciente->id }}"
                    >
                  </div>

                  <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="sel1"><strong>Nombre</strong></label>
                      <input type="text" name="first_name" class="form-control"
                        value = "{{ $paciente->first_name }}" disabled="true"
                      >  
                    </div>

                    <div class="form-group col-sm-6">
                      <label for=""><strong>Apellido</strong></label>
                      <input id="last_name" type="text" name = "last_name" class="form-control" 
                        value="{{ $paciente->last_name }}" disabled="true"
                      > 
                    </div>
                  </div>

                  <div class="form-group">
                    <label for=""><strong>Detalle</strong></label>
                    <textarea name="detalle" 
                      placeholder="Describa detalle" rows = '15' cols= "80" required = "required" 
                      style="width: 100%; height: 100% px; font-size: 13px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" 
                      id="detalle" required>
                    </textarea>
                  </div>
                              
                  <div class="form-group">
                    <center>
                      <div class="col-md-4 col-md-4-offset-8">
                        <button type="submit" class="btn btn-fill btn-primary">Imprimir</button>
                      </div>
                    </center>
                  </div>

              </form>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
</div>
@stop