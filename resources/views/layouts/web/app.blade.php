<!DOCTYPE html>
<html lang="en">
	<head>

		
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Land.io: Free Landing Page HTML Template | Codrops</title>
<meta name="description" content="A free HTML template and UI Kit built on Bootstrap" />
<meta name="keywords" content="free html template, bootstrap, ui kit, sass" />
<meta name="author" content="Peter Finlan and Taty Grassini Codrops" />
<link rel="apple-touch-icon" sizes="57x57" href="web/img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="web/img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="web/img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="web/img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="web/img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="web/img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="web/img/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="web/img/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="web/img/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="web/img/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="web/img/favicon/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="web/img/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="web/img/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="img/favicon/manifest.json">
<link rel="shortcut icon" href="img/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#663fb5">
<meta name="msapplication-TileImage" content="web/img/favicon/mstile-144x144.png">
<meta name="msapplication-config" content="web/img/favicon/browserconfig.xml">
<meta name="theme-color" content="#663fb5">
{{-- <link rel="stylesheet" href="web/css/landio.css"> --}}
<link rel="stylesheet" href="{{ asset('web/css/landio.css') }}">
        	
	</head>
	<body>
		@include('partials.web.nav')

		@yield('content')

		@include('partials.web.footer')
		
		@yield('page-script')
	</body>

</html>
