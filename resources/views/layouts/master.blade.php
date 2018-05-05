<!DOCTYPE html>
<html lang="en-US">
<head>
	@include('layouts.partials._head')
</head>
<body>
	<!-- Navigation -->
	@include('layouts.partials._nav')

	<!-- Main Content -->
	@yield('content')

	<!-- Footer -->
	@include('layouts.partials._footer')

	<!-- Javascripts -->
	@include('layouts.partials._scripts')
</body>
</html>
