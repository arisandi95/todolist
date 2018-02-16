<!DOCTYPE html>
<html>
<head>
	<title>TodoList</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@include('inc.notif')
		@yield('content')
	</div>		
	
	<footer id="footer" class="text-center">
		<p>Copyright &copy; 2017 TodoList</p>
	</footer>
</body>
</html>

{{-- cek di FormServiceProvider untuk penggunaan laravek colective --}}