@extends('layouts.admin')

@section('content')

<div class="wrapper">
   <div class="main-panel">
       <!-- Navbar -->
      @include('partials.admin.nav')

      <div class="content">
         <div class="row">
            <div class="col-md-8">
               <h2>Actualizar Enfermedades</h2>
               <div class="card">
                  <div class="card-body">
                     <form method="POST" 
                         action="{{ route('diseases.update', $disease->id ) }}">

                         @csrf
                         {{ method_field('PUT') }}

                         <div class="form-group">
                            <label for="">Descripcion Enfermedad</label>
                            <input type="text" name="name" value="{{ $disease->name }}"
                                   class="form-control" placeholder="Ingrese Descripcion Enfermedad" >
                         </div>

                         <div class="form-group">
                            <label for="sel1">Seleccione subclasificación</label>
                               <select 
                                  class="js-example-basic-single form-control" 
                                  id="sel1" name="subclassification_id">
                                  
                                  @foreach($subclassifications as $item) 
                                     <option 
                                        value ="{{ $item->id }}"
                                        @if($item->id == "$disease->subclassification_id") 
                                            selected='selected' 
                                        @endif>
                                        {{ $item->name }} 
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
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
  </script>

@stop