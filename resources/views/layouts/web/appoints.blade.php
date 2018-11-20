<!DOCTYPE html>
<html lang="en">
	<head>

		@include('partials.web.head')	
        	
	</head>
	<body>
		{{-- @include('partials.web.nav') --}}

		@yield('content')

		@include('partials.web.footer')
		
		@yield('page-script')
	</body>

</html>
