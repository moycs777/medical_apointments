@extends('layouts.admin')
@section('content')
<div class="wrapper">
  <div class="main-panel">
    @include('partials.admin.nav')
    <div class="content">
      <div class="row">
        <div class="col-md-8">
          <h2>prueba de consultas</h2>
          
          <div class="card">
            <div class="card-body">
              <form method="POST" action="{{ route('appointments.store') }}" >
                @csrf
                <input type="hidden" name="url" id="url" value="{{url('')}}">

                <div>
                  <select class="js-example-basic-single" name="state">
                    <option value="AL">Alabama</option>
                      ...
                    <option value="WY">Wyoming</option>
                  </select>
                </div>

                <div class="form-group">
                   <label for="sel1"><strong>Seleccione subpatologia</strong></label>
                     <select class="form-control" id="asd" name="subpatology">
                        @foreach($subpatologies as $item)
                           <option value ="{{ $item->id }}">
                              {{ $item->recipe }}
                           </option>
                        @endforeach 
                     </select>
                </div>

                <div class="form-group">
       <label for="sel1"><strong>Seleccione la exploracion</strong></label>
         <select class="js-example-basic-single form-control" id="sel1" name="exploration_id">
            @foreach($explorations as $item)
               <option value ="{{ $item->id }}">
                  {{ $item->name }}
               </option>
            @endforeach 
         </select>
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

           $('#sel1').on('change',function(){
             //var n = $(this).val();
             //var optionText = $('#dropdownList option[value="'+optionValue+'"]').text();
             var optionText = $("#sel1 option:selected").text();
             var id = $("#sel1 option:selected").val();
            
           });

           $('.js-example-basic-single').select2();
           $('#asd').select2();
          
        }); 

  </script>

@stop
