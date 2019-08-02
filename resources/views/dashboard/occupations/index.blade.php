@extends('layouts.admin')
@section('content')
<div class="wrapper">
   <div class="main-panel">
      @include('partials.admin.nav')
      <div class="content">
         <div class="row">
            <div class="col-md-12">
               <div class="card">
	              @if (session('status'))
	                  <div class="alert alert-success" role="alert">
	                     {{ session('status') }}
	                  </div>
	              @endif

                  <div class="card-body">
                    Listar Ocupaciones
                    <a href="{{ route('occupations.create') }}" class ='btn btn-primary pull-rigth'>Crear</a>
                    <div class="table-responsive ps">
                      <div class="panel-body">
                        <table class="table tablesorter">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Nombre Ocupacion</th>
                              <th colspan="2"></th>
                            </tr>
                          </thead>
                          @foreach($occupations as $occupation)
                            <tbody>
                              <tr>
                                <td>{{ $occupation->id }}</td>
                                <td>{{$occupation->name }}</td>

                                <td width = "10px">
                                    <a href="{{ route('occupations.edit',$occupation->id) }}"
                                       class = "btn btn-sm">Editar
                                    </a>
                                </td>

                                <td width = "10px">
                                    <form action="{{ route('occupations.destroy',  $occupation->id) }}" 
                                      method="post" style="display:inline">
                                      {{ csrf_field() }}
                                      {{ method_field('DELETE') }}
                                                                          
                                      <button type="submit" alt="Eliminar"  class="btn btn-danger
                                        onclick="return confirm('Esta seguro de eliminar?');">
                                        <i class="fas fa-cut"></i>
                                      </button>
                                    </form>
                                </td>
                                
                              </tr>
                            </tbody>
                          @endforeach
                        </table>
                        {{ $occupations->render() }}
                      </div>{{-- panel-body --}}
                    </div>{{-- table-responsive ps --}}
                  </div>{{-- card-body --}}
               </div>{{-- card --}}
            </div>{{-- col-md-12 --}}
         </div>{{-- row --}}
        <div class="row"></div>
      </div>{{-- content --}}
   </div> {{-- main-panel --}}
</div>{{-- //wrapper --}}
@stop

