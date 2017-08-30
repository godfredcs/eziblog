<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.meta')

	<title>Eziblog - @yield('title')</title>

	@include('partials.stylesheets')
</head>
<body>
	@include('partials.nav')

	@yield('content')
	
	@include('partials.scripts')
	
	@yield('scripts')
</body>
</html>