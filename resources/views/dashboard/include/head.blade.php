		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>@yield('title')</title>
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('dashboard-files/dist/img/favicon.ico')}}">
		<link rel="icon" href="{{asset('dashboard-files/favicon.ico')}}" type="image/x-icon">
		@yield('spasific-stylesheets')
		<!-- Custom CSS -->
		<link href="{{asset('dashboard-files/dist/css/style.css')}}" rel="stylesheet" type="text/css">

		@yield('page-wise-style')