<!doctype html>
<html>
<head>
    @include('partials.admin.head')
    @yield('page-style')
</head>
<body class="">

    @include('partials.admin.header')

    @if(session('info'))
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-8-offset-2">
             <div class="alert alert-success">
                {{ session('info') }}
             </div>
          </div>
        </div>
      </div>
    @endif

    @if(count($errors))
       <div class="container">
         <div class="row">
           <div class="col-md-8" col-md-offset-1>
             <div class="alert alert-danger">
               <ul>
                 @foreach($errors->all() as $error)
                   <li>{{ $error }}</li>
                 @endforeach
               </ul>
             </div>
           </div>
         </div>
       </div>
    @endif

    @yield('content')

    @include('partials.admin.footer')
    
    @include('partials.admin.foot')

    @yield('page-script')

</div>
</body>
</html>
