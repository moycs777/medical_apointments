@extends('layouts.admin')
@section('content')
<div class="wrapper">
  <div class="main-panel">
       <!-- Navbar -->
    @include('partials.admin.nav')
    <div class="content">
        <div class="row">
            <div class="col-md-8">
               <h2>Crear Subpatologia</h1>
                  <div class="card">
                      <div class="card-body">
                          <form method="POST" action="{{ route('subpatologies.store') }}" >
                             @csrf
                                <div class="form-group">
                                   <label for=""><strong>Nombre de la Subpatologia</strong></label>
                                   <input type="textarea" name="name" class="form-control" 
                                      placeholder="Descripción de la subpatologia">
                                </div>

                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for=""><strong>Recipe</strong></label>
                                      <textarea name="recipe" 
                                        placeholder="Recipe" rows = '10'  required = "required" 
                                        style="width: 100%; height: 100% px;font-size: 13px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="recipe" >
                                      </textarea>
                                      @if ($errors->has('recipe'))
                                          <span style="color: red; class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('recipe') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for=""><strong>Indicaciones</strong></label>
                                      <textarea name="prescription" 
                                        placeholder="Describa las indicaciones" rows = '10' 
                                        required = "required" 
                                        style="width: 100%; height: 100% px; font-size: 13px; line-height: 18px; border: 4px solid #dddddd; padding: 10px;" id="prescription">
                                      </textarea>
                                      @if ($errors->has('prescription'))
                                          <span style="color: red; class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('prescription') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                                {{-- <div class="form-group">
                                   <label for=""><strong>Recipe</strong></label>
                                  <textarea name="recipe"
                                      placeholder="Descripción recipe" rows = '10' 
                                      cols = '100' required = "required" 
                                      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="recipe" >
                                   </textarea>
                                </div>

                               
                                <div class="form-group">
                                   <label for=""><strong>Prescripcion</strong></label>
                                   <textarea name="prescription"
                                      placeholder="Indicaciones" rows = '10'  cols = '100'required = "required" 
                                      style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="prescription" >
                                   </textarea>
                                </div> --}}

                                <div class="form-group">
                                   <label for="sel1"><strong>Seleccione patologia</strong></label>
                                     <select class="form-control" id="sel1" name="pathology_id">
                                        @foreach($pathologies as $pathologie)
                                           <option value ="{{ $pathologie->id }}">
                                              {{ $pathologie->name }}
                                           </option>
                                        @endforeach 
                                     </select>
                                </div>

                                <div class="form-group">
                                   <button type="submit" class="btn btn-primary">Guardar</button>
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

@section('page-script')

  <script type="text/javascript">
         
  </script>

@stop
