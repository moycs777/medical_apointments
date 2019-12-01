@extends('layouts.admin')

@section('content')

<div class="wrapper">

   <div class="main-panel">
       <!-- Navbar -->
      @include('partials.admin.nav')

      <div class="content">
         <div class="row">
            <div class="col-md-8">
               <h2>Confirmar citas por correo</h2>
                  <div class="card">
                     <div class="card-body">
                      
                        <form method="POST" action="{{ route('enviar_email_notificando_cita') }}">
                        
                           @csrf

                           @foreach($info_email as $item)
                          
                              <input type="hidden" name="id" value="{{$item->id}}">                                
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><strong>Nombre</strong></label>
                                        <input type="text" name="first_name" class="form-control" 
                                        value="{{ $item->first_name }}   {{ $item->last_name }}">
                                    </div>
                                </div> 
                              </div>      
                            
                              <div class="row">
                                <div class="col-md-12">
                                   <div class="form-group">
                                      <input type="email" name ="email" class="form-control"
                                        value ="{{$item->email}}">
                                   </div>
                               
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for=""><strong>Fecha cita</strong></label>
                                         <input type="text" name ="appointment_date" 
                                         value = "{{ $item->appointment_date }}" 
                                         class="form-control" required  
                                         >
                                    </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <input type="text" name ="content" class="form-control"
                                      value ="Cumplimos con notificarle que su cita ha sido confirmada para las : {{ $item->time_consultation }}">
                                  </div>
                                </div>
                              </div>

                           @endforeach

                           <div class="form-group">
                              <button type="submit" class="btn btn-primary">Enviar Correo notificando cita</button>
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