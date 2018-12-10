@extends('layouts.admin')

@section('content')

<div class="wrapper">

  <div class="main-panel">
        <!-- Navbar -->
    @include('partials.admin.nav')

    <div class="content">
        <div class="row">
            <div class="col-md-10">
               <h2>Actualizar subpatologia</h1>
                  <div class="card">
                      <div class="card-body">
                          <form method="POST" 
                                action="{{ route('subpatologies.update',$subpatology->id) }}">

                              @csrf
                              {{ method_field('PUT') }}
                              <div class="form-group">
                                <label for=""><strong>Nombre</strong></label>
                                <input type="text" name="name" class="form-control" 
                                    placeholder="Descripción de la subpatologia"
                                    required = "required"
                                    value = "{{ $subpatology->name }}">
                              </div>

                              <div class="form-group">
                                <label for=""><strong>Recipe</strong></label>
                                                                 
                                <textarea class="form-control" name="recipe" rows = '5'
                                   required = "required" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1" >{!! $subpatology->recipe !!}
                                </textarea>

                              </div>  

                              <div class="form-group">
                                <label for=""><strong>Prescripcion</strong></label>
                                <input type="text" name="prescription" class="form-control" 
                                    value = "{{ $subpatology->prescription }}"
                                    required = "required"
                                    placeholder="Detalle de la prescripción">
                              </div>

                              <div class="form-group">
                                <label for="sel1"><strong>Seleccione patologia</strong></label>
                                  <select class="form-control" id="sel1" name="pathology_id"                          required = "required">
                                    @foreach($patholies as $item)
                                      <option 
                                         value ="{{ $item->id }}"
                                         @if($item->id == $subpatology->pathology_id) 
                                            selected='selected' 
                                         @endif>
                                         {{ $item->name }} 
                                      </option>
                                    @endforeach 
                                  </select>
                              </div>

                              <div class="form-group">
                                  <label>
                                    <input type="checkbox" name ="status" id="status"
                                      class ="checkbox" value="1"
                                      @if ($subpatology->status == 1)
                                          checked
                                      @endif
                                    ><strong>{{ ($subpatology->status == 1) ? ' Habilitado' : ' Inhabilitado' }}</strong>
                                  </label>
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
