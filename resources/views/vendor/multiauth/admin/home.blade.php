@extends('layouts.admin')

@section('content')

<div class="wrapper">
    
    <div class="main-panel">
      <!-- Navbar -->
    @include('partials.admin.nav')
      
    <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif You are logged in to {{ config('multiauth.prefix') }} side!
                
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
    console.log("dashboard ");
  </script>
  
@stop





                

